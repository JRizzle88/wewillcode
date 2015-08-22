@extends('layout.default')

@section('content')
<div class="row login-form">
	<div class="col s4 offset-s4">
		<form method="POST" action="../auth/login">
		{!! csrf_field() !!}
		<div class="row">
			<div class="input-field col s12">
				<input id="email" name="email" type="email" class="validate">
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
			<div class="col s12">
				<p>
					<input type="checkbox" name="remember" id="remember" />
					<label for="remember">Remember Me</label>
				</p>
				<button type="submit" class="btn waves-effect waves-light wwc-green-bg">Login</button>
				<p>
					<a class="left" href="{{ url('/password/email') }}">Forgot Your Password?</a>
					<a class="right" href="{{ url('/auth/register') }}">Don't have an Account?</a>
				</p>
			</div>
		</div>
		</form>
	</div>
</div>
@endsection