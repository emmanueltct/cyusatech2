@extends('client_layout')
@section('title', __('Completed projects'))
@section('client_contents')

		<section id="features">
			<div class="container">
				<div style="display:flex;align-items:center;padding-bottom:3%;margin-top:0px;"> 
					<div class="row" style=" margin:auto;">
					@if(count($data)>0)
						@foreach($data as $data)
						<div class="col-sm-4" style="padding-bottom:10px">
							<div class="feature-block card">
									<img src="../uploaded_project/{{$data->sample_image}}" width="100%" height="250px"/>
								<div style="padding:5%">
									<h3 class=" text-center">{{$data->project_title}}</h3> 
									<p style="margin-top:10px;">{{substr($data->description1, 0,370)}}.......<p>
									<a href="{{ route('project_details', ['id' => $data->id]) }}"><button class="btn btn-primary btn-xs">Read More</button></a>
								</div>
								
							</div>
						</div>
						@endforeach
					@endif
					</div>
				</div>
			</div>
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

	
	</style>