@extends('layout')
@section('content')
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1><span class="grey">Our</span> To-Do List</h1>
				</div>
				@if(empty($doctors_with_chamber_and_category))
					<p>Currently there are no doctors!</p>
				@else
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Picture</th>
								<th>Full Name</th>
								<th>Age</th>
								<th>Sex</th>
								<th>Category</th>
								<th>lat</th>
								<th>lat</th>
							</tr>
						</thead>
						<tbody>
							@foreach($doctors_with_chamber_and_category as $doctor)
								<tr>
									<td>{{$doctor->id}}</td>
									<td>{{ HTML::image('upload/doctors/'.$doctor->doctor_pic, 'a picture', array( 'width' => 50, 'height' => 50)) }}</td>
									<td>{{$doctor->doctor_full_name}}</td>
									<td>{{$doctor->doctor_age}}</td>
									<td>{{$doctor->doctor_sex}}</td>
									<td>{{$doctor->category_name}}</td>
									<td>{{$doctor->chamber_latitude}}</td>
									<td>{{$doctor->chamber_longitude}}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@endif
			</div>
		</div>
	</section>
</div>
@stop


