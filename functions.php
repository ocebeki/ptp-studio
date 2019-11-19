<?php
add_filter('use_block_editor_for_post', '__return_false');

function blank_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/script/vendor/lightbox/lightbox.css' );
    wp_enqueue_style( 'slickTheme', get_template_directory_uri() . '/script/vendor/slick/slick-theme.css' );
    wp_enqueue_style( 'lightGalleryStyle', get_template_directory_uri() . '/script/vendor/lightGallery/css/lightgallery.css' );


   // wp_enqueue_script('mancy', get_template_directory_uri() . '/script/vendor/mancy.js', array('jquery') );
       // wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/script/vendor/lightbox/lightbox.js', array('jquery') );
    // wp_enqueue_script('lightboxOptions', get_template_directory_uri() . '/script/lightbox.js' );


    wp_enqueue_script('slick', get_template_directory_uri() . '/script/vendor/slick/slick.min.js', array('jquery') );
    wp_enqueue_script('lightGallery', get_template_directory_uri() . '/script/vendor/lightGallery/js/lightgallery.js', array('jquery') );

    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/script.js' );
    wp_enqueue_script('slickCustom', get_template_directory_uri() . '/script/slick.js', array('jquery') );
    wp_enqueue_script('smoothScrolling', get_template_directory_uri() . '/script/smoothScrolling.js', array('jquery') );
    wp_register_script( 'isotop', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js', null, null, true );
    wp_enqueue_script('isotop');
    wp_enqueue_script( 'isotop-options', get_template_directory_uri() . '/script/isotop.js' );
    wp_enqueue_script('test', get_template_directory_uri() . '/script/test.js', array('jquery') );
    


}


add_action( 'wp_enqueue_scripts', 'blank_scripts'  );

function ptp_register_nav_menu() {
	register_nav_menu( 'primary', 'Header Navigation Menu' );
}
add_action( 'after_setup_theme', 'ptp_register_nav_menu' );

function polylang_shortcode() {
	ob_start();
	pll_the_languages(array('show_flags'=>0,'show_names'=>1));
	$flags = ob_get_clean();
	return $flags;
}
add_shortcode( 'polylang', 'polylang_shortcode' );

// / Add this to your functions.php file

// function polylang_flags_shortcode() {
//     ob_start();
//     pll_the_languages(array('show_flags'=>1,'show_names'=>0));
//     $flags = ob_get_clean();
//     return '<ul class="polylang-flags">' . $flags . '</ul>';
// }
// add_shortcode('POLYLANG', 'polylang_flags_shortcode');