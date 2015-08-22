@extends('layout.default')

@section('content')
<div class="row login-form">
	<div class="col s4 offset-s4">
		<form method="POST" action="../auth/register">
		{!! csrf_field() !!}
		<div class="row">
			<div class="input-field col s12">
				<input id="name" name="name" type="text" class="validate" value="{{ old('name') }}">
				<label for="name">Name</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input id="email" name="email" type="email" class="validate" value="{{ old('email') }}">
				<label for="email">Email</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input id="password" name="password" type="password" class="validate">
          		<label for="password">Password</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input id="password_confirmation" name="password_confirmation" type="password" class="validate">
          		<label for="password_confirmation">Password Confirmation</label>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<button type="submit" class="btn waves-effect waves-light wwc-green-bg">Register</button>
			</div>
		</div>
		</form>
	</div>
</div>
@endsection