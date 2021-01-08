<?php

/**
 * @link       http:/junaidahmed.com/
 * @since      1.0
 *
 * @package    Happy_admin
 * @subpackage Happy_admin/admin
 */

/*
 * @package    Happy_admin
 * @subpackage Happy_admin/admin
 * @author     Junaid Ahmed
 */
if ( class_exists( 'Happy_Admin_Admin' ) ) {
	return;
}

class Happy_Admin_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0
	 * @access   protected
	 * @var      string    $name    The name of this plugin.
	 */
	protected $name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0
	 * @access   protected
	 * @var      string    $version    The current version of this plugin.
	 */
	protected $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0
	 * @param string  $Happy_admin  The name of this plugin.
	 * @param string  $version      The version of this plugin.
	 */
	function __construct( $name, $version ) {
		$this->name = $name;
		$this->version = $version;

		/**
		 * Remove extra notices.
		 */
		add_action( 'admin_head', array( $this, 'remove_admin_notices' ) );

		/**
		 * Remove admin columns
		 */
		add_filter ( 'manage_edit-post_columns', array( $this, 'remove_admin_columns' ) );
		add_filter ( 'manage_edit-page_columns', array( $this, 'remove_admin_columns' ) );
		add_filter ( 'manage_edit-product_columns', array( $this, 'remove_admin_columns' ) );

		/**
		 * Removes admin toolbar.
		 */
		add_action( 'after_setup_theme', array( $this, 'remove_toolbal' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'remove_toolbal' ) );

	}

	/**
	 * Remove all admin notices
	 *
	 * @return void
	 */
	function remove_admin_notices() {
		remove_all_actions( 'admin_notices' );
	}

	/**
	 * Hook for removing extra admin columns.
	 *
	 * @return array List of filtered admins columns.
	 */
	function remove_admin_columns( $admin_columns ) {
		$columns = array(
			'wpseo-score',
			'wpseo-title',
			'wpseo-metadesc',
			'wpseo-focuskw',
			'wpseo-score-readability',
			'wpseo-links',
			'ss_social_shares',
			'mo_openid_delete_profile_data',
			'ss_social_shares',
			'heateor_ss_delete_profile_data'
		);

		foreach ( $columns as $column) {
			unset( $admin_columns[$column] );
		}

		return $admin_columns;
	}

	/**
	 * Hook for hiding toolbal.
	 *
	 * @return void
	 */
	function remove_toolbal() {
		if( isset( $_GET['toolbar'] ) && $_GET['toolbar'] == 'off' ) {
			add_filter( 'show_admin_bar', '__return_false' );
		}
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0
	 */
	function enqueue_styles() {
		wp_enqueue_style( $this->name, plugin_dir_url( __FILE__ ) . 'css/happy-admin.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0
	 */
	function enqueue_scripts() {
		wp_enqueue_script( $this->name, plugin_dir_url( __FILE__ ) . 'js/happy-admin.js', array( 'jquery' ), $this->version, false );
	}
}
