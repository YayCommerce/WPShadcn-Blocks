<?php
/**
 * Carousel block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

// Extract attributes with defaults.
$shadcn_autoplay             = $attributes['autoplay'] ?? false;
$shadcn_autoplay_delay       = $attributes['autoplayDelay'] ?? 3000;
$shadcn_loop                 = $attributes['loop'] ?? true;
$shadcn_show_arrows          = $attributes['showArrows'] ?? true;
$shadcn_show_dots            = $attributes['showDots'] ?? true;
$shadcn_slides_per_view      = $attributes['slidesPerView'] ?? 1;
$shadcn_slides_per_view_tablet = $attributes['slidesPerViewTablet'] ?? 2;
$shadcn_slides_per_view_desktop = $attributes['slidesPerViewDesktop'] ?? 3;
$shadcn_gap                  = $attributes['gap'] ?? '1rem';
$shadcn_orientation          = $attributes['orientation'] ?? 'horizontal';
$shadcn_effect               = $attributes['effect'] ?? 'none';

// Only a known effect may reach the class list or the JS config.
if ( ! in_array( $shadcn_effect, array( 'none', 'coverflow' ), true ) ) {
	$shadcn_effect = 'none';
}

// Build data attributes for JS initialization.
$shadcn_carousel_data = array(
	'autoplay'             => $shadcn_autoplay,
	'autoplayDelay'        => $shadcn_autoplay_delay,
	'loop'                 => $shadcn_loop,
	'slidesPerView'        => $shadcn_slides_per_view,
	'slidesPerViewTablet'  => $shadcn_slides_per_view_tablet,
	'slidesPerViewDesktop' => $shadcn_slides_per_view_desktop,
	'gap'                  => $shadcn_gap,
	'orientation'          => $shadcn_orientation,
	'effect'               => $shadcn_effect,
);

$shadcn_wrapper_classes = array(
	'orientation-' . $shadcn_orientation,
);

$shadcn_wrapper_extra = array();

if ( 'none' !== $shadcn_effect ) {
	$shadcn_wrapper_classes[] = 'has-effect-' . $shadcn_effect;
}

// Slide sizing is published for every carousel, not just the effect ones. The
// editor has always offered per-breakpoint "slides per view" controls, but the
// properties they set were previously emitted only under an effect, so a plain
// carousel silently ignored them and stayed pinned to one full-width slide —
// the control was there and did nothing.
//
// Every carousel in this plugin and the theme now states its slide counts
// explicitly, so widening this changes no existing layout; a pattern that wants
// one slide per view says so rather than relying on the emission being skipped.
$shadcn_wrapper_extra['style'] = sprintf(
	'--carousel-gap:%s;--carousel-slides:%d;--carousel-slides-tablet:%d;--carousel-slides-desktop:%d;',
	preg_match( '/^[0-9]+(\.[0-9]+)?(px|rem|em|%|vw)$/', (string) $shadcn_gap ) ? $shadcn_gap : '1rem',
	max( 1, (int) $shadcn_slides_per_view ),
	max( 1, (int) $shadcn_slides_per_view_tablet ),
	max( 1, (int) $shadcn_slides_per_view_desktop )
);

if ( $shadcn_show_arrows ) {
	$shadcn_wrapper_classes[] = 'has-arrows';
}

if ( $shadcn_show_dots ) {
	$shadcn_wrapper_classes[] = 'has-dots';
}

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array_merge(
		array(
			'class'         => implode( ' ', $shadcn_wrapper_classes ),
			'data-carousel' => wp_json_encode( $shadcn_carousel_data ),
		),
		$shadcn_wrapper_extra
	)
);
?>

<div <?php echo $shadcn_wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="wp-block-shadcn-carousel__viewport">
		<div class="wp-block-shadcn-carousel__content">
			<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
	</div>

	<?php if ( $shadcn_show_arrows ) : ?>
		<button type="button" class="wp-block-shadcn-carousel__prev" aria-label="<?php esc_attr_e( 'Previous slide', 'yaycommerce-blocks-for-shadcn-ui' ); ?>">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
				<path d="m15 18-6-6 6-6"/>
			</svg>
		</button>
		<button type="button" class="wp-block-shadcn-carousel__next" aria-label="<?php esc_attr_e( 'Next slide', 'yaycommerce-blocks-for-shadcn-ui' ); ?>">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
				<path d="m9 18 6-6-6-6"/>
			</svg>
		</button>
	<?php endif; ?>

	<?php if ( $shadcn_show_dots ) : ?>
		<div class="wp-block-shadcn-carousel__dots" role="tablist" aria-label="<?php esc_attr_e( 'Carousel pagination', 'yaycommerce-blocks-for-shadcn-ui' ); ?>"></div>
	<?php endif; ?>
</div>
