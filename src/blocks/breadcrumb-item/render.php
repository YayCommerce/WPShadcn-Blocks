<?php
/**
 * Breadcrumb Item block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused, dynamic render).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$shadcn_type   = isset( $attributes['type'] ) && 'ellipsis' === $attributes['type'] ? 'ellipsis' : 'link';
$shadcn_label  = isset( $attributes['label'] ) ? $attributes['label'] : '';
$shadcn_url    = isset( $attributes['url'] ) ? $attributes['url'] : '';
$shadcn_target = isset( $attributes['linkTarget'] ) ? $attributes['linkTarget'] : '';

$shadcn_link_attributes = '';
if ( '' !== $shadcn_url ) {
	$shadcn_link_attributes = ' href="' . esc_url( $shadcn_url ) . '"';
	if ( '_blank' === $shadcn_target ) {
		$shadcn_link_attributes .= ' target="_blank" rel="noopener noreferrer"';
	}
}

if ( 'ellipsis' === $shadcn_type ) {
	$shadcn_body = '<span class="breadcrumb-ellipsis" aria-hidden="true">' . \ShadcnBlocks\Icons::render_icon( 'more-horizontal' ) . '</span>'
		. '<span class="breadcrumb-sr">' . esc_html__( 'More', 'yaycommerce-blocks-for-shadcn-ui' ) . '</span>';
	if ( '' !== $shadcn_url ) {
		$shadcn_body = '<a class="breadcrumb-link"' . $shadcn_link_attributes . '>' . $shadcn_body . '</a>';
	}
} elseif ( '' === $shadcn_label ) {
	return;
} elseif ( '' !== $shadcn_url ) {
	$shadcn_body = '<a class="breadcrumb-link"' . $shadcn_link_attributes . '>' . wp_kses_post( $shadcn_label ) . '</a>';
} else {
	$shadcn_body = '<span class="breadcrumb-page" role="link" aria-disabled="true" aria-current="page">' . wp_kses_post( $shadcn_label ) . '</span>';
}

$shadcn_separator = isset( $block->context['shadcn/breadcrumb-separator'] ) && '' !== $block->context['shadcn/breadcrumb-separator']
	? $block->context['shadcn/breadcrumb-separator']
	: 'chevron-right';

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'wp-block-shadcn-breadcrumb-item breadcrumb-item',
	)
);
?>
<li <?php echo $shadcn_wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<span class="breadcrumb-separator" aria-hidden="true"><?php echo \ShadcnBlocks\Icons::render_icon( $shadcn_separator ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
	<?php echo $shadcn_body; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</li>
