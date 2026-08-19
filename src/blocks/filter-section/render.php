<?php
/**
 * Filter Section block render.
 *
 * The label does three jobs from one place: it is the heading shown above the
 * section, the value the parent's dropdown selects on, and the option text in
 * that dropdown. Emitting it as a `data-` attribute is what lets the frontend
 * script match a section without needing an index or an id to agree with the
 * parent's markup.
 *
 * A section with no label renders no heading and carries no filter value, so
 * it stays visible under every selection — the way to keep an intro or a
 * standing "featured" group above the filtered ones.
 *
 * `showLabel` separates the two jobs the label does: a section can still be
 * filterable by its label while printing no heading, which is what a feed of
 * rows wants when each row already names its own category.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$label = isset( $attributes['label'] ) ? trim( (string) $attributes['label'] ) : '';

$heading_level = isset( $attributes['headingLevel'] ) ? (int) $attributes['headingLevel'] : 2;
if ( $heading_level < 1 || $heading_level > 6 ) {
	$heading_level = 2;
}
$heading_tag = 'h' . $heading_level;

$show_label = ! isset( $attributes['showLabel'] ) || (bool) $attributes['showLabel'];

$wrapper_attributes = get_block_wrapper_attributes(
	'' !== $label ? array( 'data-filter-label' => $label ) : array()
);
?>

<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php if ( '' !== $label && $show_label ) : ?>
		<<?php echo esc_attr( $heading_tag ); ?> class="wp-block-shadcn-filter-section__title">
			<?php echo esc_html( $label ); ?>
		</<?php echo esc_attr( $heading_tag ); ?>>
	<?php endif; ?>

	<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div>
