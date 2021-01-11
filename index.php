<?php
/*
Plugin Name: Dentist Custom Post
Plugin URI: Demonstration of Third Party Plugin Dependency
Description:
Version: 1.0
Author: Developer Sign
Author URI: eeexpertbd.com
License: GPLv2 or later
Text Domain: dentist-custom
Domain Path: /languages/
*/
define( 'ACF_EARLY_ACCESS', '5' );
require_once( plugin_dir_path( __FILE__ ) . "/libs/class-tgm-plugin-activation.php" );
require_once( plugin_dir_path( __FILE__ ) . "/inc/metabox.php" );
function dentist_bootstrap() {
	load_plugin_textdomain( "dentist-custom", false, dirname( __FILE__ ) . "/languages" );
}

add_action( 'plugins_loaded', 'dentist_bootstrap' );

add_action( 'tgmpa_register', 'dentist_tgm_register_required_plugins' );

function dentist_tgm_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(


		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'     => 'Advanced Custom Fields',
			'slug'     => 'advanced-custom-fields',
			'required' => true,
		),


	);


	$config = array(
		'id'           => 'dentist-custom',
		// Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',
		// Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins',
		// Menu slug.
		'parent_slug'  => 'plugins.php',
		// Parent menu slug.
		'capability'   => 'manage_options',
		// Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,
		// Show admin notices or not.
		'dismissable'  => true,
		// If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',
		// If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,
		// Automatically activate plugins after installation or not.
		'message'      => '',
		// Message to output right before the plugins table.


	);

	tgmpa( $plugins, $config );
}


//add_filter('acf/settings/show_admin', '__return_false');



