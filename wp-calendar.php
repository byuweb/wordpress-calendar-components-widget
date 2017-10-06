<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.byu.edu
 * @since             0.1.0alpha
 * @package           BYU_Calendar
 *
 * @wordpress-plugin
 * Plugin Name:       WPPB Demo Plugin
 * Plugin URI:        https://github.com/byuweb/wp-calendar
 * Description:       This is used to display the BYU Calendar Widget
 * Version:           0.1.0alpha
 * Author:            Sherwin Harris
 * Author URI:        https://www.byu.edu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-calendar
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-calendar-activator.php
 */
function activate_wp_calendar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-calendar-activator.php';
	WP_Calendar_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-calendar-deactivator.php
 */
function deactivate_wp_calendar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-calendar-deactivator.php';
	WP_Calendar_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_calendar' );
register_deactivation_hook( __FILE__, 'deactivate_wp_calendar' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-calendar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0alpha
 */
function run_wp_calendar() {

	$plugin = new WP_Calendar();
	$plugin->run();

}
run_wp_calendar();
