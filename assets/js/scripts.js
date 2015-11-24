// JavaScript Document

jQuery(document).ready(function($)	{
	$('#page').fadeIn(1000);
	$('#nav-tabs').idTabs("!click");
	$('.plates').cycle({
		slides:'> div',
		fx:'fade',
		speed: 1000,
		timeout: 0,
		prev:'.prev',
		next:'.next',
		swipe:"true",	
		autoHeight:"container",	
		});
});
