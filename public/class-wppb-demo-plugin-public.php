<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.byu.edu
 * @since      0.1.0alpha
 *
 * @package    BYU_Calendar_Widget
 * @subpackage BYU_Calendar_Widget/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    BYU_Calendar_Widget
 * @subpackage BYU_Calendar_Widget/public
 * @author     Sherwin Harris <devinvinson@gmail.com>
 */
class BYU_Calendar_Widget_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/byu-calendar-widget-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/byu-calendar-widget-public.js', array( 'jquery' ), $this->version, false );

	}

}
