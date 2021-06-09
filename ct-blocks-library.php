<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Plugin Name:       CT Blocks Library
 * Plugin URI:        https://codetot.com
 * Version:           0.0.1
 * Author:            CODE TOT JSC
 * Author URI:        https://codetot.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ct-blocks-library
 * Domain Path:       /languages
 */

define( 'CODETOT_BLOCKS_LIBRARY_VERSION', '0.0.1' );
define( 'CODETOT_BLOCKS_LIBRARY_PLUGIN_SLUG', 'ct-blocks-library' );
define( 'CODETOT_BLOCKS_LIBRARY_PLUGIN_NAME', esc_html_x('CT Blocks Library', 'plugin name', 'ct-blocks-library'));
define( 'CODETOT_BLOCKS_LIBRARY_DIR', plugin_dir_path(__FILE__));
define( 'CODETOT_BLOCKS_LIBRARY_AUTHOR', 'Code Tot JSC' );
define( 'CODETOT_BLOCKS_LIBRARY_AUTHOR_URI', 'https://codetot.com');
define( 'CODETOT_BLOCKS_LIBRARY_PLUGIN_URI', plugins_url('ct-blocks-library'));

require_once CODETOT_BLOCKS_LIBRARY_DIR . '/includes/class-ct-blocks-library.php';
