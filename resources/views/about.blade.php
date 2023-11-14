@extends('client_layout')
@section('title', __('Who we are'))
@section('client_contents')
	
		<section id="about-us" style="margin-top:70px">
			<div class="container">
				<div class="row">
				<div class="card  col-sm-6" >
					<div class="feature-block text-center service_card">
						<img src="assets/img/company-activities.jpeg" alt="Company Image" style="width:100%;">
					</div>
				</div>
				<div class="card  col-sm-6" >
				<p class="wow fadeInUp" data-wow-delay=".5s" style="padding-bottom:5px">
				<b>CYUSA TECHNOLOGY Ltd</b> is one of leading service providers
					in technical testing and analyzing projects, consultancy,
					general supply and installation, service and mainantance,
					limitations and risks of each level of protection.

					<h3>OUR CORE VALUES</h3>
						<div class="title-ligne"></div>
					<ul class="list-display list-checkmarks wow fadeInUp" data-wow-delay=".8s">
					<li>CUSTOMER SATISFACTION</li>
					<li>COST AWERANESS</li>
					<li>HARDWORK</li>
					<li>PROACTIVE</li>
					</ul>
				</p>
				<p>		Our company has a track record of providing excellent service. 
						We thrive to deliver more efficient,effective and relevant quality
						services and quality solutions tailored to the increasingly
						complex demands in order to boost productivity and to
						maximize value for our customers. we also strive toward 
						technology that provides a real advantage to our customers.
					</p>

					<p style="font-weight:bold; 'Courier New', monospace;">	
					“technology is not just about speeding up the process and
					allowing flexibility, but it can transform how business functions
					and will save a company time and money if implemented
					and maintained properly.”
					</p>
				</div>
			</div>
			<div class="row" style="margin-top:25px">
				<div class="card  col-sm-6" >
				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12" >
						<div>
							<img src="assets/img/vision.jfif" alt="Company Image" style="width:15%;">
							<span style="font-size:25px;font-weight:bold"> Vision</span>
						</div>
						<p class="wow fadeInUp" data-wow-delay=".5s">
							Our vision is to be a highly respected solution provider
							that satisfies the demands of society and works positively towards the interests of humanity to be a model
							of excellence as an integrated building technology
							company that our shareholders, customers, suppliers,
							associates and society would love to be associated
						</p>
						
					</div>
					<div class="col-md-12 col-xs-12 col-sm-12" style="margin-top:10px">
						<div>
							<img src="assets/img/mission.png" alt="Company Image" style="width:12%;">
							<span style="font-size:25px;font-weight:bold">Mission</span>
						</div>
						<p class="wow fadeInUp" data-wow-delay=".5s">
							We aim at accelerating our growth by becoming the
							preferred service provider and supplier of innovative
							integrated systems to reduce costs and increase operational efficiencies and lower the ecological footprint for
							companies. To nurture and deveLop a network of competent distributors and partners to reach large and
							medium sized companies internationally as well as individuals, domestcally while serving large domestic customers directly
						</p>
					</div>
				</div>
				</div>
				<div class="card  col-sm-6" style="height:400px;overflow:hidden">
					<div class="feature-block text-center service_card">
						<img src="assets/img/company-activities2.jpeg" alt="Company Image" style="width:100%;">
					</div>
				</div>
			</div>
		</section>
        <section id="counter">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2>Company Record</h2>
						<p>From 2016, since we have been started working , we have trust and remarkable history in our customers . They are all satisfied by our services.</p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="block wow fadeInRight" data-wow-delay=".3s">
							<i class="ion-code"></i>
							<p class="count-text">
								<span class="counter-digit">{{count($project)}}</span> 
							</p>
							<p><a href="{{route('projects')}}" style="color:white">Completed Project</a></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="block wow fadeInRight" data-wow-delay=".5s">
							<i class="ion-compass"></i>
							<p class="count-text">
								<span class="counter-digit">{{count($service)}}</span> 
							</p>
							<p><a href="{{route('services')}}" style="color:white">Services</a></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="block wow fadeInRight" data-wow-delay=".7s">
							<i class="ion-compose"></i>
							<p class="count-text">
								<span class="counter-digit">{{count($shop)}}</span>
							</p>
							<p><a href="{{route('shops')}}" style="color:white">Products in Shop</a></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="block wow fadeInRight" data-wow-delay=".9s">
							<i class="ion-image"></i>
							<p class="count-text">
								<span class="counter-digit">{{count($partners)}}</span>
							</p>
							<p>Partners</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="testimonial">
			<div class="container">
				<div class="row">
				
					@if(count($testimonial)>0)
					<div class="title">
						<h2>TESTIMONIAL</h2>
					</div>
					
					<?php $a=0; ?>
					@foreach($testimonial as $testimonial)
					<?php $a++; ?>
					<div class="col col-md-6" style="border:none">
					
						<div class="media wow <?php if(($a+1)%2==0){echo 'fadeInLeft';}else{echo 'fadeInRight';}?>" data-wow-delay=".3s">
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
											<a href="{{ route('project_details', ['id' =>$testimonial->project_id]) }}">{{$testimonial->project_title}}</a>
										@endif
										</h3>
									</div>
								</div>	
								
						  </div>
						</div>
					</div>
					@endforeach
					@endif
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