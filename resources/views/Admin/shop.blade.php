@extends('admin_layout')
@section('contents')
<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
        <a href="{{route('admin_shops')}}">
            <button class="btn btn-info" style="float:right">Add new Product</button>
        </a>
        <p style="font-size:16px">
         This page provide product information in your shop, please click on plus (+) button to manage each Product
        </p>
    </div>
</div>
<hr>
    @if(Session::has('message_sent'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message_sent')}}
        </div>
    @endif
    <div style="display:flex;align-items:center;padding-bottom:3%;"> 
        <div class="row" style="width:100%;">
           @if(count($data)>0)
            @foreach($data as $data)
            <div class="col-sm-3" syle="padding:1%">
                <div class="card card-body text-center">
                    <div>
                    <img src="../../uploaded_product/{{$data->images}}" class="card-img-top" alt="..." height="150px">
                    </div>
                <h5 class="card-title" style="padding:3%">{{$data->product}}</h5>
                    <hr style="margin-top:0px">
                    <p class="card-text" style="padding-bottom:0px"><span>Model:</span><small class="text-muted">{{$data->model}}</small></p>
                    <p class="card-text" style="padding-bottom:0px"><small class="text-muted"><span>Price:</span>{{$data->PriceStatus}}</small></p>
                    <hr style="margin-top:0px">
                    <a href="/admin/more_product_photos/{{$data->id}}">
                         <button class="btn btn-primary" data-toggle="modal" data-target="#{{$data->id}}" style="width:30px;height:30px; border-radius:50%;padding:2px;font-size:12px"><i class="fa fa-plus" ></i></button>
                    </a>
                </div>
            </div>

            @endforeach
        @endif
        </div>
    </div>
@endsection

<style>
    .card{
        padding:0px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        width:100%;
        box-shadow: 0 .1rem 1rem rgba(0, 0, 0.1, 0.3);
        background: #ECE9E6;
        background:#FFFFFF;
        margin-bottom:2rem;
    }
</style>