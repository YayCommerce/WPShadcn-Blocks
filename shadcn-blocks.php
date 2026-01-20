<?php
/**
 * Plugin Name: Shadcn Blocks
 * Plugin URI: https://wpshadcn.com/
 * Description: Gutenberg blocks for the Shadcn theme. Provides Card, Accordion, Tabs, Alert, and Dialog components.
 * Version: 1.0.0
 * Requires at least: 6.5
 * Requires PHP: 7.4
 * Tested up to: 6.9.0
 * Author: YayCommerce
 * Author URI: https://wpshadcn.com/
 * License: GPLv3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: shadcn-blocks
 * Domain Path: /languages
 *
 * @package ShadcnBlocks
 */

defined( 'ABSPATH' ) || exit;

// Define plugin constants.
define( 'SHADCN_BLOCKS_VERSION', '1.0.0' );
define( 'SHADCN_BLOCKS_FILE', __FILE__ );
define( 'SHADCN_BLOCKS_DIR', plugin_dir_path( __FILE__ ) );
define( 'SHADCN_BLOCKS_URL', plugin_dir_url( __FILE__ ) );

/**
 * Check if the Shadcn theme is active.
 *
 * @return bool
 */
function shadcn_blocks_is_theme_active() {
	$theme = wp_get_theme();
	return 'shadcn' === $theme->get_template() || 'WPShadcn' === $theme->get_template();
}

/**
 * Display admin notice if Shadcn theme is not active.
 */
function shadcn_blocks_theme_notice() {
	if ( shadcn_blocks_is_theme_active() ) {
		return;
	}
	?>
	<div class="notice notice-error">
		<p>
			<strong><?php esc_html_e( 'Shadcn Blocks', 'shadcn-blocks' ); ?>:</strong>
			<?php esc_html_e( 'This plugin requires the Shadcn theme to be active.', 'shadcn-blocks' ); ?>
		</p>
	</div>
	<?php
}
add_action( 'admin_notices', 'shadcn_blocks_theme_notice' );

/**
 * Initialize the plugin.
 */
function shadcn_blocks_init() {
	// Only load if Shadcn theme is active.
	if ( ! shadcn_blocks_is_theme_active() ) {
		return;
	}

	// Load the main plugin class and free shipping class.
	require_once SHADCN_BLOCKS_DIR . 'inc/Plugin.php';
	require_once SHADCN_BLOCKS_DIR . 'inc/FreeShipping.php';
}
add_action( 'plugins_loaded', 'shadcn_blocks_init' );
