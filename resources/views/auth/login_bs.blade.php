@extends('layouts.admin')
@section('content')
	<div class="container">
		<h1>Please Login</h1>
		@if(isset($status))<p>{{HTML::ol($status->all(':message'), array('class'=>'list-unstyled alert bg-success'))}}</p>@endif
		@if(isset($errors))<p>{{HTML::ol($errors->all(':message'), array('class'=>'list-unstyled alert bg-danger'))}}</p>@endif
		{{ Form::open(array('url' => 'login')) }}
			<div class="form-group">
			{{Form::label('email', 'E-Mail Address')}}<br />
			{{Form::text('email', Input::old('email'), array('class' => 'form-control') )}}
			</div>
			<div class="form-group">
			{{Form::label('password', 'Password')}}<br />
			{{Form::password('password', array('class' => 'form-control'))}}
			</div>
			<label class="checkbox"><input type="checkbox" name="remember_me" value="1"> Remember me</label>
			{{Form::submit('Login', array('class'=>'btn btn-primary'))}}
			<a class="btn btn-default" href="{{URL::to('password/remind')}}" >Forgot your Password?</a>
		{{ Form::close() }}
	</div>
@stop