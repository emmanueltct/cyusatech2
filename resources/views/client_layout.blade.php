<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="assets/img/logo.png"/>
		<title>CYUSA TECHNOLOGY Ltd/{{Request::path()}}</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- google fonts -->

		<!-- Css link -->
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../assets/css/owl.carousel.css">
		<link rel="stylesheet" href="../../assets/css/owl.transitions.css">
		<link rel="stylesheet" href="../../assets/css/animate.min.css">
		<link rel="stylesheet" href="../../assets/css/lightbox.css">
		<link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../assets/css/preloader.css">
		<link rel="stylesheet" href="../../assets/css/image.css">
		<link rel="stylesheet" href="../../assets/css/icon.css">
		<link rel="stylesheet" href="../../assets/css/style.css">
		<link rel="stylesheet" href="../../assets/css/responsive.css">
		<link href="../../assets/icofont/icofont.min.css" rel="stylesheet">
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

			#banner2 {
			margin-top:160px;
			height:400px;
			background-size: cover;
			padding: 5px 0;
			position: relative;
			background-image: url('assets/img/contact-slider-img.jpg');
			
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
	<body id="top">
	

        <header id="navigation" class="navbar-fixed-top animated-header" >
            <div class="container" style="">
                <div class="navbar-header" style="">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand" >
					<a href="#body" class="logo"><img src="assets/img/test_logo.png" height="140" alt=""></a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation" style="margin-top:35px;">
                <ul id="nav" class="nav navbar-nav menu">
                        <li><a href="{{route('home')}}">Home</a></li>
						<li><a href="{{route('about')}}">About-Us</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="{{route('projects')}}">Projects</a></li>
                        <li><a href="{{route('shops')}}">Products in Shop</a></li>
                        <li><a href="{{route('contacts')}}">Contact-Us</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
            </div>
        </header>


	<div class="wrapper">
	<section id="banner2">
			<div class="container">
				<div class="row">
					<div class="col-md-12" >
						<div class="block" style="background-color:#FCBA8B;margin-top:340px;height:90px;">
							<div class="title" style="margin-top:15%;padding-top:2%">
								<h2 style="">@yield('title') </h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="about-us">
			<div class="container">
                @yield('client_contents')
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
		<script src="../../assets/js/jquery-1.11.3.min.js"></script>
		<script src="../../assets/js/bootstrap.min.js"></script>
		<script src="../../assets/js/waypoints.min.js"></script>
		<script src="../../assets/js/lightbox.js"></script>
		<script src="../../assets/js/jquery.counterup.min.js"></script>
		<script src="../../assets/js/owl.carousel.min.js"></script>
		<script src="../../assets/js/html5lightbox.js"></script>
		<script src="../../assets/js/jquery.mixitup.js"></script>
		<script src="../../assets/js/wow.min.js"></script>
		<script src="../../assets/js/jquery.scrollUp.js"></script>
		<script src="../../assets/js/jquery.sticky.js"></script>
		<script src="../../assets/js/jquery.nav.js"></script>
		<script src="../../assets/js/main.js"></script>
	
	</body>
</html>