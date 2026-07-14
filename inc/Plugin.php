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
		// Print the single shared Sonner toaster (and enqueue its module) when a
		// sonner block rendered on the page. Runs before wp_print_footer_scripts.
		add_action( 'wp_footer', array( $this, 'render_sonner_toaster' ), 5 );
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
	 * Print the single shared Sonner toaster in the footer and enqueue its view
	 * module. Runs only when a sonner block rendered on the page (flag set in
	 * the sonner block render.php), so it works for content AND FSE templates.
	 */
	public function render_sonner_toaster() {
		if ( is_admin() || empty( $GLOBALS['shadcn_sonner_present'] ) ) {
			return;
		}

		// Initialize store state for SSR hydration (empty toast list).
		if ( function_exists( 'wp_interactivity_state' ) ) {
			wp_interactivity_state( 'shadcn/sonner', array( 'toasts' => array() ) );
		}

		// Register + enqueue the view module (mirrors enqueue_interactive_scripts).
		$view_js_path = SHADCN_BLOCKS_DIR . 'build/blocks/sonner/view.js';
		$view_js_url  = SHADCN_BLOCKS_URL . 'build/blocks/sonner/view.js';
		$asset_path   = str_replace( '.js', '.asset.php', $view_js_path );

		if ( file_exists( $view_js_path ) && function_exists( 'wp_register_script_module' ) ) {
			$asset   = file_exists( $asset_path ) ? require $asset_path : array();
			$version = isset( $asset['version'] ) ? $asset['version'] : SHADCN_BLOCKS_VERSION;

			wp_register_script_module(
				'shadcn-sonner-view',
				$view_js_url,
				array( '@wordpress/interactivity' ),
				$version
			);
			wp_enqueue_script_module( 'shadcn-sonner-view' );
			wp_enqueue_script_module( '@wordpress/interactivity' );
		}

		// Single shared toaster; data-wp-each renders state.toasts client-side.
		$toaster = '<div class="wp-block-shadcn-sonner__toaster" data-wp-interactive="shadcn/sonner" data-wp-watch="callbacks.onToastsChange" data-wp-bind--data-expanded="state.expanded" role="region" aria-label="' . esc_attr__( 'Notifications', 'shadcn-blocks' ) . '" aria-live="polite">'
			. '<template data-wp-each--toast="state.toasts" data-wp-each-key="context.toast.id">'
			. '<div class="wp-block-shadcn-sonner__toast" data-wp-bind--data-type="context.toast.type" data-wp-on--mouseenter="actions.expand" data-wp-on--mouseleave="actions.collapse">'
			. '<span class="wp-block-shadcn-sonner__toast__icon" aria-hidden="true">'
			. '<svg class="wp-block-shadcn-sonner__toast__ico wp-block-shadcn-sonner__toast__ico--success" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>'
			. '<svg class="wp-block-shadcn-sonner__toast__ico wp-block-shadcn-sonner__toast__ico--error" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="m15 9-6 6"></path><path d="m9 9 6 6"></path></svg>'
			. '<svg class="wp-block-shadcn-sonner__toast__ico wp-block-shadcn-sonner__toast__ico--warning" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>'
			. '<svg class="wp-block-shadcn-sonner__toast__ico wp-block-shadcn-sonner__toast__ico--info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>'
			. '</span>'
			. '<div class="wp-block-shadcn-sonner__toast__content">'
			. '<div class="wp-block-shadcn-sonner__toast__title" data-wp-text="context.toast.title"></div>'
			. '<div class="wp-block-shadcn-sonner__toast__desc" data-wp-text="context.toast.description"></div>'
			. '</div></div></template></div>';

		if ( function_exists( 'wp_interactivity_process_directives' ) ) {
			$toaster = wp_interactivity_process_directives( $toaster );
		}

		echo $toaster; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
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
