function GlobalSetCookie(e,o,a){"use strict";var n=new Date;n.setTime(n.getTime()+24*a*60*60*1e3);var t="expires="+n.toUTCString();document.cookie=e+"="+o+";"+t+";path=/"}var $euCookieBar,$euCookieBarActive,$btnDeclineEuCookieBar,btnAcceptEuCookieBar,COOKIE_DECLINE,COOKIE_DECLINE_VALUE,COOKIE_ACCEPT,COOKIE_ACCEPT_VALUE,CLASS_ACTIVE,DEBUG_GDPR;$(document).scroll(function(){$(this).scrollTop()>0?$(".header").addClass("header--sticky"):$(".header").removeClass("header--sticky")}),$(".global-main > .section--1.theme--secondary").parent().prev().addClass("theme--primary"),$(".global-main > .section--1.theme--alternative").parent().prev().addClass("theme--primary"),0===$(".global-main").children().length&&$(".header").addClass("theme--primary"),function(e){var o=e(".accordion > dd").hide();e(".accordion > dt > a").click(function(){return o.slideUp(),e(this).parent().next().slideDown(),!1})}(jQuery),$euCookieBar=$(".section--gdpr"),$euCookieBarActive=$(".section--gdpr--active"),$btnDeclineEuCookieBar=$(".section--gdpr .btn--decline"),$btnAcceptEuCookieBar=$(".section--gdpr .btn--accept"),COOKIE_EXPIRE_DAYS=1,COOKIE_DECLINE="mf_eu_cookie_decline",COOKIE_DECLINE_VALUE="declined",COOKIE_ACCEPT="mf_eu_cookie_accept",COOKIE_ACCEPT_VALUE="accepted",CLASS_ACTIVE="section--gdpr--active",DEBUG_GDPR=!1,$(window).load(function(){Cookies.get(COOKIE_DECLINE)===COOKIE_DECLINE_VALUE?(!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD - USER PREVIOUSLY DECLINED"),Cookies.set(COOKIE_DECLINE,COOKIE_DECLINE_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD (CHECK) - DECLINE COOKIE IS SET TO: DECLINED"),Cookies.set(COOKIE_ACCEPT,COOKIE_DECLINE_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD (CHECK) - ACCEPT COOKIE IS SET TO: DECLINED")):Cookies.get(COOKIE_ACCEPT)===COOKIE_ACCEPT_VALUE?(!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD - USER PREVIOUSLY ACCEPTED"),Cookies.set(COOKIE_ACCEPT,COOKIE_ACCEPT_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD (CHECK) - ACCEPT COOKIE IS SET TO: ACCEPTED"),Cookies.set(COOKIE_DECLINE,COOKIE_ACCEPT_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD (CHECK) - DECLINE COOKIE IS SET TO: ACCEPTED")):(!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD (CHECK) - NEW USER OR NO COOKIES ARE SET"),$($euCookieBar).fadeIn("slow").addClass(CLASS_ACTIVE).attr("role","alert"))}),$(document).ready(function(){$($btnDeclineEuCookieBar).on("click",function(){$($euCookieBar).fadeOut("slow").removeClass(CLASS_ACTIVE).removeAttr("role"),Cookies.set(COOKIE_DECLINE,COOKIE_DECLINE_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: CLICK - DECLINE COOKIE IS SET TO DECLINED"),Cookies.set(COOKIE_ACCEPT,COOKIE_DECLINE_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: CLICK - ACCEPT COOKIE IS SET TO DECLINED")}),$($btnAcceptEuCookieBar).on("click",function(){$($euCookieBar).fadeOut("slow").removeClass(CLASS_ACTIVE).removeAttr("role"),Cookies.set(COOKIE_ACCEPT,COOKIE_ACCEPT_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: CLICK - ACCEPT COOKIE IS SET TO ACCEPT"),Cookies.set(COOKIE_DECLINE,COOKIE_ACCEPT_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: CLICK - DECLINE COOKIE IS SET TO ACCEPT")})}),function(e){function o(o){var a=o.find(".marker"),n={zoom:16,center:new google.maps.LatLng(0,0),mapTypeId:google.maps.MapTypeId.ROADMAP},t=new google.maps.Map(o[0],n);return t.markers=[],a.each(function(){!function(e,o){var a=new google.maps.LatLng(e.attr("data-lat"),e.attr("data-lng")),n=new google.maps.Marker({position:a,map:o});if(o.markers.push(n),e.html()){var t=new google.maps.InfoWindow({content:e.html()});google.maps.event.addListener(n,"click",function(){t.open(o,n)})}}(e(this),t)}),function(o){var a=new google.maps.LatLngBounds;e.each(o.markers,function(e,o){var n=new google.maps.LatLng(o.position.lat(),o.position.lng());a.extend(n)}),1==o.markers.length?(o.setCenter(a.getCenter()),o.setZoom(16)):o.fitBounds(a)}(t),t}e(document).ready(function(){e(".container--map").each(function(){o(e(this))})})}(jQuery);var iconClose="<svg class='icon icon-times'><use xlink:href='"+themeURL+"/assets/img/icons-sprite.svg#icon-times'></use></svg>",iconAngleUp="<svg class='icon icon-angle-up'><use xlink:href='"+themeURL+"/assets/img/icons-sprite.svg#icon-angle-up'></use></svg>",iconAngleDown="<svg class='icon icon-angle-down'><use xlink:href='"+themeURL+"/assets/img/icons-sprite.svg#icon-angle-down'></use></svg>",mobNav=document.querySelector(".mob-nav .scroll-container"),copyPrimaryMenu=document.querySelector(".desktop-nav .main-menu").cloneNode(!0);mobNav.appendChild(copyPrimaryMenu),$("<div class='mob-nav-close'>"+iconClose+"</div>").insertAfter(".mob-nav .scroll-container"),$("<span class='sub-arrow'>"+iconAngleDown+iconAngleUp+"</span>").insertBefore(".mob-nav .sub-menu"),$(".sub-arrow").click(function(){$(this).toggleClass("active"),$(this).prev("a").toggleClass("active"),$(this).next(".sub-menu").slideToggle(),$(this).children().toggle()}),$("<div class='mob-nav-underlay'></div>").insertAfter(".mob-nav"),$(".mob-nav-toggle").click(function(){$(".mob-nav,.mob-nav-underlay").addClass("active"),$("body").addClass("fixed")}),$(".mob-nav-underlay,.mob-nav-close").click(function(){$(".mob-nav,.mob-nav-underlay").removeClass("active"),$("body").removeClass("fixed")}),$(".tabs-nav li:first-child, .tabs-panel:first-child").addClass("active"),$(".tabs .active ~ .active").prevAll(".active").removeClass("active");for(var interval,tabsCount=$(".tabs-nav li").length,i=0;i<=tabsCount;i++)!function(e){$(".tabs-nav li:nth-child("+e+")").click(function(){$(".tabs-panel").removeClass("active"),$(".tabs-nav li").removeClass("active"),$(this).addClass("active"),$(this).parents(".testimonials__wrap").find(".tabs-nav li:nth-child("+e+")").addClass("active"),$(".tabs-panel:nth-child("+e+")").addClass("active"),clearInterval(interval),timer()})}(i);var timer=function(){interval=setInterval(function(){var e=$(".testimonials__logos .active").removeClass("active");e.next()&&e.next().length?e.next().addClass("active"):e.siblings(":first").addClass("active");var o=$(".testimonials__nav .active").removeClass("active");o.next()&&o.next().length?o.next().addClass("active"):o.siblings(":first").addClass("active");var a=$(".testimonials__quotes .active").removeClass("active");a.next()&&a.next().length?a.next().addClass("active"):a.siblings(":first").addClass("active")},6e3)};timer();