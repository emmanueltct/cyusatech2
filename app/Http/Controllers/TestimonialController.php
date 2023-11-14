<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Validator;
use DB;
class TestimonialController extends Controller
{
    //
    protected $testimony="";
    public function __construct(){
        $this->testimony=new Testimonial;
    }
public function AdminTestimonial(){
    $testimonial=Testimonial::all();
    return view('admin.ClientTestimonial',compact(['testimonial']));
}

    public function clientTestimonial(){
        return redirect('/');
    }


    public function addTestimonial(Request $request){
        $validator=Validator::make($request->all(),
        [
            'firstname'=>'required|string|regex:/^[a-zA-Z]+$/',
            'lastname'=>'required|string|regex:/^[a-zA-Z]+$/',
            'company_logo'=>'required|mimes:jpeg,jpg,png,gif|max:2048',
            'comment'=>'required|max:500|min:150',
        ]);
        
        if($validator->fails()){
            //return $validator;
            return redirect()->back()->withErrors($validator)->withInput();
        }


        function cleanStr($string){
            // Removes special chars.
            $string = preg_replace('/[^A-Za-z0-9,(),!,@,",:\-]/', ' ', $string); 
            $string = preg_replace('/-+/',' ',$string);
            $string =  preg_replace('/\s+/', ' ', $string);
            return $string;
        }
        
        $cleanStr = cleanStr($request->comment);


        $company_logo="";
        if($request->hasfile('company_logo')) {
           $image=$request->file('company_logo');
           $company_logo=$image->getClientOriginalName();
           $image->move(public_path().'/uploaded_logo/', $company_logo);  
          }
  
            $project_title="";
            $project_id="";

        if($request->project_id!=""){
            $project_title=$request->project_title;
            $project_id=$request->project_id;
        }else{
            $project_title=$request->no_project; 
            $project_id=0;
        }

        $this->testimony->firstname=$request->firstname;
        $this->testimony->lastname=$request->lastname;
        $this->testimony->project_id=$project_id;
        $this->testimony->project_title=$project_title;
        $this->testimony->comments=$cleanStr;
        $this->testimony->company_logo=$company_logo;
        $this->testimony->status='Disabled';
        $this->testimony->save();
        return back()->with('message_sent','Thank you for giving your Testimony, we always recognise you as highly valuable customer.'); 
    }

    
    public function delete_testimonial(Request $request, $id){
        $deleted = DB::table('testimonials')->where('id', '=', $id)->delete();
         return redirect()->back()->with('message_sent','one record is successful removed'); 
    }

    public function publish_testimonial(Request $request, $id){
        $users =Testimonial::find($id);
        $users ->status='Enabled';
        $users->save();
        return back()->with('message_sent','one record is successful published');
    }
}
