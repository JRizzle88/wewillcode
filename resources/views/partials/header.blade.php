<header class="wwc-header" role="banner">
	<div class="wwc-logo"><a href="{{ url('/') }}"><img src="{{ asset('img/wwc-logo.svg') }}" alt="Logo"></a></div>
	<nav class="main-nav">
		<ul>
			@if(Auth::check())
				<li><a class="wwc-account" href="{{ url('/ideas') }}">Ideas</a></li>
				<li><a class="wwc-account" href="{{ url('/account') }}">Account</a></li>
				@if(Auth::user()->isSuperAdmin())
					<li><a class="wwc-superadmin" href="{{ url('superadmin') }}">Super Admin</a></li>
				@endif
				<li><a class="wwc-logout" href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i></a></li>
			@else
				<!-- inser more links here -->
				<li><a class="wwc-signin" href="#0">Sign in</a></li>
				<li><a class="wwc-signup" href="#0">Sign up</a></li>
			@endif
		</ul>
	</nav>

	<a class="wwc-primary-nav-trigger" href="#0">
		<span class="wwc-menu-text">Menu</span><span class="wwc-menu-icon"></span>
	</a> <!-- wwc-primary-nav-trigger -->
</header>
@include('partials._login_signup')
<nav>
	<ul class="wwc-primary-nav">
		<li class="wwc-label">Get Started</li>

		<li><a href="#0">Get Funded</a></li>
		<li><a href="#0">Invest</a></li>
		<li><a href="#0">Develop</a></li>

		<li class="wwc-label">Our Services</li>

		<li><a href="#0">App Development</a></li>
		<li><a href="#0">Website Design</a></li>
		<li><a href="#0">Other Service</a></li>

		<li class="wwc-label">Stay Connected</li>

		<li class="wwc-social wwc-facebook"><a href="#0">Facebook</a></li>
		<li class="wwc-social wwc-instagram"><a href="#0">Instagram</a></li>
		<li class="wwc-social wwc-dribbble"><a href="#0">Dribbble</a></li>
		<li class="wwc-social wwc-twitter"><a href="#0">Twitter</a></li>
	</ul>
</nav>
