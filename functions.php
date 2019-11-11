<?php
add_filter('use_block_editor_for_post', '__return_false');

function blank_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/script/vendor/lightbox/lightbox.css' );
    wp_enqueue_style( 'slickTheme', get_template_directory_uri() . '/script/vendor/slick/slick-theme.css' );


    wp_enqueue_script('mancy', get_template_directory_uri() . '/script/vendor/mancy.js', array('jquery') );
    wp_enqueue_script('slick', get_template_directory_uri() . '/script/vendor/slick/slick.min.js', array('jquery') );
    wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/script/vendor/lightbox/lightbox.js', array('jquery') );
    wp_enqueue_script('lightboxOptions', get_template_directory_uri() . '/script/lightbox.js' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/script.js' );
    wp_enqueue_script('slickCustom', get_template_directory_uri() . '/script/slick.js', array('jquery') );
    wp_enqueue_script('smoothScrolling', get_template_directory_uri() . '/script/smoothScrolling.js', array('jquery') );
    wp_register_script( 'isotop', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js', null, null, true );
wp_enqueue_script('isotop');
wp_enqueue_script( 'isotop-options', get_template_directory_uri() . '/script/isotop.js' );
    


}


add_action( 'wp_enqueue_scripts', 'blank_scripts'  );

function ptp_register_nav_menu() {
	register_nav_menu( 'primary', 'Header Navigation Menu' );
}
add_action( 'after_setup_theme', 'ptp_register_nav_menu' );