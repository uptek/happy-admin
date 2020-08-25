<?php

/**
 * @link       http:/junaidahmed.com/
 * @since      0.1
 *
 * @package    Happy_admin
 * @subpackage Happy_admin/admin
 */

/*
 * @package    Happy_admin
 * @subpackage Happy_admin/admin
 * @author     Junaid Ahmed
 */
if ( !class_exists( 'Happyadmin_Admin' ) ) {
	class Happyadmin_Admin {

		/**
		 * The ID of this plugin.
		 *
		 * @since    0.1
		 * @access   private
		 * @var      string    $Happy_admin    The ID of this plugin.
		 */
		private $Happy_admin;

		/**
		 * The version of this plugin.
		 *
		 * @since    0.1
		 * @access   private
		 * @var      string    $version    The current version of this plugin.
		 */
		private $version;

		/**
		 * Remove all admin notices
		 *
		 * @return Boolen remove admin notices
		 */
		public function remove_admin_notices( ) {
			remove_all_actions( 'admin_notices' );
		}

		/**
		 * Hook for remove all extra admin columns
		 *
		 * @return Object admin columns return after cleanup
		 */
		public function remove_admin_columns( $admin_columns ) {

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

			foreach ( $columns  as $column) {
				unset( $admin_columns[$column] );
			}

			return $admin_columns;
		}


		/**
		 * Hook for Hide toolbar
		 *
		 * @return Object admin columns return after cleanup
		 */
		function remove_actions() {
			if( isset( $_GET['toolbar'] ) && $_GET['toolbar'] == 'off' ) {
				show_admin_bar(false);
			}
		}

		/**
		 * Initialize the class and set its properties.
		 *
		 * @since    0.1
		 * @param string  $Happy_admin  The name of this plugin.
		 * @param string  $version      The version of this plugin.
		 */
		public function __construct( $Happy_admin, $version ) {

			$this->Happy_admin = $Happy_admin;
			$this->version = $version;

			// Remove Notices
			add_action( 'admin_head', array( $this, 'remove_admin_notices' ) );

			// Remove Admin Columns
			add_filter ( 'manage_edit-post_columns', array( $this, 'remove_admin_columns' ) );
			add_filter ( 'manage_edit-page_columns', array( $this, 'remove_admin_columns' ) );
			add_filter ( 'manage_edit-product_columns', array( $this, 'remove_admin_columns' ) );

			// Remove Actions
			add_action('after_setup_theme', array( $this,  'remove_actions') );
			add_action( 'wp_enqueue_scripts',  array( $this,  'remove_actions') );

		}

		/**
		 * Register the stylesheets for the admin area.
		 *
		 * @since    0.1
		 */
		public function enqueue_styles() {
			wp_enqueue_style( $this->Happy_admin, plugin_dir_url( __FILE__ ) . 'css/happy-admin.css', array(), $this->version, 'all' );
		}

		/**
		 * Register the JavaScript for the admin area.
		 *
		 * @since    0.1
		 */
		public function enqueue_scripts() {
			wp_enqueue_script( $this->Happy_admin, plugin_dir_url( __FILE__ ) . 'js/happy-admin.js', array( 'jquery' ), $this->version, false );
		}

	}
}
