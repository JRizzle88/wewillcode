@extends('layout.home')

@section('content')

<section class="wwc-intro">
		<div class="wwc-table-cell">
			<img src="img/wwc-intro-logo.svg">
			<h1>Your Idea begins today</h1>
			<h2>Sign Up. Submit. Get Funded.</h2>
			<nav class="intro-nav">
				<ul>
					<li><a class="wwc-learn-more" href="#0">Learn More</a></li>
					<li><a class="wwc-get-started" href="#0">Get Started</a></li>
				</ul>
			</nav>
		</div>
	</section>
<main class="wwc-main-content trans">
		<div class="wwc-container trans">
			
			<section>
				<div class="tabs tabs-style-flip">
					<nav class="wwc-tabbed-nav">
						<ul>
							<li class="tab-current"><a href="#section-flip-5" class="icon icon-coffee"><span>Sign up</span></a></li>
							<li><a href="#section-flip-4" class="icon icon-upload"><span>Submit</span></a></li>
							<li><a href="#section-flip-2" class="icon icon-config"><span>Approval</span></a></li>
							<li><a href="#section-flip-3" class="icon icon-tools"><span>Funding</span></a></li>
							<li><a href="#section-flip-5" class="icon icon-plane"><span>Launch</span></a></li>
						</ul>
					</nav>
					<div class="content-wrap">
						<section class="content-current" id="section-flip-1">
						
							<div class="wwc-inner-tab-section">
								<div class="wwc-step-item">
									<h3>Sign Up, It's Freeeeee!</h3>
									<div class="wwc-step-item-content">
										<img src="img/step1.svg">
										<p class="wwc-step-text">Sign up for an account, it’s so easy &amp; totally free. Once your account has been confirmed and activated, you can submit your next big idea!</p>
										<div class="clear"></div>
									</div>
									
								</div>
							</div>
						
						</section>
						<section id="section-flip-2">
							<div class="wwc-inner-tab-section">
								<div class="wwc-step-item">
									<h3>Submit Your Amazing Idea!</h3>
									<div class="wwc-step-item-content">
										<img src="img/step2.svg">
										<p class="wwc-step-text">Submit your idea by simply giving us as much information as possible. Images, outlines, selfies or just about anything you think will get your idea approved.</p>
										<div class="clear"></div>
									</div>
									
								</div>
							</div>
						</section>
						<section id="section-flip-3">
							<div class="wwc-inner-tab-section">
								<div class="wwc-step-item">
									<h3>Approval? Yes Please.</h3>
									<div class="wwc-step-item-content">
										<img src="img/step3.svg">
										<p class="wwc-step-text">Yes, you read that right, your idea needs to reach approval status before it is considered "fund-able" and reaches the next step in the launch of your new app.</p>
										<div class="clear"></div>
									</div>
									
								</div>
							</div>
						</section>
						<section id="section-flip-4">
							<div class="wwc-inner-tab-section">
								<div class="wwc-step-item">
									<h3>Everyone Loves your Idea!</h3>
									<div class="wwc-step-item-content">
										<img src="img/step4.svg">
										<p class="wwc-step-text">Once your idea has gone through and passed through our initial Approval process, your idea will begin to be funded by your friends, family and Oh ya... some Strangers!</p>
										<div class="clear"></div>
									</div>
									
								</div>
							</div>
						</section>
						<section id="section-flip-5">
							<div class="wwc-inner-tab-section">
								<div class="wwc-step-item">
									<h3>Lift Off in 5..4..3..2..1</h3>
									<div class="wwc-step-item-content">
										<img src="img/step5.svg">
										<p class="wwc-step-text">Now you're idea has come to reality and ready to be designed, coded and fine tuned by our team of professionals. Don't worry, we will hold your hand every step of the way!</p>
										<div class="clear"></div>
									</div>
									
								</div>
							</div>
						</section>
					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>
			
		</div>
	</main>

@endsection