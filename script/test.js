jQuery(document).ready(function () {

    var $gallery = jQuery('#lightgallery');
    $gallery.lightGallery({
        mode: 'lg-fade',
        hash: true,
        download: true,
        enableDrag: true,
        enableSwipe: true,
        thumbnail: true,
        animateThumb: true,
        showThumbByDefault: true
    });
    jQuery('#lightgallery').isotope({

        itemSelector: '.gallery__image-wrapper',
        layoutMode: 'masonry',
        percentPosition: true,
        filter: ".wszystkie",
        columnWidth: '.gallery__grid-sizer',
    });
    jQuery('.gallery__filter').on('click', function () {
        var filterValue = jQuery(this).attr('data-filter');
        jQuery('#lightgallery').isotope({ filter: filterValue });
        $gallery.data('lightGallery').destroy(true);
        $gallery.lightGallery({
            selector: filterValue.replace('.wszyzstko', '')
        });
    });

    jQuery('.gallery__filter').on('click', function () {
        var filterValue = jQuery(this).attr('data-filter');
        jQuery('#lightgallery').isotope({ filter: filterValue });
        $gallery.data('#lightGallery').destroy(true);
        $gallery.lightGallery({
            selector: filterValue.replace('.wszystkie', '')
        });
    });
});






