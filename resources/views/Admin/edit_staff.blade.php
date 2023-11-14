@extends('admin_layout')
@section('contents')
<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
        <a href="{{route('admin_all_staff')}}">
            <button class="btn btn-info" style="float:right">View all staff list</button>
        </a>
        <p style="font-size:16px">
            Use this form to modify staff information, please  for each field fill  the correct information 
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
    @if($users)
    <div style="display:flex;align-items:center;padding-bottom:3%"> 
        <div class="card" style="padding:3%;">
            <form method="POST" action="{{route('post_edit_staff',['id' => $users->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Firstname <span class="error">*</span>
                        @if($errors->has('firstname'))
                            <span class="error">{{ $errors->first('firstname') }}</span>      
                        @endif
                    </label>
                    <input type="text" name="firstname"  value="@if($errors->has('firstname')){{old('firstname')}}@else {{$users->firstname}}@endif" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter firstname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Lastname <span class="error">*</span>
                         @if ($errors->has('lastname'))
                                <span class="error">{{ $errors->first('lastname') }}</span>
                                    
                        @endif
                    </label>
                    <input type="text" name="lastname"  value="@if($errors->has('lastname')){{old('lastname')}}@else {{$users->lastname}}@endif" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter lastname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address <span class="error">*</span>
                        @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                                    
                        @endif
                    </label>
                    <input type="email" name="email"  value="@if($errors->has('email')){{old('email')}}@else {{$users->email}}@endif" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter staff email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">telephone <span class="error">*</span>
                         @if ($errors->has('telephone'))
                                <span class="error">{{ $errors->first('telephone') }}</span>
                                    
                        @endif
                    </label>
                    <input type="text" name="telephone"  value="@if($errors->has('telephone')){{old('telephone')}}@else {{$users->telephone }}@endif" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter telephone number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Position <span class="error">*</span>
                         @if ($errors->has('post'))
                                <span class="error">{{ $errors->first('post') }}</span>     
                        @endif
                    </label>
                    <input type="text" name="post"  value="@if($errors->has('post')){{old('post')}}@else {{$users->position}}@endif" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter staff position">
                </div>
                <div class="form-group" >
                   <div id="old_image">
                       <img src="../../user_profile/{{$users->user_profile}}" width="100px" height="100px"><span>{{$users->user_profile}}</span>
                    <input type="hidden" name="old_user_profile" class="form-control" value="{{$users->user_profile}}">
                </div>
                    <br>
                    you want to change this profile picture ? <button type="button" id="confirm_button">Yes</button> 
                    <button type="button" id="remove_button">Keep existing</button> 
                </div>
                <div class="form-group profile" >
                    <label for="exampleInputPassword1">Profile picture
                        @if ($errors->has('user_profile'))
                                <span class="error">{{ $errors->first('user_profile') }}</span>
                                    
                        @endif
                    </label>
                    <input type="file" name="user_profile" class="form-control profile_field">
                    <b>If you submit null data, system will keep old profile</b>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        <div>
    </div>
    @else
    <div class="alert alert-danger" role="alert">
		Wrong information passed, we are unable to find this staff id please try again
        <a href="{{route('admin_all_staff')}}">Staff list</a>
	</div>
    @endif
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