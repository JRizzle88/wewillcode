@extends('layout.default')

@section('content')
<div class="row wwc-auth-form wwc-login-form">
	<div class="col s4 offset-s4">
		<form method="POST" action="../password/email">
		{!! csrf_field() !!}
		<div class="row">
			<div class="input-field col s12">
				<input id="email" type="email" class="validate" placeholder="What is your email?">
			</div>
		</div>
		<div class="row">
			<div class="col s12 center-align">
				<button type="submit" class="btn wwc-green-bg">Send Password Reset Link</button>
			</div>
		</div>
		</form>
	</div>
</div>
@endsection