@extends('layouts.admin')
@section('content')
	<div class="welcome">
		<h1>Password Reset</h1>
		@if($status = Session::get('status'))<p class="list-unstyled alert bg-success">{{$status}}</p>@endif
		@if($error = Session::get('error'))<p class="list-unstyled alert bg-danger">{{$error}}</p>@endif

		<form action="{{ action('RemindersController@postReset') }}" method="POST">
			<input type="hidden" name="token" value="{{ $token }}">
				<div class="form-group">
					<label for="email" >Email</label><br />
					<input class="form-control" id="email" type="email" name="email" value="{{Input::old('email')}}">
				</div>
				<div class="form-group">
					<label>Password</label><br />
					<input class="form-control" id="password" type="password" name="password">
				</div>
				<div class="form-group">
					<label>Password Confirmation</label><br />
					<input class="form-control" id="password_confirmation" type="password" name="password_confirmation"></p>
				</div>
			<input class="btn btn-primary" type="submit" value="Reset Password">
			<a class="btn btn-default" href="{{URL::to('/login')}}">Home</a>
		</form>
	</div>
@stop