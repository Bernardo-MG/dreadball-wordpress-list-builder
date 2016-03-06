<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/Bernardo-MG
 * @since             1.0.0
 * @package           Dreadball_List_Builder
 *
 * @wordpress-plugin
 * Plugin Name:       Dreadball List Builder
 * Plugin URI:        https://github.com/Bernardo-MG/dreadball-wordpress-list-builder
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Bernardo Martínez Garrido
 * Author URI:        https://github.com/Bernardo-MG
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dreadball-list-builder
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dreadball-list-builder-activator.php
 */
function activate_dreadball_list_builder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dreadball-list-builder-activator.php';
	Dreadball_List_Builder_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dreadball-list-builder-deactivator.php
 */
function deactivate_dreadball_list_builder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dreadball-list-builder-deactivator.php';
	Dreadball_List_Builder_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dreadball_list_builder' );
register_deactivation_hook( __FILE__, 'deactivate_dreadball_list_builder' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dreadball-list-builder.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dreadball_list_builder() {

	$plugin = new Dreadball_List_Builder();
	$plugin->run();

}
run_dreadball_list_builder();
