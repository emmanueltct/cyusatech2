@extends('admin_layout')
@section('contents')

<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
        <a href="{{route('admin_staff')}}">
            <button class="btn btn-info" style="float:right">Add new Staff</button>
        </a>
        <p style="font-size:16px">
         This page provide staff information in your company, Use the link(publish,edit,delete) under each staff to manage the staff information
        </p>
    </div>
</div>
<hr>
@if(Session::has('message_sent'))
	<div class="alert alert-success" role="alert">
		{{Session::get('message_sent')}}
	</div>
@endif
        <div class="row" style=" margin:auto;">
        @if(count($data)>0)
            @foreach($data as $data)
            <div class="col-sm-3 " style="padding-bottom:10px">
             <div class="card text-center">
                  <div class="feature-block">
                        <img src="../../user_profile/{{$data->user_profile}}" style="height:150px">
                    <div>
                        <h3 class=" text-center" style="padding-bottom:20px;font-weight:bold" >{{$data->firstname}} {{$data->lastname}}</h3>
                        <ul class="text-center">
                            <li>{{$data->email}}</li>
                            <li>{{$data->telephone}}</li>
                            <li>{{$data->position}}</li>
                        </ul>
                                            
                        <a href="#"  class="btn btn-link"> 
                                <form method="post" action="{{route('admin_plublish_staff', ['id' => $data->id])}}" >
                                @csrf
                                @if($data->status==0)
                                <input type="submit" value="Publish" class="btn btn-link">
                                @else
                                <button class="btn btn-success disabled"> <i class="fa fa-check"></i></button>
                                @endif
                            </form>
                        </a>

                        <a href="{{route('edit_staff', ['id' => $data->id])}}" class="btn btn-link" >Edit</a>
                        
                        <a href="#" class="btn btn-link">
                          <form method="post" action="{{route('admin_delete_staff', ['id' => $data->id])}}" >
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-link">
                        </form>
                         </a>
                    </div>
                </div>
            </div>
            </div>
            @endforeach
        @endif
        </div>
 
@endsection

<style>
    .card{
       
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden;
        box-shadow: 0 .1rem 1rem rgba(0, 0, 0.1, 0.3);
        background: #ECE9E6;
        background:#FFFFFF;
    }
    .card a{
        margin:3%;
        padding:2%;
       
    }
    .card a form{
        margin:0px;
        padding:0px;
    }
    .card a form input{
        margin:0px;
        padding:0px;
    }
</style>