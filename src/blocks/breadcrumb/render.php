<?php
/**
 * Breadcrumb block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner shadcn/breadcrumb-item blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$shadcn_separator = ! empty( $attributes['separator'] ) ? $attributes['separator'] : 'chevron-right';

// Auto: ignore the hand-built items and render the current page's trail
// through the item block, so its markup lives in one place.
if ( isset( $attributes['source'] ) && 'auto' === $attributes['source'] ) {
	$shadcn_home_label = ! empty( $attributes['homeLabel'] ) ? $attributes['homeLabel'] : __( 'Home', 'yaycommerce-blocks-for-shadcn-ui' );
	$content           = '';

	foreach ( \ShadcnBlocks\Breadcrumb::get_trail( $shadcn_home_label ) as $shadcn_entry ) {
		$shadcn_item = new WP_Block(
			array(
				'blockName'    => 'shadcn/breadcrumb-item',
				'attrs'        => array(
					'label' => esc_html( $shadcn_entry[0] ),
					'url'   => $shadcn_entry[1],
				),
				'innerBlocks'  => array(),
				'innerHTML'    => '',
				'innerContent' => array(),
			),
			array( 'shadcn/breadcrumb-separator' => $shadcn_separator )
		);
		$content    .= $shadcn_item->render();
	}
}

// Own color settings rather than the color support: the theme's Hover color
// extension would recolor the whole block on hover, not just the hovered item.
$shadcn_colors = '';
foreach ( array(
	'color'      => '--shadcn-breadcrumb-color',
	'hoverColor' => '--shadcn-breadcrumb-hover-color',
) as $shadcn_attribute => $shadcn_property ) {
	// Hex or var() only: WP's safecss strips rgb()/hsl()/oklch() from style attributes anyway.
	$shadcn_color = isset( $attributes[ $shadcn_attribute ] ) ? trim( $attributes[ $shadcn_attribute ] ) : '';
	if ( preg_match( '/^(#[0-9a-f]{3,8}|var\(--[A-Za-z0-9-]+\))$/i', $shadcn_color ) ) {
		$shadcn_colors .= $shadcn_property . ':' . $shadcn_color . ';';
	}
}

// Only the last step is the current page; an unlinked step earlier in the
// trail is just text. The item can't know its position, so mark it here.
$shadcn_tags = new WP_HTML_Tag_Processor( $content );
while ( $shadcn_tags->next_tag( array( 'class_name' => 'breadcrumb-item' ) ) ) {
	$shadcn_tags->set_bookmark( 'last' );
}
if ( $shadcn_tags->seek( 'last' ) && $shadcn_tags->next_tag( array( 'class_name' => 'breadcrumb-page' ) ) ) {
	$shadcn_tags->set_attribute( 'role', 'link' );
	$shadcn_tags->set_attribute( 'aria-disabled', 'true' );
	$shadcn_tags->set_attribute( 'aria-current', 'page' );
	$content = $shadcn_tags->get_updated_html();
}

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class'      => 'wp-block-shadcn-breadcrumb breadcrumb',
		'style'      => $shadcn_colors,
		'aria-label' => __( 'Breadcrumb', 'yaycommerce-blocks-for-shadcn-ui' ),
	)
);
?>
<nav <?php echo $shadcn_wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<ol class="breadcrumb-list">
		<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</ol>
</nav>
