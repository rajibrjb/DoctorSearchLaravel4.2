@extends('layout')
@section('content')
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1><span class="grey">Search</span> Doctors</h1>
				</div>




				<div class="container">
					<section class="section-padding">
						<div class="jumbotron text-center">
							<h1>Search Doctor</h1>
							{{Form::open(['url'=>'searchDoctors','class'=> 'form'])}}
							<div class="form-group">
								{{Form::label('category','Category:')}}
								{{ Form::select('category', array_merge(array('default' => 'Please Select'),$categories_name), 'default') }}
							</div>
							<div class="form-group">
								{{Form::label('name','Name:')}}
								{{Form::text('name',null,['class'=>'form-control'])}}
							</div>
							<div class="form-group">
								{{Form::label('sex','Sex:')}}
								{{Form::checkbox('male', 1)}}
								{{Form::label('male','Male')}}
								{{Form::checkbox('female', 1)}}
								{{Form::label('female','Female')}}
							</div>
							<div class="form-group">
								{{Form::label('address','Address:')}}
								{{Form::text('address',null,['class'=>'form-control'])}}
							</div>
							<div class="form-group">
								{{Form::label('experience','Minimum Experience:')}}
								{{Form::text('experience',null,['class'=>'form-control'])}}
							</div>
							<div class="form-group">
								{{Form::label('fee','Maximum Fee:')}}
								{{Form::text('fee',null,['class'=>'form-control'])}}
							</div>
							<div class="form-group">
								{{Form::label('rating','Minimum Rating:')}}
								{{ Form::select('rating', $rating) }}
							</div>

							<div class="form-group">
								{{Form::label('area','Area:')}}
								{{ Form::select('area', array_merge(array('default' => 'Please Select'),$area_names), 'default') }}
							</div>

							<div class="form-group">
								{{Form::submit('Search',['class'=>'btn btn-primary'])}}
							</div>
							{{Form::close()}}
						</div>
					</section>
				</div>





				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Picture</th>
							<th>Full Name</th>
							<th>Rating</th>
							<th>Category</th>
							<th>Experience</th>
							<th>Fee</th>
							<th>Lat</th>
							<th>Long</th>
						</tr>
					</thead>
					<tbody>
						@foreach($doctors as $doctor)
							<tr>
								<td>{{$doctor->id}}</td>
								<td>
									<a href="{{ action('myController@showDetails', $doctor->id) }}">{{ HTML::image('upload/'.$doctor->doctor_pic, 'a picture', array( 'width' => 50, 'height' => 50)) }}</a>
								</td>
								<td>
									<a href="{{ action('myController@showDetails', $doctor->id) }}">{{$doctor->doctor_full_name}}</a>
								</td>
								<td>{{$doctor->doctor_avg_rating}}</td>
								@foreach($categories as $category)
									@if($category->id == $doctor->category_id)
										<td>{{$category->category_name}}</td>
									@endif
								@endforeach
								<td>{{$doctor->doctor_experience}}</td>
								<td>{{$doctor->doctor_fee}}</td>
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
		</div>
	</section>
</div>
@stop
