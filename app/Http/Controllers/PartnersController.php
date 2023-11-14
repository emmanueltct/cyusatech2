<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Partners;
use DB;

class PartnersController extends Controller
{
    //
    protected $partners="";

    public function __construct(){
        $this->partners=new Partners;
    }

    public function OurPartners(){
        $partners=Partners::all()->sortByDesc("created_at");
        return view('admin.viewPartners',compact(['partners']));
    }

    public function addPartners(){
        return view('admin.addPartners');
    }

    public function savePartners(Request $request){
        $validator=Validator::make($request->all(),[
            'partners_name'=>'required|string',
             'partners_logo'=>'required|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        if($validator->fails()){
           /* return response()->json([
                "success"=>false,
                "Message"=>$validator->messages()->toArray(),
            ],400);
        */
        return redirect()->back()->withErrors($validator)->withInput();
        }

        $partners_image="";
        if($request->hasfile('partners_logo')) {
           $image=$request->file('partners_logo');
           $partners_image=$image->getClientOriginalName();
           $image->move(public_path().'/uploaded_partners/', $partners_image);  
           
          }
  
            $this->partners->partners_name=$request->partners_name; 
            $this->partners->partners_logo=$partners_image;
            $this->partners->save();

            return back()->with('message_sent','New partners record successfully saved '); 
            

    }


    public function delete_partners(Request $request, $id){
        $deleted = DB::table('partners')->where('id', '=', $id)->delete();
         return back()->with('message_sent','one record is successful removed'); 
    }

    public function publish_partners(Request $request, $id){
        $users =Partners::find($id);
        $users ->status='1';
        $users->save();
        return back()->with('message_sent','one record is successful published');
    }

    public function Edit_partners($id){
        $partners =Partners::find($id);  
        return view('admin.Edit_partners',compact('partners'));
    }

    public function Save_edit_partners(Request $request, $id){
        
        $partners_image="";
        $validator="";
        if($request->hasfile('partners_logo')) {
            $validator=Validator::make($request->all(),[
                'partners_name'=>'required|string',
                 'partners_logo'=>'required|mimes:jpeg,jpg,png,gif|max:2048',
            ]);
    
            if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
            }
            $image=$request->file('partners_logo');
            $partners_image=$image->getClientOriginalName();
            $image->move(public_path().'/uploaded_partners/', $partners_image);  
           
          }else{
            $validator=Validator::make($request->all(),[
                'partners_name'=>'required|string',
            ]);

            if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
            }
        
            $partners_image=$request->old_partners_logo;
            
        }
    $this->partners=Partners::find($id); 
    $this->partners->partners_name=$request->partners_name; 
    $this->partners->partners_logo=$partners_image;
    $this->partners->save();

    return redirect('/admin/Partners')->with('message_sent','The Partners record is successful updated');
}   
}