<?php
add_action( 'init', 'register_cpt_common_breadcrumb' );

function register_cpt_common_breadcrumb() {
  $labels = array(
    'name'               => 'Common Breadcrumb',
    'singular_name'      => 'Common Breadcrumb',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Common Breadcrumb',
    'edit_item'          => 'Edit Common Breadcrumb',
    'new_item'           => 'New Common Breadcrumb',
    'all_items'          => 'All Common Breadcrumb',
    'view_item'          => 'View Common Breadcrumb',
    'search_items'       => 'Search Common Breadcrumb',
    'not_found'          => 'No Common Breadcrumb found',
    'not_found_in_trash' => 'No Common Breadcrumb found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Common Breadcrumb'
  );

  $args = array(
    'labels'             => $labels,
    'description'        => '',
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'common-breadcrumb' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'thumbnail' )
  );
  register_post_type( 'common-breadcrumb', $args );
}