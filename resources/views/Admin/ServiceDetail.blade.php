@extends('admin_layout')
@section('contents')

<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
        <a href="{{route('admin_all_services')}}">
            <button class="btn btn-info" style="float:right">Back to services list</button>
        </a>
        <a href="{{route('admin_services')}}">
            <button class="btn btn-info" style="float:left">Add new Service</button>
        </a>
        <h3 class="text-center"> Manage this service information</h3>
        
    </div>
</div>
<hr>
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
						<div class="title" style=" height:5px; display:flex; flex-direction:column;padding-top:100px;align-items:center">
							<h2>{{$data->service_name}}</h2>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="col-sm-4" >
                        <div class="feature-block text-center service_card">
                            <img src="../../uploaded_service/{{$data->images}}" alt="Company Image" style="width:100%;">
                        </div>
                    </div>
                    <div class=" col-sm-8" >
                        <p class="wow fadeInUp" data-wow-delay=".5s" style="padding-bottom:5px">
                        {{$data->description}}
                        </p>
                        <a href="#"  class="btn btn-link"> 
                             <form method="post" action="{{route('admin_plublish_service', ['id' =>$data->id])}}" >
                                @csrf
                                @if($data->status==0)
                                <input type="submit" value="Publish" class="btn btn-link">
                                @else
                                <button class="btn btn-success disabled"> <i class="fa fa-check"></i></button>
                                @endif
                            </form>
                        </a>
                        <a href="{{route('admin_edit_service', ['id' => $data->id])}}" class="btn btn-link" >Edit</a>
                        <a href="#" class="btn btn-link">
                          <form method="post" action="{{route('admin_delete_service', ['id' => $data->id])}}" >
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-link">
                        </form>
                    </a>
                    </div>
			    </div>
            </div>
		</section>
     

		<section id="testimonial">
			<div class="container">
				<div class="row" style="padding-bottom:0px;" >
                    <div class="col-sm-12 card" style="padding-bottom:10px">
                        <div class="title" style="padding-bottom:0px">
                            <h2 style="font-size:15px;text-transform :none">Performed Project</h2>
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" style="float:right;margin:2%">Add New project</button>
                        </div>  
                    <div class="row">
                        @foreach($related as $related)
                        <div class="col-sm-3" >
                            <h3 class="wow fadeInUp" data-wow-delay=".3s" style="color:blue;padding-bottom:2%"> {{$related->project_title}}</h3>
                        
                                <div class="title-ligne" style="width:70%"></div>
                                <dl style="font-style:italic; margin-top:15px;">
                                    <b>Site Location:</b>  <span>{{$related->site_name}} ,   <i>{{$related->site_location}}</i></span><br>
                                    
                                    <b>Durations</b>  <span>{{$related->project_durations}}</span><br>

                                    <b>Date:</b>  <span>{{$related->starting_date}} --- {{$related->ending_date}}</span><br>
                                </dl>

                                <div style="display:flex;flex-direction:column;align-items:flex-center;margin-top:5%">
                                <a href="#" class="btn btn-link">
                                    <form method="post" action="{{ route('remove_service_project_details', ['id' => $related->id]) }}" >
                                        @csrf
                                        <button type="submit" class="btn btn-danger more" style="width:30px;height:30px;padding:3%; border-radius:50%; font-size:13px" ><i class="fa fa-trash"></i> </button>
                                    </form>
                                </a>
                                    
                                </div>
                        </div>
                        @endforeach
                    </div>  
                    </div>
                </div>
			</div>
		</section>

      

  <!-- this part reserved for modal part to add project we preformed realted to this service -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="post" action="/admin/Service_Add_Project/{{$data->id}}">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose project related to this service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if(count($project)>0)
                @foreach($project as $p)
                <div class="form-group row">
                    <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" name="project_related[]" type="checkbox" id="gridCheck1" value="{{$p->id}}">
                            <label class="form-check-label" for="gridCheck1">
                                {{$p->project_title}} ({{$p->site_name}},{{$p->site_location}} )
                            </label>
                    </div>
                    </div>
                </div>
                @endforeach
                @endIf
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button  type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>

@endsection
	


<style>
    .card{
        margin:3%;
        display: flex;
        flex-direction: column;
        width: clamp(60rem, calc(60rem + 2vw), 62rem);
        overflow: hidden;
        background: #ECE9E6;
        background: linear-gradient(to right, #FFFFFF, #ECE9E6);

    }

    .check {
    display: inline-block;
    transform: rotate(48deg);
    height:13px;
    width: 6px;
    border-bottom: 2px solid green;
    border-right: 2px solid green;
    
    }

    .behind {
    display: inline-block;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    background: #f8f8f8;
    align-items:center;
    text-align:center;
    margin-left:-12px;
    box-shadow: inset 0 1px 3px rgba(0,0,0,.3);
    }
   
   #testimonial ul li{
    margin-top:0px;
    padding-bottom:15px;
    display:flex;
    flex-direction:row;
    
   }
</style>