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
 * @package           BYU_Calendar_Widget
 *
 * @wordpress-plugin
 * Plugin Name:       WPPB Demo Plugin
 * Plugin URI:        https://github.com/byuweb/wordpress-calendar-components-widget
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.1.0alpha
 * Author:            Sherwin Harris
 * Author URI:        https://www.byu.edu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       byu-calendar-widget
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-byu-calendar-widget-activator.php
 */
function activate_byu_calendar_widget() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-byu-calendar-widget-activator.php';
	BYU_Calendar_Widget_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-byu-calendar-widget-deactivator.php
 */
function deactivate_byu_calendar_widget() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-byu-calendar-widget-deactivator.php';
	BYU_Calendar_Widget_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_byu_calendar_widget' );
register_deactivation_hook( __FILE__, 'deactivate_byu_calendar_widget' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-byu-calendar-widget.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0alpha
 */
function run_byu_calendar_widget() {

	$plugin = new BYU_Calendar_Widget();
	$plugin->run();

}
run_byu_calendar_widget();
