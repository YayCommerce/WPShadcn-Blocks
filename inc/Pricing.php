<?php
/**
 * Shared helpers for the pricing blocks.
 *
 * These live here rather than in a block's render.php because WordPress
 * renders inner blocks before their parent: a Pricing Switch or Pricing Price
 * runs while `shadcn/pricing`'s render file has not been included yet, so a
 * helper defined there would be undefined at the moment the children need it.
 *
 * @package ShadcnBlocks
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'shadcn_pricing_intervals' ) ) {
	/**
	 * Normalise the declared billing intervals, dropping anything without a key.
	 *
	 * @param mixed $intervals Raw `intervals` attribute.
	 *
	 * @return array List of arrays with `key` and `label`.
	 */
	function shadcn_pricing_intervals( $intervals ) {
		$clean = array();

		if ( ! is_array( $intervals ) ) {
			return $clean;
		}

		foreach ( $intervals as $interval ) {
			if ( ! is_array( $interval ) || empty( $interval['key'] ) ) {
				continue;
			}

			$clean[] = array(
				'key'   => (string) $interval['key'],
				'label' => isset( $interval['label'] ) ? (string) $interval['label'] : (string) $interval['key'],
			);
		}

		return $clean;
	}
}

if ( ! function_exists( 'shadcn_pricing_register_state' ) ) {
	/**
	 * Register the server-side half of the pricing derived state.
	 *
	 * Mirrors the getter in the pricing view script. Directive values are also
	 * evaluated while the page is rendered, so without this `state.isActive`
	 * would resolve to undefined there and every price would come back hidden
	 * for anyone without JavaScript — and for everyone until the script
	 * hydrated.
	 *
	 * Registered on `init` rather than lazily from a render callback, for the
	 * same ordering reason as the helper above.
	 */
	function shadcn_pricing_register_state() {
		if ( ! function_exists( 'wp_interactivity_state' ) ) {
			return;
		}

		wp_interactivity_state(
			'shadcn/pricing',
			array(
				'isActive' => function () {
					$context = wp_interactivity_get_context( 'shadcn/pricing' );

					return isset( $context['intervalKey'], $context['interval'] )
						&& $context['intervalKey'] === $context['interval'];
				},
			)
		);
	}
}

add_action( 'init', 'shadcn_pricing_register_state' );
