<?php
/**
 * Bubble block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$variant = isset( $attributes['variant'] ) && '' !== $attributes['variant'] ? $attributes['variant'] : 'default';

// Own align wins; otherwise inherit the Bubble Group default; otherwise "start".
$align = isset( $attributes['align'] ) ? $attributes['align'] : '';
if ( '' === $align ) {
	$align = isset( $block->context['shadcn/bubble-align'] ) ? $block->context['shadcn/bubble-align'] : 'start';
}

$wrapper_classes = array(
	'wp-block-shadcn-bubble',
	'bubble',
	'bubble-' . $variant,
	'bubble-align-' . $align,
);

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => implode( ' ', array_map( 'esc_attr', $wrapper_classes ) ),
	)
);
?>
<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div>
