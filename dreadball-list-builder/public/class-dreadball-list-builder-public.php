<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/Bernardo-MG
 * @since      1.0.0
 *
 * @package    Dreadball_List_Builder
 * @subpackage Dreadball_List_Builder/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dreadball_List_Builder
 * @subpackage Dreadball_List_Builder/public
 * @author     Bernardo Martínez Garrido <programming@wandrell.com>
 */
class Dreadball_List_Builder_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		add_shortcode( 'test_shortcode', array( $this, 'test_shortcode_func' )  );
		add_shortcode( 'dreadball_list_abilities', array( $this, 'list_abilities_func' )  );
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dreadball-list-builder-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dreadball-list-builder-public.js', array( 'jquery' ), $this->version, false );

	}

	function test_shortcode_func() {
		return '<p>TEST TEXT</p>';
	}

	function list_abilities_func() {
		include_once 'partials/dreadball-list-builder-public-abilities-list.php';
	}

}
