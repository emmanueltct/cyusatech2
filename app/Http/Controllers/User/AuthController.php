<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Staff;
use Validator;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;
class AuthController extends Controller
{
    //
    protected $user;
    public function __construct(){
        $this->user=new Staff;
    }

public function index(){
    return view('admin.login');
}


    public function addStaff(){
        
        $value = session('user_in');
        $value = session('user_in', '');
        session(['user_in' => Auth::user()->name]);
         //Session::set('isLoggedIn',Auth::user()->name);
     
        return view('Admin.register');
    }

    public function register(Request $request){
        $validator=Validator::make($request->all(),
        [
            'firstname'=>'required|string|regex:/^[a-zA-Z]+$/',
            'lastname'=>'required|string|regex:/^[a-zA-Z]+$/',
            'telephone'=>'required|numeric|digits:10|unique:staff',
            'post'=>'required|string',
            'email'=>'required|email|unique:staff',
            'user_profile'=>'required|mimes:jpeg,jpg,png,jfif|max:2048|dimensions:width=300,height=314',
        ]);

        if($validator->fails()){
           /*  validation for api
           return response()->json([
                "success"=>false,
                "Message"=>$validator->messages()->toArray(),
            ],400);
        */
        return redirect()->back()->withErrors($validator)->withInput();
        }
        $check_email=$this->user->where("email", $request->email)->count();
        IF($check_email>0){
           
                return back()->with('message_sent','New staff record failed to be saved beacuse email is already exist, plz try another email'); 
        }

        $user_profile="";
        if($request->hasfile('user_profile')) {
           $image=$request->file('user_profile');
           $user_profile=$image->getClientOriginalName();
           $image->move(public_path().'/user_profile/', $user_profile);  
          }
       
        $registerComplete=$this->user::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'telephone'=>$request->telephone,
            'position'=>$request->post,
            'user_profile'=>$user_profile
        ]);
        return back()->with('message_sent','New staff record successfully saved '); 
    }

    public function ViewStaff(){
        $data =Staff::all()->sortByDesc("created_at");
        return view('admin.staff_list', compact('data'));
    }


    public function delete_staff(Request $request, $id){
        $deleted = DB::table('staff')->where('id', '=', $id)->delete();
         return back()->with('message_sent','one record is successful removed'); 
    }

    public function publish_staff(Request $request, $id){
        $users =Staff::find($id);
        $users ->status='1';
        $users->save();
        return back()->with('message_sent','one record is successful published');
    }

    public function edit_staff($id){
        $user=$users =Staff::find($id);
        return view('admin.edit_staff',compact(['users']));
    }
    
    public function post_edit_staff(Request $request,$id){
        $validator="";
    if($request->hasfile('user_profile')) {
            $validator=Validator::make($request->all(),
            [
                'firstname'=>'required|string|regex:/^[a-zA-Z]+$/',
                'lastname'=>'required|string|regex:/^[a-zA-Z]+$/',
                'telephone'=>'required|numeric|digits:10',
                'post'=>'required|string',
                'email'=>'required|email',
                'user_profile'=>'required|mimes:jpeg,jpg,png,jfif|max:2048|dimensions:min_width=221,min_height=221',
            ]);  
        }else{
            $validator=Validator::make($request->all(),
            [
                'firstname'=>'required|string|regex:/^[a-zA-Z]+$/',
                'lastname'=>'required|string|regex:/^[a-zA-Z]+$/',
                'telephone'=>'required|numeric|digits:10',
                'post'=>'required|string',
                'email'=>'required|email',
            ]);
        }

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
            }
        
    
            $user_profile="";
            if($request->hasfile('user_profile')) {
               $image=$request->file('user_profile');
               $user_profile=$image->getClientOriginalName();
               $image->move(public_path().'/user_profile/', $user_profile);  
              }else{
                $user_profile=$request->old_user_profile;  
              }
            
              $staff =Staff::find($id);
              $staff->firstname=$request->firstname;
              $staff->lastname=$request->lastname;
              $staff->email=$request->email;
              $staff->telephone=$request->telephone;
              $staff->position=$request->post;
              $staff->user_profile=$user_profile;
              $staff->save();
              return redirect('/admin/AllStaff')->with('message_sent','the staff record successful updated');
        }
       
    
}
