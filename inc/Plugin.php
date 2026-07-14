<?php
/**
 * Main plugin class.
 *
 * @package ShadcnBlocks
 */

namespace ShadcnBlocks;

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
	 * Track which interactive blocks are present on the page.
	 *
	 * @var array
	 */
	private static $interactive_blocks = array();

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
		add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_editor_styles' ) );
		// Detect interactive blocks during content render, then enqueue modules in footer.
		add_filter( 'the_content', array( $this, 'detect_interactive_blocks_in_content' ), 5 );
		add_action( 'wp_footer', array( $this, 'enqueue_interactive_scripts' ), 5 );
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
					'slug'  => 'shadcn',
					'title' => __( 'Shadcn', 'shadcn-blocks' ),
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
		$build_dir = SHADCN_BLOCKS_DIR . 'build/blocks/';

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
	 * Detect interactive blocks in the rendered content.
	 *
	 * @param string $content The post content.
	 * @return string The content unchanged.
	 */
	public function detect_interactive_blocks_in_content( $content ) {
		// Only on frontend, not in admin.
		if ( is_admin() ) {
			return $content;
		}

		// Parse blocks from content to check attributes before rendering.
		$blocks = parse_blocks( $content );

		// Define interactive blocks that need view scripts.
		$interactive_blocks_config = array(
			'shadcn/alert'     => array(
				'namespace' => 'shadcn/alert',
				'view_file' => 'alert/view.js',
				'check'     => function( $block ) {
					// Only load if dismissible attribute is true.
					return isset( $block['attrs']['dismissible'] ) && $block['attrs']['dismissible'] === true;
				},
			),
			'shadcn/drawer' => array(
				'namespace' => 'shadcn/drawer',
				'view_file' => 'drawer/view.js',
				'check'     => function( $block ) {
					// Drawer always needs the script if present.
					return true;
				},
			),
			'shadcn/tooltip' => array(
				'namespace' => 'shadcn/tooltip',
				'view_file' => 'tooltip/view.js',
				'check'     => function( $block ) {
					// Tooltip always needs the script if present.
					return true;
				},
			),
			'shadcn/sheet' => array(
				'namespace' => 'shadcn/sheet',
				'view_file' => 'sheet/view.js',
				'check'     => function( $block ) {
					// Sheet always needs the script if present.
					return true;
				},
			),
			'shadcn/accordion' => array(
				'namespace' => 'shadcn/accordion',
				'view_file' => 'accordion/view.js',
				'check'     => function( $block ) {
					// Accordion always needs the script if present.
					return true;
				},
			),
		);

		// Recursively check blocks and inner blocks.
		$this->check_blocks_recursive( $blocks, $interactive_blocks_config );

		return $content;
	}

	/**
	 * Recursively check blocks and their inner blocks for interactive blocks.
	 *
	 * @param array $blocks Array of parsed blocks.
	 * @param array $interactive_blocks_config Configuration for interactive blocks.
	 */
	private function check_blocks_recursive( $blocks, $interactive_blocks_config ) {
		foreach ( $blocks as $block ) {
			$block_name = isset( $block['blockName'] ) ? $block['blockName'] : null;

			// Check if this block is an interactive block.
			if ( $block_name && isset( $interactive_blocks_config[ $block_name ] ) ) {
				$block_config = $interactive_blocks_config[ $block_name ];

				// Run the check function to determine if script should be loaded.
				if ( call_user_func( $block_config['check'], $block ) ) {
					$config_to_store = array(
						'namespace' => $block_config['namespace'],
						'view_file' => $block_config['view_file'],
					);
					self::$interactive_blocks[ $block_name ] = $config_to_store;

					// Ensure Interactivity API is initialized.
					if ( function_exists( 'wp_interactivity_state' ) ) {
						wp_interactivity_state( $block_config['namespace'], array() );
					}
					if ( function_exists( 'wp_enqueue_script_module' ) ) {
						wp_enqueue_script_module( '@wordpress/interactivity' );
					}
				}
			}

			// Recursively check inner blocks.
			if ( ! empty( $block['innerBlocks'] ) ) {
				$this->check_blocks_recursive( $block['innerBlocks'], $interactive_blocks_config );
			}
		}
	}

	/**
	 * Enqueue interactive block view scripts using WordPress Script Modules API.
	 */
	public function enqueue_interactive_scripts() {
		// Only on frontend, not in admin.
		if ( is_admin() ) {
			return;
		}

		// Get blocks from static property or global fallback.
		$blocks = self::$interactive_blocks;
		if ( empty( $blocks ) && isset( $GLOBALS['shadcn_interactive_blocks'] ) ) {
			$blocks = $GLOBALS['shadcn_interactive_blocks'];
		}

		if ( empty( $blocks ) ) {
			return;
		}

		// Enqueue view scripts for each interactive block using Script Modules API.
		foreach ( $blocks as $block_name => $block_config ) {
			$view_js_path = SHADCN_BLOCKS_DIR . 'build/blocks/' . $block_config['view_file'];
			$view_js_url  = SHADCN_BLOCKS_URL . 'build/blocks/' . $block_config['view_file'];
			$asset_path   = str_replace( '.js', '.asset.php', $view_js_path );

			if ( file_exists( $view_js_path ) ) {
				$asset   = file_exists( $asset_path ) ? require $asset_path : array();
				$version = isset( $asset['version'] ) ? $asset['version'] : SHADCN_BLOCKS_VERSION;

				// Generate unique module ID from block name.
				$module_id = str_replace( '/', '-', $block_name ) . '-view';

				// Register and enqueue as script module with @wordpress/interactivity dependency.
				if ( function_exists( 'wp_register_script_module' ) ) {
					wp_register_script_module(
						$module_id,
						$view_js_url,
						array( '@wordpress/interactivity' ),
						$version
					);
					wp_enqueue_script_module( $module_id );
				}
			}
		}
	}

	/**
	 * Enqueue editor styles with CSS variables.
	 */
	public function enqueue_editor_styles() {
		$editor_css_path = SHADCN_BLOCKS_DIR . 'src/editor-styles.css';
		$editor_css_url  = SHADCN_BLOCKS_URL . 'src/editor-styles.css';

		if ( file_exists( $editor_css_path ) ) {
			wp_enqueue_style(
				'shadcn-blocks-editor-styles',
				$editor_css_url,
				array(),
				SHADCN_BLOCKS_VERSION
			);
		}

	}
}

// Initialize the plugin.
Plugin::get_instance();
