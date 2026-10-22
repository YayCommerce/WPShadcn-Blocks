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
	$shadcn_color = isset( $attributes[ $shadcn_attribute ] ) ? sanitize_hex_color( $attributes[ $shadcn_attribute ] ) : '';
	if ( $shadcn_color ) {
		$shadcn_colors .= $shadcn_property . ':' . $shadcn_color . ';';
	}
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
