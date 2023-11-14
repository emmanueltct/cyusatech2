@extends('admin_layout')
@section('contents')

<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
        <a href="{{route('admin_all_projects')}}">
            <button class="btn btn-info" style="float:right">View all projects list</button>
        </a>
        <p style="font-size:16px">
         This page will help you to publish all information related to your completed projects, Please fill tthe correct information at each field
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
            <form method="POST" action="/admin/AddProject" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Project Title<span class="error">*</span>
                        @if ($errors->has('projectTitle'))
                            <span class="error">{{ $errors->first('projectTitle') }}</span>
                                
                        @endif
                    </label>
                    <input type="text" name="projectTitle" value="{{old('projectTitle')}}" class="form-control"  placeholder="Ex:CCTV and Fire Alarm Installation">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Site Name <span class="error">*</span>
                        @if ($errors->has('siteName'))
                                <span class="error">{{ $errors->first('siteName') }}</span>
                                    
                        @endif
                    </label>
                    <input type="text" name="siteName" value="{{old('siteName')}}" class="form-control"  placeholder="Ex:UBUMWE Grande Hotel">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Site Location <span class="error">*</span>
                         @if ($errors->has('siteLocation'))
                                <span class="error">{{ $errors->first('siteLocation') }}</span>
                                    
                        @endif
                    </label>
                    <input type="text" name="siteLocation" value="{{old('siteLocation')}}" class="form-control"  placeholder="Ex:Musanze district, Kinigi center">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Durations</label>
                    <input type="text" name="durations" value="{{old('durations')}}" class="form-control"  placeholder="Ex:3-month">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Starting date</label>
                    <input type="date" name="start_date" value="{{old('start_date')}}" class="form-control"  placeholder="first day of project">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ending date</label>
                    <input type="date" name="end_date" value="{{old('end_date')}}" class="form-control"  placeholder="last day of project">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Short description on Project (Between 150-250 characters) <span class="error">*</span>
                         @if ($errors->has('Description1'))
                                <span class="error">{{ $errors->first('Description1') }}</span>
                                    
                        @endif
                    </label>
                    <textarea name="Description1" minlength="150"   maxlength="250" cols="30" rows="10" class="form-control" placeholder="add description on project task required">{{old('Description1')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Sample Image  (use a landscape Image(width>height) no more than 2048MB) <span class="error">*</span>
                        @if ($errors->has('ProjectImage1'))
                                <span class="error">{{ $errors->first('ProjectImage1') }}</span>
                                    
                        @endif
                    </label>
                    <input type="file" name="ProjectImage1" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">2<sup>nd</sup> description on Project(More detail on project,between 200-1500 characters) <span class="error">*</span>
                         @if ($errors->has('Description2'))
                                <span class="error">{{ $errors->first('Description2') }}</span>
                                    
                        @endif
                    </label>
                    <textarea name="Description2"  minlength="200"   maxlength="1500" cols="30" rows="10" class="form-control" placeholder="add description like solution of project, achievement as company implemeted project or functionalities of implemeted system">{{old('Description2')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Add Images related to project(upload multiple image at once) use a landscape Image(width>height) no more than 2048MB <span class="error">{{ $errors->first('ProjectImage2.*') }}</span></label>
                    <input type="file" name="ProjectImage2[]" class="form-control" placeholder="Password" multiple="multiple">
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