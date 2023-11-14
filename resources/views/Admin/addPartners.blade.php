@extends('admin_layout')
@section('contents')
<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
        <a href="{{route('admin_all_partners')}}">
            <button class="btn btn-info" style="float:right">View all partners list</button>
        </a>
        <p style="font-size:16px">
            Use this form to add partners information, please  for each field fill the correct information belongs to your partners
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
            <form method="POST" action="/admin/Addpartners" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">partners_name <span class="error">*</span>
                        @if ($errors->has('partners_name'))
                            <span class="error">{{ $errors->first('partners_name') }}</span>
                                
                        @endif
                    </label>
                    <input type="text" name="partners_name" value="{{old('partners_name')}}" class="form-control"  placeholder="Ex:Equit Rwanda" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Partners Logo <span class="error">*</span>
                         @if ($errors->has('partners_logo'))
                            <span class="error">{{ $errors->first('partners_logo') }}</span>
                                
                        @endif
                    </label>
                    <input type="file" name="partners_logo" class="form-control" required >
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