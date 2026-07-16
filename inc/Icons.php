<?php
/**
 * Icon render + sanitize helper.
 *
 * Single source of truth for turning a Lucide slug into a safe inline SVG on
 * the frontend. Consumed by the Badge block render and the core/button
 * extension (Phase 4). The slug -> SVG data lives in the generated
 * `inc/icon-map.php` (see scripts/build-icon-manifest.mjs).
 *
 * @package ShadcnBlocks
 */

namespace ShadcnBlocks;

defined( 'ABSPATH' ) || exit;

/**
 * Icons helper. Static, stateless (map cached in memory).
 */
class Icons {

	/**
	 * Cached slug => raw svg map.
	 *
	 * @var array<string,string>|null
	 */
	private static $map = null;

	/**
	 * Register shared icon hooks. Called once from the plugin bootstrap.
	 *
	 * Frontend + editor share one base stylesheet so `.shadcn-icon` glyph
	 * sizing and `.has-icon` layout are defined in a single place for every
	 * consuming block (badge, core/button, …).
	 */
	public static function init() {
		add_action( 'enqueue_block_assets', array( __CLASS__, 'enqueue_shared_styles' ) );

		// core/button icon extension (Approach 1: wired from the plugin).
		add_filter( 'block_type_metadata_settings', array( __CLASS__, 'declare_button_attributes' ), 10 );
		add_action( 'enqueue_block_editor_assets', array( __CLASS__, 'enqueue_button_extension' ) );
		add_filter( 'render_block_core/button', array( __CLASS__, 'render_button_icon' ), 10, 2 );
	}

	/**
	 * Declare the shared icon attributes on core/button server-side so they
	 * persist/parse (mirrors the JS blocks.registerBlockType filter).
	 *
	 * @param array $settings Block type settings.
	 * @return array
	 */
	public static function declare_button_attributes( $settings ) {
		if ( empty( $settings['name'] ) || 'core/button' !== $settings['name'] ) {
			return $settings;
		}
		if ( ! empty( $settings['attributes'] ) ) {
			$settings['attributes']['iconName']     = array(
				'type'    => 'string',
				'default' => '',
			);
			$settings['attributes']['iconPosition'] = array(
				'type'    => 'string',
				'default' => 'left',
			);
			$settings['attributes']['iconSize']     = array(
				'type'    => 'string',
				'default' => '',
			);
		}
		return $settings;
	}

	/**
	 * Enqueue the built core/button icon editor extension.
	 */
	public static function enqueue_button_extension() {
		$script_path = SHADCN_BLOCKS_DIR . 'build/extensions/core-button-icon.js';
		$script_url  = SHADCN_BLOCKS_URL . 'build/extensions/core-button-icon.js';
		$asset_path  = SHADCN_BLOCKS_DIR . 'build/extensions/core-button-icon.asset.php';

		if ( ! file_exists( $script_path ) ) {
			return;
		}

		$asset = file_exists( $asset_path )
			? require $asset_path
			: array(
				'dependencies' => array( 'wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components', 'wp-compose', 'wp-hooks', 'wp-i18n' ),
				'version'      => SHADCN_BLOCKS_VERSION,
			);

		wp_enqueue_script(
			'shadcn-blocks-button-icon',
			$script_url,
			$asset['dependencies'],
			$asset['version'],
			true
		);
	}

	/**
	 * Inject the selected icon into a core/button on the frontend.
	 *
	 * Adds `has-icon has-icon-{pos}` to the `.wp-block-button__link` and inserts
	 * a sanitized inline SVG span before/after the label (DOM order = position).
	 * No icon (or unknown slug) leaves the markup untouched.
	 *
	 * @param string $content Rendered block HTML.
	 * @param array  $block   Parsed block (with attrs).
	 * @return string
	 */
	public static function render_button_icon( $content, $block ) {
		$attrs     = isset( $block['attrs'] ) ? $block['attrs'] : array();
		$icon_name = isset( $attrs['iconName'] ) ? $attrs['iconName'] : '';
		if ( '' === $icon_name || ! self::exists( $icon_name ) ) {
			return $content;
		}

		$position  = ( isset( $attrs['iconPosition'] ) && 'right' === $attrs['iconPosition'] ) ? 'right' : 'left';
		$size      = isset( $attrs['iconSize'] ) ? $attrs['iconSize'] : '';
		$icon_html = self::render_icon( $icon_name, $size );
		if ( '' === $icon_html ) {
			return $content;
		}

		// Add the has-icon classes to the link element (robust attribute edit).
		// If the expected link isn't found, leave the markup untouched rather
		// than inject an unstyled icon (keeps class + icon coupled). WP 6.5+ is
		// the plugin minimum, so WP_HTML_Tag_Processor is always available.
		$processor = new \WP_HTML_Tag_Processor( $content );
		if ( ! $processor->next_tag( array( 'class_name' => 'wp-block-button__link' ) ) ) {
			return $content;
		}
		foreach ( explode( ' ', self::icon_classes( $icon_name, $position ) ) as $class ) {
			$processor->add_class( $class );
		}
		$content = $processor->get_updated_html();

		// Insert the icon inside the link, in DOM order.
		if ( 'right' === $position ) {
			$close = strpos( $content, '</a>' );
			if ( false !== $close ) {
				$content = substr( $content, 0, $close ) . $icon_html . substr( $content, $close );
			}
		} elseif ( preg_match( '/<a\b[^>]*wp-block-button__link[^>]*>/i', $content, $m, PREG_OFFSET_CAPTURE ) ) {
			$at      = $m[0][1] + strlen( $m[0][0] );
			$content = substr( $content, 0, $at ) . $icon_html . substr( $content, $at );
		}

		return $content;
	}

