<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\MoreShopImage;
use Validator;
use DB;
class ShopController extends Controller
{
    //
protected $shop;
    public function __construct(){
        $this->shop=new Shop;
    }

    public function viewShop_product(){
        $data=Shop::all();
        return view('admin.shop',compact(['data']));
    }
    public function AddShop_product(){
        return view('admin.addProduct');
    }

    public function SaveShop_product(Request $request){
        $validator=Validator::make($request->all(),[
            'product'=>'required|string|unique:shops',
            'model'=>'string',
            'description'=>'required|string',
            'price'=>'numeric',
            'product_image' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            
        ]);

        if($validator->fails()){
           /* return response()->json([
                "success"=>false,
                "Message"=>$validator->messages()->toArray(),
            ],400);
            */
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product_image="";
        if($request->hasfile('product_image')) {
           $image=$request->file('product_image');
           $product_image=$image->getClientOriginalName();
           $image->move(public_path().'/uploaded_product/', $product_image); 
            
          }

            $this->shop->product=$request->product;
            $this->shop->model=$request->model;
            $this->shop->description=$request->description;
            $this->shop->price=$request->price;
            $this->shop->PriceStatus='Negotiable';
            $this->shop->images=$product_image;
            $this->shop->save();
            return redirect()->back()->with('message_sent','New product record is successful added, please check your shop'); 
    }


    public function Add_more_product_photos($id){
        $product=Shop::findOrFail($id);
        $images=MoreShopImage::where('product_id','=',$id)->get();
        return view('admin.Product_detail', compact(['product','images']));
    }

    public function Save_more_product_photos(Request $request){
        
        $product_image="";
        if($request->hasfile('more_image')) {
            foreach($request->file('more_image') as $file)
            {
                $product_image=$file->getClientOriginalName();
                $file->move(public_path().'/uploaded_product/', $product_image);
               
                $more_image=new MoreShopImage();
                $more_image->product_id=$request->product_id;
                $more_image->more_photos=$product_image;
                $more_image->save(); 
            } 
            return redirect()->back()->with('message_sent','new Product images are successful added'); 
           
          }
    }


    public function delete_product(Request $request, $id){
        $deleted = DB::table('more_shop_images')->where('product_id', '=', $id)->delete();
        $deleted = DB::table('shops')->where('id', '=', $id)->delete();
         return redirect('/admin/Shop')->with('message_sent','one record is successful removed'); 
    }

    public function publish_product(Request $request, $id){
        $shop =Shop::find($id);
        $shop ->status='1';
        $shop->save();
        return back()->with('message_sent','one record is successful published');
    }

    public function Delete_Product_images(Request $request, $id){
        $deleted = DB::table('more_shop_images')->where('id', '=', $id)->delete();
        return back()->with('message_sent','one record for project is successful removed'); 
    }

    public function Edit_product($id){
        $product=Shop::find($id);
        return view('admin.Edit_product',compact('product'));
    }

    public function Save_edit_product(Request $request,$id){
        $product_image="";
        $validator="";
        if($request->hasfile('product_image')) {
            $validator=Validator::make($request->all(),[
                'product'=>'required|string',
                'model'=>'required|string',
                'description'=>'required|string',
                'price'=>'numeric',
                'product_image' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
                
            ]);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
           $image=$request->file('product_image');
           $product_image=$image->getClientOriginalName();
           $image->move(public_path().'/uploaded_product/', $product_image); 
            
          }else{
            $validator=Validator::make($request->all(),[
                'product'=>'required|string',
                'model'=>'required|string',
                'description'=>'required|string',
                'price'=>'numeric',
                
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $product_image=$request->old_product_image;

          }
            $this->shop=Shop::find($id);
            $this->shop->product=$request->product;
            $this->shop->model=$request->model;
            $this->shop->description=$request->description;
            $this->shop->price=$request->price;
            $this->shop->PriceStatus='Negotiable';
            $this->shop->images=$product_image;
            $this->shop->save();
            return redirect('/admin/Shop')->with('message_sent','The Shop product is successful updated'); 

    }
}
