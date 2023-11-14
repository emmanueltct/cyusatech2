@extends('client_layout')
@section('title', __('Only staff login'))
@section('client_contents')
<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
    </div>
</div>
<hr>

@if(Session::has('message_sent'))
	<div class="alert alert-success" role="alert">
		{{Session::get('message_sent')}}
	</div>
	@endif
    <div style="display:flex;align-items:center;padding-bottom:3%"> 
        <div class="card" style="padding:3%;">
            <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address 
                        @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>      
                        @endif
                    </label>
                    <input type="email" name="email"  value="{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter staff email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter account Password" required>
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

    .error{
        color:red;
    }
</style>