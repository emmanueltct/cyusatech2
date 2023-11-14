@extends('admin_layout')
@section('contents')
<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
        <a href="{{route('admin_all_shop')}}">
            <button class="btn btn-info" style="float:right">View all shop products</button>
        </a>
        <p style="font-size:16px">
         This page will help you to post shop product information , Please fill the correct information at each field
        </p>
    </div>
</div>
<hr>
@if($errors->any())
	<div class="alert alert-danger" role="alert">
		Your message not sent,  please review your sent data and try again
	</div>
@endif
@if(Session::has('message_sent'))
    <div class="alert alert-success" role="alert">
	    {{Session::get('message_sent')}}
    </div>
@endif
    <div style="display:flex;align-items:center;padding-bottom:3%"> 
        <div class="card" style="padding:3%;">
            <form method="POST" action="/admin/AddProduct" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Prduct name <span class="error">*</span>
                        @if ($errors->has('product'))
                            <span class="error">{{ $errors->first('product') }}</span>
                                
                        @endif
                    </label>
                    <input type="text" name="product"  value="{{old('product')}}" class="form-control"  placeholder="Ex:DOM Camera">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Model Number <span class="error">*</span>
                        @if ($errors->has('model'))
                            <span class="error">{{ $errors->first('model') }}</span>
                                
                        @endif                        
                    </label>
                    <input type="text" name="model"  value="{{old('model')}}" class="form-control"  placeholder="Product Model Number if available">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product price <span class="error">*</span>
                        @if ($errors->has('price'))
                            <span class="error">{{ $errors->first('price') }}</span>
                                
                        @endif
                    </label>
                    <input type="number" name="price"  value="{{old('price')}}" class="form-control"  placeholder="Insert product price if necessary">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Sample Image<span class="error">*</span>
                      @if ($errors->has('product_image'))
                            <span class="error">{{ $errors->first('product_image') }}</span>
                                
                        @endif
                    </label>
                    <input type="file" name="product_image" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> description of product(minimum:200 characters) <span class="error">*</span>
                        @if ($errors->has('description'))
                            <span class="error">{{ $errors->first('description') }}</span>
                                
                        @endif
                    </label>
                    <textarea name="description" minlength="200"   cols="30" rows="10" class="form-control" placeholder="add product description like specification or other detail information on product "> {{old('description')}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <div>
    </div>
@endsection

<style>
    .card{
        margin:auto;
        display: flex;
        flex-direction: column;
        width: clamp(60rem, calc(60rem + 2vw), 62rem);
        overflow: hidden;
        box-shadow: 0 .1rem 1rem rgba(0, 0, 0.1, 0.3);
        border-radius: 1em;
        background: #ECE9E6;
        background: linear-gradient(to right, #FFFFFF, #ECE9E6);

    }
</style>