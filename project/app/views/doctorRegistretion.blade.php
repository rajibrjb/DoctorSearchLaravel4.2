@extends('layout')
@section('content')
<section class="header section-padding">
	<div class="background">&nbsp;</div>
	<div class="container">
		<div class="header-text">
			<h1>Doctor Registretion</h1>
			<p>Doctors will register here</p>
		</div>
	</div>
</section>
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<h1>Registretion Form</h1>
			{{Form::open(['url'=>'doctorRegistretion','class'=> 'dark-matter','files' => true])}}
			<div class="form-group">
				{{Form::label('category','Category:')}}
				{{ Form::select('category', array_merge(array('default' => 'Please Select'),$categories_name), 'default') }}
			</div>
			<div class="form-group">
				{{Form::label('hospital','Hospital:')}}
				{{ Form::select('hospital', array_merge(array('default' => 'Please Select'),$hospitals_name), 'default') }}
			</div>
			<div class="form-group">
				{{Form::label('user_name','User Name:')}}
				{{Form::text('user_name',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('password','Password:')}}
				{{Form::password('password',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('name','Name:')}}
				{{Form::text('name',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('age','Age:')}}
				{{Form::text('age',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('sex','Sex:')}}
				{{ Form::radio('sex', 'male') }}
				{{Form::label('male','Male')}}
				{{ Form::radio('sex', 'female') }}
				{{Form::label('female','Female')}}
			</div>

			<div class="form-group">
				{{Form::label('area','Area:')}}
				{{ Form::select('area', array_merge(array('default' => 'Please Select'),$area_names), 'default') }}
			</div>

			<div class="form-group">
				{{Form::label('address','Address:')}}
				{{Form::text('address',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('e-mail','E-mail:')}}
				{{Form::email('e-mail',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('experience','Experience:')}}
				{{Form::text('experience',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('degree','Degrees:')}}
				{{Form::checkbox('diploma', 1)}}
				{{Form::label('diploma','Diploma')}}
				{{Form::checkbox('ug', 1)}}
				{{Form::label('ug','Under Graduate')}}
				{{Form::checkbox('pg', 1)}}
				{{Form::label('pg','Post Graduate')}} <br/>
				{{Form::label('others','Others:')}}
				{{Form::text('others',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('passed_uni','Passed university:')}}
				{{Form::text('passed_uni',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('fee','Fee:')}}
				{{Form::text('fee',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('details','Details:')}}
				{{Form::textarea('details',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
			    {{Form::label('image','Image:')}}
			    {{Form::file('image')}}
			</div>

			<input type="hidden" id="la" name="la">
			<input type="hidden" id="lo" name="lo">
			<div class="form-group" id="map" style="width:500px; height:500px"></div>



			<div class="form-group">
				{{Form::label('have_chamber','Do you have a chamber?')}}
				{{Form::checkbox('have_chamber', 1)}}
			</div>


			<div class="form-group">
				{{Form::label('chamber_address','Chamber Address:')}}
				{{Form::text('chamber_address',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('chamber_e-mail','Chamber E-mail:')}}
				{{Form::email('chamber_e-mail',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('chamber_phone','Chamber Phone:')}}
				{{Form::text('chamber_phone',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('visit_time_start','Visit Time Start:')}}
				{{Form::select('visit_time_start_hr', array("00","01","02","03","04","05","06","07","08","09","10","11","12"));}}
				{{Form::select('visit_time_start_mn', array("00","15","30","45"));}}
				{{Form::select('visit_time_start_ap', array("AM","PM"));}}
			</div>
			<div class="form-group">
				{{Form::label('visit_time_end','Visit Time End:')}}
				{{Form::select('visit_time_end_hr', array("00","01","02","03","04","05","06","07","08","09","10","11","12"));}}
				{{Form::select('visit_time_end_mn', array("00","15","30","45"));}}
				{{Form::select('visit_time_end_ap', array("AM","PM"));}}
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

