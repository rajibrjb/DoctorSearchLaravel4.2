@extends('layout')
@section('content')
<section class="header section-padding">
	<div class="background">&nbsp;</div>
	<div class="container">
		<div class="header-text">
			<h1>Tips Input</h1>
			<p>New tips will be register here</p>
		</div>
	</div>
</section>
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<h1>Tips input Form</h1>
			{{Form::open(['url'=>'tips','class'=> 'form'])}}
			<div class="form-group">
				{{Form::label('author','Author:')}}
				{{Form::text('author',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('titel','Titel:')}}
				{{Form::text('titel',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('body','Body:')}}
				{{Form::text('body',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
			</div>
			{{Form::close()}}
		</div>
	</section>
</div>

@stop