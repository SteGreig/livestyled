function GlobalSetCookie(e,t,o){"use strict";var s=new Date;s.setTime(s.getTime()+24*o*60*60*1e3);var a="expires="+s.toUTCString();document.cookie=e+"="+t+";"+a+";path=/"}if($(".scroll-arrow").click(function(){$("html, body").animate({scrollTop:$("#section-2").offset().top-62},650)}),$(".global-main > .section--1.theme--secondary").parent().prev().addClass("theme--primary"),$(".global-main > .section--1.theme--alternative").parent().prev().addClass("theme--primary"),0===$(".global-main").children().length&&$(".header").addClass("theme--primary"),$(".copy-block:not(.no-hover):first-child").addClass("active"),$(".copy-block").hover(function(){$(this).siblings().removeClass("active"),$(this).removeClass("active")}),window.innerWidth<768&&$(".global-main>.section--1.section--copy-image>.container").css("height",window.innerHeight-30+"px"),$(".country-selector").length>0){var barHeight=$(".country-selector").outerHeight();$(".header").css("top",barHeight)}if($(document).scroll(function(){if($(".country-selector").length>0){var e=$(".country-selector").outerHeight();$(".header").css("top",e),$(this).scrollTop()>e?$(".header").addClass("header--sticky-0").addClass("header--sticky"):$(".header").removeClass("header--sticky-0").removeClass("header--sticky")}else $(this).scrollTop()>100?$(".header").addClass("header--sticky"):$(".header").removeClass("header--sticky")}),function(e){var t=e(".accordion > dd").hide();e(".accordion > dt > a").click(function(){return t.slideUp(),e(this).parent().next().slideDown(),!1})}(jQuery),function(e,t){e.fn.inViewport=function(o){return this.each(function(s,a){function i(){var s=e(a).outerHeight(),i=e(t).height(),n=a.getBoundingClientRect(),r=n.top,l=n.bottom;return o.call(a,Math.max(0,r>0?Math.min(s,i-r):Math.min(l,i)))}i(),e(t).on("resize scroll",i)})}}(jQuery,window),$("[data-animate]").inViewport(function(e){var t=$(this).data("animate");e>$(this).height()/100*30&&($(this).css("opacity","1"),$(this).addClass(t))}),$(".blog-filters__input").change(function(){$(this).is(":checked")&&($(this).parent().addClass("active"),$(this).parent().siblings().removeClass("active")),$(".blog-load-more").hide();var e=$(".blog-filters");return $.ajax({url:e.attr("action"),data:e.serialize(),type:e.attr("method"),beforeSend:function(e){$(".blog-filters").addClass("active"),$(".post-list").css("opacity","0"),$(".post-list").css("transform","translateY(100px)")},success:function(e){$(".post-list").html(e),$(".post-list").css("opacity","1"),$(".post-list").css("transform","translateY(0)"),$(".blog-filters").removeClass("active")}}),!1}),$(".blog-load-more").click(function(){var e=$(this),t={action:"loadmore",query:posts_loadmore,page:current_page_loadmore};$.ajax({url:"/wp-admin/admin-ajax.php",data:t,type:"POST",beforeSend:function(t){e.text("Loading...")},success:function(t){t?(e.text("View more").parent().prev().find(".post-list").append(t),current_page_loadmore++,current_page_loadmore==max_page_loadmore&&e.remove()):e.remove()}})}),$(".country-selector .continue").click(function(){var e=$(this).prev("select").val();window.location.assign(e)}),$(".country-selector").length>0){var origin=window.location.origin,path=(path=window.location.pathname).replace("/us","");$(".country-selector .us").val(origin+"/us"+path+"?noredirect=true"),$(".country-selector .uk").val(origin+path+"?noredirect=true")}function setCookie(e,t,o){var s="";if(o){var a=new Date;a.setTime(a.getTime()+24*o*60*60*1e3),s="; expires="+a.toUTCString()}document.cookie=e+"="+(t||"")+s+"; path=/"}$(".country-selector__close").click(function(){$(".country-selector").remove(),$(".header").addClass("header--sticky-0"),$(document).scroll(function(){$(this).scrollTop()>100&&$(".header").addClass("header--sticky-0").addClass("header--sticky")}),setCookie("lang","yes",7)});const slider=document.querySelector(".drag-scroll");let startX,scrollLeft,isDown=!1;var $euCookieBar,$euCookieBarActive,$btnDeclineEuCookieBar,btnAcceptEuCookieBar,COOKIE_DECLINE,COOKIE_DECLINE_VALUE,COOKIE_ACCEPT,COOKIE_ACCEPT_VALUE,CLASS_ACTIVE,DEBUG_GDPR;slider&&(slider.addEventListener("mousedown",e=>{isDown=!0,slider.classList.add("drag-active"),startX=e.pageX-slider.offsetLeft,scrollLeft=slider.scrollLeft}),slider.addEventListener("mouseleave",()=>{isDown=!1,slider.classList.remove("drag-active")}),slider.addEventListener("mouseup",()=>{isDown=!1,slider.classList.remove("drag-active")}),slider.addEventListener("mousemove",e=>{if(!isDown)return;e.preventDefault();const t=1*(e.pageX-slider.offsetLeft-startX);slider.scrollLeft=scrollLeft-t})),$euCookieBar=$(".section--gdpr"),$euCookieBarActive=$(".section--gdpr--active"),$btnDeclineEuCookieBar=$(".section--gdpr .btn--decline"),$btnAcceptEuCookieBar=$(".section--gdpr .btn--accept"),COOKIE_EXPIRE_DAYS=1,COOKIE_DECLINE="mf_eu_cookie_decline",COOKIE_DECLINE_VALUE="declined",COOKIE_ACCEPT="mf_eu_cookie_accept",COOKIE_ACCEPT_VALUE="accepted",CLASS_ACTIVE="section--gdpr--active",DEBUG_GDPR=!1,$(window).load(function(){Cookies.get(COOKIE_DECLINE)===COOKIE_DECLINE_VALUE?(!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD - USER PREVIOUSLY DECLINED"),Cookies.set(COOKIE_DECLINE,COOKIE_DECLINE_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD (CHECK) - DECLINE COOKIE IS SET TO: DECLINED"),Cookies.set(COOKIE_ACCEPT,COOKIE_DECLINE_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD (CHECK) - ACCEPT COOKIE IS SET TO: DECLINED")):Cookies.get(COOKIE_ACCEPT)===COOKIE_ACCEPT_VALUE?(!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD - USER PREVIOUSLY ACCEPTED"),Cookies.set(COOKIE_ACCEPT,COOKIE_ACCEPT_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD (CHECK) - ACCEPT COOKIE IS SET TO: ACCEPTED"),Cookies.set(COOKIE_DECLINE,COOKIE_ACCEPT_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD (CHECK) - DECLINE COOKIE IS SET TO: ACCEPTED")):(!0===DEBUG_GDPR&&console.log("GDPR: PAGE LOAD (CHECK) - NEW USER OR NO COOKIES ARE SET"),$($euCookieBar).fadeIn("slow").addClass(CLASS_ACTIVE).attr("role","alert"))}),$(document).ready(function(){$($btnDeclineEuCookieBar).on("click",function(){$($euCookieBar).fadeOut("slow").removeClass(CLASS_ACTIVE).removeAttr("role"),Cookies.set(COOKIE_DECLINE,COOKIE_DECLINE_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: CLICK - DECLINE COOKIE IS SET TO DECLINED"),Cookies.set(COOKIE_ACCEPT,COOKIE_DECLINE_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: CLICK - ACCEPT COOKIE IS SET TO DECLINED")}),$($btnAcceptEuCookieBar).on("click",function(){$($euCookieBar).fadeOut("slow").removeClass(CLASS_ACTIVE).removeAttr("role"),Cookies.set(COOKIE_ACCEPT,COOKIE_ACCEPT_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: CLICK - ACCEPT COOKIE IS SET TO ACCEPT"),Cookies.set(COOKIE_DECLINE,COOKIE_ACCEPT_VALUE,{expires:COOKIE_EXPIRE_DAYS}),!0===DEBUG_GDPR&&console.log("GDPR: CLICK - DECLINE COOKIE IS SET TO ACCEPT")})}),function(e){function t(t){var o=t.find(".marker"),s={zoom:16,center:new google.maps.LatLng(0,0),mapTypeId:google.maps.MapTypeId.ROADMAP},a=new google.maps.Map(t[0],s);return a.markers=[],o.each(function(){!function(e,t){var o=new google.maps.LatLng(e.attr("data-lat"),e.attr("data-lng")),s=new google.maps.Marker({position:o,map:t});if(t.markers.push(s),e.html()){var a=new google.maps.InfoWindow({content:e.html()});google.maps.event.addListener(s,"click",function(){a.open(t,s)})}}(e(this),a)}),function(t){var o=new google.maps.LatLngBounds;e.each(t.markers,function(e,t){var s=new google.maps.LatLng(t.position.lat(),t.position.lng());o.extend(s)}),1==t.markers.length?(t.setCenter(o.getCenter()),t.setZoom(16)):t.fitBounds(o)}(a),a}e(document).ready(function(){e(".container--map").each(function(){t(e(this))})})}(jQuery);var x,child=$(".carousel > *"),cont=$(".carousel"),scrollInt=setInterval(timer,2e3);function timer(){x=child.width()+40+cont.scrollLeft(),cont.animate({scrollLeft:x}),x>300?$(".carousel__arrow--left").css("opacity","1"):$(".carousel__arrow--left").css("opacity","0.5")}$(".carousel__arrow").click(function(){window.clearInterval(scrollInt);var e,t=$(".carousel > *"),o=$(".carousel");$(this).hasClass("carousel__arrow--right")?(e=t.width()+40+o.scrollLeft(),o.animate({scrollLeft:e})):(e=t.width()+40-o.scrollLeft(),o.animate({scrollLeft:-e})),e>300?$(".carousel__arrow--left").css("opacity","1"):$(".carousel__arrow--left").css("opacity","0.5")});var timer,iconClose="<svg class='icon icon-times'><use xlink:href='"+themeURL+"/assets/img/icons-sprite.svg#icon-times'></use></svg>",iconAngleUp="<svg class='icon icon-angle-up'><use xlink:href='"+themeURL+"/assets/img/icons-sprite.svg#icon-angle-up'></use></svg>",iconAngleDown="<svg class='icon icon-angle-down'><use xlink:href='"+themeURL+"/assets/img/icons-sprite.svg#icon-angle-down'></use></svg>",mobNav=document.querySelector(".mob-nav .scroll-container");if($(".desktop-nav .main-menu").length>0){var copyPrimaryMenu=document.querySelector(".desktop-nav .main-menu").cloneNode(!0);mobNav.appendChild(copyPrimaryMenu)}$("<div class='mob-nav-close'>"+iconClose+"</div>").insertAfter(".mob-nav .scroll-container"),$("<span class='sub-arrow'>"+iconAngleDown+iconAngleUp+"</span>").insertBefore(".mob-nav .sub-menu"),$(".sub-arrow").click(function(){$(this).toggleClass("active"),$(this).prev("a").toggleClass("active"),$(this).next(".sub-menu").slideToggle(),$(this).children().toggle()}),$("<div class='mob-nav-underlay'></div>").insertAfter(".mob-nav"),$(".mob-nav-toggle").click(function(){$(".mob-nav,.mob-nav-underlay").addClass("active"),$("body").addClass("fixed")}),$(".mob-nav-underlay,.mob-nav-close").click(function(){$(".mob-nav,.mob-nav-underlay").removeClass("active"),$("body").removeClass("fixed")});for(var navItemsCount=$(".scroll-menu__list-item").length,i=0;i<=navItemsCount;i++)!function(e){$(".scroll-menu__list-item:nth-child("+e+") a").click(function(){event.preventDefault();var e=$(this).attr("href");$("html, body").animate({scrollTop:$(e).offset().top-62},650)})}(i);$(".tabs-nav li:first-child, .tabs-panel:first-child").addClass("active"),$(".tabs .active ~ .active").prevAll(".active").removeClass("active");var interval,tabsCount=$(".tabs-nav li").length;for(i=0;i<=tabsCount;i++)!function(e){$(".tabs-nav li:nth-child("+e+")").click(function(){$(this).parents(".tabs").find(".tabs-panel").removeClass("active"),$(this).parents(".tabs").find(".tabs-nav li").removeClass("active"),$(this).addClass("active"),$(this).parents(".tabs").find(".tabs-nav li:nth-child("+e+")").addClass("active"),$(this).parents(".tabs").find(".tabs-panel:nth-child("+e+")").addClass("active"),clearInterval(interval)})}(i);(timer=function(){interval=setInterval(function(){var e=$(".tabs-auto-rotate .active").removeClass("active");e.next()&&e.next().length?e.next().addClass("active"):e.siblings(":first-child").addClass("active")},6e3)})();