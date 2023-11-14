@extends('admin_layout')
@section('contents')

<div class="row" style="margin-top:3%;">

</div>

<section id="testimonial" >
			<div class="container">
			@if(Session::has('message_sent'))
				<div class="alert alert-success" role="alert">
					{{Session::get('message_sent')}}
				</div>
			@endif
				<div class="row" >
					@if(count($testimonial)>0)
					<div class="title" style="border:none;padding-bottom:1%">
						<h2>TESTIMONIAL</h2>
					</div>
					<?php $a=0; ?>
					@foreach($testimonial as $testimonial)
					<?php $a++; ?>
					<div class="col col-md-6" style="border:none;">
						<div class="media">
						<div class="media-left">
						    <a href="../uploaded_logo/{{$testimonial->company_logo}}">
						      <img src="../uploaded_logo/{{$testimonial->company_logo}}" style="width:80px;height:80px;border-radius:50%;">
						    </a>
						  </div>
						 
						  <div class="media-body" style="border:none" >
							  	<div class="row">
									  <div class="col-sm-7">
									  	<h4 class="media-heading">{{$testimonial->firstname}} {{$testimonial->lastname}}
										</h4>
									  </div>
									  <div class="col-sm-5">
										  <p style="color:blue;font-size:12px;font-weight:bold; padding-bottom:2px" >On: {{$testimonial->created_at}} </p>
									  </div>
									 
								</div>
								<p style="padding-bottom:2px;">{{$testimonial->comments}}</p>
								<div class="row" >
									<div class="col-sm-3" style="padding-left:6%;"><h3 style="font-size:15px">Project :</h3>
										<div class="title-ligne" style="width:55px"></div>
									</div> 
									<div class="col-sm-9" style="padding-left:0px;">
										<h3 style="font-size:15px">
										@if($testimonial->project_id==0)
										{{$testimonial->project_title}}
										@else
											<a href="{{ route('admin_project_details', ['id' =>$testimonial->project_id]) }}">{{$testimonial->project_title}}</a>
										@endif
										</h3>
									</div>
								</div>
                                <a href="#"  class="btn btn-link"> 
                             <form method="post" action="{{route('admin_testimonials_publish', ['id' =>$testimonial->id])}}" >
                                @csrf
                                @if($testimonial->status=='Disabled')
                                <input type="submit" value="Accept" class="btn btn-link">
                                @else
                                <button class="btn btn-success disabled"> <i class="fa fa-check"></i></button>
                                @endif
                            </form>
                        </a>
                        
                        <a href="#" class="btn btn-link">
							<form method="post" action="{{route('admin_testimonials_delete', ['id' =>$testimonial->id])}}" >
								@csrf
								<input type="submit" value="Reject" class="btn btn-link">
							</form>
						</a>
                                        
						  </div>
						</div>
					</div>
					@endforeach
					@endif
				</div>
			</div>
		</section>