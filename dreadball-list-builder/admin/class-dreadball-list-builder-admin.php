<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/Bernardo-MG
 * @since      1.0.0
 *
 * @package    Dreadball_List_Builder
 * @subpackage Dreadball_List_Builder/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dreadball_List_Builder
 * @subpackage Dreadball_List_Builder/admin
 * @author     Bernardo Martínez Garrido <programming@wandrell.com>
 */
class Dreadball_List_Builder_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The options name to be used in this plugin
	 *
	 * @since  	1.0.0
	 * @access 	private
	 * @var  	string 		$option_name 	Option name of this plugin
	 */
	private $option_name = 'dreadball_list_builder';

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

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
		 * defined in Dreadball_List_Builder_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dreadball_List_Builder_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dreadball-list-builder-admin.css', array(), $this->version, 'all' );

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
		 * defined in Dreadball_List_Builder_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dreadball_List_Builder_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dreadball-list-builder-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Add an options page under the Settings submenu
	 *
	 * @since  1.0.0
	 */
	public function add_options_page() {

		$this->plugin_screen_hook_suffix = add_options_page(
			__( 'Dreadball List Builder Settings', 'dreadball-list-builder' ),
			__( 'Dreadball List Builder', 'dreadball-list-builder' ),
			'manage_options',
			$this->plugin_name,
			array( $this, 'display_options_page' )
		);

	}

	/**
	 * Render the options page for plugin
	 *
	 * @since  1.0.0
	 */
	public function display_options_page() {
		include_once 'partials/dreadball-list-builder-admin-display.php';
	}

	/**
	 * Register all related settings of this plugin
	 *
	 * @since  1.0.0
	 */
	public function register_setting() {

		add_settings_section(
			$this->option_name . '_general',
			__( 'General', 'dreadball-list-builder' ),
			array( $this, $this->option_name . '_general_cb' ),
			$this->plugin_name
		);

		add_settings_field(
			$this->option_name . '_url',
			__( 'URL to the web service', 'dreadball-list-builder' ),
			array( $this, $this->option_name . '_url_cb' ),
			$this->plugin_name,
			$this->option_name . '_general',
			array( 'label_for' => $this->option_name . '_url' )
		);

		register_setting( $this->plugin_name, $this->option_name . '_url', 'strval' );
	}

	/**
	 * Render the text for the general section
	 *
	 * @since  1.0.0
	 */
	public function outdated_notice_general_cb() {
		echo '<p>' . __( 'Please change the settings accordingly.', 'outdated-notice' ) . '</p>';
	}

	/**
	 * Render the URL input for this plugin
	 *
	 * @since  1.0.0
	 */
	public function dreadball_list_builder_url_cb() {
		$url = get_option( $this->option_name . '_url' );
		echo '<input type="text" name="' . $this->option_name . '_url' . '" id="' . $this->option_name . '_url' . '" value="' . $url . '"> ';
	}

}
