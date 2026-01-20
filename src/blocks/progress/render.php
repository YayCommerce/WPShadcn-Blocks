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
$current_value = isset( $attributes['currentValue'] ) ? $attributes['currentValue'] : 'static';
$static_value  = isset( $attributes['staticValue'] ) ? (int) $attributes['staticValue'] : 50;
$track_color   = isset( $attributes['style']['trackColor'] ) ? $attributes['style']['trackColor'] : '#f5f5f5';
$fill_color    = isset( $attributes['style']['fillColor'] ) ? $attributes['style']['fillColor'] : '#171717';

// Calculate percentage
if( $current_value === 'static' ) {
    $percentage = $max_value > 0 ? min( max( ( $static_value / $max_value ) * 100, 0 ), $max_value ) : 0;
	$value = $static_value;
} else if( $current_value === 'dynamic' ) {
    $dynamic_value = isset( $attributes['dynamicValue'] ) ? $attributes['dynamicValue'] : 'free_shipping';

    if( $dynamic_value === 'free_shipping' ) {
		if( ! class_exists( 'WooCommerce' ) ) {
			return '';
		}

		$free_shipping = \WpShadcnBlocks\FreeShipping::get_instance();
		$free_shipping_info = $free_shipping->get_free_shipping_info();
		
		if ($free_shipping_info === null) {
            return null;
        }

        $min_amount       = $free_shipping_info['min_amount'];
        $ignore_discounts = $free_shipping_info['ignore_discounts'] ?? 'no';
        $cart_total       = $free_shipping->calculate_cart_total_for_shipping( $ignore_discounts );
		$value            = $free_shipping->calculate_progress( $min_amount, $cart_total );
		$percentage       = $max_value > $value ? $value : $max_value;
    }
}


$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'wp-block-wpshadcn-progress',
	)
);

?>
<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="progress-container" style="background-color: <?php echo esc_attr( $track_color ); ?>">
		<div
			class="progress-indicator"
			role="progressbar"
			aria-valuenow="<?php echo esc_attr( $value ); ?>"
			aria-valuemin="0"
			aria-valuemax="<?php echo esc_attr( $max_value ); ?>"
			style="width: <?php echo esc_attr( $percentage ); ?>%; background-color: <?php echo esc_attr( $fill_color ); ?>;"
		></div>
	</div>
</div>


