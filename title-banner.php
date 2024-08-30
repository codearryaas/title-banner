<?php
/**
 * Plugin Name:       Title Banner
 * Description:       A cover block variation.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Rakesh Lawaju
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       title-banner
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue editor assets.
 *
 * @return void
 */
function title_banner_editor_assets() {
	// Read assets file.
	$assets_file = include plugin_dir_path( __FILE__ ) . 'build/index.asset.php';
	$ver = $assets_file['version'];
	$deps = $assets_file['dependencies'];

	// Enqueue script.
	wp_enqueue_script( 'title-banner-editor', plugin_dir_url( __FILE__ ) . '/build/index.js', $deps, $ver );
}
add_action( 'enqueue_block_editor_assets', 'title_banner_editor_assets' );
