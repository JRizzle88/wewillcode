'use strict';

jQuery(document).ready(function($) {
	
	$('.button-collapse.admin').sideNav({
		closeOnClick: false
	});
	
	// Initialize collapse button
  	$(".button-collapse.header").sideNav({
		closeOnClick: true
	});
	
	$('ul.tabs').tabs();
});