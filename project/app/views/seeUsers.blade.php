@extends('layout')
@section('content')
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1><span class="grey">Our</span> To-Do List</h1>
				</div>
				@if($users->isEmpty())
					<p>Currently there are no users!</p>
				@else
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Picture</th>
								<th>User Name</th>
								<th>Password</th>
								<th>Full Name</th>
								<th>Age</th>
								<th>Sex</th>
								<th>Address</th>
								<th>Phone</th>
								<th>E-mail</th>
								<th>Details</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
								<tr>
									<td>{{$user->id}}</td>
									<td>{{ HTML::image('upload/'.$user->user_pic, 'a picture') }}</td>
									<td>{{$user->user_password}}</td>
									<td>{{$user->user_full_name}}</td>
									<td>{{$user->user_age}}</td>
									<td>{{$user->user_sex}}</td>
									<td>{{$user->user_address}}</td>
									<td>{{$user->user_phone}}</td>
									<td>{{$user->user_email}}</td>
									<td>{{$user->user_details}}</td>
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


