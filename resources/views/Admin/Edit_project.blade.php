@extends('admin_layout')
@section('contents')

<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
        <a href="{{route('admin_all_projects')}}">
            <button class="btn btn-info" style="float:right">View all projects list</button>
        </a>
        <p style="font-size:16px">
         This page will help you to modify(Update) all information related to your completed projects, Please fill tthe correct information at each field
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
            <form method="POST" action="{{route('admin_save_edit_project',['id'=>$project->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Project Title<span class="error">*</span>
                        @if ($errors->has('projectTitle'))
                            <span class="error">{{ $errors->first('projectTitle') }}</span>
                                
                        @endif
                    </label>
                    <input type="text" name="projectTitle" value=" @if($errors->has('projectTitle')){{old('projectTitle')}}@else {{$project->project_title}}@endif" class="form-control"  placeholder="Ex:CCTV and Fire Alarm Installation">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Site Name <span class="error">*</span>
                        @if ($errors->has('siteName'))
                                <span class="error">{{ $errors->first('siteName') }}</span>
                                    
                        @endif
                    </label>
                    <input type="text" name="siteName" value=" @if($errors->has('siteName')){{old('siteName')}}@else {{$project->site_name}}@endif" class="form-control"  placeholder="Ex:UBUMWE Grande Hotel">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Site Location <span class="error">*</span>
                         @if ($errors->has('siteLocation'))
                                <span class="error">{{ $errors->first('siteLocation') }}</span>
                                    
                        @endif
                    </label>
                    <input type="text" name="siteLocation" value=" @if($errors->has('siteLocation')){{old('siteLocation')}}@else {{$project->site_location}}@endif" class="form-control"  placeholder="Ex:Musanze district, Kinigi center">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Durations</label>
                    <input type="text" name="durations" value="@if($errors->has('any')){{old('durations')}}@else {{$project->project_durations}}@endif" class="form-control"  placeholder="Ex:3-months">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Starting date</label>
                    <input type="text" name="start_date" value="@if($errors->has('any')){{old('start_date')}}@else {{$project->starting_date}}@endif" class="form-control"  placeholder="first day of project">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ending date</label>
                    <input type="text" name="end_date" value="@if($errors->has('any')){{old('end_date')}}@else{{$project->ending_date}}@endif" class="form-control"  placeholder="last day of project">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Short description on Project (Between 150-600 characters) <span class="error">*</span>
                         @if ($errors->has('Description1'))
                                <span class="error">{{ $errors->first('Description1') }}</span>
                                    
                        @endif
                    </label>
                    <textarea name="Description1" minlength="150"   maxlength="600" cols="30" rows="10" class="form-control" placeholder="add description on project task required">@if($errors->has('any')){{old('Description1')}}@else {{$project->description1}}@endif</textarea>
                </div>

                <div class="form-group" >
                   <div id="old_sample_image">
                       <img src="../../uploaded_project/{{$project->sample_image}}" width="100px" height="100px"><span>{{$project->user_profile}}</span>
                    <input type="hidden" name="old_sample_image" class="form-control" value="{{$project->sample_image}}">
                </div>
                         @if ($errors->has('ProjectImage1'))
                                <span class="error">The update 0f {{ $errors->first('ProjectImage1') }} width must be greater than height</span>
                                    
                        @endif
                <br>
                    you want to change this profile picture ? <button type="button" id="confirm_button">Yes</button> 
                    <button type="button" id="remove_button">Keep existing</button> 
                </div>

                <div class="form-group profile">
                    <label for="exampleInputPassword1">Sample Image <span class="error">*</span>
                      
                    </label>
                    <input type="file" name="ProjectImage1" class="form-control profile_field" >
                    <b>If you submit null data, system will keep old image</b>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">2<sup>nd</sup> description on Project(More detail on project,between 20-1500 characters) <span class="error">*</span>
                         @if ($errors->has('Description2'))
                                <span class="error">{{ $errors->first('Description2') }}</span>
                                    
                        @endif
                    </label>
                    <textarea name="Description2"  minlength="200"   maxlength="1500" cols="30" rows="10" class="form-control" placeholder="add description like solution of project, achievement as company implemeted project or functionalities of implemeted system">@if($errors->has('any')){{old('Description2')}}@else {{$project->description2}}@endif</textarea>
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
            $("#old_sample_image").hide();
        });

        $("#remove_button").click(function(){
            $("#remove_button").hide();
            $("#confirm_button").show();
            $(".profile").hide();
            $("#old_sample_image").show();
        });
    });
</script>