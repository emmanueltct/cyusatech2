<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Validator;
use DB;
class ProjectController extends Controller
{
    //
    protected $project;
    public function __construct(){
        $this->project=new Project;
    }

    public function ViewProject(){
       $data=Project::all();
       return view('admin.ViewProject',compact(['data']));
    }

    public function addProject(){
        return view ('admin.addProject');
    }

    public function SaveProject(Request $request){
        $height1=0;
        $width1=0;
        $height2=0;
        $width2=0;
        if($request->hasfile('ProjectImage1')) {
            $file1=$request->file('ProjectImage1');
            $data = getimagesize($file1);
            $width1 = $data[0];
            $height1 = $data[1];
           }
       
           if($request->hasfile('ProjectImage2')) {
            foreach($request->file('ProjectImage2') as $file)
            {
               
                $data2 = getimagesize($file);
                $width2 = $data2[0];
                $height2 = $data2[1];
            }
        
           
           }
         $validator=Validator::make($request->all(),[
            'projectTitle' => 'required',
            'siteName' => 'required',
            'siteLocation' => 'required',
            'Description1' => 'required',
            'Description2' => 'required',
            'ProjectImage2.*' => 'mimes:jpeg,jpg,png,gif|max:2048|dimensions:min_width='.$height2.',max_height='.$width2,
            'ProjectImage1' => 'required|mimes:jpeg,jpg,png,gif|max:2048|dimensions:min_width='.$height1.',max_height='.$width1
          ]);

          if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
          }

          $sample_image="";
          if($request->hasfile('ProjectImage1')) {
             $file1=$request->file('ProjectImage1');
             $sample_image = $file1->getClientOriginalName();
             $file1->move(public_path().'/uploaded_project/', $sample_image);  
             
            }
    

        if($request->hasfile('ProjectImage2')) {
            foreach($request->file('ProjectImage2') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/uploaded_project/', $name);  
                $imgData[] = $name;  
            }
    
            $file2=json_encode($imgData);
           
            $this->project->project_title=$request->projectTitle;
            $this->project->site_name=$request->siteName;
            $this->project->site_location=$request->siteLocation;
            $this->project->project_durations=$request->durations;
            $this->project->starting_date=$request->start_date;
            $this->project->ending_date=$request->end_date;
            $this->project->description1=$request->Description1;
            $this->project->description2=$request->Description2;
            $this->project->sample_image=$sample_image;
            $this->project->more_image=$file2;
            $this->project->save();
            return redirect()->back()->with('message_sent','New project record is successful added, please check your project list'); 
    }else{
         $imgData[]=$sample_image;
         $file2=json_encode($imgData);
        $this->project->project_title=$request->projectTitle;
        $this->project->site_name=$request->siteName;
        $this->project->site_location=$request->siteLocation;
        $this->project->project_durations=$request->durations;
        $this->project->starting_date=$request->start_date;
        $this->project->ending_date=$request->end_date;
        $this->project->description1=$request->Description1;
        $this->project->description2=$request->Description2;
        $this->project->sample_image=$sample_image;
        $this->project->more_image=$file2;
        $this->project->save();
        return redirect()->back()->with('message_sent','New project record is successful added, please check your project list'); 
    }
}



public function ViewProject_details($id){
    $data=Project::find($id);
    //return $data->more_image;
    return view('admin.projectDetail',compact(['data']));
}


public function delete_project(Request $request, $id){

    $deleted = DB::table('projects')->where('id', '=', $id)->delete();
     return redirect('/admin/ViewProject')->with('message_sent','one record is successful removed'); 
}

public function publish_project(Request $request, $id){
    $project=Project::find($id);
    $project ->status='1';
    $project->save();
    return redirect('/admin/ViewProject/'.$id)->with('message_sent','one record is successful published');
}

public function Edit_project($id){
    $project=Project::find($id); 
    return view('admin.Edit_project',compact(['project']));
}

public function Save_Edit_project(Request $request,$id){

    $sample_image="";
    $validator="";
    if($request->hasfile('ProjectImage1')) {
    
       
            $file1=$request->file('ProjectImage1');
            $data = getimagesize($file1);
            $width1 = $data[0];
            $height1 = $data[1];
           
       

    $validator=Validator::make($request->all(),[
        'projectTitle' => 'required',
        'siteName' => 'required',
        'siteLocation' => 'required',
        'Description1' => 'required',
        'Description2' => 'required',
        'ProjectImage2.*' => 'mimes:jpeg,jpg,png,gif|max:2048',
        'ProjectImage1' => 'required|mimes:jpeg,jpg,png,gif|max:2048|dimensions:min_width='.$height1.',max_height='.$width1,
      ]);

      if ($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
      }

         $file1=$request->file('ProjectImage1');
         $sample_image = $file1->getClientOriginalName();
         $file1->move(public_path().'/uploaded_project/', $sample_image);  
         
        }else{
            $validator=Validator::make($request->all(),[
                'projectTitle' => 'required',
                'siteName' => 'required',
                'siteLocation' => 'required',
                'Description1' => 'required',
                'Description2' => 'required',
              ]);
        
              if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
              } 

              $sample_image=$request->old_sample_image;
        }
        $this->project=Project::find($id); 
        $this->project->project_title=$request->projectTitle;
        $this->project->site_name=$request->siteName;
        $this->project->site_location=$request->siteLocation;
        $this->project->project_durations=$request->durations;
        $this->project->starting_date=$request->start_date;
        $this->project->ending_date=$request->end_date;
        $this->project->description1=$request->Description1;
        $this->project->description2=$request->Description2;
        $this->project->sample_image=$sample_image;
        $this->project->save();
        return redirect('/admin/ViewProject/'.$id)->with('message_sent','The project record are successful updated'); 
}

public function delete_project_pictures(Request $request,$id){
    $picture=DB::table('projects')->select('more_image')->where('id', '=', $id)->get();
    $index=$request->pic_index;
    $images=json_decode($picture[0]->more_image);
    
    for($a=0;$a<count($images);$a++){
        if($a== $index){

        }else{
            $file2[]=$images[$a];
        } 
    }

    $this->project=Project::find($id); 
    $this->project->more_image=$file2;
    $this->project->save();
    return redirect('/admin/ViewProject/'.$id)->with('message_sent','The project image are removed');;
}


public function add_project_pictures(Request $request,$id){
    $picture=DB::table('projects')->select('more_image')->where('id', '=', $id)->get();
    $images=json_decode($picture[0]->more_image);
    //unset($images[$index]); 
    $images;
   
        if($request->hasfile('more_image')) {
            $file1=$request->file('more_image');
            

            foreach($request->file('more_image') as $file)
            {
                $data2 = getimagesize($file);
                $width_more = $data2[0];
                $height_more= $data2[1];
            } 
           
            $validator=Validator::make($request->all(),[
                'more_image.*' => 'mimes:jpeg,jpg,png,gif|max:2048|dimensions:min_width='.$height_more.',max_height='.$width_more,
            ]);

            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            } 

            foreach($request->file('more_image') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/uploaded_project/', $name);  
                array_push($images, $name);
            } 
        } 

        $this->project=Project::find($id); 
        $this->project->more_image=$images;;
        $this->project->save();
        return redirect('/admin/ViewProject/'.$id)->with('message_sent','The project image are successful updated'); 

   
}
//////////// end of function code

}