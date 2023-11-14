<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
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
		<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../assets/css/preloader.css">
		<link rel="stylesheet" href="../../assets/css/image.css">
		<link rel="stylesheet" href="../../assets/css/icon.css">
		<link rel="stylesheet" href="../../assets/css/style.css">
		<link rel="stylesheet" href="../../assets/css/responsive.css">
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
	

        <header id="navigation" class="navbar-fixed-top animated-header" style="padding:5px; border-bottom: 5px solid green;">
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
						<a href="#body" class="logo"><img src="assets/img/log2.jpg" height="80" width="150" alt=""></a>
						<span class="">CYUSA TECHNOLOGY</span>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation" style="margin-top:10px">
                    <ul id="nav" class="nav navbar-nav menu">
                        <li><a href="#top">Home</a></li>
                        <li><a href="#features">Service</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#pricing-table">Price</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#testimonial">Testimonial</a></li>
                        <li><a href="#contact-form">Contact</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
            </div>
        </header>


	<div class="wrapper">
		<section id="about-us" style="margin-top:20px">
			<div class="container">
                @yield('contents')
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
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
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