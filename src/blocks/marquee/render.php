<?php
/**
 * Marquee block render.
 *
 * Duplicates the rendered InnerBlocks content into two DOM copies inside a
 * flex track; animating translateX(-50%) on the track loops seamlessly
 * regardless of actual content width or item count, no JS/width measurement
 * needed. The second copy is aria-hidden so screen readers don't announce
 * every item twice.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$speed          = $attributes['speed'] ?? 30;
$direction      = ( 'right' === ( $attributes['direction'] ?? 'left' ) ) ? 'right' : 'left';
$pause_on_hover = $attributes['pauseOnHover'] ?? true;
$show_fade      = $attributes['showFade'] ?? false;
$gap            = $attributes['gap'] ?? '2rem';

// Only a bare CSS length (no `;`/`:`) may reach the inline style attribute,
// so a crafted attribute value can't smuggle extra CSS declarations past
// esc_attr() — esc_attr() escapes quotes/entities, not `;`/`:` separators.
if ( ! preg_match( '/^[0-9]+(\.[0-9]+)?(px|rem|em|%|vw)$/', $gap ) ) {
	$gap = '2rem';
}

$wrapper_classes = array( 'direction-' . $direction );

if ( $pause_on_hover ) {
	$wrapper_classes[] = 'has-pause-on-hover';
}

if ( $show_fade ) {
	$wrapper_classes[] = 'has-fade';
}

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => implode( ' ', $wrapper_classes ),
		'style' => sprintf(
			'--marquee-duration:%ds;--marquee-gap:%s;',
			(int) $speed,
			$gap
		),
	)
);
?>

<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="wp-block-shadcn-marquee__viewport">
		<div class="wp-block-shadcn-marquee__track">
			<div class="wp-block-shadcn-marquee__group"><?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
			<div class="wp-block-shadcn-marquee__group" aria-hidden="true"><?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
		</div>
	</div>
</div>
