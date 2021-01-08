<?php

/**
 * Fired during plugin activation
 *
 * @link       https://junaidahmed.com/happy-admin
 * @since      1.0
 *
 * @package    happy_admin
 * @subpackage happy_admin/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0
 * @package    happy_admin
 * @subpackage happy_admin/includes
 * @author     Junaid Ahmed
 */

 if ( class_exists( 'Happy_Admin_Activator' ) ) {
	return;
 }

class Happy_Admin_Activator {
	/**
	 * Executes plugin activation processes.
	 *
	 * @since 1.0
	 */
	static function activate() {
		// TODO: Implemente activate functionality.
	}
}
