jQuery(document).ready(function () {
    jQuery('.hero__wrapper').slick({
        prevArrow: jQuery('.prev'),
        nextArrow: jQuery('.next'),
        adaptiveHeight: true,
        mobileFirst: true,
        dots: true,
        fade: true,

        responsive:
        {
            breakpoint: 480,
            settings: {
                arrows: false,
            }
        }
    });
});