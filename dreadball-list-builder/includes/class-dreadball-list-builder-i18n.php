<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/Bernardo-MG
 * @since      1.0.0
 *
 * @package    Dreadball_List_Builder
 * @subpackage Dreadball_List_Builder/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Dreadball_List_Builder
 * @subpackage Dreadball_List_Builder/includes
 * @author     Bernardo Martínez Garrido <programming@wandrell.com>
 */
class Dreadball_List_Builder_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'dreadball-list-builder',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
