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
            $(this).parents('.testimonials__wrap').find('.tabs-nav li:nth-child('+i+')').addClass('active');
            $('.tabs-panel:nth-child('+i+')').addClass('active');
        });
    })(i);
}

setInterval(function(){

    var active = $(".testimonials__logos .active").removeClass('active');
    if(active.next() && active.next().length){ active .next().addClass('active'); } else{ active.siblings(":first").addClass('active'); }

    var active2 = $(".testimonials__nav .active").removeClass('active');
    if(active2.next() && active2.next().length){ active2 .next().addClass('active'); } else{ active2.siblings(":first").addClass('active'); }

    var active3 = $(".testimonials__quotes .active").removeClass('active');
    if(active3.next() && active3.next().length){ active3 .next().addClass('active'); } else{ active3.siblings(":first").addClass('active'); }

}, 7000);​