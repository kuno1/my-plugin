<?php
/*
Plugin Name: My Plugin
Plugin URI: https://github.com/kuno1/my-plugin
Description: A sample plugin for Testing WordPress for Continuous Integration.
Author: Kunoichi INC.
Version: 1.0.0
Author URI: https://kunoichiwp.com
*/

// Avoid directory loading.
defined( 'ABSPATH' ) || die();

/**
 * Load all files.
 *
 * @internal
 */
function my_plugin_init() {
	$inc = __DIR__ . '/includes';
	foreach ( scandir( $inc ) as $file ) {
		if ( ! preg_match( '/^[^._].*\.php$/u', $file ) ) {
			// This is dot file.
			continue;
		}
		// Load files.
		require $inc . '/' . $file;
	}
}
add_action( 'plugins_loaded', 'my_plugin_init' );
