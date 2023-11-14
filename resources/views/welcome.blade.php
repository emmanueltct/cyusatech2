<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>CYUSA TECHNOLOGY Ltd</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- google fonts -->

		<!-- Css link -->
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/lightbox.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/preloader.css">
		<link rel="stylesheet" href="assets/css/image.css">
		<link rel="stylesheet" href="assets/css/icon.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/responsive.css">
		<link href="assets/icofont/icofont.min.css" rel="stylesheet">
	</head>
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
			box-shadow: 0 4px 4px 0 rgba(0,0,0,0.2);
			transition: 0.3s;
			width:100%;
			margin-left: 1.3rem;
			margin-bottom:12px;
			background-color:#ffffff
			}
		.service_card p{
			/* Add shadows to create the "card" effect */
			padding:0 20px 0 20px;
			}
			/* On mouse-over, add a deeper shadow */
			.service_card:hover {
			box-shadow: 0 8px 2px 0 rgba(0,0,0,0.2);
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
			label{
				color:white;
				font-weight:initial
			}

		.navbar-collapse >.row>.col-sm-12{
			display:flex;
			justify-content:right;
			font-size:25px;
		}


	@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  
	}
	.body,.body-h1{
		display:none;
	}

	.navbar-collapse >.row>.col-sm-12{
			display:flex;
			justify-content:left;
			font-size:25px;
		}

	}


	

	
	.error{
		color:red;
		margin-left:2%;
	}

	</style>
	<body id="top">
	

        <header id="navigation" class="navbar-fixed-top animated-header " style="padding:5px">
            <div class="container header_container">
				<div class="row">
					<div class="col-sm-2">
						<div class="navbar-header">
							<!-- responsive nav button -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- /responsive nav button -->
							
							<!-- logo -->
							<h1 class="navbar-brand text-center " >
								<a href="/" class="logo"><img src="assets/img/test_logo.png" height="140" alt="Company Logo"></a>
							</h1>
							<!-- /logo -->
						</div>
					</div>

				<!-- main nav -->
				<div class="col-sm-10" style="padding-top:3%" >
                <nav class="collapse navbar-collapse navbar-right" role="navigation" style="width:100%;">
				<div class="row" style="width:100%;">  
					<div class="col-sm-12" style="">
						<ul id="nav" class="nav navbar-nav menu" >
							 <li><a href="{{route('home')}}">Home</a></li>
							 <li><a href="{{route('about')}}">About-Us</a></li>
               <li><a href="{{route('services')}}">Services</a></li>
               <li><a href="{{route('projects')}}">Projects</a></li>
               <li><a href="{{route('shops')}}">Products in Shop</a></li>
               <li><a href="{{route('contacts')}}">Contact-Us</a></li>
						</ul>
					</div>
				</div>
                </nav>
			</div>
		</div>
				<!-- /main nav -->
				
            </div>
        </header>


	<div class="wrapper">
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<h1 class="body-h1">CYUSA TECHNOLOGY Ltd </h1>
							<p  class="body">
							“technology is not just about speeding up the process and
							allowing flexibility, but it can transform how business functions
							and will save a company time and money if implemented 
							and maintained properly.”
							</p>
							<div class="buttons">
								<a  id="scroll" href="#portfolio" class="btn btn-learn scroll">Our Services</a>
								<a href="#blog" class="btn btn-learn scroll">Our projects</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="about-us" style="margin-top:20px;padding-bottom:0px">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h2>Who we are</h2>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="card  col-sm-6" >
					<div class="feature-block text-center ">
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
					<div class="feature-block text-center ">
						<img src="assets/img/company-activities2.jpeg" alt="Company Image" style="width:100%;">
					</div>
				</div>
			</div>
		</section>
		
		<section id="portfolio" style ="margin-top:px;padding-top:20px;background-color:#f5f7fa;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h2>OUR BEST SERVICES</h2>
						</div>
					</div>
				</div>
				<div class="block">
					<div class="recent-work-pic" >
					  <ul id="mixed-items" style="">
				        <div class="row" style="width:100%;">
							@if(count($service)>0)
								@foreach($service as $services)
									<div class="col-sm-3 ">
										<div class="service_card text-center">
											<li class="mix category-1 " data-my-order="{{$services->id}}" style="padding-bottom:0px;margin-bottom:0px" >
												<a class="example-image-link" href="uploaded_service/{{$services->images}}" data-lightbox="example-set" >
													<img class="img-responsive" src="uploaded_service/{{$services->images}}" style="width:100%;height:180px">
								
												</a>
											</li>	
											<h3 style="padding-bottom:5%;margin-top:0px" class="wow fadeInUp" data-wow-delay=".3s">
											<a href="{{ route('service_details', ['id' => $services->id]) }}">{{$services->service_name}}</a>
											</h3>
										</div>				
									</div>
								@endforeach
							@else
								<div class="card  col-sm-12 service_card text-center" style="width:100%">
									
									<li class="mix category-1 col-md-12 col-xs-12" data-my-order="1" style="width:100%">
										please wait our service list , we are working hard to fix it
									</li>
								</div>
							@endif
						</div>
					</ul>
				</div>
			</div>
		</section>


		<section id="play-video">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<h2 class="wow fadeInUp" data-wow-delay=".3s">TESTIMONIAL</h2>
							<p class="wow fadeInUp" data-wow-delay=".5s">
							Thank you for working with us, your comment to our working behaviour is a good testimonial to our company, it will help to increase trust and worthiness from our customers.
							</p>
						</div>
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
						<form method="POST" action="{{route('add_testimonial')}}" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Firstname</label>
										@if ($errors->has('firstname'))
											<span class="error">{{ $errors->first('firstname') }}</span>
											@if($errors->first('firstname')[3])
											<span class="error">Numbers and Other symbol not allowed</span>
											@endif
										@endif
										<input type="text" name="firstname" class="form-control"  minlength="3"  placeholder="Enter firstname" value="{{old('firstname')}}"  @if ($errors->has('firstname')) autofocus @endif >
										
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">lastname</label>
										@if ($errors->has('lastname'))
											<span class="error">{{ $errors->first('lastname') }}</span>
											@if($errors->first('lastname')[3])
											<span class="error">Numbers and Other symbol not allowed</span>
											@endif
										@endif
										<input type="text" name="lastname"  minlength="3"   class="form-control" value="{{old('lastname')}}"  placeholder="Enter lastname"  @if ($errors->has('lastname')) autofocus @endif >
									</div>
									<div class="form-group">
										<label for="company_logo">Company Logo or Your Picture</label>
										@if ($errors->has('company_logo'))
											<span class="error">{{ $errors->first('company_logo') }}</span>
										@endif
										<input type="file" name="company_logo" class="form-control" id="company_logo"  value="{{old('company_logo')}}"  @if ($errors->has('company_logo')) autofocus @endif>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Your message (minimun:150 characters)</label>
										@if ($errors->has('comment'))
											<span class="error">{{ $errors->first('comment') }}</span>
										@endif
										<textarea name="comment" id="comment"  minlength="150"   maxlength="500" cols="30" rows="9" class="form-control" onKeyPress="removeSpace()"  @if ($errors->has('comment')) autofocus @endif >
										{{old('comment')}}
										</textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<div class="form-group">
											<div>
												<input type='checkbox' name="project_id" value="" id="modal_check" data-toggle="modal" data-target="#test">
												<label for="modal_check">I have had project contract with them </label></div>
											<div>
											<input type='checkbox' name="no_project"  id="no_project" value="I want to testify them because I have experienced with their working styles" >
											<label for="no_project">I want to testify them because I have experienced with their working styles  </label>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary" id="submitbtn">Submit</button>
								</div>
							</div>
							
							<div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true" style="color:red">&times;</span>
												</button>
												<h5 class="modal-title" id="exampleModalLabel">We have implemented many project please choose one project we have contracted with you </h5>
													
											</div>
											<div class="modal-body">
												<div class="row">
												@if(count($project)>0)
												@foreach($project as $p)
													<div class="col-sm-6" style="display:flex;flex-direction:row;">
													<input type='radio' name="project_title" id="{{$p->id}}" class="selected_project" value="{{$p->project_title}}" >
													<label style="margin-left:3%;font-weight:initial;color:black " for="{{$p->id}}">{{$p->project_title}} (at {{$p->site_name}} on:{{$p->starting_date}} )</label>
													</div>
												@endforeach
												@else
												<h3 style="text-align:center">Please wait our Project list</h3>
												@endif
												</div>
												<hr>
												<button type="button" class="btn btn-info closebtn " data-dismiss="modal" aria-label="Close" >save</button>											
											</div>
											
									</div>
								</div>
							</div>
						</form>
                    </div>
					</div>
					@if($errors->any())
							<div class="alert alert-danger" role="alert" style="margin-top:10px">
								Your message not sent,  please review your sent data and try again
							</div>
						@endif
				</div>
			</div>
		</section>
		<section id="team">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2>Our staff </h2>
					</div>
					@if(count($staff)>0)
					@foreach($staff as $user)
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="block wow fadeInLeft" data-wow-delay=".3s" style="width:221px;height:221px">
						<img src="user_profile/{{$user->user_profile}}" alt="" style="width:100%;">
							<div class="team-overlay" style="padding:0px">
								<h3>{{$user->firstname}} {{$user->lastname}} <span>{{$user->position}}</span></h3>
								<span class="icon"><i class="fa fa-phone"></i></span>
									<div style="color:black">{{$user->email}} </div>
									<div style="color:black">{{$user->telephone}} </div>
							</div>
						</div>
					</div>
					@endforeach
					@else
					<div class="card  col-sm-12 service_card text-center" style="width:100%">
									
						<li class="mix category-1 col-md-12 col-xs-12" data-my-order="1" style="width:100%;list-style-type:none">
							please wait our staff list , we are working hard to fix it
						</li>
					</div>
					@endif
				</div>
			</div>
		</section>

		<section id="blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h2>our Latest work</h2>
						</div>
						<div id="blog-post" class="owl-carousel">
						@if(count($project)>0)
						@foreach($project as $project)
							<div>
							<div class="block">
								<div class="recent-work-pic"  style="">
									<ul id="mixed-items" >
										<div class="row" >
											<div class="col-sm-12">
												<div class="text-center" style="width:100%;padding:0px;margin:0px;">
													<li class="mix category-1 " data-my-order="{{$project->id}}" style="padding-bottom:0px;margin-bottom:0px;" >
														<a class="example-image-link" href="uploaded_project/{{$project->sample_image}}" data-lightbox="example-set" >
														<img class="img-responsive" src="uploaded_project/{{$project->sample_image}}" style="width:100%;">
													
														</a>
													</li>
												</div>
											</div>
										</div>
									</ul>
								</div>
								<div class="content">
									<h4><a href="blog.html">{{$project->project_title}}</a></h4>
									<small>{{$project->site_name}} ({{$project->site_location}})/{{$project->starting_date}}</small>
										<p>
										{{substr($project->description1,0,167)}}......	
										</p>
										<a href="{{ route('project_details', ['id' => $project->id]) }}" class="btn btn-read">Read More</a>
										
									</div>
								</div>
							</div>
							@endforeach
							@else					
							<div>
								<div class="block col-md-12">
									<div class="content">
										<h4><a href="blog.html">Sorry!!!</a></h4>
										<p>
											wait a moment we are working hard to fix it
										</p>
										<a href="blog.html" class="btn btn-read disabled">Read More</a>
										
									</div>
								</div>
							</div>
							@endif
						</div>

					</div>
				</div>
			</div>
		</section>





		<section id="client-logo">
			<div class="container">
				<div class="row">
				@if(count($partners)>0)
					<div class="title" style="margin-top:5%">
						<h2>Our Partners </h2>
					</div>
					<div class="col-md-12">
						<div class="block">
							<div id="Client_Logo" class="owl-carousel">
								@foreach($partners as $p)
								<div>
									<a href="#"><img class="img-responsive" src="uploaded_partners/{{$p->partners_logo}}" alt=""></a>
									<div class="team-overlay">
									{{$p->partners_name}}
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<a href="#"><h3>CYUSA TECHNOLOGY LTD</h3></a>
							<p>All rights reserved © <?php echo date('Y');?></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

		<!-- load Js -->
		<script src="assets/js/jquery-1.11.3.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/lightbox.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/html5lightbox.js"></script>
		<script src="assets/js/jquery.mixitup.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/jquery.scrollUp.js"></script>
		<script src="assets/js/jquery.sticky.js"></script>
		<script src="assets/js/jquery.nav.js"></script>
		<script src="assets/js/main.js"></script>

		<script>
			
			$(document).ready(function(){
				$("#comment").on("click", function(e){
					let text = document.getElementById('comment').value;
					let result = text.trimLeft();
					$("#comment").val(result);

				});


				$("#modal_check").prop('required',true);
				$('#modal_check').click(function(){
					var ticked=document.getElementById('modal_check');
					if(ticked.checked){
						$("#modal_check").prop('required',true);
					}
				});

				$('#no_project').click(function(){
					var ticked2=document.getElementById('no_project');
					if(ticked2.checked){
						$("#modal_check").prop('required',false);
					}
				});

				$('.selected_project').click(function(event){
					var ticked_id=event.target.id;
						$('#modal_check').attr("value",ticked_id);
				});

				$('.closebtn').click(function(event){
					var ticked_id=$('#modal_check').val();
					if(ticked_id==""){
						$("#modal_check").prop('checked',false);
						$('#modal_check').attr("value",'');
					}else{
						console.log(ticked_id);
						$("#modal_check").prop('checked',true);
						
					}
						
				});
			})

			
			
		</script>
	
	</body>
</html>