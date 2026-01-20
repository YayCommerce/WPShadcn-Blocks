<?php
/**
 * Main plugin class.
 *
 * @package WpShadcnBlocks
 */

namespace WpShadcnBlocks;

defined( 'ABSPATH' ) || exit;

/**
 * Free Shipping class.
 */
class FreeShipping {

	/**
	 * Instance.
	 *
	 * @var FreeShipping|null
	 */
	private static $instance = null;

	/**
	 * Get instance.
	 *
	 * @return FreeShipping
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

    public function __construct() {
        if( ! class_exists( 'WooCommerce' ) ) {
            return;
        }
    }

    public function get_free_shipping_info(): ?array {
        if ( ! \WC()->cart || ! \WC()->shipping()) {
            return null;
        }

        // Get shipping packages from cart (not from calculated shipping)
        // This works even if shipping hasn't been calculated yet (e.g., in AJAX requests)
        $packages = \WC()->cart->get_shipping_packages();

        if (empty( $packages )) {
            return null;
        }

        $min_amounts        = [];
        $requires_coupon    = false;
        $has_no_requirement = false;
        // Store the actual requires value: '' | 'coupon' | 'min_amount' | 'either' | 'both'
        $requires_type = null;
        // Default: apply minimum order rule after coupon discount
        $ignore_discounts = 'no';

        foreach ($packages as $package) {
            // Get matching shipping zone
            $zone = \WC_Shipping_Zones::get_zone_matching_package( $package );

            if ( ! $zone) {
                continue;
            }

            // Get all enabled shipping methods from zone
            $methods = $zone->get_shipping_methods( true );
            // true = enabled only

            foreach ($methods as $method) {
                if ($method->id !== 'free_shipping' || $method->enabled !== 'yes') {
                    continue;
                }

                $requires = $method->requires ?? '';

                // Get ignore_discounts setting (use first found, or 'yes' if any method has it)
                $method_ignore_discounts = $method->ignore_discounts ?? 'no';
                if ($method_ignore_discounts === 'yes') {
                    $ignore_discounts = 'yes';
                }

                // Check if no requirement (free shipping already available)
                if ($requires === '') {
                    $has_no_requirement = true;
                    $requires_type      = '';
                    continue;
                }

                // Store the requires type (use the first one found, or 'either'/'both' if multiple)
                if ($requires_type === null) {
                    $requires_type = $requires;
                } elseif ($requires_type !== $requires) {
                    // If multiple methods with different requires, prioritize 'both' > 'either' > others
                    if ($requires === 'both' || ($requires === 'either' && $requires_type !== 'both')) {
                        $requires_type = $requires;
                    }
                }

                // Check if requires coupon
                if (in_array( $requires, [ 'coupon', 'either', 'both' ], true )) {
                    $requires_coupon = true;
                }

                // Collect min_amount from methods that require it
                if (in_array( $requires, [ 'min_amount', 'either', 'both' ], true )) {
                    $min_amount = (float) ($method->min_amount ?? 0);
                    if ($min_amount > 0) {
                        $min_amounts[] = $min_amount;
                    }
                }
            }//end foreach
        }//end foreach

        // If no requirement found, free shipping is already available
        if ($has_no_requirement && empty( $min_amounts ) && ! $requires_coupon) {
            return null;
        }

        // Get lowest min_amount if multiple exist
        $min_amount = ! empty( $min_amounts ) ? min( $min_amounts ) : null;

        return [
            'min_amount'               => $min_amount,
            'ignore_discounts'         => $ignore_discounts,
        ];
    }

	public function calculate_cart_total_for_shipping( $ignore_discounts ) {
        if ( ! \WC()->cart ) {
            return null;
        }

        // Use displayed subtotal (same as WooCommerce)
        $total = (float) \WC()->cart->get_displayed_subtotal();

        // If ignore_discounts is 'no' (default), subtract discount
        if ( $ignore_discounts !== 'yes' ) {
            $total = $total - (float) \WC()->cart->get_discount_total();
            if ( \WC()->cart->display_prices_including_tax() ) {
                $total = $total - (float) \WC()->cart->get_discount_tax();
            }
        }

        // Round to match WooCommerce behavior
        return round( $total, wc_get_price_decimals() );
    }

    public function calculate_progress( $threshold, $cart_total ) {
        if ( $cart_total >= $threshold ) {
            return 100;
        }

        $progress  = $threshold > 0 ? min( 100, ( $cart_total / $threshold ) * 100 ) : 100;

        return round( $progress, 2 );
    }
}
