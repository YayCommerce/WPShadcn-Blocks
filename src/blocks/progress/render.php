<?php
/**
 * Progress block render.
 *
 * @package WpShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$max_value     = isset( $attributes['maxValue'] ) ? (int) $attributes['maxValue'] : 100;
$current_value = isset( $attributes['currentValue'] ) ? $attributes['currentValue'] : array(
	'type'  => 'static',
	'value' => 50,
);
$show_label    = isset( $attributes['showLabel'] ) ? (bool) $attributes['showLabel'] : true;

$type  = isset( $current_value['type'] ) ? $current_value['type'] : 'static';
$value = isset( $current_value['value'] ) ? (int) $current_value['value'] : 50;

// Calculate percentage
$percentage = $max_value > 0 ? min( max( ( $value / $max_value ) * 100, 0 ), 100 ) : 0;

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'wp-block-wpshadcn-progress',
	)
);

?>
<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="progress-container">
		<div
			class="progress-indicator"
			role="progressbar"
			aria-valuenow="<?php echo esc_attr( $value ); ?>"
			aria-valuemin="0"
			aria-valuemax="<?php echo esc_attr( $max_value ); ?>"
			style="width: <?php echo esc_attr( $percentage ); ?>%;"
		></div>
	</div>
	<?php if ( $show_label && 'static' === $type ) : ?>
		<div class="progress-label">
			<?php
			printf(
				/* translators: 1: current value, 2: max value, 3: percentage */
				esc_html__( '%1$d / %2$d (%3$d%%)', 'wpshadcn-blocks' ),
				$value,
				$max_value,
				round( $percentage )
			);
			?>
		</div>
	<?php endif; ?>
</div>
