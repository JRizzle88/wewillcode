'use strict';

jQuery(document).ready(function($) {

	// josh local
	var baseUrl = 'http://localhost/wewillcode/public';
	
	$('.flash-messages').delay(4000).fadeOut(500);
	
	//$('.ajax-loader-blue').hide();
	$('.wwc-tabbed-nav li').on('click', function() {
		$('html, body').stop().animate({
			//scrollTop: $('.wwc-tabbed-nav').offset().top
			scrollTop: 500
		}, 500);
		//$('html, body').scrollTo(500);
	});
	
	
	var $blueLoader = '<p class="fieldset"><img class="ajax-loader-blue" src="' + baseUrl + '/img/evo-blue-box-ajax-loader.gif") }}" /></p>';
	
	// ajaxify signin form
	var $form_modal = $('.wwc-user-modal');
	var $loginForm = $("#wwc-login-form");
	$loginForm.submit(function(e){
		e.preventDefault();
		// form data and fields with a name attribute
		var formData = $loginForm.serialize();
	
		$('.ajax-loader-blue').show();
		$loginForm.find('input[type="submit"]').replaceWith($blueLoader);
		
		$.ajax({
			url:'auth/login',
			type:'POST',
			data:formData,
			success:function(data){
				setTimeout(function(){
					$form_modal.removeClass('is-visible');
					//window.location.href = baseUrl + '/account';
					window.location.reload();
				}, 1800);
				
				console.log('success: ' + data);
			},
			error: function (data) {
				console.log('login form submit error: ' + data);
			}
		});
	});
	
	// ajaxify signup form
	var $signUpForm = $("#wwc-signup-form");
	$signUpForm.submit(function(e){
		e.preventDefault();
		// form data and fields with a name attribute
		var formData = $signUpForm.serialize();
	
		$('.ajax-loader-blue').show();
		
		$signUpForm.find('input[type="submit"]').replaceWith($blueLoader);
		
		$.ajax({
			url:'auth/register',
			type:'POST',
			data:formData,
			success:function(data){
				setTimeout(function(){
					$form_modal.removeClass('is-visible');
					//window.location.href = baseUrl + '/account';
					window.location.reload();
				}, 1800);
				
				//console.log('success: ' + data);
			},
			error: function (data) {
				console.log('login form submit error: ' + data);
			}
		});
	});
	
	//if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
	var MQL = 1170;

	//primary navigation slide-in effect
	if($(window).width() > MQL) {
		//console.log('header script firing');
		var headerHeight = $('.wwc-header').height();
		console.log(headerHeight);
		//$(window).on('scroll',{previousTop: 0},function() {
		$('body').scroll(function() {
			//console.log('scrolling detected');
		    var currentTop = $('body').scrollTop();
		    //check if user is scrolling up
		    if (currentTop < this.previousTop ) {
		    	//if scrolling up...
		    	if (currentTop > 0 && $('.wwc-header').hasClass('is-fixed')) {
		    		$('.wwc-header').addClass('is-visible');
		    	} else {
		    		$('.wwc-header').removeClass('is-visible is-fixed');
		    	}
		    } else {
		    	//if scrolling down...
		    	$('.wwc-header').removeClass('is-visible');
		    	if( currentTop > headerHeight && !$('.wwc-header').hasClass('is-fixed')) $('.wwc-header').addClass('is-fixed');
		    }
		    this.previousTop = currentTop;
		});
	}

	//open/close primary navigation
	$('.wwc-primary-nav-trigger').on('click', function(){
		$('.wwc-menu-icon').toggleClass('is-clicked'); 
		$('.wwc-header').toggleClass('menu-is-open');
		
		//in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		if( $('.wwc-primary-nav').hasClass('is-visible') ) {
			$('.wwc-primary-nav').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').removeClass('overflow-hidden');
			});
		} else {
			$('.wwc-primary-nav').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				//$('body').addClass('overflow-hidden');
			});	
		}
	});
});
