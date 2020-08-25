<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://junaidahmed.com/
 * @since      0.1
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
 * @since      0.1
 * @package    Happy_admin
 * @subpackage Happy_admin/includes
 * @author     Junaid Ahmed
 */
if ( !class_exists( 'Happy_admin_i18n' ) ) {
	class Happy_admin_i18n {


		/**
		 * Load the plugin text domain for translation.
		 *
		 * @since    0.1
		 */
		public function load_plugin_textdomain() {

			// load_plugin_textdomain(
			// 	'happy-admin',
			// 	false,
			// 	dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
			// );

		}



	}
}