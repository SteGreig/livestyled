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


$(".scroll-arrow").click(function() {
	$("html, body").animate({
	scrollTop: $("#section-2").offset().top - 62
	}, 650);
});


// Give header blue backround if the first section is light (or if there are no sections at all)
$('.global-main > .section--1.theme--secondary').parent().prev().addClass('theme--primary');
$('.global-main > .section--1.theme--alternative').parent().prev().addClass('theme--primary');
if ( $('.global-main').children().length === 0 ) {
	$('.header').addClass('theme--primary');
}
//https://css-tricks.com/snippets/jquery/simple-jquery-accordion/
(function ($) {

	var allPanels = $('.accordion > dd').hide();

	$('.accordion > dt > a').click(function () {
		allPanels.slideUp();
		$(this).parent().next().slideDown();
		return false;
	});

})(jQuery);

/*
	@author Rob Watson
	@name GDPR Setup

	GDPR
	----
	setting up the GDPR vars
*/
var $euCookieBar,
	$euCookieBarActive,
	$btnDeclineEuCookieBar,
	btnAcceptEuCookieBar,
	COOKIE_DECLINE,
	COOKIE_DECLINE_VALUE,
	COOKIE_ACCEPT,
	COOKIE_ACCEPT_VALUE,
	CLASS_ACTIVE,
	DEBUG_GDPR;

$euCookieBar = $('.section--gdpr');
$euCookieBarActive = $('.section--gdpr--active');
$btnDeclineEuCookieBar = $('.section--gdpr .btn--decline');
$btnAcceptEuCookieBar = $('.section--gdpr .btn--accept');
COOKIE_EXPIRE_DAYS = 1;
COOKIE_DECLINE = 'mf_eu_cookie_decline';
COOKIE_DECLINE_VALUE = 'declined';
COOKIE_ACCEPT = 'mf_eu_cookie_accept';
COOKIE_ACCEPT_VALUE = 'accepted';
CLASS_ACTIVE = 'section--gdpr--active';
DEBUG_GDPR = false;


