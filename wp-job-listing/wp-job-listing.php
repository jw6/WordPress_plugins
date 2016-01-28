<?php
/**
* Plugin Name: WP Job Listing
* Plugin URI: http://hatrackmedia.com
* Description: This plugin allows you to add a simple job listing to your WordPress website
* Author: Jay Wang
* Author: URI: http://hatrackmedia.com
* Version: 0.0.1
* License: GPLv2
*/

//Exit if accessed directly
if( ! defined( 'ABSPATH' ) ) {
	exit;
}

function dwwp_register_post_type() {

	$singular = 'Job Listing';
	$plural = "Job Listings";

	$labels = array(
		'name' 					=> $plural,
		'singular_name' 		=> $singular,
		'add_name' 				=> 'Add New',
		'add_new_item'			=> 'Add New ' . $singular,
		'edit'					=> 'Edit',
		'edit_name'				=> 'Edit' . $singular,
		'new_item'				=> 'New' . $singular,
		'view'					=> 'View' . $singular,
		'view_item'				=> 'Search' . $plural,
		'search'				=> 'Parent' . $singular,
		'not_found'				=> 'No' . $plural .' found',
		'not_found_in_trach'	=> 'No' . $plural .' in Trash' 		
		);

$args = array(
		'labels'              	  => $labels,
	        'public'              => true,
	        'publicly_queryable'  => true,
	        'exclude_from_search' => false,
	        'show_in_nav_menus'   => true,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 10,
	        'menu_icon'           => 'dashicons-businessman',
	        'can_export'          => true,
	        'delete_with_user'    => false,
	        'hierarchical'        => false,
	        'has_archive'         => true,
	        'query_var'           => true,
	        'capability_type'     => 'page',
	        'map_meta_cap'        => true,
	        //'capabilities' => array(),

	        'rewrite'             => array( 
	        	'slug' => $slug,
	        	'with_front' => true,
	        	'pages' => true,
	        	'feeds' => true,
	        ),
	        'supports'            => array( 
	        	'title', 
	        	'editor', 
	        	'author', 
	        	'custom-fields' 
	        )
	);

	register_post_type( 'job', $args);
}

add_action( 'init', 'dwwp_register_post_type' );


function dwwp_register_taxonomy(){

	$singular = 'Location';
	$plural = 'Locations';

	$labels = array(
	
	);

	$args = array(
		'hierarchical'			=>	true,
		'labels'				=> $labels,
		'show_ui'				=> true,
		'show_admin_column'		=> true,
		'update_count_callback'	=> '_update_post_term_count',
		'query_var'				=> true,
		'rewrite'				=> array( 'slug' => 'location'),
	);
		
}

add_action('inti','dwwp_register_taxonomy')

