<?php
/**
 * Attachment Group block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner shadcn/attachment blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( '' === trim( $content ) ) {
	return;
}

// Core only turns `blockGap` into CSS for blocks that declare layout support,
// so resolve it here into the custom property style.scss reads (the
// message-group precedent). Only a preset reference or a bare CSS length is
// accepted, so nothing else can reach the style attribute.
$shadcn_block_gap = isset( $attributes['style']['spacing']['blockGap'] )
	? $attributes['style']['spacing']['blockGap']
	: '';

if ( is_array( $shadcn_block_gap ) ) {
	$shadcn_block_gap = isset( $shadcn_block_gap['left'] ) ? $shadcn_block_gap['left'] : ( isset( $shadcn_block_gap['top'] ) ? $shadcn_block_gap['top'] : '' );
}

$shadcn_block_gap = trim( (string) $shadcn_block_gap );
// Always set, so a nested group doesn't inherit its parent's gap: gap-3 by default.
$shadcn_group_gap = 'calc(var(--spacing, 0.25rem) * 3)';

if ( preg_match( '/^var:preset\|spacing\|([A-Za-z0-9-]+)$/', $shadcn_block_gap, $matches ) ) {
	$shadcn_group_gap = 'var(--wp--preset--spacing--' . $matches[1] . ')';
} elseif ( preg_match( '/^(0|[0-9]+(\.[0-9]+)?(px|rem|em|vh|vw|%))$/', $shadcn_block_gap ) ) {
	$shadcn_group_gap = $shadcn_block_gap;
}

$shadcn_label = isset( $attributes['label'] ) ? trim( $attributes['label'] ) : '';
if ( '' === $shadcn_label ) {
	$shadcn_label = __( 'Attachments', 'yaycommerce-blocks-for-shadcn-ui' );
}

// Scrollable region: focusable and labelled so keyboard users can scroll it.
$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class'      => 'shadcn-attachment-group',
		'style'      => '--shadcn-attachment-group-gap:' . $shadcn_group_gap . ';',
		'role'       => 'group',
		'tabindex'   => '0',
		'aria-label' => $shadcn_label,
	)
);
?>
<div <?php echo $shadcn_wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div>