/*
	- window.load()
	-- We need to check here if the user had previously accepted or declined the cookie.

	---	Check: Decline
			--------------
			If user has previoously declined the cookie we update it to expire in 24 hours

	---	Check: Accept
			--------------
			If user has previoously declined the cookie we update it to expire in 24 hours

	---	Default Action
			--------------
			If user has previoously neither declined or accepted, or the cookie has expired we add the acive class (CLASS_ACTIVE) to display the GDPR message

*/
$(window).load(function () {
	/* Check if decline cookie exists  */
	if (Cookies.get(COOKIE_DECLINE) === COOKIE_DECLINE_VALUE) {

		if (DEBUG_GDPR === true) {
			console.log('GDPR: PAGE LOAD - USER PREVIOUSLY DECLINED');
		}
		/*  set decline cookie to declined */
		Cookies.set(COOKIE_DECLINE, COOKIE_DECLINE_VALUE, {
			expires: COOKIE_EXPIRE_DAYS
		});
		if (DEBUG_GDPR === true) {
			console.log('GDPR: PAGE LOAD (CHECK) - DECLINE COOKIE IS SET TO: DECLINED');
		}

		/* Set accept cookie to declined */
		Cookies.set(COOKIE_ACCEPT, COOKIE_DECLINE_VALUE, {
			expires: COOKIE_EXPIRE_DAYS
		});
		if (DEBUG_GDPR === true) {
			console.log('GDPR: PAGE LOAD (CHECK) - ACCEPT COOKIE IS SET TO: DECLINED');
		}

	} else if (Cookies.get(COOKIE_ACCEPT) === COOKIE_ACCEPT_VALUE) {

		if (DEBUG_GDPR === true) {
			console.log('GDPR: PAGE LOAD - USER PREVIOUSLY ACCEPTED');
		}
		/* if accept cookie exists, set it to accepted */
		Cookies.set(COOKIE_ACCEPT, COOKIE_ACCEPT_VALUE, {
			expires: COOKIE_EXPIRE_DAYS
		});
		if (DEBUG_GDPR === true) {
			console.log('GDPR: PAGE LOAD (CHECK) - ACCEPT COOKIE IS SET TO: ACCEPTED');
		}
		/* set decline cookie to accepted */

		Cookies.set(COOKIE_DECLINE, COOKIE_ACCEPT_VALUE, {
			expires: COOKIE_EXPIRE_DAYS
		});
		if (DEBUG_GDPR === true) {
			console.log('GDPR: PAGE LOAD (CHECK) - DECLINE COOKIE IS SET TO: ACCEPTED');
		}

	} else {

		if (DEBUG_GDPR === true) {
			console.log('GDPR: PAGE LOAD (CHECK) - NEW USER OR NO COOKIES ARE SET');
		}
		/* Neither cookie exisit so show GDPR alert */
		$($euCookieBar).fadeIn('slow').addClass(CLASS_ACTIVE).attr('role', 'alert');

	}
});
/*
	- document.ready()
	-- Here we set the cookies when the user clicks either accept or decline

	---	Event: Click: Decline
			--------------------
			If user clicks declined we set the cookie COOKIE_DECLINE to COOKIE_DECLINE_VALUE with an expiry time of 24 hours

	---	Event: Click: Accept
			--------------------
			If user clicks accept we set the cookie COOKIE_ACTIVE to COOKIE_ACTIVE_VALUE with an expiry time of 24 hours

*/
$(document).ready(function () {

	$($btnDeclineEuCookieBar).on('click', function () {

		$($euCookieBar).fadeOut('slow').removeClass(CLASS_ACTIVE).removeAttr('role');

		Cookies.set(COOKIE_DECLINE, COOKIE_DECLINE_VALUE, {
			expires: COOKIE_EXPIRE_DAYS
		});
		if (DEBUG_GDPR === true) {
			console.log('GDPR: CLICK - DECLINE COOKIE IS SET TO DECLINED');
		}

		Cookies.set(COOKIE_ACCEPT, COOKIE_DECLINE_VALUE, {
			expires: COOKIE_EXPIRE_DAYS
		});
		if (DEBUG_GDPR === true) {
			console.log('GDPR: CLICK - ACCEPT COOKIE IS SET TO DECLINED');
		}

	});

	$($btnAcceptEuCookieBar).on('click', function () {

		$($euCookieBar).fadeOut('slow').removeClass(CLASS_ACTIVE).removeAttr('role');

		Cookies.set(COOKIE_ACCEPT, COOKIE_ACCEPT_VALUE, {
			expires: COOKIE_EXPIRE_DAYS
		});
		if (DEBUG_GDPR === true) {
			console.log('GDPR: CLICK - ACCEPT COOKIE IS SET TO ACCEPT');
		}

		Cookies.set(COOKIE_DECLINE, COOKIE_ACCEPT_VALUE, {
			expires: COOKIE_EXPIRE_DAYS
		});
		if (DEBUG_GDPR === true) {
			console.log('GDPR: CLICK - DECLINE COOKIE IS SET TO ACCEPT');
		}

	});

});

