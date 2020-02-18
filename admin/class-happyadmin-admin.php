<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http:/junaidahmed.com/
 * @since      1.0.0
 *
 * @package    Happy_admin
 * @subpackage Happy_admin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Happy_admin
 * @subpackage Happy_admin/admin
 * @author     Junaid Ahmed
 */
class Happyadmin_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $Happy_admin    The ID of this plugin.
	 */
	private $Happy_admin;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;
	
	/**
	 * Remove all admin notices
	 *
	 * 
	 */
	public function remove_admin_notices( ) {
		remove_all_actions( 'admin_notices' );
	} 

	/**
	 * Remove all admin notices
	 *
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

	function remove_actions() {

		if( isset( $_GET['toolbar'] ) ) {

			if ($_GET['toolbar'] == 'off') {
				show_admin_bar(false);
			}
			
		}
	}

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $Happy_admin       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
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
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Happy_admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Happy_admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->Happy_admin, plugin_dir_url( __FILE__ ) . 'css/happy-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Happy_admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Happy_admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->Happy_admin, plugin_dir_url( __FILE__ ) . 'js/happy-admin.js', array( 'jquery' ), $this->version, false );

	}

}
