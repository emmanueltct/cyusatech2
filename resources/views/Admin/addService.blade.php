@extends('admin_layout')
@section('contents')

<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
        <a href="{{route('admin_all_services')}}">
            <button class="btn btn-info" style="float:right">View all Services List</button>
        </a>
        <p style="font-size:16px">
            Use this form to add Service information, please  for each field fill the correct information belongs to your Services
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
    <div style="display:flex;align-items:center;padding-bottom:5%"> 
        <div class="card" style="padding:3%;">
            <form method="POST" action="/admin/AddService" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Sevice Title
                    <span class="error">*</span>
                        @if ($errors->has('ServiceTitle'))
                            <span class="error">{{ $errors->first('ServiceTitle') }}</span>
                                
                        @endif
                    </label>
                    <input type="text" name="ServiceTitle" value="{{old('ServiceTitle')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter firstname">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Description (minimum:300 characters)<span class="error">*</span>
                        @if ($errors->has('serviceDescription'))
                            <span class="error">{{ $errors->first('serviceDescription') }}</span>
                                
                        @endif
                    </label>
                    <textarea name="serviceDescription" minlength="300" cols="30" rows="5" class="form-control">
                     {{old('serviceDescription')}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Service Image
                    <span class="error">*</span>
                        @if ($errors->has('serviceImage'))
                            <span class="error">{{ $errors->first('serviceImage') }}</span>
                                
                        @endif
                    </label>
                    <input type="file"  name="serviceImage" class="form-control">
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