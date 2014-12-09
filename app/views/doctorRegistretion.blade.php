@extends('layout')
@section('content')
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center col-md-9 shadow">
			
				<div class="reg">
					<h1 class="white">Doctors Registration</h1>
				</div>



			{{ HTML::ul($errors->all(), array('class'=>'errors'))}}
			{{Form::open(['url'=>'doctorRegistretion','class'=> 'dark-matter','files' => true])}}
		
			<div class="form-group row">
				<div class="col-md-1">
				{{Form::label('name','Name:')}}
					</div>
				<div class="col-md-8">
				{{Form::text('name',null,['class'=>'form-control'])}}
			</div>
			</div>
				<div class="form-group row">
				<div class="col-md-1">

				{{Form::label('age','Age:')}}
					</div>
				<div class="col-md-8">
				{{Form::text('age',null,['class'=>'form-control'])}}
				</div>
			</div>
		
			<div class="  form-group row ">

				<div class="col-md-1">
				{{Form::label('sex','Sex:')}}
				</div>
				<div class="col-md-1">
				{{Form::label('male','Male')}}
				</div>
				<div class="col-md-1">
				{{Form::radio('sex', 'male') }}
				</div>
				
				<div class="col-md-1">
				{{Form::label('female','Female')}}
				</div>
				<div class="col-md-2">
				{{Form::radio('sex', 'female') }}
					</div>
				
				
			</div>
			
				<div class="form-group row">
				<div class="col-md-1">

				{{Form::label('area','Area:')}}
					</div>
				<div class="col-md-8">
				{{ Form::select('area', array_merge(array('default' => 'Please Select'),$area_names), 'default') }}
			</div>
			</div>

			
				<div class="form-group row">
				<div class="col-md-1">
				{{Form::label('address','Address:')}}
					</div>
				<div class="col-md-8">
				{{Form::text('address',null,['class'=>'form-control'])}}
			</div>
			</div>
			<div class="row s"> <h1 >Add Your Porfessional Information</h1>  </div>

				<div class="form-group row">
				<div class="col-md-1">
				{{Form::label('category','Category:')}}
				</div>
				<div class="col-md-5">
				{{ Form::select('category', array_merge(array('default' => 'Please Select'),$categories_name), 'default') }}
				</div>
			
				<div class="col-md-1">
				{{Form::label('hospital','Hospital:')}}
					</div>
				<div class="col-md-5">
				{{ Form::select('hospital', array_merge(array('default' => 'Please Select'),$hospitals_name), 'default') }}
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-1">
				{{Form::label('e-mail','Email:')}}
					</div>
				<div class="col-md-5">
				{{Form::email('e-mail',null,['class'=>'form-control'])}}
				</div>
			
				<div class="col-md-1">
				{{Form::label('e-mail_confirmation','Email Confirmation:')}}
					</div>
				<div class="col-md-5">
				{{Form::email('e-mail_confirmation',null,['class'=>'form-control'])}}
				</div>
			</div>
				<div class="form-group row">
			<div class="col-md-1">
				{{Form::label('password','Password:')}}
		</div>
				<div class="col-md-5">
				{{Form::password('password',null,['class'=>'form-control'])}}
				
			</div>
			
				<div class="col-md-1">
				{{Form::label('password_confirmation','Password Confirmation:')}}
				</div>
				<div class="col-md-5">
				{{Form::password('password_confirmation',null,['class'=>'form-control'])}}
			</div>
			</div>
			<div class="form-group row">
				<div class="col-md-1">
				{{Form::label('experience','Experience:')}}
					</div>
					
				<div class="col-md-8">
				{{Form::text('experience',null,['class'=>'form-control'])}}
			</div>
			</div>
			<div class="form-group row">
				<div class="col-md-1">
				{{Form::label('degree','Degrees:')}}
				</div>
				
				<div class="col-md-1">
				{{Form::label('diploma','Diploma')}}
				</div>
				<div class="col-md-1">
				{{Form::checkbox('diploma', 1)}}
				</div>
				
				<div class="col-md-1">
				{{Form::label('ug','Under Graduate')}}
				</div>
				<div class="col-md-1">
				{{Form::checkbox('ug', 1)}}
				</div>
				
				<div class="col-md-1">
				{{Form::label('pg','Post Graduate')}}
				</div>
				<div class="col-md-1">
				{{Form::checkbox('pg', 1)}}
				</div>
				<div class="col-md-1">
				
				{{Form::label('others','Others:')}}
				</div>
				<div class="col-md-4">
				{{Form::text('others',null,['class'=>'form-control'])}}
			</div>
			</div>
			<div class="form-group row">
				<div class="col-md-1">
				{{Form::label('passed_uni','Passed university:')}}
					</div>
					
				<div class="col-md-11">
				{{Form::text('passed_uni',null,['class'=>'form-control'])}}
			</div>
			</div>
			<div class="form-group row">
				<div class="col-md-1">
				{{Form::label('fee','Fee:')}}
				</div>
					
				<div class="col-md-11">
				{{Form::text('fee',null,['class'=>'form-control'])}}
			</div>
			</div>
			<div class="form-group row">
				<div class="col-md-1">
				{{Form::label('details','Details:')}}
					</div>
					
				<div class="col-md-11">
				{{Form::textarea('details',null,['class'=>'form-control'])}}
			</div>
			</div>
			<div class="form-group row">
				<div class="col-md-1">
			    {{Form::label('image','Image:')}}
			    	</div>
					
				<div class="col-md-11">
			    {{Form::file('image')}}
			</div>
			</div>

			<input type="hidden" id="la" name="la">
			<input type="hidden" id="lo" name="lo">
			<div class="map col-md-12">
			<div id="map" style="height:450px" class="col-md-7 ">

			</div>

			</div>

			<div class="form-group row">
				<div class="col-md-3">
				{{Form::label('have_chamber','Do you have a chamber?')}}
					</div>
					
				<div class="col-md-2">
				{{Form::checkbox('have_chamber', 1)}}
			</div>
			</div>

			<div class="form-group row">
				<div class="col-md-1">
				{{Form::label('chamber_address','Chamber Address:')}}
				</div>
					
				<div class="col-md-8">
				{{Form::text('chamber_address',null,['class'=>'form-control'])}}
			</div>
			</div>
			<div class="form-group row">
				<div class="col-md-1">
				{{Form::label('chamber_e-mail','Chamber E-mail:')}}
				</div>
					
				<div class="col-md-8">
				{{Form::email('chamber_e-mail',null,['class'=>'form-control'])}}
			</div>
			</div>
			<div class="form-group row">
				<div class="col-md-1">
				{{Form::label('chamber_phone','Chamber Phone:')}}
				</div>
					
				<div class="col-md-8">
				{{Form::text('chamber_phone',null,['class'=>'form-control'])}}
			</div>
			</div>
		<div class="form-group row">
				<div class="col-md-2">
				{{Form::label('visit_time_start','Visit Time Start: ')}}
				</div>
				<div class="col-md-1">
				{{Form::label('visit_time_start','Hour:')}}
				</div>
				<div class="col-md-1">
				{{Form::select('visit_time_start_hr', array("00","01","02","03","04","05","06","07","08","09","10","11","12"));}}
				</div>
				<div class="col-md-1">
				{{Form::label('visit_time_start','Minute:')}}
				</div>
				<div class="col-md-1">
				{{Form::select('visit_time_start_mn', array("00","15","30","45"));}}
				</div>
				<div class="col-md-1">
				{{Form::select('visit_time_start_ap', array("AM","PM"));}}
			</div>
			</div>
			<div class="form-group row">
				<div class="col-md-2">
				{{Form::label('visit_time_end','Visit Time End : ')}}
				</div>
				<div class="col-md-1">
				{{Form::label('visit_time_end',' Hour:')}}
				</div>
				
				<div class="col-md-1">
				{{Form::select('visit_time_end_hr', array("00","01","02","03","04","05","06","07","08","09","10","11","12"));}}
				</div>
				<div class="col-md-1">
				{{Form::label('visit_time_end','Minute:')}}
				</div>
				
				<div class="col-md-1">
				{{Form::select('visit_time_end_mn', array("00","15","30","45"));}}
				</div>
				
				<div class="col-md-1">
				{{Form::select('visit_time_end_ap', array("AM","PM"));}}
			</div>
			</div>

			<div class="form-group">
				{{Form::submit('Submit',['class'=>'btn'])}}
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

