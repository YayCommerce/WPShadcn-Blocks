<?php
/**
 * Progress block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$shadcn_max_value     = isset( $attributes['maxValue'] ) ? (int) $attributes['maxValue'] : 100;
$shadcn_current_value = isset( $attributes['currentValue'] ) ? $attributes['currentValue'] : 'static';
$shadcn_static_value  = isset( $attributes['staticValue'] ) ? (int) $attributes['staticValue'] : 50;
$shadcn_track_color   = isset( $attributes['style']['trackColor'] ) ? $attributes['style']['trackColor'] : '#f5f5f5';
$shadcn_fill_color    = isset( $attributes['style']['fillColor'] ) ? $attributes['style']['fillColor'] : '#171717';

// Calculate percentage
if( $shadcn_current_value === 'static' ) {
    $shadcn_percentage = $shadcn_max_value > 0 ? min( max( ( $shadcn_static_value / $shadcn_max_value ) * 100, 0 ), $shadcn_max_value ) : 0;
	$shadcn_value = $shadcn_static_value;
} else if( $shadcn_current_value === 'dynamic' ) {
    $shadcn_dynamic_value = isset( $attributes['dynamicValue'] ) ? $attributes['dynamicValue'] : 'free_shipping';

    if( $shadcn_dynamic_value === 'free_shipping' ) {
		if( ! class_exists( 'WooCommerce' ) ) {
			return '';
		}

		$shadcn_free_shipping = \ShadcnBlocks\FreeShipping::get_instance();
		$shadcn_free_shipping_info = $shadcn_free_shipping->get_free_shipping_info();
		
		if ($shadcn_free_shipping_info === null) {
            return null;
        }

        $shadcn_min_amount       = $shadcn_free_shipping_info['min_amount'];
        $shadcn_ignore_discounts = $shadcn_free_shipping_info['ignore_discounts'] ?? 'no';
        $shadcn_cart_total       = $shadcn_free_shipping->calculate_cart_total_for_shipping( $shadcn_ignore_discounts );
		$shadcn_value            = $shadcn_free_shipping->calculate_progress( $shadcn_min_amount, $shadcn_cart_total );
		$shadcn_percentage       = $shadcn_max_value > $shadcn_value ? $shadcn_value : $shadcn_max_value;
    }
}


$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'wp-block-shadcn-progress',
	)
);

?>
<div <?php echo $shadcn_wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="progress-container" style="background-color: <?php echo esc_attr( $shadcn_track_color ); ?>">
		<div
			class="progress-indicator"
			role="progressbar"
			aria-valuenow="<?php echo esc_attr( $shadcn_value ); ?>"
			aria-valuemin="0"
			aria-valuemax="<?php echo esc_attr( $shadcn_max_value ); ?>"
			style="width: <?php echo esc_attr( $shadcn_percentage ); ?>%; background-color: <?php echo esc_attr( $shadcn_fill_color ); ?>;"
		></div>
	</div>
</div>


