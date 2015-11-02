@extends('layouts.admin')
@section('content')
	<div class="container">
		<h1>Password Reminder</h1>
		@if($status = Session::get('status'))<p class="list-unstyled alert bg-success">{{$status}}</p>@endif
		@if($error = Session::get('error'))<p class="list-unstyled alert bg-danger">{{$error}}</p>@endif
		{{ Form::open(array('url','reset')) }}
			<div class="form-group">
			{{Form::label('email', 'E-Mail Address')}}<br />
			{{Form::text('email',Input::old('email'),array('class'=>'form-control'))}}
			</div>
			{{Form::submit('Send Reminder',array('class'=>'btn btn-primary'))}}
			<a class="btn btn-default" href="{{URL::to('/login')}}">Back</a>
		{{ Form::close() }}
	</div>
@stop