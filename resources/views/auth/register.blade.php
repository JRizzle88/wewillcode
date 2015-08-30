@extends('layout.default')

@section('content')
<div class="wwc-auth-form wwc-login-form">
	<div class="">
		<form method="POST" action="../auth/register">
		{!! csrf_field() !!}

			<div class="input-field">
				<input id="name" name="name" type="text" class="validate" value="{{ old('name') }}" placeholder="Name">
			</div>

			<div class="input-field">
				<input id="email" name="email" type="email" class="validate" value="{{ old('email') }}" placeholder="Email">
			</div>

			<div class="input-field">
				<input id="password" name="password" type="password" class="validate" placeholder="Password">
			</div>

			<div class="input-field">
				<input id="password_confirmation" name="password_confirmation" type="password" class="validate" placeholder="Password Confirmation">
			</div>

			<button type="submit" class="btn waves-effect waves-light wwc-green-bg">Register</button>


		</form>
	</div>
</div>
@endsection