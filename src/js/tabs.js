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
            $('.tabs-panel:nth-child('+i+')').addClass('active');
        });
    })(i);
}