<?php
/**
 * Main plugin class.
 *
 * @package WpShadcnBlocks
 */

namespace WpShadcnBlocks;

defined( 'ABSPATH' ) || exit;

/**
 * Plugin class.
 */
class Plugin {

	/**
	 * Instance.
	 *
	 * @var Plugin|null
	 */
	private static $instance = null;

	/**
	 * Get instance.
	 *
	 * @return Plugin
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Constructor.
	 */
	/**
	 * Track if accordion block is present on the page.
	 *
	 * @var bool
	 */
	private static $accordion_present = false;

	private function __construct() {
		add_action( 'init', array( $this, 'register_blocks' ) );
		add_filter( 'block_categories_all', array( $this, 'register_block_category' ), 10, 2 );
		add_filter( 'render_block', array( $this, 'mark_accordion_present' ), 10, 2 );
		add_action( 'wp_footer', array( $this, 'enqueue_accordion_script' ), 99 );
		add_filter( 'script_loader_tag', array( $this, 'add_module_type_to_view_script' ), 10, 3 );
	}

	/**
	 * Register block category.
	 *
	 * @param array                   $categories Block categories.
	 * @param \WP_Block_Editor_Context $context    Block editor context.
	 * @return array
	 */
	public function register_block_category( $categories, $context ) {
		return array_merge(
			array(
				array(
					'slug'  => 'wpshadcn',
					'title' => __( 'Shadcn', 'wpshadcn-blocks' ),
					'icon'  => null,
				),
			),
			$categories
		);
	}

	/**
	 * Register blocks.
	 */
	public function register_blocks() {
		$build_dir = WPSHADCN_BLOCKS_DIR . 'build/blocks/';

		// Check if build directory exists.
		if ( ! is_dir( $build_dir ) ) {
			return;
		}

		// Get all block directories.
		$block_dirs = glob( $build_dir . '*', GLOB_ONLYDIR );

		foreach ( $block_dirs as $block_dir ) {
			$block_json = $block_dir . '/block.json';

			if ( file_exists( $block_json ) ) {
				register_block_type( $block_dir );
			}
		}
	}

	/**
	 * Mark that accordion block is present on the page.
	 *
	 * @param string $block_content The block content.
	 * @param array  $block         The full block, including name and attributes.
	 * @return string The block content unchanged.
	 */
	public function mark_accordion_present( $block_content, $block ) {
		if ( isset( $block['blockName'] ) && 'wpshadcn/accordion' === $block['blockName'] ) {
			// Set flags that accordion is present.
			self::$accordion_present = true;
			if ( ! isset( $GLOBALS['wpshadcn_accordion_present'] ) ) {
				$GLOBALS['wpshadcn_accordion_present'] = true;
			}
			
			// Ensure Interactivity API is initialized.
			if ( function_exists( 'wp_interactivity_state' ) ) {
				wp_interactivity_state( 'wpshadcn/accordion', array() );
			}
			
			if ( function_exists( 'wp_enqueue_script_module' ) ) {
				wp_enqueue_script_module( '@wordpress/interactivity' );
			}
		}
		
		return $block_content;
	}

	/**
	 * Output accordion view script directly in footer if block is present.
	 */
	public function enqueue_accordion_script() {
		// Only on frontend, not in admin.
		if ( is_admin() ) {
			return;
		}

		// Check if accordion block is present (static variable set during render_block)
		if ( ! self::$accordion_present && ( ! isset( $GLOBALS['wpshadcn_accordion_present'] ) || ! $GLOBALS['wpshadcn_accordion_present'] ) ) {
			return;
		}

		// Output script tag directly
		$view_js_path = WPSHADCN_BLOCKS_DIR . 'build/blocks/accordion/view.js';
		$view_js_url  = WPSHADCN_BLOCKS_URL . 'build/blocks/accordion/view.js';
		$asset_path   = WPSHADCN_BLOCKS_DIR . 'build/blocks/accordion/view.asset.php';
		
		if ( file_exists( $view_js_path ) ) {
			$asset   = file_exists( $asset_path ) ? require $asset_path : array();
			$version = isset( $asset['version'] ) ? $asset['version'] : WPSHADCN_BLOCKS_VERSION;
			
			// Output script tag directly as a module
			printf(
				'<script type="module" src="%s?ver=%s" defer></script>' . "\n",
				esc_url( $view_js_url ),
				esc_attr( $version )
			);
		}
	}

	/**
	 * Add type="module" to view script tags for ES modules.
	 *
	 * @param string $tag    The script tag HTML.
	 * @string $handle      The script handle.
	 * @param string $src    The script source URL.
	 * @return string Modified script tag.
	 */
	public function add_module_type_to_view_script( $tag, $handle, $src ) {
		// Check if this is the accordion view script
		if ( strpos( $handle, 'wpshadcn-accordion-view-script' ) !== false || 
		     strpos( $src, 'blocks/accordion/view.js' ) !== false ) {
			// Remove any existing type attribute
			$tag = preg_replace( '/\stype="[^"]*"/', '', $tag );
			// Add type="module" if not already present
			if ( strpos( $tag, 'type=' ) === false ) {
				$tag = str_replace( ' src=', ' type="module" src=', $tag );
			}
		}
		return $tag;
	}

}

// Initialize the plugin.
Plugin::get_instance();
