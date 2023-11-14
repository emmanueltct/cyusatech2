<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Project;
use App\Models\Shop;
use App\Models\Partners;

class AboutController extends Controller
{
    //

    public function index(){
        $testimonial=Testimonial::where('status','Enabled')->orderBy('id', 'DESC')->get();
        $shop=Shop::all()->where('status',1);
        $service=Service::all()->where('status',1);
        $project=Project::all()->where('status',1);
        $partners=Partners::all()->where('status',1);
        return view('about',compact(['testimonial','service','project','shop','partners']));
    }

}
