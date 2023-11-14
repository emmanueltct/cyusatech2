
@extends('client_layout')
@section('title', __('Our Services'))
@section('client_contents')
		<section id="features">
			<div class="container">
			<div class="block">
			<div class="recent-work-pic" >
				<ul id="mixed-items" style="">
				<div class="row" style="width:100%">
				@if(count($data)>0)
				@foreach($data as $data)
				<div class="col-sm-3" >
					<div class="service_card text-center" style="padding-bottom:3px;">
						<li class="mix category-1 " data-my-order="{{$data->id}}" style="padding-bottom:0px;margin-bottom:0px" >
							<a class="example-image-link" href="../uploaded_service/{{$data->images}}" data-lightbox="example-set" >
								<img class="img-responsive" src="../uploaded_service/{{$data->images}}" style="width:100%;height:180px">
								
								</a>
						</li>	
						<h3 class="wow fadeInUp" data-wow-delay=".3s">{{$data->service_name}}</h3>
						<p class="wow fadeInUp" data-wow-delay=".5s">{{substr($data->description,0,79)}}......</p>
						<div style="display:flex;flex-direction:column;align-items:flex-end;padding-right:6%;margin-top:5%">
							<a href="{{ route('service_details', ['id' => $data->id]) }}">
							<button class="btn btn-info more" style="width:30px;height:30px;padding:3%; border-radius:50%; font-size:13px" ><i class="fa fa-plus"></i>
						</div>
					</div>
				</div>
			
				
				@endforeach
				@else
				<div class="col-sm-12" >
					<p class="wow fadeInUp" data-wow-delay=".5s">Sorry our service list is temporary unavailable, we are working on it and we appreciate your patience</p>
				</div>
				@endif
			</div>
</ul>
</div>
</div></div>
		</section>
		@endsection	


<style>

	.body,.body-h1 {
	border-right: solid 5px rgba(255,255,255,.75);
	white-space: wrap;
	overflow:hidden;    
	font-family: 'Source Code Pro', monospace;  
	font-size: 15px;
	color: rgba(255,255,255,.70);
	}

h3{
	margin-top:16px;
}
.service_card {
	/* Add shadows to create the "card" effect */
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	transition: 0.3s;
	margin-bottom:12px;
	}
.service_card p{
	/* Add shadows to create the "card" effect */
	padding:0 20px 0 20px;
	}
	/* On mouse-over, add a deeper shadow */
	.service_card:hover {
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}

	.list-display li {
	margin-bottom:.4rem;
	}
	.list-checkmarks {
	padding-left:3.5rem;
	}
	.list-checkmarks li {
	list-style-type:none;
	padding-left:1rem;
	}
	.list-checkmarks li:before {    
	font-family: 'FontAwesome';
	content: "\f00c";
	margin:0 10px 0 -28px;
	color: #17aa1c;
	}

	.title-ligne{
		width:150px;
		height:2px;
		background-color:green;
		margin-bottom:10px;
	}

	p{
		padding-bottom:30px
	}
	
@media only screen and (max-width: 768px) {
/* For mobile phones: */
[class*="col-"] {
width: 100%;

}
.body,.body-h1,.buttons {
display:none;
}
}

	.more:hover{
			background-color:#360223;
	}
</style>
