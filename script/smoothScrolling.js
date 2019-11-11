jQuery(document).ready(function () {

    var docRoot = jQuery('html, body');

    jQuery('a[href^="#"]').click(function () {
        docRoot.animate({
            scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
        }, 500);

        return false;
    });
})

