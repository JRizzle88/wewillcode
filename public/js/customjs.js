'use strict';

jQuery(document).ready(function($) {
	
	// hide layout selection on page and post editors
	$('.layout-selection').hide();
	var selectedLayoutValue = $(".layout-options label img").prev('input[name="layout"]:checked').val();
	hideAndShowSidebarOptions(selectedLayoutValue);

	// show sidebar options if selection is left or right sidebar
	$(".layout-options label img").click(function(){
		var val = $(this).prev().val();
		hideAndShowSidebarOptions(val);
	});
	
	function hideAndShowSidebarOptions(val) {
		console.log(val);
		$('.layout-selection').hide();
		$('#' + val).fadeIn(850);
	}
 
	$('.button-collapse.admin').sideNav({
		//edge: 'right',
		closeOnClick: false
	});
	
	// Initialize collapse button
  	$(".button-collapse.header").sideNav({
		closeOnClick: true
	});
	
	$('ul.tabs').tabs();
	
	$('select').material_select();
	
	$('.flash-messages').delay(4000).fadeOut(500);
	
	//if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
	var MqL = 1170;
	//move nav element position according to window width
	moveNavigation();
	$(window).on('resize', function(){
		(!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
	});

	//mobile - open lateral menu clicking on the menu icon
	$('.wwc-nav-trigger').on('click', function(event){
		event.preventDefault();
		if( $('.wwc-main-content').hasClass('nav-is-visible') ) {
			closeNav();
			$('.wwc-overlay').removeClass('is-visible');
		} else {
			$(this).addClass('nav-is-visible');
			$('.wwc-primary-nav').addClass('nav-is-visible');
			$('.wwc-main-header').addClass('nav-is-visible');
			$('.wwc-main-content').addClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').addClass('overflow-hidden');
			});
			toggleSearch('close');
			$('.wwc-overlay').addClass('is-visible');
		}
	});

	//open search form
	$('.wwc-search-trigger').on('click', function(event){
		event.preventDefault();
		toggleSearch();
		closeNav();
	});

	//close lateral menu on mobile 
	$('.wwc-overlay').on('swiperight', function(){
		if($('.wwc-primary-nav').hasClass('nav-is-visible')) {
			closeNav();
			$('.wwc-overlay').removeClass('is-visible');
		}
	});
	$('.nav-on-left .wwc-overlay').on('swipeleft', function(){
		if($('.wwc-primary-nav').hasClass('nav-is-visible')) {
			closeNav();
			$('.wwc-overlay').removeClass('is-visible');
		}
	});
	$('.wwc-overlay').on('click', function(){
		closeNav();
		toggleSearch('close')
		$('.wwc-overlay').removeClass('is-visible');
	});


	//prevent default clicking on direct children of .wwc-primary-nav 
	$('.wwc-primary-nav').children('.has-children').children('a').on('click', function(event){
		event.preventDefault();
	});
	//open submenu
	$('.has-children').children('a').on('click', function(event){
		if( !checkWindowWidth() ) event.preventDefault();
		var selected = $(this);
		if( selected.next('ul').hasClass('is-hidden') ) {
			//desktop version only
			selected.addClass('selected').next('ul').removeClass('is-hidden').end().parent('.has-children').parent('ul').addClass('moves-out');
			selected.parent('.has-children').siblings('.has-children').children('ul').addClass('is-hidden').end().children('a').removeClass('selected');
			$('.wwc-overlay').addClass('is-visible');
		} else {
			selected.removeClass('selected').next('ul').addClass('is-hidden').end().parent('.has-children').parent('ul').removeClass('moves-out');
			$('.wwc-overlay').removeClass('is-visible');
		}
		toggleSearch('close');
	});

	//submenu items - go back link
	$('.go-back').on('click', function(){
		$(this).parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('moves-out');
	});

	function closeNav() {
		$('.wwc-nav-trigger').removeClass('nav-is-visible');
		$('.wwc-main-header').removeClass('nav-is-visible');
		$('.wwc-primary-nav').removeClass('nav-is-visible');
		$('.has-children ul').addClass('is-hidden');
		$('.has-children a').removeClass('selected');
		$('.moves-out').removeClass('moves-out');
		$('.wwc-main-content').removeClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			$('body').removeClass('overflow-hidden');
		});
	}

	function toggleSearch(type) {
		if(type=="close") {
			//close serach 
			$('.wwc-search').removeClass('is-visible');
			$('.wwc-search-trigger').removeClass('search-is-visible');
			$('.wwc-overlay').removeClass('search-is-visible');
		} else {
			//toggle search visibility
			$('.wwc-search').toggleClass('is-visible');
			$('.wwc-search-trigger').toggleClass('search-is-visible');
			$('.wwc-overlay').toggleClass('search-is-visible');
			if($(window).width() > MqL && $('.wwc-search').hasClass('is-visible')) $('.wwc-search').find('input[type="search"]').focus();
			($('.wwc-search').hasClass('is-visible')) ? $('.wwc-overlay').addClass('is-visible') : $('.wwc-overlay').removeClass('is-visible') ;
		}
	}

	function checkWindowWidth() {
		//check window width (scrollbar included)
		var e = window, 
            a = 'inner';
        if (!('innerWidth' in window )) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        if ( e[ a+'Width' ] >= MqL ) {
			return true;
		} else {
			return false;
		}
	}

	function moveNavigation(){
		var navigation = $('.wwc-nav');
  		var desktop = checkWindowWidth();
        if ( desktop ) {
			navigation.detach();
			navigation.insertBefore('.wwc-header-buttons');
		} else {
			navigation.detach();
			navigation.insertAfter('.wwc-main-content');
		}
	}
});