@extends('layout')
@section('content')
<section class="header section-padding">
	<div class="background">&nbsp;</div>
	<div class="container">
		<div class="header-text">
			<h1>Doctor Login</h1>
			<p>Doctors will login here</p>
		</div>
	</div>
</section>
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<h1>Login Form</h1>
			
			{{Form::open(['url'=>'doctorLogin','class'=> 'dark-matter'])}}
			@if(Session::has('error'))
				<p>{{Session::get('error')}}</p>
			@endif
			<div class="form-group">

				{{Form::label('e-mail','E-mail:')}}
				{{HTML::ul($errors->get('e-mail'), array('class'=>'errors'))}}
				{{Form::text('e-mail',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('password','Password:')}}
				{{HTML::ul($errors->get('password'), array('class'=>'errors'))}}
				{{Form::password('password',null,['class'=>'form-control'])}}
			</div>
			
			<div class="form-group">
				{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
			</div>
			{{Form::close()}}
		</div>
	</section>
</div>
@stop

