<?php
/**
 * Avatar Group block render.
 *
 * Renders only the first `maxVisible` shadcn/avatar children (in document
 * order) and appends a "+N" overflow circle when there are more.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused, dynamic render).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$max_visible = isset( $attributes['maxVisible'] ) ? (int) $attributes['maxVisible'] : 5;
$max_visible = max( 1, $max_visible );

$parsed_inner_blocks = ! empty( $block->parsed_block['innerBlocks'] )
	? $block->parsed_block['innerBlocks']
	: array();

$avatar_blocks = array_values(
	array_filter(
		$parsed_inner_blocks,
		function ( $inner_block ) {
			return isset( $inner_block['blockName'] ) && 'shadcn/avatar' === $inner_block['blockName'];
		}
	)
);

if ( empty( $avatar_blocks ) ) {
	return;
}

$visible_blocks = array_slice( $avatar_blocks, 0, $max_visible );
$remainder      = count( $avatar_blocks ) - count( $visible_blocks );

$inner_content = '';

foreach ( $visible_blocks as $parsed_avatar_block ) {
	$inner_content .= render_block( $parsed_avatar_block );
}

if ( $remainder > 0 ) {
	$last_visible  = end( $visible_blocks );
	$overflow_size = isset( $last_visible['attrs']['size'] ) ? $last_visible['attrs']['size'] : 'md';
	// Wrapped in the same .wp-block-shadcn-avatar div real avatar children
	// get from get_block_wrapper_attributes(), so the overflow indicator is
	// a flex item CSS can target identically (see avatar-group/style.scss).
	$inner_content .= sprintf(
		'<div class="wp-block-shadcn-avatar">%s</div>',
		\ShadcnBlocks\Avatar::get_instance()->render_fallback_circle( '+' . $remainder, $overflow_size )
	);
}

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'wp-block-shadcn-avatar-group shadcn-avatar-group',
	)
);
?>
<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php echo $inner_content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div>
