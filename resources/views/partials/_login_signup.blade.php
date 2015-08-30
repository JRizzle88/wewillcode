<div class="wwc-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="wwc-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="wwc-switcher">
				<li><a href="#0">Sign In</a></li>
				<li><a href="#0">Sign Up</a></li>
			</ul>

			<div id="wwc-login"> <!-- log in form -->
				<form id="wwc-login-form" class="wwc-form" method="POST" action="auth/login">
					{!! csrf_field() !!}
					<p class="fieldset">
						<label class="image-replace wwc-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" placeholder="E-mail" type="email" name="email" />
						<!--<span class="wwc-error-message">Error message here!</span>-->
					</p>

					<p class="fieldset">
						<label class="image-replace wwc-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" placeholder="Password" type="password" name="password" />
						<a href="#0" class="hide-password">Hide</a>
						<!--<span class="wwc-error-message">Error message here!</span>-->
					</p>

					<p class="fieldset">
						<input id="remember-me" checked="" type="checkbox" name="remember">
						<label for="remember-me">Remember me</label>
					</p>
					
					<p class="fieldset">
						<input class="full-width" value="Login" type="submit" />
					</p>
					
					<!--<p class="fieldset">
						<img class="ajax-loader-blue" src="{{ asset('/img/evo-blue-box-ajax-loader.gif') }}" />
					</p>-->
				</form>
				
				<p class="wwc-form-bottom-message"><a href="{{ url('/password/email') }}">Forgot your password?</a></p>
				<!-- <a href="#0" class="wwc-close-form">Close</a> -->
			</div> <!-- wwc-login -->

			<div id="wwc-signup"> <!-- sign up form -->
				<form id="wwc-signup-form" class="wwc-form" method="POST" action="auth/register">
					{!! csrf_field() !!}
					<p class="fieldset">
						<label class="image-replace wwc-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" placeholder="Username" type="text" name="display_name">
						<span class="wwc-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace wwc-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" placeholder="E-mail" type="email" name="email">
						<span class="wwc-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace wwc-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" placeholder="Password" type="password" name="password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="wwc-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace wwc-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password-confirmation" placeholder="Confirm Password" type="password" name="password_confirmation">
						<a href="#0" class="hide-password">Hide</a>
						<span class="wwc-error-message">Error message here!</span>
					</p>
					
					<p class="fieldset">
						<input id="accept-terms" type="checkbox">
						<label for="accept-terms">I agree to the <a class="wwc-terms-link" href="#0">Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" value="Create account" type="submit">
					</p>
					
					<!--<p class="fieldset">
						<img class="ajax-loader-blue" src="{{ asset('/img/evo-blue-box-ajax-loader.gif') }}" />
					</p>-->
				</form>

				<!-- <a href="#0" class="wwc-close-form">Close</a> -->
			</div> <!-- wwc-signup -->

			<div id="wwc-reset-password"> <!-- reset password form -->
				<p class="wwc-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="wwc-form">
					<p class="fieldset">
						<label class="image-replace wwc-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" placeholder="E-mail" type="email">
						<span class="wwc-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" value="Reset password" type="submit">
					</p>
				</form>

				<p class="wwc-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- wwc-reset-password -->
			<a href="#0" class="wwc-close-form">Close</a>
		</div> <!-- wwc-user-modal-container -->
	</div>