@extends('admin_layout')
@section('contents')

<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
        <a href="{{route('admin_services')}}">
            <button class="btn btn-info" style="float:right">Add new Service</button>
        </a>
        <p style="font-size:16px">
         This page provide all service information in your company, please click on (Read more) button to manage each service
        </p>
    </div>
</div>
<hr>
@if(Session::has('message_sent'))
	<div class="alert alert-success" role="alert">
		{{Session::get('message_sent')}}
	</div>
@endif
    <div style="display:flex;align-items:center;padding-bottom:3%;margin-top:2%;"> 
        <div class="row" style=" margin:auto;">
        @if(count($data)>0)
            @foreach($data as $data)
            <div class="col-sm-3" style="padding-bottom:10px">
            <h3 class="text-center" style="padding-bottom:20px;font-weight:bold" >{{$data->service_name}}</h3>
                <div class="feature-block">
                        <img src="../../uploaded_service/{{$data->images}}" width="100%"/>
                    <div style="padding:2%">
                         
                        <p style="margin-top:3px;">{{$data->description}}<p>
                        <a href="/admin/ViewService/{{$data->id}}"><button class="btn btn-primary btn-xs">Read More</button></a>
                    </div>
                    
                </div>
            </div>
            @endforeach
        @endif
        </div>
    </div>
@endsection

<style>
    .card{
       
        display: flex;
        flex-direction: column;
        width: auto;
        justify-content: space-between;
        overflow: hidden;
        box-shadow: 0 .1rem 1rem rgba(0, 0, 0.1, 0.3);
        background: #ECE9E6;
        background:#FFFFFF;
        height:550px;
    }
</style>