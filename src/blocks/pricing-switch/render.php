<?php
/**
 * Pricing Switch block render.
 *
 * Sets `interval` on the ancestor Pricing block's context. Kept separate from
 * that block so it can sit wherever a layout wants it — beside a heading, in
 * its own band, or between the copy and the plans.
 *
 * Renders as a two-state toggle when exactly two intervals are on offer, and
 * as a segmented control otherwise: a toggle cannot express three or more
 * choices, so the variant falls back rather than lying about the options.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'block_shadcn_pricing_switch_render' ) ) {
	/**
	 * Render callback for the Pricing Switch block.
	 *
	 * @param array    $attributes Block attributes.
	 * @param string   $content    Block content (unused).
	 * @param WP_Block $block      Block instance.
	 *
	 * @return string
	 */
	function block_shadcn_pricing_switch_render( $attributes, $content, $block ) {
		$intervals = ( $block && isset( $block->context['shadcn/intervals'] ) )
			? shadcn_pricing_intervals( $block->context['shadcn/intervals'] )
			: array();

		// Nothing to choose between.
		if ( count( $intervals ) < 2 ) {
			return '';
		}

		$justification = isset( $attributes['justification'] ) ? $attributes['justification'] : 'center';
		if ( ! in_array( $justification, array( 'left', 'center', 'right' ), true ) ) {
			$justification = 'center';
		}

		$variant = isset( $attributes['variant'] ) ? $attributes['variant'] : 'switch';
		if ( 'switch' !== $variant || 2 !== count( $intervals ) ) {
			$variant = 'segmented';
		}

		$classes = 'wp-block-shadcn-pricing-switch is-' . $variant
			. ' is-justified-' . $justification;

		$wrapper_attributes = get_block_wrapper_attributes( array( 'class' => $classes ) );

		ob_start();
		?>
		<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
		<?php if ( 'switch' === $variant ) : ?>
			<?php
			// Two intervals: a label either side of a toggle, where the second
			// interval is the "on" position.
			$off = $intervals[0];
			$on  = $intervals[1];
			?>
			<span
				class="wp-block-shadcn-pricing-switch__label"
				<?php echo wp_interactivity_data_wp_context( array( 'intervalKey' => $off['key'] ), 'shadcn/pricing' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				data-wp-class--is-active="state.isActive"
				data-wp-on--click="actions.select"
			><?php echo esc_html( $off['label'] ); ?></span>
			<button
				type="button"
				role="switch"
				class="wp-block-shadcn-pricing-switch__control"
				aria-label="<?php esc_attr_e( 'Billing interval', 'yaycommerce-blocks-for-shadcn-ui' ); ?>"
				<?php
				// Carries both keys: the toggle has to know what to go back to.
				echo wp_interactivity_data_wp_context( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					array(
						'intervalKey' => $on['key'],
						'altKey'      => $off['key'],
					),
					'shadcn/pricing'
				);
				?>
				data-wp-on--click="actions.toggle"
				data-wp-bind--aria-checked="state.isActive"
				data-wp-class--is-on="state.isActive"
			>
				<span class="wp-block-shadcn-pricing-switch__thumb" aria-hidden="true"></span>
			</button>
			<span
				class="wp-block-shadcn-pricing-switch__label"
				<?php echo wp_interactivity_data_wp_context( array( 'intervalKey' => $on['key'] ), 'shadcn/pricing' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				data-wp-class--is-active="state.isActive"
				data-wp-on--click="actions.select"
			><?php echo esc_html( $on['label'] ); ?></span>
		<?php else : ?>
			<div class="wp-block-shadcn-pricing-switch__group" role="group" aria-label="<?php esc_attr_e( 'Billing interval', 'yaycommerce-blocks-for-shadcn-ui' ); ?>">
				<?php foreach ( $intervals as $interval ) : ?>
					<button
						type="button"
						class="wp-block-shadcn-pricing-switch__option"
						<?php echo wp_interactivity_data_wp_context( array( 'intervalKey' => $interval['key'] ), 'shadcn/pricing' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						data-wp-on--click="actions.select"
						data-wp-bind--aria-pressed="state.isActive"
						data-wp-class--is-active="state.isActive"
					><?php echo esc_html( $interval['label'] ); ?></button>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
		</div>
		<?php

		return ob_get_clean();
	}
}

echo block_shadcn_pricing_switch_render( $attributes ?? array(), $content ?? '', $block ?? null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
