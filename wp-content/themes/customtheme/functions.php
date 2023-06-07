<?php

function register_menus(){
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu',
        'footer-menu2' => 'Footer Menu2'
    ));
}

add_action( 'init', 'register_menus' );

function wp_register_styles(){
    wp_enqueue_style('stylesheet', get_template_directory_uri() . "./style.css", 'all');
    // wp_enqueue_style('slick', get_template_directory_uri() . "./assets/css/slick.css", 'all');
    // wp_enqueue_style('slick-theme', get_template_directory_uri() . "./assets/css/slick-theme.css", 'all');
    // wp_enqueue_script('slick-js',get_template_directory_uri() .'./assets/js/slick.min.js', true);

    // wp_enqueue_style( 'slick-css', untrailingslashit( get_template_directory_uri() ) . './assets/css/slick.css', [], false, 'all' );
    // wp_enqueue_style( 'slick-theme-css', untrailingslashit( get_template_directory_uri() ) . './assets/css/slick-theme.css', ['slick-css'], false, 'all' );
    // wp_enqueue_script('slick-js',get_template_directory_uri() .'./assets/js/jquery-1.11.0.min.js', array(), '1.11.0');

    
    // wp_enqueue_script( 'carousel-js', untrailingslashit( get_template_directory_uri() ) . '.assets/js/jquery-1.11.0.min.js', ['jquery', 'slick-js'], filemtime( untrailingslashit( get_template_directory() ) . '.assets/js/jquery-1.11.0.min.js' ), true );
}
add_action('wp_enqueue_scripts', 'wp_register_styles');


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Custom Theme Settings',
        'menu_title'    => 'Custom Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

if ( file_exists( dirname( __FILE__ ) . '/custom-post-type/cpt-common-breadcrumb.php' )) {
    require_once dirname( __FILE__ ) . '/custom-post-type/cpt-common-breadcrumb.php';
}

//enable svg uploading
// Wp v4.7.1 and higher
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
$filetype = wp_check_filetype( $filename, $mimes );
return [
    'ext'             => $filetype['ext'],
    'type'            => $filetype['type'],
    'proper_filename' => $data['proper_filename']
];

}, 10, 4 );

function cc_mime_types( $mimes ){
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


?>