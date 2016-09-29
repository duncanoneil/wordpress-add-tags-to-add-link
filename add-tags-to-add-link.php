<?php

/*
Plugin Name: Add Tags to Add Link
Description: Adds all tags to the "Add Link" modal in the WordPress editor, allowing you to link to tags directly.
Author: Duncan Oneil <duncan.oneil@gmail.com>
Version: 1.0
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

/* ---------------------------------- *
 * constants
 * ---------------------------------- */

if ( !defined( 'ATTAL_PLUGIN_DIR' ) ) {
	define( 'ATTAL_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}
if ( !defined( 'ATTAL_PLUGIN_URL' ) ) {
	define( 'ATTAL_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

/* ---------------------------------- *
 * includes
 * ---------------------------------- */

include( ATTAL_PLUGIN_DIR . 'includes/add-tags.php' );
