<?php
	/**
		*
		* Plugin Name: Livestyled
		* Description: Custom plugin containing all custom post types and taxonomies required for the site.
		* Version: 1.0.0
		* Author: Big Rock
		* Author URI: https://www.wearebigrock.com/
	*/
	/// Extends
	include( plugin_dir_path(__FILE__) . 'inc/wp-extend/wp-menus.php' );
	
	
	
	include( plugin_dir_path(__FILE__) . 'inc/custom/tracking-gtm.php' );
	include( plugin_dir_path(__FILE__) . 'inc/custom/display-svg-icon.php' );
	include( plugin_dir_path(__FILE__) . 'inc/custom/allow-svg-upload.php' );
	include( plugin_dir_path(__FILE__) . 'inc/custom/gravity-forms-cleanup.php' );
	include( plugin_dir_path(__FILE__) . 'inc/custom/defer-scripts.php' );
	include( plugin_dir_path(__FILE__) . 'inc/custom/remove-p-tag-from-images.php' );
	include( plugin_dir_path(__FILE__) . 'inc/custom/limit-content-length.php' );

	
	
	/// Custom Post Types
	include( plugin_dir_path(__FILE__) . 'inc/custom-post-types/_case-studies.php' );


	/// Custom Taxonomies
	/**
	 * EXAMPLE OF HOW TO SET ONE UP!
	 * include( plugin_dir_path(__FILE__) . 'inc/custom-post-taxonomies/_example.php' );
	 **/


	/**
	 * Extending plugins
	 */
	include( plugin_dir_path(__FILE__) . 'inc/plugins/acf-pro.php' );
	