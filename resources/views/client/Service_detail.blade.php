@extends('client_layout_detail')
@section('title', __("$data->service_name"))
@section('client_contents')
		<section id="about-us">
			<div class="container">
				<div class="row">
                    <div class="col-sm-6" >
                        <div class="feature-block text-center service_card">
                            <img src="../../uploaded_service/{{$data->images}}" alt="Company Image" style="width:100%;">
                        </div>
                    </div>
                    <div class=" col-sm-6" >
                        <p class="wow fadeInUp" data-wow-delay=".5s" style="padding-bottom:5px">
                        {{$data->description}}
                        </p>
                    </div>
			    </div>
            </div>
		</section>
     
  @if(count($related)>0)
		<section id="about-us">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title" style=" height:5px; display:flex; flex-direction:column;padding-top:100px;align-items:center">
							<h2>Related Project</h2>
						</div>
					</div>
				</div>

				<div class="row" style="width:100%">
              
                @foreach($related as $related)
                <div class="card  col-sm-3" >
                    <h3 class="wow fadeInUp" data-wow-delay=".3s" style="color:blue;padding-bottom:2%"> {{$related->project_title}}</h3>
                    <img src="../uploaded_project/{{$related->sample_image}}" width="100%" height="200px"/> 
                    <h4 style="font-style:italic; margin-top:30px;">Project Implementation</h4>
                        <div class="title-ligne" style="width:70%"></div>
                        <dl style="font-style:italic; margin-top:15px;">
                            <b>Site Location:</b>  <span>{{$related->site_name}} ,   <i>{{$related->site_location}}</i></span><br>
                            
                            <b>Durations</b>  <span>{{$related->project_durations}}</span><br>

                            <b>Date:</b>  <span>{{$related->starting_date}} --- {{$related->ending_date}}</span><br>
                        </dl>

						<div style="display:flex;flex-direction:column;align-items:flex-end;margin-top:5%">
                            <a href="{{ route('project_details', ['id' => $related->id]) }}">
							<button class="btn btn-info more" style="width:30px;height:30px;padding:3%; border-radius:50%; font-size:13px" ><i class="fa fa-plus"></i> </button>
                            </a>
						</div>
				</div>
             @endforeach
            </div>
		</section>

        @endif

  <!-- this part reserved for modal part to add project we preformed realted to this service -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose project related to this service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button  type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>

@endsection
	


<style>
    .card{
        overflow: hidden;
        background: #ECE9E6;
        background: linear-gradient(to right, #FFFFFF, #ECE9E6);
       margin-bottom:3%;
    }

    .check {
    display: inline-block;
    transform: rotate(48deg);
    height:13px;
    width: 6px;
    border-bottom: 2px solid green;
    border-right: 2px solid green;
    
    }

    .behind {
    display: inline-block;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    background: #f8f8f8;
    align-items:center;
    text-align:center;
    margin-left:-12px;
    box-shadow: inset 0 1px 3px rgba(0,0,0,.3);
    }
   
   #testimonial ul li{
    margin-top:0px;
    padding-bottom:15px;
    display:flex;
    flex-direction:row;
    
   }
</style>