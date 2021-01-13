<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://junaidahmed.com/happy-admin
 * @since      1.0
 *
 * @package    happy_admin
 * @subpackage happy_admin/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0
 * @package    happy_admin
 * @subpackage happy_admin/includes
 * @author     Junaid Ahmed
 */

if ( class_exists( 'Happy_Admin_Deactivator' ) ) {
	return;
}

class Happy_Admin_Deactivator {
	/**
	 * Executes plugin activation processes.
	 *
	 *
	 * @since 1.0
	 */
	public static function deactivate() {
		// TODO: Implemente deactivate functionality.
	}
}
