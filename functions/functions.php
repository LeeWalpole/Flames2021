<?php add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );    
    add_theme_support( 'html5', [ 'script', 'style' ], array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    // add_theme_support( 'woocommerce' );
    add_post_type_support( 'page', 'excerpt' );
    update_option( 'thumbnail_size_w', 360 );
    update_option( 'thumbnail_size_h', 9999 );
    update_option( 'thumbnail_crop', false );
    update_option( 'medium_size_w', 640 );
    update_option( 'medium_size_h', 9999 );
    update_option( 'medium_crop', false );
    update_option( 'medium_large_size_w', 640 );
    update_option( 'medium_large_size_h', 9999 );
    update_option( 'medium_large_crop', false );
    update_option( 'large_size_w', 1920 );
    update_option( 'large_size_h', 9999 );
    update_option( 'large_crop', true );
    add_image_size( 'teaser_standard', 360, 240, true );
    add_image_size( 'teaser_standard', 360, 240, true );
    add_image_size( 'w-desktop_plus', 1920, false ); // 1920 full
    add_image_size( 'w-desktop', 1366, false ); // desktop full
    add_image_size( 'w-smartphone', 360, false ); // iPhone full
    add_image_size( 'w-tablet', 768, false ); // Tablet Full
    add_image_size( 'nav_logo_smartphone', 9999, 50, false );
    add_image_size( 'nav_logo_desktop', 9999, 72, false );
    add_image_size( 'hero_logo_smartphone', 200, false );
    add_image_size( 'hero_logo_desktop', 400, false );
    add_filter('img_caption_shortcode_width', '__return_false');
    include_once( 'functions/acf-options.php' );
    // include_once( 'functions/give-referral.php' );
    // include_once( 'functions/postlist-thumbnails.php' );
    // include_once( 'functions/acf.php' );
    // include_once( 'functions/header-junk.php' );
    // include_once( 'functions/lazyload-images.php' );
    // include_once( 'functions/read-time.php' );
    // include_once( 'functions/lazyload-video.php' );
    // include_once( 'functions/woocommerce_remove.php' );
    }
?>
<?php /*
// Prevent Wordpress from Loading their own styles
function pm_remove_all_scripts() {
    global $wp_scripts;
    $wp_scripts->queue = array();
}
if ( ! is_admin() ) :
add_action('wp_print_scripts', 'pm_remove_all_scripts', 100);
endif;
?>
<?php // Prevent Wordpress from Loading their own scripts
function pm_remove_all_styles() {
    global $wp_styles;
    $wp_styles->queue = array();
}
if ( ! is_admin() ) :
add_action('wp_print_styles', 'pm_remove_all_styles', 100);
endif;
*/
// include custom jQuery
function shapeSpace_include_custom_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
?>
<?php 
include_once( 'functions/give-custom-field.php' );
include_once( 'functions/give-referral.php' );