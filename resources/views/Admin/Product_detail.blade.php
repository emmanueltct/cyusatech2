@extends('admin_layout')
@section('contents')
<div class="row" style="margin-top:10%;">
    <div class="col-sm-12">
        <a href="{{route('admin_all_shop')}}">
            <button class="btn btn-info" style="float:right">Back to product list</button>
        </a>
        <a href="{{route('admin_shops')}}">
            <button class="btn btn-info" style="float:left">Add new Shop Product</button>
        </a>
        <h3 class="text-center"> Manage this product information</h3>
        
    </div>
</div>
<hr>
    @if(Session::has('message_sent'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message_sent')}}
        </div>
    @endif
	<div class="wrapper">
		<section id="about-us">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title" style=" height:5px; display:flex; flex-direction:column;padding-top:100px;align-items:center">
							<h2>{{$product->product}}</h2>
						</div>
					</div>
				</div>

				<div class="row">
                    <div class="card  col-sm-6" >
                        <div class="feature-block text-center">
                            <img src="../../uploaded_product/{{$product->images}}" alt="Company Image" height="300px" >
                        </div>
                    </div>
                    <div class="card  col-sm-6" >
                        <p class="wow fadeInUp" data-wow-delay=".5s" style="padding-bottom:5px">
                        {{$product->description}}
                        </p>
                        <h4 style="font-style:italic; margin-top:30px;">Other Detail</h4>
                        <div class="title-ligne"></div>
                        <dl style="font-style:italic; margin-top:15px;">
                            <b>Model:</b>  <span>{{$product->model}}</span><br>

                            <b>Price</b>  <span>{{$product->price}}</span><br>

                            <b>Date:</b>  <span>{{$product->created_at}}</span><br>
                        </dl>
                        <a href="#"  class="btn btn-link"> 
                             <form method="post" action="{{route('admin_plublish_product', ['id' =>$product->id])}}" >
                                @csrf
                                @if($product->status==0)
                                <input type="submit" value="Publish" class="btn btn-link">
                                @else
                                <button class="btn btn-success disabled"> <i class="fa fa-check"></i></button>
                                @endif
                            </form>
                        </a>
                        <a href="{{route('admin_edit_product', ['id' => $product->id])}}" class="btn btn-link" >Edit</a>
                        <a href="#" class="btn btn-link">
                          <form method="post" action="{{route('admin_delete_product', ['id' => $product->id])}}" >
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-link">
                        </form>
                    </a>
                        <hr>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#{{$product->id}}" ><i class="fa fa-plus" > Add more Image</i></button>

                    </div>
                        <!--- modal for description of product -->
                    <div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add more images type of similar products</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="/admin/more_product_photos" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Product N<sup>o</sup></label>
                                                <input type="text" name="product_id" class="form-control" value="{{$product->id}}"   required readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Add Images</label>
                                                <input type="file" name="more_image[]" class="form-control" multiple required >
                                                <i>you can Upload multiple pictures(related) at the sametime</i>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
			    </div>
            </div>
		</section>
     

		<section id="testimonial">
			<div class="container">
				<div class="row" style="padding-bottom:0px;" >
                   
                    <?php for($a=0; $a<count($images);$a++){ ?>
					<div class="col col-md-3" style="padding-top:0px" >
						<div class="media wow fadeInLeft" data-wow-delay=".3s">
						  <div class="media-body" >
                            <img src="../../uploaded_product/<?php echo $images[$a]->more_photos; ?>" alt=""  height="150px">
                            
                            <a href="#" class="btn btn-link">
                          <form method="post" action="{{route('admin_delete_product_images', ['id' => $images[$a]->id])}}" >
                            @csrf
                            <input type="submit" value="Remove" class="btn btn-link">
                        </form>
                    </a>
						  </div>
						</div>
					</div>
                    <?php } ?>
				</div>
			</div>
		</section>

@endsection
	