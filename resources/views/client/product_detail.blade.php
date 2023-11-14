@extends('client_layout_detail')
@section('title', __("$product->product"))
@section('client_contents')

	<div class="wrapper">
		<section id="about-us">
			<div class="container card">

				<div class="row">
                    <div class="col-sm-6" >
                        <div class="feature-block text-center" style="margin-bottom:2%">
                            <img src="../../uploaded_product/{{$product->images}}" alt="Company Image" height="200px" >
                        </div>
                    </div>
                    <div class=" col-sm-6" >
                        <p class="wow fadeInUp" data-wow-delay=".5s" style="padding-bottom:5px">
                        {{$product->description}}
                        </p>
                        <dl style="font-style:italic; margin-top:15px;">
                            <b>Model:</b>  <span>{{$product->model}}</span><br>

                            <b>Price</b>  <span>{{$product->price}}</span><br>

                            <b>Date:</b>  <span>{{$product->created_at}}</span><br>
                        </dl>
                      </div>
                   </div>
            </div>
		</section>
        <div class="title" style=" display:flex;padding-bottom:0px; flex-direction:column;padding-top:20px;align-items:center">
			<h3>More similar product you can find in our shop</h3>
    		</div>
		<section id="testimonial" style="margin-top:0px;padding-top:10px;">
			<div class="container  card" style="padding-top:10px;"> 
				<div class="row" style="padding-bottom:0px;" >
                    <?php for($a=0; $a<count($images);$a++){ ?>
					<div class="col col-md-3" style="padding-top:0px" >
						<div class="media wow fadeInLeft" data-wow-delay=".3s">
						  <div class="media-body" >
                          <a class="example-image-link" href="../../uploaded_product/<?php echo $images[$a]->more_photos; ?>" data-lightbox="example-set">
                            <img src="../../uploaded_product/<?php echo $images[$a]->more_photos; ?>" alt=""  height="150px">
                            </a>
						  </div>
						</div>
					</div>
                    <?php } ?>
				</div>
			</div>
		</section>

@endsection
	
<style>
     .card{
        margin:auto;
        display: flex;
        flex-direction: column;
        width: clamp(60rem, calc(60rem + 2vw), 62rem);
        overflow: hidden;
        background: #ECE9E6;
        background: linear-gradient(to right, #FFFFFF, #ECE9E6);

    }
</style>