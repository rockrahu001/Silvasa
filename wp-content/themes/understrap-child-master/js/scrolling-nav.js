//jQuery to collapse the navbar on scroll
jQuery(window).scroll(function() {
    if (jQuery(".navbar").offset().top > 50) {
        jQuery(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        jQuery(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
jQuery(function() {
    jQuery('a.page-scroll').bind('click', function(event) {
        var jQueryanchor = jQuery(this);
        jQuery('html, body').stop().animate({
            scrollTop: jQuery(jQueryanchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

jQuery(document).ready(function (jQuery) {
    jQuery("#owl-example").owlCarousel();
});

jQuery("body").data("page", "frontpage");

jQuery("#owl-example").owlCarousel({
    items: 3,
})

jQuery(document).ready(function(){
    jQuery('#main-slider').css('height', jQuery(window).height());
});
jQuery(window).resize(function(){
    jQuery('#main-slider').css('height', jQuery(window).height());
});
