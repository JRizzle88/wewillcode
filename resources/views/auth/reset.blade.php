@extends('layout.default')

@section('content')
<div class="wwc-auth-form wwc-login-form">
	<div class="col s4 offset-s4">
		<form method="POST" action="../password/reset">
		{!! csrf_field() !!}
		<input type="hidden" name="token" value="{{ $token }}">
		<div class="row">
			<div class="input-field col s12">
				<input id="email" type="email" class="validate" value="{{ old('email') }}" placeholder="Email">
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input id="password" type="password" class="validate" placeholder="New Password">
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input id="password_confirmation" type="password" class="validate" placeholder="New Password Confirmation">
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<button type="submit" class="btn wwc-green-bg">Reset Password</button>
			</div>
		</div>
		</form>
	</div>
</div>
@endsection