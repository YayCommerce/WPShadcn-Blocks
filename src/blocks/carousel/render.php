<?php
/**
 * Carousel block render.
 *
 * @package WpShadcnBlocks
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
);

$wrapper_classes = array(
	'orientation-' . $orientation,
);

if ( $show_arrows ) {
	$wrapper_classes[] = 'has-arrows';
}

if ( $show_dots ) {
	$wrapper_classes[] = 'has-dots';
}

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class'         => implode( ' ', $wrapper_classes ),
		'data-carousel' => wp_json_encode( $carousel_data ),
	)
);
?>

<div <?php echo $wrapper_attributes; ?>>
	<div class="wp-block-wpshadcn-carousel__viewport">
		<div class="wp-block-wpshadcn-carousel__content">
			<?php echo $content; ?>
		</div>
	</div>

	<?php if ( $show_arrows ) : ?>
		<button type="button" class="wp-block-wpshadcn-carousel__prev" aria-label="<?php esc_attr_e( 'Previous slide', 'wpshadcn-blocks' ); ?>">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
				<path d="m15 18-6-6 6-6"/>
			</svg>
		</button>
		<button type="button" class="wp-block-wpshadcn-carousel__next" aria-label="<?php esc_attr_e( 'Next slide', 'wpshadcn-blocks' ); ?>">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
				<path d="m9 18 6-6-6-6"/>
			</svg>
		</button>
	<?php endif; ?>

	<?php if ( $show_dots ) : ?>
		<div class="wp-block-wpshadcn-carousel__dots" role="tablist" aria-label="<?php esc_attr_e( 'Carousel pagination', 'wpshadcn-blocks' ); ?>"></div>
	<?php endif; ?>
</div>
