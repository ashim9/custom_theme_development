<?php

function register_menus(){
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
    ));
}

add_action( 'init', 'register_menus' );


function wp_register_styles(){
    wp_enqueue_style('stylesheet', get_template_directory_uri() . "./style.css", 'all');
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