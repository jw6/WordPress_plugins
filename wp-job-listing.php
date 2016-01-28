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

	$args = array( 'public' => true, 'label' => 'Job Listing');

	register_post_type( 'job', $args);
}

add_action( 'init', 'dwwp_register_post_type' );
