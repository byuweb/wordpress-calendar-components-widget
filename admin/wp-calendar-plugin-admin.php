<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.byu.edu
 * @since      0.1.0alpha
 *
 * @package    BYU_Calendar_Widget
 * @subpackage BYU_Calendar_Widget/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    BYU_Calendar_Widget
 * @subpackage BYU_Calendar_Widget/admin
 * @author     Sherwin Harris <devinvinson@gmail.com>
 */
class BYU_Calendar_Widget_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.1.0alpha
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.1.0alpha
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0alpha
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->load_dependencies();

	}

	/**
	 * Load the required dependencies for the Admin facing functionality.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - BYU_Calendar_Widget_Admin_Settings. Registers the admin settings and page.
	 *
	 *
	 * @since    0.1.0alpha
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) .  'admin/class-byu-calendar-widget-settings.php';

	}
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    0.1.0alpha
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in BYU_Calendar_Widget_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The BYU_Calendar_Widget_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-calendar-plugin-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    0.1.0alpha
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in BYU_Calendar_Widget_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The BYU_Calendar_Widget_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-calendar-plugin-admin.js', array( 'jquery' ), $this->version, false );

	}



}
