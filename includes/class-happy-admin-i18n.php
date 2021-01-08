<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://junaidahmed.com/
 * @since      1.0
 *
 * @package    Happy_admin
 * @subpackage Happy_admin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0
 * @package    Happy_admin
 * @subpackage Happy_admin/includes
 * @author     Junaid Ahmed
 */

if ( class_exists( 'Happy_Admin_i18n' ) ) {
	return;
}

class Happy_Admin_i18n {
	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since 1.0
	 */
	function load_plugin_textdomain() {
		// TODO: Implement localization proccesses.
	}
}
