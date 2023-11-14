

@extends('client_layout')
@section('title', __('Contact us'))
@section('client_contents')
	
	
    <section id="contact-form" style="padding-top:70px">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<div class="info-box">
								<i class="fa fa-map-marker"></i>
								<h3>Our Address</h3>
								<p>KG 15 AVE UTEXRWA Road, Kigali, Gisozi</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box mt-4">
								<i class="fa fa-envelope"></i>
								<h3>Email Us</h3>
								<p>info@cyusatech.rw<br>contact@cyusatech.rw</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box mt-4">
								<i class="fa fa-phone"></i>
								<h3>Call Us</h3>
								<p>+250 788621795<br>+1 6678 254445 41</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						@if(Session::has('message_sent'))
							<div class="alert alert-success" role="alert">
								{{Session::get('message_sent')}}
							</div>
						@endif
						<form action="{{route('sendEmail')}}" method="POST" style="width:95%">
							@csrf
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="firstname" class="form-control" placeholder="First name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="lastname" class="form-control" placeholder="Last name">
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
							    <input type="number" name="phone" class="form-control" placeholder="Phone number">
							</div>
							<div class="col-sm-6">
								<input type="email" name="email" class="form-control" placeholder="Email">
							</div>
						</div>
                         	<input type="text" name="subject" class="form-control" placeholder="the reason why you sent this message">
                            <textarea name="message" class="form-control" rows="3" placeholder="type your full message here"></textarea>
                            <button class="btn btn-default" type="submit">SEND</button>
                        </form>
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

	.info-box {
		color: #0b2341;
		text-align: center;
		box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
		padding: 20px 0 30px 0;
		background: #fff;
		margin-bottom:15px;
		}

		.info-box i {
		font-size:26px;
		height:50px;
		width:50px;
		color: #ed502e;
		border-radius: 50%;
		padding: 10px;
		border: 2px dotted #fbdad2;
		}

	 .info-box h3 {
		font-size: 20px;
		color: #777777;
		font-weight: 700;
		margin: 10px 0;
		}

	.info-box p {
		padding: 0;
		line-height: 24px;
		font-size: 14px;
		margin-bottom: 0;
		}

</style>