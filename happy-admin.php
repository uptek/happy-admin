<?php

/**
 * @link              https://junaidahmed.com/happy-admin
 * @since             1.0.0
 * @package           happy_admin
 *
 * Plugin Name:       Happy Admin
 * Plugin URI:        https://junaidahmed.com/happy-admin
 * Description:       Happy Admin simplify your WordPress admin.
 * Version:           1.0.0
 * Author:            Junaid Ahmed
 * Author URI:        https://junaidahmed.com/
 * License:           GPL-3.0 or later 
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       happy-admin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'happy_admin_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-happy-admin-activator.php
 */
function activate_happy_admin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-happy-admin-activator.php';
	happy_admin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-happy-admin-deactivator.php
 */
function deactivate_happy_admin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-happy-admin-deactivator.php';
	happy_admin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_happy_admin' );
register_deactivation_hook( __FILE__, 'deactivate_happy_admin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-happy-admin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_happy_admin() {

	$plugin = new happy_admin();
	$plugin->run();

}
run_happy_admin();
