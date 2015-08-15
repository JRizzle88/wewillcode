<div class="navbar-fixed">
	<nav>
		<div class="nav-wrapper blue darken-2">
			<div class="container">
				<a href="{{ url('/') }}" class="brand-logo">Studios</a>
				<ul class="right hide-on-med-and-down">
					@if(Auth::check())
						<li><a href="{{ url('/') }}" class="dropdown-button" data-beloworigin="true" data-activates="account-dropdown"><i class="fa fa-gear left"></i>Account</a></li>
					@else
						<li><a href="{{ url('/auth/register') }}"><i class="fa fa-plus left"></i>Register</a></li>
						<li><a href="{{ url('/auth/login') }}"><i class="fa fa-sign-in left"></i>Login</a></li>
					@endif
				</ul>
				<ul id="slide-out-main" class="side-nav">
					<li><a href="{{ url('account') }}">Profile</a></li>
					<li><a href="{{ url('account/dashboard') }}">Dashboard</a></li>
					<li><a href="#!">Projects</a></li>
					<li><a href="#!">Settings</a></li>
					<li><a href="{{ url('auth/logout') }}">Logout</a></li>
				</ul>
				<a href="#" data-activates="slide-out-main" class="button-collapse header"><i class="material-icons">reorder</i></a>
			</div>
		</div>
	</nav>
	<!-- Account Dropdown -->
	<ul id="account-dropdown" class="dropdown-content">
		<li><a href="{{ url('account') }}">Profile</a></li>
		<li><a href="{{ url('account/dashboard') }}">Dashboard</a></li>
		<li><a href="#!">Projects</a></li>
		<li><a href="#!">Settings</a></li>
		<li><a href="{{ url('auth/logout') }}" class="red white-text lighten-1">Logout</a></li>
	</ul>
</div>