(function ($) {
	function new_map($el) {
		var $markers = $el.find('.marker');
		var args = {
			zoom: 16,
			center: new google.maps.LatLng(0, 0),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map($el[0], args);
		map.markers = [];
		$markers.each(function () {
			add_marker($(this), map);
		});
		center_map(map);
		return map;
	}

	function add_marker($marker, map) {
		var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
		var marker = new google.maps.Marker({
			position: latlng,
			map: map
		});
		map.markers.push(marker);
		if ($marker.html()) {
			var infowindow = new google.maps.InfoWindow({
				content: $marker.html()
			});
			google.maps.event.addListener(marker, 'click', function () {
				infowindow.open(map, marker);
			});
		}
	}
	function center_map(map) {
		var bounds = new google.maps.LatLngBounds();
		$.each(map.markers, function (i, marker) {
			var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
			bounds.extend(latlng);
		});
		if (map.markers.length == 1) {
			map.setCenter(bounds.getCenter());
			map.setZoom(16);
		} else {
			map.fitBounds(bounds);
		}
	}
	var map = null;
	$(document).ready(function () {
		$('.container--map').each(function () {
			map = new_map($(this));
		});
	});
})(jQuery);

// --------------------------------------------------------------------------------------------------
// Mobile Navigation
// @author Stephen Greig
// --------------------------------------------------------------------------------------------------
//SVG Icons
var iconClose = "<svg class='icon icon-times'><use xlink:href='"+themeURL+"/assets/img/icons-sprite.svg#icon-times'></use></svg>";
var iconAngleUp = "<svg class='icon icon-angle-up'><use xlink:href='"+themeURL+"/assets/img/icons-sprite.svg#icon-angle-up'></use></svg>";
var iconAngleDown = "<svg class='icon icon-angle-down'><use xlink:href='"+themeURL+"/assets/img/icons-sprite.svg#icon-angle-down'></use></svg>";
        
// Copy primary and secondary menus to .mob-nav element
var mobNav = document.querySelector('.mob-nav .scroll-container');

var copyPrimaryMenu = document.querySelector('.desktop-nav .main-menu').cloneNode(true);
mobNav.appendChild(copyPrimaryMenu);

// Add Close Icon element
$( "<div class='mob-nav-close'>"+iconClose+"</div>" ).insertAfter( ".mob-nav .scroll-container" );

// Add dropdown arrow to links with sub-menus
$( "<span class='sub-arrow'>"+iconAngleDown+iconAngleUp+"</span>" ).insertBefore(".mob-nav .sub-menu");

// Show sub-menu when dropdown arrow is clicked
$('.sub-arrow').click(function() {
    $(this).toggleClass('active');
    $(this).prev('a').toggleClass('active');
    $(this).next('.sub-menu').slideToggle();
    $(this).children().toggle();
});

// Add underlay element after mobile nav
$( "<div class='mob-nav-underlay'></div>" ).insertAfter( ".mob-nav" );

// Show underlay and fix the body scroll when menu button is clicked
$('.mob-nav-toggle').click(function() {
    $('.mob-nav,.mob-nav-underlay').addClass('active');
    $('body').addClass('fixed');
});

// Hide menu when close icon or underlay is clicked
$('.mob-nav-underlay,.mob-nav-close').click(function() {
    $('.mob-nav,.mob-nav-underlay').removeClass('active');
    $('body').removeClass('fixed');
});
// --------------------------------------------------------------------------------------------------
// Tabs
// --------------------------------------------------------------------------------------------------

$('.tabs-nav li:first-child, .tabs-panel:first-child').addClass('active');

$('.tabs .active ~ .active').prevAll('.active').removeClass('active');

var tabsCount = $('.tabs-nav li').length;

for (var i=0; i<=tabsCount; i++) {
    (function(i){
        $('.tabs-nav li:nth-child('+i+')').click(function() {
            $('.tabs-panel').removeClass('active');
            $('.tabs-nav li').removeClass('active');
            $(this).addClass('active');
            $(this).parents('.tabs').find('.tabs-nav li:nth-child('+i+')').addClass('active');
            $('.tabs-panel:nth-child('+i+')').addClass('active');
            clearInterval(interval);
            timer()
        });
    })(i);
}

// Auto rotate through testimonial tabs
var interval;
var timer = function(){
    interval = setInterval(function(){
        var active = $(".testimonials__logos .active").removeClass('active');
        if(active.next() && active.next().length){ active .next().addClass('active'); } else{ active.siblings(":first").addClass('active'); }

        var active2 = $(".testimonials__nav .active").removeClass('active');
        if(active2.next() && active2.next().length){ active2 .next().addClass('active'); } else{ active2.siblings(":first").addClass('active'); }

        var active3 = $(".testimonials__quotes .active").removeClass('active');
        if(active3.next() && active3.next().length){ active3 .next().addClass('active'); } else{ active3.siblings(":first").addClass('active'); }
    },6000);
};

timer();