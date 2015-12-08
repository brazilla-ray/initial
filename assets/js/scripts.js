// All the JavaScript for the theme.

jQuery(document).ready(function($)	{
	// For the site navigation.
	$('#nav-tabs').idTabs("!click");
	// For slideshows.
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
