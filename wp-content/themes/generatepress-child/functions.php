<?php

add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );

function my_plugin_add_stylesheet() {
	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css', false, '1.0', 'all' );
}

/* DISABLE GUTENBERG EDITOR */
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('gutenberg_use_widgets_block_editor', '__return_false', 100);
add_filter('use_widgets_block_editor', '__return_false');

function year_shortcode () {
    $year = '<script>document.write(new Date().getFullYear())</script>';
    return $year;
}
add_shortcode ('current_year', 'year_shortcode');


// Services CPT 
function services_post_type() {
    $labels = array(
     'name'                => _x( 'services', 'Post Type General Name', 'acsweb' ),
     'singular_name'       => _x( 'services', 'Post Type Singular Name', 'acsweb' ),
     'menu_name'           => __( 'services', 'acsweb' ),
     'parent_item_colon'   => __( 'Parent services', 'acsweb' ),
     'all_items'           => __( 'All services', 'acsweb' ),
     'view_item'           => __( 'View services', 'acsweb' ),
     'add_new_item'        => __( 'Add New services', 'acsweb' ),
     'add_new'             => __( 'Add New', 'acsweb' ),
     'edit_item'           => __( 'Edit services', 'acsweb' ),
     'update_item'         => __( 'Update services', 'acsweb' ),
     'search_items'        => __( 'Search services', 'acsweb' ),
     'not_found'           => __( 'Not Found', 'acsweb' ),
     'not_found_in_trash'  => __( 'Not found in Trash', 'acsweb' ),
    );
    $args = array(
     'label'               => __( 'services', 'acsweb' ),
     'description'         => __( 'services news and reviews', 'acsweb' ),
     'labels'              => $labels,
     'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
     'taxonomies'          => array( 'genres' ), 
     'hierarchical'        => false,
     'public'              => true,
     'show_ui'             => true,
     'show_in_menu'        => true,
     'show_in_nav_menus'   => true,
     'show_in_admin_bar'   => true,
   
     'menu_position'       => 5,
     'menu_icon'           => 'dashicons-admin-generic',
     'can_export'          => true,
     'has_archive'         => true,
     'exclude_from_search' => false,
     'publicly_queryable'  => true,
     'capability_type'     => 'page',
     'taxonomies'          => array( 'category' ),
    );
    register_post_type( 'services', $args );
   }
   add_action( 'init', 'services_post_type', 0 );