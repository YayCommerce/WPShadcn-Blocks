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
$autoplay             = $attributes['autoplay'] ?? false;
$autoplay_delay       = $attributes['autoplayDelay'] ?? 3000;
$loop                 = $attributes['loop'] ?? true;
$show_arrows          = $attributes['showArrows'] ?? true;
$show_dots            = $attributes['showDots'] ?? true;
$slides_per_view      = $attributes['slidesPerView'] ?? 1;
$slides_per_view_tablet = $attributes['slidesPerViewTablet'] ?? 2;
$slides_per_view_desktop = $attributes['slidesPerViewDesktop'] ?? 3;
$gap                  = $attributes['gap'] ?? '1rem';
$orientation          = $attributes['orientation'] ?? 'horizontal';
$effect               = $attributes['effect'] ?? 'none';

// Only a known effect may reach the class list or the JS config.
if ( ! in_array( $effect, array( 'none', 'coverflow' ), true ) ) {
	$effect = 'none';
}

// Build data attributes for JS initialization.
$carousel_data = array(
	'autoplay'             => $autoplay,
	'autoplayDelay'        => $autoplay_delay,
	'loop'                 => $loop,
	'slidesPerView'        => $slides_per_view,
	'slidesPerViewTablet'  => $slides_per_view_tablet,
	'slidesPerViewDesktop' => $slides_per_view_desktop,
	'gap'                  => $gap,
	'orientation'          => $orientation,
	'effect'               => $effect,
);

$wrapper_classes = array(
	'orientation-' . $orientation,
);

$wrapper_extra = array();

if ( 'none' !== $effect ) {
	$wrapper_classes[] = 'has-effect-' . $effect;
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
$wrapper_extra['style'] = sprintf(
	'--carousel-gap:%s;--carousel-slides:%d;--carousel-slides-tablet:%d;--carousel-slides-desktop:%d;',
	preg_match( '/^[0-9]+(\.[0-9]+)?(px|rem|em|%|vw)$/', (string) $gap ) ? $gap : '1rem',
	max( 1, (int) $slides_per_view ),
	max( 1, (int) $slides_per_view_tablet ),
	max( 1, (int) $slides_per_view_desktop )
);

if ( $show_arrows ) {
	$wrapper_classes[] = 'has-arrows';
}

if ( $show_dots ) {
	$wrapper_classes[] = 'has-dots';
}

$wrapper_attributes = get_block_wrapper_attributes(
	array_merge(
		array(
			'class'         => implode( ' ', $wrapper_classes ),
			'data-carousel' => wp_json_encode( $carousel_data ),
		),
		$wrapper_extra
	)
);
?>

<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="wp-block-shadcn-carousel__viewport">
		<div class="wp-block-shadcn-carousel__content">
			<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
	</div>

	<?php if ( $show_arrows ) : ?>
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

	<?php if ( $show_dots ) : ?>
		<div class="wp-block-shadcn-carousel__dots" role="tablist" aria-label="<?php esc_attr_e( 'Carousel pagination', 'yaycommerce-blocks-for-shadcn-ui' ); ?>"></div>
	<?php endif; ?>
</div>
