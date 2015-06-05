<?php
/*Plugin Name: Custom Service Post Type
Description: This plugin registers the 'Service' post type. DO NOT DELETE
Version: 0.1
License: MIT
Author: Andrew Duckworth
*/

// Register Custom Post Type
function custom_service_post_type() {
	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Services', 'text_domain' ),
		'name_admin_bar'      => __( 'Services', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Service:', 'text_domain' ),
		'all_items'           => __( 'All Services', 'text_domain' ),
		'add_new_item'        => __( 'Add New Service', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Service', 'text_domain' ),
		'edit_item'           => __( 'Edit Service', 'text_domain' ),
		'update_item'         => __( 'Update Service', 'text_domain' ),
		'view_item'           => __( 'View Service', 'text_domain' ),
		'search_items'        => __( 'Search Service', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'services', 'text_domain' ),
		'description'         => __( 'Individual Service', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'trackbacks', 'revisions', 'custom-fields', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'services', $args );
}
// Hook into the 'init' action
add_action( 'init', 'custom_service_post_type', 0 );
?>