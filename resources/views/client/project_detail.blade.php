@extends('client_layout_detail')
@section('title', __("$data->project_title"))
@section('client_contents')

	<div class="wrapper">
		<section id="about-us">
			<div class="container">
				<div class="row">
                    <div class="card  col-sm-6" >
                        <div class="feature-block text-center service_card">
                            <img src="../../uploaded_project/{{$data->sample_image}}" alt="Company Image" style="width:100%;">
                        </div>
                    </div>
                    <div class="card  col-sm-6" >
                        <p style="padding-bottom:5px">
                        {{$data->description1}}
                        </p>
                        <h4 style="font-style:italic; margin-top:30px;">Project Implementation</h4>
                        <div class="title-ligne"></div>
                        <dl style="font-style:italic; margin-top:15px;">
                            <b>Site Location:</b>  <span>{{$data->site_name}} ,   <i>{{$data->site_location}}</i></span><br>
                            
                            <b>Durations</b>  <span>{{$data->project_durations}}</span><br>

                            <b>Date:</b>  <span>{{$data->starting_date}} --- {{$data->ending_date}}</span><br>
                        </dl>
                    </div>
			    </div>
            </div>
		</section>
     

		<section id="testimonial">
			<div class="container">
				<div class="row" style="padding-bottom:0px;" >
                    <div class="col col-sm-12" style=" padding-bottom:0px;padding-top:0px" >
                        <div class="title" style="padding-bottom:0px">
                            <h2>More Details</h2>
                        </div>
                        <p>{{$data->description2}}</p>
                    </div>
                </div>
                    <?php  $image=json_decode($data->more_image); ?>
                    <?php for($a=0; $a<count($image);$a++){ ?>
					<div class="col col-md-3 card" style="padding:3px;" >
						<div class="media wow <?php if(($a+1)%2==0){echo 'fadeInLeft';}else{echo 'fadeInRight';}?>" data-wow-delay=".3s">
						  <div class="media-body">
                            <img src="../../uploaded_project/<?php echo $image[$a]; ?>" alt="" style="width:100%">
						  </div>
						</div>
					</div>
                    <?php } ?>
				</div>
			</div>
		</section>

@endsection
	