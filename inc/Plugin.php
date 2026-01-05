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
	private function __construct() {
		add_action( 'init', array( $this, 'register_blocks' ) );
		add_filter( 'block_categories_all', array( $this, 'register_block_category' ), 10, 2 );
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
}

// Initialize the plugin.
Plugin::get_instance();
