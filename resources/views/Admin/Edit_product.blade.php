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
            <form method="POST" action="{{route('admin_save_edit_product',['id'=>$product->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Prduct name <span class="error">*</span>
                        @if ($errors->has('product'))
                            <span class="error">{{ $errors->first('product') }}</span>
                                
                        @endif
                    </label>
                    <input type="text" name="product"  value="@if($errors->any()){{old('product')}}@else{{$product->product}}@endif" class="form-control"  placeholder="Ex:DOM Camera">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Model Number <span class="error">*</span>
                        @if ($errors->has('model'))
                            <span class="error">{{ $errors->first('model') }}</span>
                                
                        @endif                        
                    </label>
                    <input type="text" name="model"  value="@if($errors->any()){{old('model')}}@else{{$product->model}}@endif" class="form-control"  placeholder="Product Model Number if available">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product price <span class="error">*</span>
                        @if ($errors->has('price'))
                            <span class="error">{{ $errors->first('price') }}</span>
                                
                        @endif
                    </label>
                    <input type="number" name="price"  value="@if($errors->any()){{old('price')}}@else{{$product->price}}@endif" class="form-control"  placeholder="Insert product price if necessary">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> description of product(minimum:200 characters) <span class="error">*</span>
                        @if ($errors->has('description'))
                            <span class="error">{{ $errors->first('description') }}</span>
                                
                        @endif
                    </label>
                    <textarea name="description" minlength="200"   cols="30" rows="10" class="form-control" placeholder="add product description like specification or other detail information on product ">@if($errors->any()) {{old('description')}}@else{{$product->description}}@endif</textarea>
                </div>
                
                <div class="form-group" >
                     you want to change this profile picture ? <button type="button" id="confirm_button">Yes</button> 
                    <button type="button" id="remove_button">Keep existing</button>
                     
                   <div id="old_image">
                       <img src="../../uploaded_product/{{$product->images}}" width="100px" height="100px"><span>{{$product->images}}</span>
                    <input type="hidden" name="old_product_image" class="form-control" value="{{$product->images}}">
                </div>
                </div>
                <div class="form-group profile">
                    <label for="exampleInputPassword1">Sample Image<span class="error">*</span>
                      @if ($errors->has('product_image'))
                            <span class="error">{{ $errors->first('product_image') }}</span>
                                
                        @endif
                    </label>
                    <input type="file" name="product_image" class="form-control profile_field" >
                    <b>If you submit null data, system will keep old profile</b>
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
<script src="../../assets/js/jquery-1.11.3.min.js"></script>
<script>
    $(document).ready(function(){
        $(".profile").hide();
        $("#remove_button").hide();
        $("#confirm_button").click(function(){
            $("#remove_button").show();
            $("#confirm_button").hide();
            $(".profile").show();
            $("#old_image").hide();
        });

        $("#remove_button").click(function(){
            $("#remove_button").hide();
            $("#confirm_button").show();
            $(".profile").hide();
            $("#old_image").show();
        });
    });
</script>