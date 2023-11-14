<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;
use App\Models\ServiceProject;
use Validator;
use DB;

class ServiceController extends Controller
{

    protected $service;
    public function __construct(){
        $this->service=new Service;
    }

    public function index(){
        return view('service');
    }

    public function ViewService(){
        $data=Service::all();
        return view('admin.viewService',compact(['data']));
    }



    public function  AddService(){

        return view('admin.addService');
    }

    public function SaveService(Request $request){
        $validator=Validator::make($request->all(),
        [
            'ServiceTitle'=>'required|string',
            'serviceDescription'=>'required|string',
            'serviceImage' => 'required|mimes:jpeg,jpg,png,jfif|max:2048',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $service_image=$request->serviceImage;
            $extension = $request->serviceImage->getClientOriginalExtension();
           
            $image="";

            if($service_image==null){
                $image="no_image.jpg";
                }else{
                    $generate_name=date('ymd')."_".time()."_".uniqid()."_IMG";
                    $base64image=$service_image;
                    $filebin=file_get_contents($base64image);
                
                // $mimeType=mime_content_type($filebin);
                        if("png"==$extension){
                            $image=$generate_name.".png";
                        }
                        else if("jpg"==$extension){
                            $image=$generate_name.".jpg"; 
                        }
                        else if("jpeg"==$extension){
                            $image=$generate_name.".jpeg"; 
                        }else if("jfif"==$extension){
                            $image=$generate_name.".jfif"; 
                        }
                        
                        else{
                            return redirect()->back()->with('message_sent','only accepted format are PNG, JPG, JPEG');
                            
                        }
                }
                
           
                $this->service->service_name=$request->ServiceTitle;
                $this->service->description=$request->serviceDescription;
                $this->service->images=$image;
                $this->service->save();
    
                    if($service_image==null){
                    
                    }else{
                        file_put_contents("./uploaded_service/".$image,$filebin);
                    }
                return redirect()->back()->with('message_sent','new service record is saved please check your service list');
                
    }

    public function ViewService_details($id){
        $related=ServiceProject::where('service_id',$id)
                                ->join('projects', 'service_projects.project_id', '=','projects.id')
                                ->get();
   
        $project=Project::all();
        $data=Service::find($id);
        return view('admin.ServiceDetail',compact(['data','project','related']));
    }


    public function Add_Project_To_Service(Request $request , $id){
        $serviceProject=new ServiceProject();
        $data=$request->project_related;

        foreach ($request->project_related as $input)
        $serviceProject ::create([
            'service_id'=>$id,
            'project_id'=>$input
        ]);
        return redirect()->back()->with('message_sent','new record is successful added');;
    }

    public function delete_service(Request $request, $id){
        $deleted = DB::table('service_projects')->where('service_id', '=', $id)->delete();
        $deleted = DB::table('services')->where('id', '=', $id)->delete();
         return redirect('/admin/ViewService')->with('message_sent','one record is successful removed'); 
    }

    public function publish_service(Request $request, $id){
        $users =Service::find($id);
        $users ->status='1';
        $users->save();
        return back()->with('message_sent','one record is successful published');
    }

public function Delete_Project_To_Service(Request $request, $id){
    $deleted = DB::table('service_projects')->where('id', '=', $id)->delete();
    return back()->with('message_sent','one record for project is successful removed'); 
}

public function Edit_service($id){
    $service =Service::find($id);
    return view('admin.Edit_service',compact(['service']));  
}


public function Save_edit_service(Request $request, $id){
    $service_image="";
    $validator="";
        if($request->hasfile('serviceImage')) {
            $validator=Validator::make($request->all(),
                [
                    'ServiceTitle'=>'required|string',
                    'serviceDescription'=>'required|string',
                    'serviceImage' => 'required|mimes:jpeg,jpg,png,jfif|max:2048',
                ]);

                if($validator->fails()){
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                
                    $image=$request->file('serviceImage');
                    $service_image=$image->getClientOriginalName();
                    $image->move(public_path().'/uploaded_service/', $service_image); 
        }else{
            $validator=Validator::make($request->all(),
            [
                'ServiceTitle'=>'required|string',
                'serviceDescription'=>'required|string',
            
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $service_image=$request->old_serviceImage;
        } 
        
        $service =Service::find($id);
        $service->service_name=$request->ServiceTitle;
        $service->description=$request->serviceDescription;
        $service->images=$service_image;
        $service->save();
        return redirect('/admin/ViewService')->with('message_sent','one record is successful updated'); 
}

    ////////////end of all function block
}
