@extends('client_layout')
@section('title', __('Buy  products in our shop'))
@section('client_contents')


    <div style="display:flex;align-items:center;padding-bottom:3%;margin-top:10%;"> 
        <div class="row" style="width:100%;">
           @if(count($data)>0)
            @foreach($data as $data)
            <div class="col-sm-3">
                <div class="card">
                    <img src="../../uploaded_product/{{$data->images}}" alt="..." style="height:250px">
                    <div class="card-body">
                    <h5 class="card-title" style="padding:3%">{{$data->product}}</h5>
                        <hr style="margin-top:0px">
                        <p class="card-text" style="padding-bottom:0px"><span>Model:</span><small class="text-muted">{{$data->model}}</small></p>
                        <p class="card-text" style="padding-bottom:0px"><small class="text-muted"><span>Price:</span>{{$data->PriceStatus}}</small></p>
                        <hr style="margin-top:0px">
                        <a href="{{ route('product_detail', ['id' => $data->id]) }}">
                            <button class="btn btn-primary product_modal" id="{{$data->id}}"  style="width:30px;height:30px; border-radius:50%;padding:2px;font-size:12px"><i class="fa fa-plus" ></i></button>
                        </a>
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
        display:flex;
        flex-direction:column;
        padding:2%;
        box-shadow: 0 4px 4px 0 rgba(0,0,0,0.1);
		transition: 0.3s;
        margin-bottom:2rem;
    }
</style>

