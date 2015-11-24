// JavaScript Document

$(document).ready(function()	{
	$('.plates').each(function(){
	var $this = $(this);
	var next = $(this).parent().find('.next');
	var prev = $(this).parent().find('.prev');
	$this.cycle({
		width: '95%',
		fx: 'fade',
		speed: 'fast',
		next: next,
		prev: prev,
		timeout: 0,
		});
	});
	var settings = {start:5,change:false};
	$('.navTabs').idTabs(settings,true);

	enquire.register("screen and (max-device-width:480px)", function () {
	$('.plates').each(function(){
	var $this = $(this);
	var next = $(this).parent().find('.next');
	var prev = $(this).parent().find('.prev');
	$this.cycle({
		height:'250px',
		containerResize:false,
		slideResize:false,
		fx: 'fade',
		speed: 'fast',
		next: '.plates',
		timeout: 0,
		});
	});
	var settings = {start:5,change:false};
	$('.navTabs').idTabs(settings,true);
	});
});

