@extends('layout')
@section('content')
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1><span class="grey">See details about</span> Doctors</h1>
				</div>

				<table class="table">
					<thead>
						<tr>
							<th>##</th>
							<th>Picture</th>
							<th>User Name</th>
							<th>Password</th>
							<th>Full Name</th>
							<th>Age</th>
							<th>Sex</th>
							<th>Address</th>
							<th>E-mail</th>
							<th>Details</th>
							<th>Category</th>
							<th>Lat</th>
							<th>Long</th>
						</tr>
					</thead>
					<tbody>
						@foreach($doctors as $doctor)
						<tr>
							<td>{{$doctor->id}}</td>
							<td>{{ HTML::image('upload/'.$doctor->doctor_pic, 'a picture', array( 'width' => 50, 'height' => 50)) }}</td>
							<td>{{$doctor->doctor_user_name}}</td>
							<td>{{$doctor->doctor_password}}</td>
							<td>{{$doctor->doctor_full_name}}</td>
							<td>{{$doctor->doctor_age}}</td>
							<td>{{$doctor->doctor_sex}}</td>
							<td>{{$doctor->doctor_address}}</td>
							<td>{{$doctor->doctor_email}}</td>
							<td>{{$doctor->doctor_details}}</td>
							@foreach($categories as $category)
								@if($category->id == $doctor->category_id)
									<td>{{$category->category_name}}</td>
								@endif
							@endforeach
							@foreach($chambers as $chamber)
								@if($chamber->doctor_id == $doctor->id)
									<td>{{$chamber->chamber_latitude}}</td>
									<td>{{$chamber->chamber_longitude}}</td>
								@endif
							@endforeach	
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="panel panel-default">
				@if(empty($doctor_reviews))
					<p>You will be the first person to review this doctor!</p>
				@else
				<table class="table">
					
					<thead>
						<th>User</th>
						<th>Doctor</th>
						<th>Rating</th>
						<th>Review</th>
					</thead>
					<tbody>
						@foreach($doctor_reviews as $reviews)
						<tr>
							<td>{{$reviews->user_id}}</td>
							<td>{{$reviews->doctor_id}}</td>
							<td>{{$reviews->doctor_rating}}</td>
							<td>{{$reviews->doctor_review}}</td>							
						</tr>
						@endforeach
					</tbody>
				</table>
				@endif
			</div>
			<div class="panel panel-default">
						<div class="jumbotron text-center">
							<h1>Review Form</h1>
							{{Form::open(['url'=>'showDetails/'.$doctor->id,'class'=> 'form'])}}
							@foreach($doctors as $doctor)
								{{ Form::hidden('doctor_id', $doctor->id)}}
							@endforeach
							<div class="form-group">
								{{Form::label('rating','Rating:')}}
								{{Form::text('rating',null,['class'=>'form-control'])}}
							</div>
							<div class="form-group">
								{{Form::label('review','Review:')}}
								{{Form::text('review',null,['class'=>'form-control'])}}
							</div>
							<div class="form-group">
								{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
							</div>
							{{Form::close()}}
						</div>
			</div>
		</div>
	</section>
</div>
@stop


