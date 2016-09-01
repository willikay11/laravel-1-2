@extends('layouts.master')

@section('content')

{!! Form::open(array('route' => 'handleLogin')) !!}
<div class="panel panel-info">
	<div class="panel-heading text-center">Login</div>
	<div class="panel-body">
		<div class="form-group">
			{!! Form::label('email') !!}
			{!! Form::text('email', null, array('class' => 'form-control text-center')) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password') !!}
			{!! Form::password('password', array('class' => 'form-control text-center')) !!}
		</div>
		{!! Form::token() !!}
		{!! Form::submit('Login', array('class' => 'btn btn-success btn-block')) !!}
		{!! Form::close() !!}
	</div>
</div>

@endsection