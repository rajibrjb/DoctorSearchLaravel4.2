@extends('layout')
@section('content')
<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<div class="panel panel-default">
				<h1>Contact Us.</h1>
				<p>Please contact us by sending a message using the form below:</p>

				{{ HTML::ul($errors->all(), array('class'=>'errors'))}}
				
				{{ Form::open(array('url' => 'contact')) }}
				{{ Form::label('Subject') }}
				{{ Form::text('subject','Enter your subject') }}
				<br />
				{{ Form::label('Message') }}
				{{ Form::textarea('message','Enter your message') }}
				<br />
				{{ Form::submit('Submit') }}
				{{ Form::close() }}
			</div>
		</div>
	</section>
</div>
@stop