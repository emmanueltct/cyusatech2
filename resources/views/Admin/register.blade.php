@extends('admin_layout')
@section('contents')
<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
        <a href="{{route('admin_all_staff')}}">
            <button class="btn btn-info" style="float:right">View all staff list</button>
        </a>
        <p style="font-size:16px">
            Use this form to register new staff information, please  for each field fill  the correct information regard to new Staff
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
            <form method="POST" action="{{route('addStaff')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Firstname <span class="error">*</span>
                        @if ($errors->has('firstname'))
                                <span class="error">{{ $errors->first('firstname') }}</span>
                                    
                        @endif
                    </label>
                    <input type="text" name="firstname"  value="{{old('firstname')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter firstname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Lastname <span class="error">*</span>
                         @if ($errors->has('lastname'))
                                <span class="error">{{ $errors->first('lastname') }}</span>
                                    
                        @endif
                    </label>
                    <input type="text" name="lastname"  value="{{old('lastname')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter lastname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address <span class="error">*</span>
                        @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                                    
                        @endif
                    </label>
                    <input type="email" name="email"  value="{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter staff email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">telephone <span class="error">*</span>
                         @if ($errors->has('telephone'))
                                <span class="error">{{ $errors->first('telephone') }}</span>
                                    
                        @endif
                    </label>
                    <input type="number" name="telephone"  value="{{old('telephone')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter telephone number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Position <span class="error">*</span>
                         @if ($errors->has('post'))
                                <span class="error">{{ $errors->first('post') }}</span>     
                        @endif
                    </label>
                    <input type="text" name="post"  value="{{old('post')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter staff position">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">User Picture:<i style="font-weight:normal">(Use Width:300pixel,height:314pixel,size:<2048MB)</i><span class="error">* </span>
                        @if ($errors->has('user_profile'))
                                <span class="error">{{ $errors->first('user_profile') }}</span>
                                    
                        @endif
                    </label>
                    <input type="file" name="user_profile" class="form-control">
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