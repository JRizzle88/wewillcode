@extends('layout.default')

@section('content')
<div class="row wwc-auth-form wwc-login-form">
	<div class="col s4 offset-s4">
		<form method="POST" action="../auth/login">
		{!! csrf_field() !!}
		<div class="row">
			<div class="input-field col s12">
				<input id="email" name="email" type="email" class="validate" placeholder="Email">
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input id="password" name="password" type="password" class="validate" placeholder="Password">
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<p>
					<input type="checkbox" name="remember" id="remember" />
					<label for="remember">Remember Me</label>
				</p>
				<button type="submit" class="btn wwc-green-bg">Login</button>
				<p>
					<a href="{{ url('/password/email') }}">Forgot Your Password?</a><br>
					<a href="{{ url('/auth/register') }}">Don't have an Account?</a>
				</p>
			</div>
		</div>
		</form>
	</div>
</div>
@endsection