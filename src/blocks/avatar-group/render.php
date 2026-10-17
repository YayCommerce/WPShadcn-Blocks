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

$shadcn_max_visible = isset( $attributes['maxVisible'] ) ? (int) $attributes['maxVisible'] : 5;
$shadcn_max_visible = max( 1, $shadcn_max_visible );

$shadcn_parsed_inner_blocks = ! empty( $block->parsed_block['innerBlocks'] )
	? $block->parsed_block['innerBlocks']
	: array();

$shadcn_avatar_blocks = array_values(
	array_filter(
		$shadcn_parsed_inner_blocks,
		function ( $inner_block ) {
			return isset( $inner_block['blockName'] ) && 'shadcn/avatar' === $inner_block['blockName'];
		}
	)
);

if ( empty( $shadcn_avatar_blocks ) ) {
	return;
}

$shadcn_visible_blocks = array_slice( $shadcn_avatar_blocks, 0, $shadcn_max_visible );
$shadcn_remainder      = count( $shadcn_avatar_blocks ) - count( $shadcn_visible_blocks );

$shadcn_inner_content = '';

foreach ( $shadcn_visible_blocks as $shadcn_parsed_avatar_block ) {
	$shadcn_inner_content .= render_block( $shadcn_parsed_avatar_block );
}

if ( $shadcn_remainder > 0 ) {
	$shadcn_last_visible  = end( $shadcn_visible_blocks );
	$shadcn_overflow_size = isset( $shadcn_last_visible['attrs']['size'] ) ? $shadcn_last_visible['attrs']['size'] : 'md';
	// Wrapped in the same .wp-block-shadcn-avatar div real avatar children
	// get from get_block_wrapper_attributes(), so the overflow indicator is
	// a flex item CSS can target identically (see avatar-group/style.scss).
	$shadcn_inner_content .= sprintf(
		'<div class="wp-block-shadcn-avatar">%s</div>',
		\ShadcnBlocks\Avatar::get_instance()->render_fallback_circle( '+' . $shadcn_remainder, $shadcn_overflow_size )
	);
}

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'wp-block-shadcn-avatar-group shadcn-avatar-group',
	)
);
?>
<div <?php echo $shadcn_wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php echo $shadcn_inner_content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div>
