jQuery(window).load(function () {

  jQuery('.gallery__filter').click(function () {
    jQuery('.gallery__filter').removeClass('gallery__filter--active');
    jQuery(this).addClass('gallery__filter--active')
  })


  jQuery('.lang-item').click(function () {
    jQuery('.lang-item').removeClass('current-lang');
    jQuery(this).addClass('current-lang')
  })

  let $gallery = jQuery('#lightgallery');

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
    columnWidth: '.gallery__grid-sizer-sm',
  });

  let filterValue;

  jQuery('.gallery__filter').on('click', function () {
    filterValue = jQuery(this).attr('data-filter');
    jQuery('#lightgallery').isotope({ filter: filterValue });
    $gallery.data('lightGallery').destroy(true);
    $gallery.lightGallery({
      selector: filterValue.replace('.wszystkie', '')
    });
  });

  jQuery('.gallery__btn').on('click', function () {
    jQuery('.gallery__btn').removeClass('gallery__btn--active');
    jQuery(this).addClass('gallery__btn--active');
    if (jQuery('.gallery__btn--grid').hasClass('gallery__btn--active')) {
      jQuery('.gallery__image-wrapper').removeClass("gallery__grid-sizer-lg")
      jQuery('.gallery__image-wrapper').addClass("gallery__grid-sizer-sm")

      jQuery('#lightgallery').isotope({
        itemSelector: '.gallery__image-wrapper',
        layoutMode: 'masonry',
        percentPosition: true,
        filter: filterValue,
        columnWidth: '.gallery__grid-sizer-lg',
      });

      if (filterValue === undefined) {
        jQuery('#lightgallery').isotope({
          itemSelector: '.gallery__image-wrapper',
          layoutMode: 'masonry',
          percentPosition: true,
          filter: '.wszystkie',
          columnWidth: '.gallery__grid-sizer-sm',
        });

      }

    } else if (jQuery('.gallery__btn--single').hasClass('gallery__btn--active')) {
      jQuery('.gallery__image-wrapper').removeClass("gallery__grid-sizer-sm")
      jQuery('.gallery__image-wrapper').addClass("gallery__grid-sizer-lg")

      jQuery('#lightgallery').isotope({
        itemSelector: '.gallery__image-wrapper',
        layoutMode: 'masonry',
        percentPosition: true,
        filter: filterValue,
        columnWidth: '.gallery__grid-sizer-sm',
      });
      if (filterValue === undefined) {
        jQuery('#lightgallery').isotope({
          itemSelector: '.gallery__image-wrapper',
          layoutMode: 'masonry',
          percentPosition: true,
          filter: '.wszystkie',
          columnWidth: '.gallery__grid-sizer-sm',
        });

      }
    }
  })
});






