<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.byu.edu
 * @since      0.1.0alpha
 *
 * @package    BYU_Calendar_Widget
 * @subpackage BYU_Calendar_Widget/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      0.1.0alpha
 * @package    BYU_Calendar_Widget
 * @subpackage BYU_Calendar_Widget/includes
 * @author     Sherwin Harris <devinvinson@gmail.com>
 */
class BYU_Calendar_Widget_i18n {

	/**
	 * The domain specified for this plugin.
	 *
	 * @since    0.1.0alpha
	 * @access   private
	 * @var      string    $domain    The domain identifier for this plugin.
	 */
	private $domain;

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    0.1.0alpha
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			$this->domain,
			false,
			dirname( plugin_basename( __FILE__ ) ) . '/languages/'
		);

	}

	/**
	 * Set the domain equal to that of the specified domain.
	 *
	 * @since    0.1.0alpha
	 * @param    string    $domain    The domain that represents the locale of this plugin.
	 */
	public function set_domain( $domain ) {
		$this->domain = $domain;
	}

}
