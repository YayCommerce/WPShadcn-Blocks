<?php
/**
 * Avatar block shared helpers.
 *
 * @package ShadcnBlocks
 */

namespace ShadcnBlocks;

defined( 'ABSPATH' ) || exit;

/**
 * Avatar class.
 *
 * Shared fallback-circle renderer used by both the Avatar block (no-image
 * state) and the Avatar Group block (overflow "+N" indicator) so both use
 * identical markup/styling.
 */
class Avatar {

	/**
	 * Instance.
	 *
	 * @var Avatar|null
	 */
	private static $instance = null;

	/**
	 * Get instance.
	 *
	 * @return Avatar
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Render a circular fallback (initials) avatar.
	 *
	 * @param string $text Fallback text (initials or "+N").
	 * @param string $size One of 'sm', 'md', 'lg'.
	 * @return string Escaped HTML markup.
	 */
	public function render_fallback_circle( $text, $size ) {
		$size = in_array( $size, array( 'sm', 'md', 'lg' ), true ) ? $size : 'md';

		return sprintf(
			'<span class="shadcn-avatar shadcn-avatar--%1$s"><span class="shadcn-avatar__fallback">%2$s</span></span>',
			esc_attr( $size ),
			esc_html( $text )
		);
	}
}
