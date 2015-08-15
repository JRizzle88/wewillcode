'use strict';

jQuery(document).ready(function($) {
	// Initialize collapse button
  	$(".button-collapse").sideNav({
		closeOnClick: true
	});
	
	$('ul.tabs').tabs();
});