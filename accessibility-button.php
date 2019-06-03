<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://the-two.co/
 * @since             1.0.0
 * @package           Accessibility_Button
 *
 * @wordpress-plugin
 * Plugin Name:       accessibility-button
 * Plugin URI:        https://github.com/avshaa/accessibility-wp-plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            TheTwo
 * Author URI:        http://the-two.co/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       accessibility-button
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
define( 'ACCESSIBILITY_BUTTON_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-accessibility-button-activator.php
 */
function activate_accessibility_button() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-accessibility-button-activator.php';
	Accessibility_Button_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-accessibility-button-deactivator.php
 */
function deactivate_accessibility_button() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-accessibility-button-deactivator.php';
	Accessibility_Button_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_accessibility_button' );
register_deactivation_hook( __FILE__, 'deactivate_accessibility_button' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-accessibility-button.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_accessibility_button() {

	$plugin = new Accessibility_Button();
	$plugin->run();

}
run_accessibility_button();
