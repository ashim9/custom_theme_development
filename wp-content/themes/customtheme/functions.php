<?php

function register_menus(){
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
    ));
}

function wp_register_styles(){
    wp_enqueue_style('stylesheet', get_template_directory_uri() . "./style.css", 'all');
}
add_action('wp_enqueue_scripts', 'wp_register_styles');

?>