	/**
	 * Enqueue the shared icon base CSS (both editor and frontend).
	 */
	public static function enqueue_shared_styles() {
		$css = '.shadcn-icon{display:inline-flex;align-items:center;justify-content:center;width:1em;height:1em;flex:none;line-height:0}'
			. '.shadcn-icon svg{width:100%;height:100%;display:block}'
			. '.has-icon{display:inline-flex;align-items:center;gap:.4em}';

		wp_register_style( 'shadcn-blocks-icon', false, array(), SHADCN_BLOCKS_VERSION );
		wp_enqueue_style( 'shadcn-blocks-icon' );
		wp_add_inline_style( 'shadcn-blocks-icon', $css );
	}

	/**
	 * Load (once) the generated icon map.
	 *
	 * @return array<string,string>
	 */
	private static function map() {
		if ( null === self::$map ) {
			$file      = SHADCN_BLOCKS_DIR . 'inc/icon-map.php';
			self::$map = file_exists( $file ) ? (array) require $file : array();
		}
		return self::$map;
	}

	/**
	 * Whether a slug exists in the registry.
	 *
	 * @param string $name Icon slug.
	 * @return bool
	 */
	public static function exists( $name ) {
		return '' !== $name && isset( self::map()[ $name ] );
	}

	/**
	 * Get the raw (generated, pre-normalized) SVG for a slug.
	 *
	 * @param string $name Icon slug.
	 * @return string SVG markup or '' when unknown.
	 */
	public static function get_svg( $name ) {
		$map = self::map();
		return isset( $map[ $name ] ) ? $map[ $name ] : '';
	}

	/**
	 * Build the icon wrapper class list (mirrors JS buildIconClasses()).
	 *
	 * @param string $name     Icon slug (empty = no classes).
	 * @param string $position 'left' | 'right'.
	 * @return string e.g. 'has-icon has-icon-left', or '' when no icon.
	 */
	public static function icon_classes( $name, $position ) {
		if ( ! self::exists( $name ) ) {
			return '';
		}
		$position = ( 'right' === $position ) ? 'right' : 'left';
		return 'has-icon has-icon-' . $position;
	}

	/**
	 * Render a sanitized inline icon wrapped in a sizing span.
	 *
	 * @param string $name Icon slug.
	 * @param string $size Optional CSS size (e.g. '16px'); empty = inherit.
	 * @return string Safe HTML, or '' when the slug is empty/unknown.
	 */
	public static function render_icon( $name, $size = '' ) {
		$svg = self::get_svg( $name );
		if ( '' === $svg ) {
			return '';
		}

		$svg = self::sanitize_svg( $svg );
		if ( '' === $svg ) {
			return '';
		}

		// Only accept a bare CSS length (e.g. "16px", "1.5rem"). Reject anything
		// else so a crafted block attribute can't inject extra style declarations.
		$style = '';
		$size  = trim( (string) $size );
		if ( '' !== $size && preg_match( '/^\d+(\.\d+)?(px|em|rem)$/', $size ) ) {
			$style = ' style="width:' . esc_attr( $size ) . ';height:' . esc_attr( $size ) . ';"';
		}

		return '<span class="shadcn-icon"' . $style . '>' . $svg . '</span>';
	}

	/**
	 * Sanitize a Lucide SVG with a scoped wp_kses allow-list.
	 *
	 * Lucide output only uses a small set of shape elements, all colored via
	 * `currentColor`. This trims the broader theme SvgImage list to exactly
	 * what the generated icons emit.
	 *
	 * @param string $svg Raw SVG markup.
	 * @return string Sanitized SVG.
	 */
	public static function sanitize_svg( $svg ) {
		$shape_attrs = array(
			'class'           => true,
			'fill'            => true,
			'stroke'          => true,
			'stroke-width'    => true,
			'stroke-linecap'  => true,
			'stroke-linejoin' => true,
			'opacity'         => true,
		);

		$allowed = array(
			'svg'      => array(
				'xmlns'           => true,
				'viewbox'         => true,
				'fill'            => true,
				'stroke'          => true,
				'stroke-width'    => true,
				'stroke-linecap'  => true,
				'stroke-linejoin' => true,
				'class'           => true,
				'width'           => true,
				'height'          => true,
				'aria-hidden'     => true,
				'aria-label'      => true,
				'role'            => true,
				'focusable'       => true,
			),
			'path'     => array_merge( $shape_attrs, array( 'd' => true, 'fill-rule' => true, 'clip-rule' => true ) ),
			'circle'   => array_merge( $shape_attrs, array( 'cx' => true, 'cy' => true, 'r' => true ) ),
			'ellipse'  => array_merge( $shape_attrs, array( 'cx' => true, 'cy' => true, 'rx' => true, 'ry' => true ) ),
			'rect'     => array_merge( $shape_attrs, array( 'x' => true, 'y' => true, 'width' => true, 'height' => true, 'rx' => true, 'ry' => true ) ),
			'line'     => array_merge( $shape_attrs, array( 'x1' => true, 'y1' => true, 'x2' => true, 'y2' => true ) ),
			'polyline' => array_merge( $shape_attrs, array( 'points' => true ) ),
			'polygon'  => array_merge( $shape_attrs, array( 'points' => true ) ),
			'g'        => array_merge( $shape_attrs, array( 'transform' => true ) ),
		);

		return wp_kses( $svg, $allowed );
	}
}
