@extends('layout')

@section('page_title')
CREATE USER
@stop

@section('content')

@if(Session::has('message'))
<div class="alert alert-info text-center">{{ Session::get('message') }}</div>
@endif

{!! HTML::ul($errors->all(), ['class' => 'alert alert-danger text-center']) !!}

<div class="panel panel-default">
	<div class="panel-heading text-center">
	CREATE USER
	</div>
	<div class="panel-body">
	{!! Form::open(['url' => 'user']) !!}
	<div class="form-group form-group-sm">
		{!! Form::text('name', Input::old('name'), ['class' => 'form-control', 'placeholder' => 'NAME']) !!}
	</div>
	<div class="form-group form-group-sm">
		{!! Form::text('surname', Input::old('surname'), ['class' => 'form-control', 'placeholder' => 'SURNAME']) !!}
	</div>
	<div class="form-group form-group-sm">
		{!! Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'EMAIL']) !!}
	</div>
	<div class="form-group text-center">
		{!! Form::submit('CREATE', ['class' => 'btn btn-default']) !!}
	</div>
	{!! Form::close() !!}
	</div>
	<div class="panel-footer text-center">
	</div>
</div>

@stop
