<?php
/**
 * Plugin Name: YayCommerce Blocks for Shadcn UI
 * Plugin URI: https://wpshadcn.com/
 * Description: Gutenberg blocks and 473 section patterns for the Shadcn theme, with a Lucide icon picker.
 * Version: 1.0.0
 * Requires at least: 6.6
 * Requires PHP: 7.4
 * Author: YayCommerce
 * Author URI: https://wpshadcn.com/
 * License: GPLv3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: yaycommerce-blocks-for-shadcn-ui
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
 * Whether the Shadcn theme — or a child of it — is the active theme.
 *
 * get_template() names the parent's directory even when a child theme is
 * active, so a Shadcn child passes exactly the same checks as the parent.
 *
 * The text domain is checked as well as the directory name: a theme installed
 * from a GitHub archive lands in a folder like `WPShadcn-main`, and renaming a
 * folder should not switch the blocks off.
 *
 * @return bool
 */
function shadcn_blocks_is_theme_active() {
	$template = strtolower( (string) get_template() );

	if ( in_array( $template, array( 'shadcn', 'wpshadcn' ), true ) ) {
		return true;
	}

	$parent = wp_get_theme( get_template() );

	return 'shadcn' === strtolower( (string) $parent->get( 'TextDomain' ) );
}

/**
 * Whether WooCommerce is active.
 *
 * Blocks that read shop data are registered only when this is true, so the
 * check has to be callable before `plugins_loaded` finishes. `class_exists`
 * is what WooCommerce itself documents for this, and it is already what
 * inc/FreeShipping.php uses.
 *
 * @return bool
 */
function shadcn_blocks_woo_active() {
	return class_exists( 'WooCommerce' );
}

/**
 * Tell WooCommerce this plugin is compatible with High-Performance Order
 * Storage.
 *
 * Declared for the plugin as a whole, outside any block gate: WooCommerce
 * reads these declarations to decide whether HPOS can be enabled at all, and a
 * plugin that stays silent is listed as incompatible even when it never
 * touches an order.
 */
add_action(
	'before_woocommerce_init',
	function () {
		if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility(
				'custom_order_tables',
				SHADCN_BLOCKS_FILE,
				true
			);
		}
	}
);

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
			<strong><?php esc_html_e( 'YayCommerce Blocks for Shadcn UI', 'yaycommerce-blocks-for-shadcn-ui' ); ?>:</strong>
			<?php
			echo wp_kses(
				sprintf(
					/* translators: 1: opening link tag, 2: closing link tag. */
					esc_html__( 'This plugin requires the %1$sShadcn%2$s theme to be active.', 'yaycommerce-blocks-for-shadcn-ui' ),
					'<a href="' . esc_url( \admin_url( 'theme-install.php?search=shadcn' ) ) . '">',
					'</a>'
				),
				array( 'a' => array( 'href' => array() ) )
			);
			?>
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

	// Load the main plugin class, pattern loader, free shipping class, avatar and icon helpers.
	require_once SHADCN_BLOCKS_DIR . 'inc/Traits/SingletonTrait.php';
	require_once SHADCN_BLOCKS_DIR . 'inc/Plugin.php';
	require_once SHADCN_BLOCKS_DIR . 'inc/Patterns.php';
	require_once SHADCN_BLOCKS_DIR . 'inc/FreeShipping.php';
	require_once SHADCN_BLOCKS_DIR . 'inc/Avatar.php';
	require_once SHADCN_BLOCKS_DIR . 'inc/Icons.php';
	require_once SHADCN_BLOCKS_DIR . 'inc/Pricing.php';
	require_once SHADCN_BLOCKS_DIR . 'inc/BlockStyles.php';
	// Form block backend: the public submit REST route + rate limiter.
	require_once SHADCN_BLOCKS_DIR . 'inc/Form/Caller.php';
	// Live Purchase backend: the recent-orders feed and its REST route.
	require_once SHADCN_BLOCKS_DIR . 'inc/LivePurchase/Caller.php';
	// Shadcn AI: plans pages out of the `shadcn/*` patterns this
	// plugin registers, so it loads after the pattern loader above.
	// Release builds leave it out for now (see release.sh).
	if ( file_exists( SHADCN_BLOCKS_DIR . 'inc/ShadcnAi/Caller.php' ) ) {
		require_once SHADCN_BLOCKS_DIR . 'inc/ShadcnAi/Caller.php';
	}
	\ShadcnBlocks\Icons::init();
}
add_action( 'plugins_loaded', 'shadcn_blocks_init' );
