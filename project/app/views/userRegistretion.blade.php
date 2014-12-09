@extends('layout')
@section('content')
<section class="header section-padding">
	<div class="background">&nbsp;</div>
	<div class="container">
		<div class="header-text">
			<h1>User Registretion</h1>
			<p>User will register here</p>
		</div>
	</div>
</section>
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<h1>Registretion Form</h1>
			{{Form::open(['url'=>'userRegistretion','class'=> 'form','files' => true])}}

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
				{{Form::text('sex',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('address','Address:')}}
				{{Form::text('address',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('phone','Phone:')}}
				{{Form::text('phone',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('e-mail','E-mail:')}}
				{{Form::email('e-mail',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('details','Details:')}}
				{{Form::textarea('details',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
			    {{Form::label('image','Image:')}}
			    {{Form::file('image')}}
			</div>
			<div class="form-group">
				{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
			</div>
			{{Form::close()}}
		</div>
	</section>
</div>


@stop