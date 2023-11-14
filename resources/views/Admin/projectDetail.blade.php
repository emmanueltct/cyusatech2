@extends('admin_layout')
@section('contents')

<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
            <a href="{{route('admin_projects')}}">
                <button class="btn btn-info" style="float:left">Add new Project</button>
            </a>
            <a href="{{route('admin_all_projects')}}">
                 <button class="btn btn-info" style="float:right">View all projects list</button>
            </a>
        <h3 class="text-center"> Manage this project information</h3>
        
    </div>
</div>
<hr>
@if($errors->any())
            <div class="alert alert-danger" role="alert">
               Some errors happen please try again
            </div>
        @endif
@if(Session::has('message_sent'))
	<div class="alert alert-success" role="alert">
		{{Session::get('message_sent')}}
	</div>
@endif
	<div class="wrapper">
		<section id="about-us">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title" style=" height:5px; display:flex; flex-direction:column;padding-top:10px;align-items:center">
							<h2>{{$data->project_title}}</h2>
						</div>
					</div>
				</div>

				<div class="row">
                    <div class="card  col-sm-6" >
                        <div class="feature-block text-center service_card">
                            <img src="../../uploaded_project/{{$data->sample_image}}" alt="Company Image" style="width:100%;">
                        </div>
                    </div>
                    <div class="card  col-sm-6" >
                        <p class="wow fadeInUp" data-wow-delay=".5s" style="padding-bottom:5px">
                        {{$data->description1}}
                        </p>
                        <h4 style="font-style:italic; margin-top:30px;">Project Implementation</h4>
                        <div class="title-ligne"></div>
                        <dl style="font-style:italic; margin-top:15px;">
                            <b>Site Location:</b>  <span>{{$data->site_name}} ,   <i>{{$data->site_location}}</i></span><br>
                            
                            <b>Durations</b>  <span>{{$data->project_durations}}</span><br>

                            <b>Date:</b>  <span>{{$data->starting_date}} --- {{$data->ending_date}}</span><br>
                        </dl>
                        <a href="#"  class="btn btn-link"> 
                             <form method="post" action="{{route('admin_plublish_project', ['id' =>$data->id])}}" >
                                @csrf
                                @if($data->status==0)
                                <input type="submit" value="Publish" class="btn btn-link">
                                @else
                                <button class="btn btn-success disabled"> <i class="fa fa-check"></i></button>
                                @endif
                            </form>
                        </a>
                        <a href="{{route('admin_edit_project', ['id' => $data->id])}}" class="btn btn-link" >Edit</a>
                        <a href="#" class="btn btn-link">
                          <form method="post" action="{{route('admin_delete_project', ['id' => $data->id])}}" >
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-link">
                        </form>
                    </a>
                    </div>
			    </div>
            </div>
		</section>
     
        @if(Session::has('message_sent'))
            <div class="alert alert-success" role="alert">
                {{Session::get('message_sent')}}
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
               Some errors happen please try again
            </div>
            <div class="alert alert-danger" role="alert">
              {{$errors->first('more_image.*')}}
            </div>
        @endif
		<section id="testimonial">
			<div class="container">
				<div class="row" style="padding-bottom:0px;" >
                    <div class="col col-sm-12" style=" padding-bottom:0px;padding-top:0px" >
                        <div class="title" style="padding-bottom:0px">
                            <h2>More Details</h2>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#more_image" style="float:right" ><i class="fa fa-plus" > Add more Image</i></button>
                        </div>
                        <p>{{$data->description2}}</p>
                    </div>
                </div>
                <div class="row" style="padding-bottom:0px;" >
                    <?php  $image=json_decode($data->more_image); ?>
                    <?php if(count($image)>0){ ?>
                    <?php for($a=0; $a<count($image);$a++){ ?>
					<div class="col-sm-4" style="" >
                        <div style="width:100%;border:1px solid blue;" class="text-center">
                           
                            <img src="../../uploaded_project/<?php echo $image[$a]; ?>" alt="" style="width:100%;">
                            <br>
                             
                        </div> 
                             <a href="#" class="btn btn-link">
                                    <form method="post" action="{{route('project_remove_pic',['id'=>$data->id])}}" >
                                        @csrf
                                        <input type="hidden" name="pic_index" value="{{$a}}">
                                        <button type="submit" class="btn btn-danger more" style="width:30px;height:30px;padding:3%; border-radius:50%; font-size:13px" ><i class="fa fa-trash"></i> </button>
                                    </form>
                             </a>   
					</div>
                    <?php }
                        }
                     ?>
				</div>
            </div>


                          <!--- modal for description of product -->
                    <div class="modal fade" id="more_image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add more pictures for projects</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{route('project_add_more_pic',['id'=>$data->id])}}" enctype="multipart/form-data">
                                            @csrf
                                            
                                                <input type="hidden" name="product_id" class="form-control" value="{{$data->id}}"   required readonly>
                                        
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Project_title</label>
                                                <input type="text" name="product_id" class="form-control" value="{{$data->project_title}}"   required readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Add More Pictures</label>
                                                <input type="file" name="more_image[]" class="form-control" multiple required >
                                                <i>you can Upload multiple pictures(related) at the sametime (remember to use a landscape Image)</i>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


		</section>

@endsection
	