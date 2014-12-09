@extends('layout')
@section('content')
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1><span class="grey">Search</span> Doctors</h1>
				</div>


<p>asdjadjaskdj</p>

				<div class="searchbox">
				
						<div class" text-center">
							
							{{Form::open(['url'=>'searchDoctors','class'=> 'form'])}}
							<div class="row">
							<div class="form-group col-md-5">
								
								{{ Form::select('category', array_merge(array('default' => 'Select catagorie'),$categories_name), 'default') }}
							</div>

							
							<div class="form-group col-md-3">
								
								{{Form::text('address',null,array('class' => 'form-control', 'placeholder' => 'Search By Address'))}}
							</div>
							<div class="form-group col-md-4">
								
								{{Form::text('name',null,array('class' => 'form-control', 'placeholder' => 'Search By Name'))}}
							</div>
							
							</div>
							<div class="row">
							
							<div class="form-group col-md-3">
								
								{{Form::text('experience',null,array('class' => 'form-control', 'placeholder' => 'Search By Experience'))}}
							</div>
							<div class="form-group col-md-3">
								
								{{Form::text('fee',null,array('class' => 'form-control', 'placeholder' => 'Search By Fee'))}}
							</div>

						
							<div class="form-group col-md-3">
								{{Form::label('rating','Rating')}}
								{{ Form::select('rating', $rating) }}
							</div>
							<div class="form-group col-md-3">
								
								{{Form::checkbox('male', 1)}}
								{{Form::label('male','Male')}}
								{{Form::checkbox('female', 1)}}
								{{Form::label('female','Female')}}
								
							</div>

							</div>
							<div class="searchbtn">
							<div class="form-group">
								{{Form::submit('Search',['class'=>'btn btn-primary'])}}
							</div>
							</div>
							{{Form::close()}}
						</div>
					
				</div>










<div class="searchbox">

					<div class="">
			
								<div class="  text-center col-md-6 nopad">
								<div class="">
								
								<script type="text/javascript">

 								var latitude =[];
 								var longitude = [];

								</script>
								<?php 
								$variable = 0 ; 

								?>
					
						
						<div id="widget">
							@foreach($doctors as $doctor)
								


									
									<div class="profile" onclick="return init_map(<?php echo htmlspecialchars($variable=$variable+ 1); ?>);">
                        			<div class="row padal">
                            		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 picture">
                               
                               			<a href="{{ action('myController@showDetails', $doctor->id) }}" >{{ HTML::image('upload/'.$doctor->doctor_pic, 'a picture', array('class' => 'circular')) }}</a>
                                

                            		</div>
                           		 <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                                		<div class="clearfix">
                                    		<div class="pull-left">
                                        		<h4><a href="{{ action('myController@showDetails', $doctor->id) }}">{{$doctor->doctor_full_name}}</a></h4>
                                   			 </div>
                                   		 <div class="pull-right">
                                       		 <h4>{{$doctor->doctor_avg_rating}}</h4>
                                   		 </div>
                               			 </div>
                                <div class="clearfix">
                                    <div class="pull-left">
                                    	@foreach($categories as $category)
									@if($category->id == $doctor->category_id)
                                        <h6>{{$category->category_name}}</h6>
                                        	@endif
								@endforeach
                                    </div>
                                    <div class="pull-right">
                                        <h6>Experience : {{$doctor->doctor_experience}} yr</h6>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="pull-left">
                                    	@foreach($areas as $area)
									@if($area->id == $doctor->area_id)
										<h6>{{$area->area_name}}</h6>
									@endif
								@endforeach	
                                        
                                    </div>
                                    <div class="pull-right">
                                        <h6>{{$doctor->doctor_fee}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                   				 </div>






									<script type="text/javascript">

									@foreach($chambers as $chamber)
									@if($chamber->doctor_id == $doctor->id)
					

									latitude.push("{{$chamber->chamber_latitude}}");
									longitude.push("{{$chamber->chamber_longitude}}");
									@endif
									@endforeach	


									</script>

								
							@endforeach
					
				</div>
			</div>
		</div>

				<div class="col-md-6 nopad">
						<div class="">
					<div id="map_container">

 					<div id="map_canvas" class="map">

					</div>

					</div>
		
				</div>
				</div>
	
</div>


				</div>
			</div>
		</div>
	</section>
</div>















<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
	function initialize() {
		//var latitude = [23.818641700489906,23.9994262522536,24.26011139207214];
		//var longitude = [90.41748046875,90.142822265625,90.98876953125];
		var zoom = 8;

		var LatLng = new google.maps.LatLng(latitude[0],longitude[0]);
		
		var mapOptions = {
			zoom: zoom,
			center: LatLng,
			panControl: false,
			zoomControl: false,
			scaleControl: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}	
		
		var map = new google.maps.Map(document.getElementById('map_canvas'),mapOptions);
      
		for(i=0;i<latitude.length;i++)
		{
		var LatLng = new google.maps.LatLng(latitude[i], longitude[i]);
		var marker = new google.maps.Marker({
			position: LatLng,
			map: map,
			title: 'Drag Me!',
			draggable: true
		});
		}
		
	}
	initialize();


// These two functions need no customization.

function init_map(index) {
        var myLocation = new google.maps.LatLng(latitude[index-1], longitude[index-1]);
        var mapOptions = {
            center: myLocation,
            zoom: 16
        };
        var marker = new google.maps.Marker({
            position: myLocation,
            title: "Property Location"
        });
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
        marker.setMap(map);
    }

	</script>
@stop
