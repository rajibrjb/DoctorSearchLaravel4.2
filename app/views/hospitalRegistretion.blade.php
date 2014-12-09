@extends('layout')
@section('content')
<section class="header section-padding">
	<div class="background">&nbsp;</div>
	<div class="container">
		<div class="header-text">
			<h1>Hospital Registretion</h1>
			<p>Hospitals will register here</p>
		</div>
	</div>
</section>
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<h1>Registretion Form</h1>
			{{Form::open(['url'=>'hospitalRegistretion','class'=> 'form','files' => true])}}

			<div class="form-group">
				{{Form::label('name','Hospital Name:')}}
				{{Form::text('name',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('address','Hospital Address:')}}
				{{Form::text('address',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('phone','Hospital Phone:')}}
				{{Form::text('phone',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('e-mail','Hospital E-mail:')}}
				{{Form::email('e-mail',null,['class'=>'form-control'])}}
			</div>


			<input type="hidden" id="la" name="la" value="23.786758526804636">
			<input type="hidden" id="lo" name="lo" value="90.39979934692383">
			<div class="form-group" id="map" style="width:500px; height:500px"></div>


			<div class="form-group">
			    {{Form::label('image','Image:')}}
			    {{Form::file('image')}}
			</div>
			<div class="form-group">
				{{Form::label('avg_cost','Average Cost:')}}
				{{Form::text('avg_cost',null,['class'=>'form-control'])}}
			</div>			
			<div class="form-group">
				{{Form::label('details','Details:')}}
				{{Form::textarea('details',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
			</div>
			{{Form::close()}}
		</div>
	</section>
</div>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
	function initialize() {
		var latitude = 23.786758526804636;
		var longitude = 90.39979934692383;
		var zoom = 11;
		
		var LatLng = new google.maps.LatLng(latitude, longitude);
		
		var mapOptions = {
			zoom: zoom,
			center: LatLng,
			panControl: false,
			zoomControl: true,
			scaleControl: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}	
		
		var map = new google.maps.Map(document.getElementById('map'),mapOptions);
      

		var marker = new google.maps.Marker({
			position: LatLng,
			map: map,
			title: 'Drag Me!',
			draggable: true
		});
		
		google.maps.event.addListener(marker, 'dragend', function(marker){
			var latLng = marker.latLng;
			document.getElementById('la').value = latLng.lat();
			document.getElementById('lo').value = latLng.lng();
		});
		
		
	}
	initialize();
	</script>


@stop