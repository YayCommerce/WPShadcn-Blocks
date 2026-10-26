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
	 * Resolved config of the first Live Purchase block rendered this request,
	 * or null when none has rendered.
	 *
	 * A class static rather than a global: this holds per-instance state, so
	 * unlike $GLOBALS['shadcn_sonner_present'] (a presence flag) a stray
	 * second write would silently change what the toast shows.
	 *
	 * @var array|null
	 */
	private static $live_purchase_config = null;

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
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_kbd_style' ) );
		// Detect interactive blocks during content render, then enqueue modules in footer.
		add_filter( 'the_content', array( $this, 'detect_interactive_blocks_in_content' ), 5 );
		add_action( 'wp_footer', array( $this, 'enqueue_interactive_scripts' ), 5 );
		// Print the single shared Sonner toaster (and enqueue its module) when a
		// sonner block rendered on the page. Runs before wp_print_footer_scripts.
		add_action( 'wp_footer', array( $this, 'render_sonner_toaster' ), 5 );
		// Same idea for the Live Purchase toast: the block itself renders
		// nothing in place, and the fixed-position region is printed here.
		add_action( 'wp_footer', array( $this, 'render_live_purchase_region' ), 5 );
	}

	/**
	 * Load the Kbd stylesheet on every page.
	 *
	 * The stylesheet also styles core's "Keyboard input" format (a bare <kbd>
	 * inside other blocks' HTML), which doesn't make WordPress load it.
	 */
	public function enqueue_kbd_style() {
		$handle = generate_block_asset_handle( 'shadcn/kbd', 'style' );
		if ( wp_style_is( $handle, 'registered' ) ) {
			wp_enqueue_style( $handle );
		}
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
					'title' => __( 'Shadcn', 'yaycommerce-blocks-for-shadcn-ui' ),
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

			if ( ! file_exists( $block_json ) ) {
				continue;
			}

			// The glob registers whatever it finds, so a block that is
			// meaningless without another plugin has to be skipped by name.
			if ( 'live-purchase' === basename( $block_dir ) && ! shadcn_blocks_woo_active() ) {
				continue;
			}

			register_block_type( $block_dir );
		}

		// The marquee templates insert placeholder logos; point them at the
		// bundled image rather than a remote host. Printed before each
		// editor script because the templates are built at module load.
		$editor_config = 'window.shadcnBlocksEditor = ' . wp_json_encode(
			array( 'placeholderImage' => SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' )
		) . ';';
		foreach ( array( 'shadcn/marquee', 'shadcn/marquee-item' ) as $block_name ) {
			wp_add_inline_script( generate_block_asset_handle( $block_name, 'editorScript' ), $editor_config, 'before' );
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
			'shadcn/tabs' => array(
				'namespace' => 'shadcn/tabs',
				'view_file' => 'tabs/view.js',
				'check'     => function( $block ) {
					// Tabs always needs the script if present.
					return true;
				},
			),
			'shadcn/pricing' => array(
				'namespace' => 'shadcn/pricing',
				'view_file' => 'pricing/view.js',
				'check'     => function( $block ) {
					// Pricing always needs the script if present.
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
		$toaster = '<div class="wp-block-shadcn-sonner__toaster" data-wp-interactive="shadcn/sonner" data-wp-watch="callbacks.onToastsChange" data-wp-bind--data-expanded="state.expanded" role="region" aria-label="' . esc_attr__( 'Notifications', 'yaycommerce-blocks-for-shadcn-ui' ) . '" aria-live="polite">'
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
	 * Record the Live Purchase config and enqueue its view module.
	 *
	 * The block's render callback returns an empty string and hands its
	 * resolved config here, because a fixed-position toast must not sit inside
	 * whatever container the author dropped the block into; the region is
	 * printed later by render_live_purchase_region().
	 *
	 * The region starts empty. Phase 3's view script fills it — from the REST
	 * feed in `orders` mode, or from the config's own entries in `custom` mode
	 * — so a page whose feed turns out to be empty renders no toast markup at
	 * all rather than an empty box.
	 *
	 * @param array $config Resolved block config.
	 */
	public function register_live_purchase_config( array $config ) {
		// First render wins for the *config*. `multiple: false` only stops a
		// second instance in one editor document; it does nothing about the
		// same block rendering several times in one request — a query loop
		// over posts that each contain it, or the block sitting in both a
		// template part and the content. Last-wins would silently run the
		// toast with a config the author never saw on this page, so the first
		// one is kept and the rest are ignored in document order.
		if ( null === self::$live_purchase_config ) {
			self::$live_purchase_config = $config;
		}

		// The enqueue, though, runs on *every* render, deliberately.
		//
		// A page can render the content more than once — an excerpt pass, an
		// SEO description, a feed — and only some of those passes leave the
		// script-module queue intact. Enqueuing behind the first-wins guard
		// therefore loses the module whenever the first pass is a throwaway
		// one. Enqueuing is idempotent (WP_Script_Modules::enqueue() checks
		// the queue before appending), so repeating it costs nothing and
		// removes the dependence on which pass happened to be first.
		//
		// It also has to happen here rather than in the footer callback: in a
		// block theme the import map is printed during `wp_head`, and
		// template-canvas.php renders the whole template *before* `<head>`
		// precisely so blocks can enqueue in time. A `wp_footer` enqueue is
		// past that point — the module tag would be emitted with
		// `@wordpress/interactivity` missing from the map, and the browser
		// would fail to resolve the bare specifier.
		$this->enqueue_live_purchase_module();
	}

	/**
	 * Register and enqueue the Live Purchase view module.
	 *
	 * Idempotent: WP_Script_Modules::register() ignores a repeat id and
	 * enqueue() checks the queue before appending, so calling this from both
	 * block-render time and the footer is safe.
	 */
	private function enqueue_live_purchase_module() {
		// The block's own stylesheet has to be asked for by name. WordPress
		// ties automatic block-style enqueueing to a block producing output,
		// and this one deliberately returns an empty string so its toast can
		// be printed in the footer instead — which leaves the registered
		// handle sitting there unused and the toast unstyled.
		if ( wp_style_is( 'shadcn-live-purchase-style', 'registered' ) ) {
			wp_enqueue_style( 'shadcn-live-purchase-style' );
		}

		$view_js_path = SHADCN_BLOCKS_DIR . 'build/blocks/live-purchase/view.js';
		$view_js_url  = SHADCN_BLOCKS_URL . 'build/blocks/live-purchase/view.js';
		$asset_path   = str_replace( '.js', '.asset.php', $view_js_path );

		if ( ! file_exists( $view_js_path ) || ! function_exists( 'wp_register_script_module' ) ) {
			return;
		}

		$asset   = file_exists( $asset_path ) ? require $asset_path : array();
		$version = isset( $asset['version'] ) ? $asset['version'] : SHADCN_BLOCKS_VERSION;

		wp_register_script_module(
			'shadcn-live-purchase-view',
			$view_js_url,
			array( '@wordpress/interactivity' ),
			$version
		);
		wp_enqueue_script_module( 'shadcn-live-purchase-view' );
		wp_enqueue_script_module( '@wordpress/interactivity' );
	}

	/**
	 * Print the Live Purchase toast region.
	 *
	 * Repeats the enqueue. The render-time call in
	 * register_live_purchase_config() is the one that can reach the
	 * block-theme import map, but on at least one real install its queue entry
	 * does not survive to print time — verified by dumping
	 * WP_Script_Modules::$queue immediately after the call (entry present) and
	 * again at `wp_head` priority 1 on the same object instance (entry gone).
	 * The cause was not identified. Enqueuing again here is idempotent and is
	 * what actually gets the module tag emitted, so both calls stay: the early
	 * one for the import map, this one for the script tag.
	 */
	public function render_live_purchase_region() {
		if ( is_admin() || null === self::$live_purchase_config ) {
			return;
		}

		$config = self::$live_purchase_config;

		// Guards against a theme or plugin calling wp_footer() twice; the
		// multi-render case is already handled by first-wins on the setter.
		self::$live_purchase_config = null;

		$this->enqueue_live_purchase_module();

		// A class of its own, not the block wrapper class. WordPress adds
		// `wp-block-shadcn-live-purchase` to the editor wrapper automatically,
		// so hanging the fixed-position region styling on that name leaks
		// position:fixed and pointer-events:none onto the canvas preview.
		$classes = 'wp-block-shadcn-live-purchase__region';
		if ( ! empty( $config['hideOnMobile'] ) ) {
			$classes .= ' is-hidden-on-mobile';
		}

		// Sentence pieces travel with the config. The view module runs in
		// module scope where wp.i18n is not reliably available, and building
		// the sentence in JS from untranslated fragments would leave the
		// block unlocalisable. Abbreviated time units ("4 min ago") are used
		// deliberately: they read naturally at any count, so the client never
		// has to reimplement plural rules for every locale.
		$config['i18n'] = array(
			'from'      => __( 'from', 'yaycommerce-blocks-for-shadcn-ui' ),
			'purchased' => __( 'just purchased', 'yaycommerce-blocks-for-shadcn-ui' ),
			// Simulated mode has no buyer to name, so it uses this as the
			// subject of the sentence rather than inventing a person.
			'someone'   => __( 'Someone', 'yaycommerce-blocks-for-shadcn-ui' ),
			'justNow'   => __( 'just now', 'yaycommerce-blocks-for-shadcn-ui' ),
			/* translators: %d: number of minutes. */
			'minutes'   => __( '%d min ago', 'yaycommerce-blocks-for-shadcn-ui' ),
			/* translators: %d: number of hours. */
			'hours'     => __( '%d hr ago', 'yaycommerce-blocks-for-shadcn-ui' ),
			'recently'  => __( 'recently', 'yaycommerce-blocks-for-shadcn-ui' ),
		);

		$region = '<div class="' . esc_attr( $classes ) . '"'
			. ' data-wp-interactive="shadcn/live-purchase"'
			. ' ' . wp_interactivity_data_wp_context( $config, 'shadcn/live-purchase' )
			. ' data-wp-init="callbacks.start"'
			. ' role="region"'
			. ' aria-label="' . esc_attr__( 'Recent purchases', 'yaycommerce-blocks-for-shadcn-ui' ) . '"'
			. ' aria-live="polite"'
			. '>'
			// Visibility is a class, not the `hidden` attribute: `[hidden]`
			// carries only the UA stylesheet's `display:none`, which loses to
			// the author `display:flex` this toast needs when shown.
			. '<div class="wp-block-shadcn-live-purchase__toast" data-wp-class--is-visible="state.isVisible">'
			. '<img class="wp-block-shadcn-live-purchase__thumb" alt="" width="40" height="40" decoding="async"'
			. ' data-wp-bind--src="state.image" data-wp-class--is-shown="state.hasImage" />'
			. '<div class="wp-block-shadcn-live-purchase__body">'
			. '<p class="wp-block-shadcn-live-purchase__line">'
			. '<strong data-wp-text="state.name"></strong> '
			. '<span data-wp-text="state.locationText"></span> '
			. '<span data-wp-text="state.purchasedText"></span> '
			. '<strong data-wp-text="state.product"></strong>'
			. '</p>'
			. '<p class="wp-block-shadcn-live-purchase__time" data-wp-text="state.timeText"></p>'
			. '</div>'
			. '<button type="button" class="wp-block-shadcn-live-purchase__dismiss"'
			// The label is a constant, so it is written straight into the
			// markup. Binding it through the store made it depend on
			// hydration order and it came back null in the DOM; there is
			// nothing reactive about it to justify the risk.
			. ' data-wp-on--click="actions.dismiss" data-wp-class--is-shown="state.dismissible"'
			. ' aria-label="' . esc_attr__( 'Dismiss', 'yaycommerce-blocks-for-shadcn-ui' ) . '">'
			. '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"'
			. ' stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">'
			. '<path d="M18 6 6 18" fill="none"></path><path d="m6 6 12 12" fill="none"></path></svg>'
			. '</button>'
			. '</div>'
			. '</div>';

		if ( function_exists( 'wp_interactivity_process_directives' ) ) {
			$region = wp_interactivity_process_directives( $region );
		}

		echo $region; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
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
