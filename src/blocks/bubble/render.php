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

$shadcn_variant = isset( $attributes['variant'] ) && '' !== $attributes['variant'] ? $attributes['variant'] : 'default';

// Own align wins; otherwise inherit the Bubble Group default; otherwise "start".
$shadcn_align = isset( $attributes['align'] ) ? $attributes['align'] : '';
if ( '' === $shadcn_align ) {
	$shadcn_align = isset( $block->context['shadcn/bubble-align'] ) ? $block->context['shadcn/bubble-align'] : 'start';
}

$shadcn_wrapper_classes = array(
	'wp-block-shadcn-bubble',
	'bubble',
	'bubble-' . $shadcn_variant,
	'bubble-align-' . $shadcn_align,
);

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => implode( ' ', array_map( 'esc_attr', $shadcn_wrapper_classes ) ),
	)
);
?>
<div <?php echo $shadcn_wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div>
