'use strict';

jQuery(document).ready(function($) {
	
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
});