<?php
/**
 * Plugin Name:       All Icon Block
 * Description:       A simple little block that allows you add any kind of icon or graphic to your website.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           1.0.2
 * Author:            Kamal Hosen
 * Author URI:        https://www.kamalhosen.me
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       all-icon-block
 *
 * @package           All Icon Block
 */

/**
 * Registers the Icon Block using the metadata loaded from the `block.json`
 * file. Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 */
function create_all_icon_block_init() {
	register_block_type( __DIR__ . '/build' );

	// Load available translations.
	wp_set_script_translations( 'all-icon-block-editor-script-js', 'all-icon-block' );
}
add_action( 'init', 'create_all_icon_block_init' );
