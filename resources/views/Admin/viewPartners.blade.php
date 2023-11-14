@extends('admin_layout')
@section('contents')
<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
        <a href="{{route('admin_partners')}}">
            <button class="btn btn-info" style="float:right">Add new Partner</button>
        </a>
        <p style="font-size:16px">
         This page provide information of Partners in company, Use the link(publish,edit,delete) under each staff to manage the Partners information
        </p>
    </div>
</div>
<hr>
@if(Session::has('message_sent'))
	<div class="alert alert-success" role="alert">
		{{Session::get('message_sent')}}
	</div>
@endif
    <div style="display:flex;align-items:center;padding-bottom:3%;margin-top:1%;"> 
        <div class="row" style="width:100%;">
        @if(count($partners)>0)
            @foreach($partners as $partners)
            <div class="col-sm-3" style="padding-bottom:10px">
                <div class="card text-center">
                <div class="feature-block">
                        <img src="../../uploaded_partners/{{$partners->partners_logo}}" height="200px" />
                    <div>
                        <p style="margin-top:3px;">{{$partners->partners_name}}</p>
                        <a href="#"  class="btn btn-link"> 
                             <form method="post" action="{{route('admin_plublish_partners', ['id' =>$partners->id])}}" >
                                @csrf
                                @if($partners->status==0)
                                <input type="submit" value="Publish" class="btn btn-link">
                                @else
                                <button class="btn btn-success disabled"> <i class="fa fa-check"></i></button>
                                @endif
                            </form>
                        </a>
                        <a href="{{route('admin_edit_partners', ['id' => $partners->id])}}" class="btn btn-link" >Edit</a>
                        <a href="#" class="btn btn-link">
                          <form method="post" action="{{route('admin_delete_partners', ['id' => $partners->id])}}" >
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
    </div>
@endsection

<style>
    .card{
       padding-top:2%;
        display: flex;
        flex-direction: column;
        width: 100%;
        justify-content: space-between;
        overflow: hidden;
        box-shadow: 0 .1rem 1rem rgba(0, 0, 0.1, 0.3);
        background: #ECE9E6;
        background:#FFFFFF;
       
    }
    .card a{
        margin:3%;
        padding:0%;
       
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