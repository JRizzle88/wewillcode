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
	
});