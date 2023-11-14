


<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
	     <title>@yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- google fonts -->

		<!-- Css link -->
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/css/owl.carousel.css">
		<link rel="stylesheet" href="../assets/css/owl.transitions.css">
		<link rel="stylesheet" href="../assets/css/animate.min.css">
		<link rel="stylesheet" href="../assets/css/lightbox.css">
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/preloader.css">
		<link rel="stylesheet" href="../assets/css/image.css">
		<link rel="stylesheet" href="../assets/css/icon.css">
		<link rel="stylesheet" href="../assets/css/style.css">
		<link rel="stylesheet" href="../assets/css/responsive.css">
		<link href="../assets/icofont/icofont.min.css" rel="stylesheet">
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
	@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  
	}
	.body,.body-h1,.buttons {
		display:none;
	}

	}


	

	
	.error{
		color:red;
		margin-left:2%;
	}

	</style>
	<body id="top">
	

        <header id="navigation" class="navbar-fixed-top animated-header" style="padding:5px">
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
								<a href="#body" class="logo"><img src="assets/img/test_logo.png" height="140" alt=""></a>
							</h1>
							<!-- /logo -->
						</div>
					</div>

				<!-- main nav -->
				<div class="col-sm-10" style="padding-top:3%" >
                <nav class="collapse navbar-collapse navbar-right" role="navigation" style="width:100%;">
				<div class="row" style="width:100%;">  
					<div class="col-sm-12" style="display:flex;justify-content:right;font-size:25px;">
                    <ul id="nav" class="nav navbar-nav menu" >
							<li><a href="{{route('home')}}">Home</a></li>
							<li><a href="{{route('about')}}">about</a></li>
							<li><a href="{{route('services')}}">Service</a></li>
							<li><a href="{{route('projects')}}">Project</a></li>
							<li><a href="{{route('shops')}}">Shop</a></li>
							<li><a href="{{route('contacts')}}">Contact</a></li>
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
		
		<section id="about-us" style="margin-top:100px;padding-bottom:0px">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
                        {{--  @yield('code') --}}
						</div>
					</div>
				</div>
				<div class="row">
				<div class="card  col-sm-6" >
					<div class="feature-block text-center ">
						<img src="../assets/img/company-activities.jpeg" alt="Company Image" style="width:100%;">
					</div>
				</div>
				<div class="card  col-sm-6" >
				<p class="wow fadeInUp" data-wow-delay=".5s" style="padding-bottom:5px">
				<b>CYUSA TECHNOLOGY Ltd</b> is one of leading service providers
					in technical testing and analyzing projects, consultancy,
					general supply and installation, service and mainantance,
					limitations and risks of each level of protection.

				</p>
                    <div class="alert alert-danger" style="margin-top:20px">
                    
                     @yield('message') 
                    </div>
				</div>
			</div>
		</section>



		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<a href="#"><img src="assets/img/logo.png" alt=""></a>
							<p>All rights reserved © 2015</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

		<!-- load Js -->
		<script src="../assets/js/jquery-1.11.3.min.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
		<script src="../assets/js/waypoints.min.js"></script>
		<script src="../assets/js/lightbox.js"></script>
		<script src="../assets/js/jquery.counterup.min.js"></script>
		<script src="../assets/js/owl.carousel.min.js"></script>
		<script src="../assets/js/html5lightbox.js"></script>
		<script src="../assets/js/jquery.mixitup.js"></script>
		<script src="../assets/js/wow.min.js"></script>
		<script src="../assets/js/jquery.scrollUp.js"></script>
		<script src="../assets/js/jquery.sticky.js"></script>
		<script src="../assets/js/jquery.nav.js"></script>
		<script src="../assets/js/main.js"></script>

		
	</body>
</html>

