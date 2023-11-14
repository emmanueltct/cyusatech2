@extends('admin_layout')
@section('contents')
    <div class="row" style="margin-top:10%;">
        <div class="col-sm-12">
            <a href="{{route('admin_projects')}}">
                <button class="btn btn-info" style="float:right">Add new Project</button>
            </a>
            <p style="font-size:16px">
            This page provide information on all completed projects in your company, please click on (Read more) button to manage each project information
            </p>
        </div>
    </div>
    <hr>
    @if(Session::has('message_sent'))
	<div class="alert alert-success" role="alert">
		{{Session::get('message_sent')}}
	</div>
    @endif
    <div style="display:flex;align-items:center;padding-bottom:5%;margin-top:1%;"> 
        <div class="row">
        @if(count($data)>0)
            @foreach($data as $data)
            <div class="col-sm-4" style="padding-bottom:10px">
                <div class="feature-block card">
                        <img src="../uploaded_project/{{$data->sample_image}}" width="100%" height="200px"/>
                    <div style="padding:5%">
                        <h3 class=" text-center">{{$data->project_title}}</h3> 
                        <p style="margin-top:10px;">{{substr($data->description1, 0,370)}}.......<p>
                        <a href="/admin/ViewProject/{{$data->id}}"><button class="btn btn-primary btn-xs">Read More</button></a>
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