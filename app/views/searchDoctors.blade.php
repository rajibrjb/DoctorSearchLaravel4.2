@extends('layout')
@section('content')
<div class="container ">
	<section class="section-padding">
		<div class="jumbotron text-center">
			{{Form::open(['url'=>'searchDoctors','class'=> 'form'])}}
			<div class="shadow  ">
				<div class="box">
					{{Form::text('name',null,array( 'placeholder' => 'Search By Name'))}}
				</div>



				<div class="searchbox "  onload="codeAddress();">
				
						<div class" text-center">
							
							
							<div class="row">
								<div class="form-group col-md-3">
									{{ Form::select('category', array_merge(array('default' => 'Select catagorie'),$category_names), 'default') }}
								</div>
								<div class = "form group col-md-3">
									{{ Form::select('area', array_merge(array('default' => 'Select area'),$area_names), 'default') }}
								</div>
								<div class="form-group col-md-3">
									{{Form::text('address',null,array('class' => 'form-control', 'placeholder' => 'Search By Address'))}}
								</div>
								<div class="form-group col-md-3">
									
									
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-3">
									{{Form::text('experience',null,array('class' => 'form-control', 'placeholder' => 'Search By Experience'))}}
								</div>
								<div class="form-group col-md-2">
									{{Form::text('fee',null,array('class' => 'form-control', 'placeholder' => 'Search By Fee'))}}
								</div>
								<div class="form-group col-md-2 inline">
									<div class="col-md-6">
									{{Form::label('rating','Rating')}}
									</div>
									<div class="col-md-6">
									{{ Form::select('rating', $rating) }}
								</div>
								</div>
								<div class="form-group col-md-3">
									{{Form::checkbox('male', 1)}}
									{{Form::label('male','Male')}}
									{{Form::checkbox('female', 1)}}
									{{Form::label('female','Female')}}
								</div>
								<div class="searchbtn">
								<div class="form-group">
									{{Form::submit('Search',['class'=>'btns'])}}
								</div>
							</div>
							</div>
							
							
							{{Form::close()}}
						</div>
					
				</div>


<div class="border">
</div>







<div class="searchboxl">

					<div class="container searchboxmp">
			
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
                               
                               			<a href="{{ action('myController@showDoctorDetails', $doctor->id) }}" >{{ HTML::image('upload/doctors/'.$doctor->doctor_pic, 'a picture', array('class' => 'circular')) }}</a>
                                

                            		</div>
                           		 <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                                		<div class="clearfix">
                                    		<div class="pull-left">
                                        		<h4><a href="{{ action('myController@showDoctorDetails', $doctor->id) }}">{{$doctor->doctor_full_name}}</a></h4>
                                   			 </div>
                                   		 <div class="pull-right">
                                   		 	<div id="stars-existing" class="starrr" data-rating='{{$doctor->doctor_avg_rating}}'></div>
                                       		 
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



	<script type="text/javascript">


var __slice = [].slice;

(function($, window) {
  var Starrr;

  Starrr = (function() {
    Starrr.prototype.defaults = {
      rating: void 0,
      numStars: 5,
      change: function(e, value) {}
    };

    function Starrr($el, options) {
      var i, _, _ref,
        _this = this;

      this.options = $.extend({}, this.defaults, options);
      this.$el = $el;
      _ref = this.defaults;
      for (i in _ref) {
        _ = _ref[i];
        if (this.$el.data(i) != null) {
          this.options[i] = this.$el.data(i);
        }
      }
      this.createStars();
      this.syncRating();
      this.$el.on('mouseover.starrr', 'span', function(e) {
        return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('mouseout.starrr', function() {
        return _this.syncRating();
      });
      this.$el.on('click.starrr', 'span', function(e) {
        return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('starrr:change', this.options.change);
    }

    Starrr.prototype.createStars = function() {
      var _i, _ref, _results;

      _results = [];
      for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
        _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
      }
      return _results;
    };

    Starrr.prototype.setRating = function(rating) {
      if (this.options.rating === rating) {
        rating = void 0;
      }
      this.options.rating = rating;
      this.syncRating();
      return this.$el.trigger('starrr:change', rating);
    };

    Starrr.prototype.syncRating = function(rating) {
      var i, _i, _j, _ref;

      rating || (rating = this.options.rating);
      if (rating) {
        for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
        }
      }
      if (rating && rating < 5) {
        for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
        }
      }
      if (!rating) {
        return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
      }
    };

    return Starrr;

  })();
  return $.fn.extend({
    starrr: function() {
      var args, option;

      option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      return this.each(function() {
        var data;

        data = $(this).data('star-rating');
        if (!data) {
          $(this).data('star-rating', (data = new Starrr($(this), option)));
        }
        if (typeof option === 'string') {
          return data[option].apply(data, args);
        }
      });
    }
  });
})(window.jQuery, window);

$(function() {
  return $(".starrr").starrr();
});

$( document ).ready(function() {
      
  $('#stars').on('starrr:change', function(e, value){
    $('#count').html(value);
  });
  
  $('#stars-existing').on('starrr:change', function(e, value){
    $('#count-existing').html(value);
  });
});

	</script>
<div class="container">
	<div class="row">
		<h2>Working Star Ratings for Bootstrap 3 <small>Hover and click on a star</small></h2>
	</div>
    <div class="row lead">
        <div id="stars" class="starrr"></div>
        You gave a rating of <span id="count">0</span> star(s)
	</div>
    
    <div class="row lead">
        <p>Also you can give a default rating by adding attribute data-rating</p>
        <div id="stars-existing" class="starrr" data-rating='4'></div>
        You gave a rating of <span id="count-existing">4</span> star(s)
    </div>
</div>
	
@stop
