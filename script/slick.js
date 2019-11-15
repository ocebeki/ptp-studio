jQuery(document).ready(function () {
    jQuery('.hero__wrapper').slick({
        prevArrow: jQuery('.prev'),
        nextArrow: jQuery('.next'),
        mobileFirst: true,
        dots: true,
        fade: true,
        autoplay: true,
        responsive:
        {
            breakpoint: 480,
            settings: {
                arrows: false,
            }
        }
    });
});