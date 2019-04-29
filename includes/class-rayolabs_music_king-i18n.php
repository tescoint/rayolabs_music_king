<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://facebook.com/tsal3
 * @since      1.0.0
 *
 * @package    Rayolabs_music_king
 * @subpackage Rayolabs_music_king/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Rayolabs_music_king
 * @subpackage Rayolabs_music_king/includes
 * @author     Tes Sal <tescointsite@gmail.com>
 */
class Rayolabs_music_king_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'rayolabs_music_king',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
