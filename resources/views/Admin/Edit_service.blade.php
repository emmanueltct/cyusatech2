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
            <form method="POST" action="{{route('admin_save_edit_service', ['id' => $service->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Sevice Title
                    <span class="error">*</span>
                        @if ($errors->has('ServiceTitle'))
                            <span class="error">{{ $errors->first('ServiceTitle') }}</span>
                                
                        @endif
                    </label>
                    <input type="text" name="ServiceTitle" value="@if($errors->any()){{old('ServiceTitle')}}@else {{$service->service_name}}@endif" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter firstname">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Description (minimum:300 characters)<span class="error">*</span>
                        @if ($errors->has('serviceDescription'))
                            <span class="error">{{ $errors->first('serviceDescription') }}</span>
                                
                        @endif
                    </label>
                    <textarea name="serviceDescription" minlength="300" cols="30" rows="5" class="form-control">
                    @if($errors->any()){{old('serviceDescription')}}@else{{$service->description}}@endif
                    </textarea>
                </div>

                <div class="form-group" >
                     you want to change this profile picture ? <button type="button" id="confirm_button">Yes</button> 
                    <button type="button" id="remove_button">Keep existing</button>
                     
                   <div id="old_image">
                       <img src="../../uploaded_service/{{$service->images}}" width="100px" height="100px"><span>{{$service->images}}</span>
                    <input type="hidden" name="old_serviceImage" class="form-control" value="{{$service->images}}">
                </div>
                </div>
                <div class="form-group profile">
                    <label for="exampleInputPassword1">Service Image
                    <span class="error">*</span>
                        @if ($errors->has('serviceImage'))
                            <span class="error">{{ $errors->first('serviceImage') }}</span>
                                
                        @endif
                    </label>
                    <input type="file"  name="serviceImage" class="form-control old_profile">
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