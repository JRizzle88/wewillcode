@extends('layout.default')

@section('content')
<div class="row login-form">
	<div class="col s4 offset-s4">
		<form method="POST" action="../password/reset">
		{!! csrf_field() !!}
		<input type="hidden" name="token" value="{{ $token }}">
		<div class="row">
			<div class="input-field col s12">
				<input id="email" type="email" class="validate">
				<label for="email" name="email" value="{{ old('email') }}">Email</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input id="password" type="password" class="validate">
          		<label for="password" name="password">Password</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input id="password_confirmation" type="password" class="validate">
          		<label for="password_confirmation" name="password_confirmation">Password Confirmation</label>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<button type="submit" class="btn waves-effect waves-light wwc-green-bg">Reset Password</button>
			</div>
		</div>
		</form>
	</div>
</div>
@endsection