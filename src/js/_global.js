function GlobalSetCookie(cname, cvalue, exdays) {
	"use strict";
	var d = new Date();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	var expires = "expires=" + d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}


// Sticky Header
$(document).scroll(function () {
	if ($(this).scrollTop() > 0) {
		$('.header').addClass('header--sticky');
	} else {
		$('.header').removeClass('header--sticky');
	}
});


// Give header blue backround if the first section is light (or if there are no sections at all)
$('.global-main > .section--1.theme--secondary').parent().prev().addClass('theme--primary');
$('.global-main > .section--1.theme--alternative').parent().prev().addClass('theme--primary');
if ( $('.global-main').children().length === 0 ) {
	$('.header').addClass('theme--primary');
}