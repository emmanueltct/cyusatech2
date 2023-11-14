<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;
use App\Models\ServiceProject;
use App\Models\Partners;
use App\Models\Shop;
use App\Models\MoreShopImage;
use App\Models\Staff;



class WelcomeController extends Controller
{
    //

    public function index(){
        $project=Project::all()->where('status',1);
        $service=Service::all()->where('status',1);;
        $staff=Staff::all()->where('status',1);
       $partners=Partners::all()->where('status',1);;
        return view('welcome', compact(['project','service','staff','partners']));
    }
    
    public function Services(){
        $data=Service::all()->where('status',1);
        return view('client.services',compact(['data']));
    }


    public function Services_detail($id){
        $related=ServiceProject::where('service_id',$id)
        ->join('projects', 'service_projects.project_id', '=','projects.id')
        ->get();
      
        $data=Service::find($id);
        return view('client.Service_detail',compact(['data','related']));
    }

    public function projects(){
        $data=Project::all()->where('status',1);
        return view('client.project',compact(['data']));  
    }

    public function Projects_detail($id){
        $data=Project::find($id);
        return view('client.project_detail',compact(['data'])); 
    }

    public function viewShop_product(){
        $data=Shop::all()->where('status',1);
        return view('client.Viewshop',compact(['data']));
    }

    public function viewShop_product_detail($id){
        $product=Shop::findOrFail($id);
        $images=MoreShopImage::where('product_id','=',$id)->get();
        return view('client.product_detail', compact(['product','images']));
    }

    public function Contact_page(){
        return view('client.contact-page');
    }
}
