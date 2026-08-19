<?php
/**
 * Filterable Sections block render.
 *
 * The dropdown is built here from the child `shadcn/filter-section` labels
 * rather than from a list of its own, so the options can never drift out of
 * sync with the sections they reveal — the label an author types on a section
 * is the option, the section's filter value, and its heading all at once.
 *
 * Sections are emitted through `$content` (each child renders itself) instead
 * of being re-rendered here: the parent only needs their labels, and reading
 * those from the parsed block keeps a single render pass per section.
 *
 * Every section ships visible. Filtering is a frontend enhancement, so with
 * no JavaScript a visitor still gets the whole list rather than an empty page.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$inner_blocks = ( isset( $block ) && isset( $block->parsed_block['innerBlocks'] ) )
	? $block->parsed_block['innerBlocks']
	: array();

// Collect the distinct section labels, in author order. An unlabelled section
// gets no option and stays visible under every filter, which is what makes it
// usable for a standing intro or "featured" block above the filtered ones.
$labels = array();
foreach ( $inner_blocks as $inner_block ) {
	if ( ! isset( $inner_block['blockName'] ) || 'shadcn/filter-section' !== $inner_block['blockName'] ) {
		continue;
	}

	$label = isset( $inner_block['attrs']['label'] ) ? trim( (string) $inner_block['attrs']['label'] ) : '';

	if ( '' !== $label && ! in_array( $label, $labels, true ) ) {
		$labels[] = $label;
	}
}

$filter_label     = isset( $attributes['filterLabel'] ) ? (string) $attributes['filterLabel'] : '';
$all_option_label = isset( $attributes['allOptionLabel'] ) ? (string) $attributes['allOptionLabel'] : '';

if ( '' === trim( $all_option_label ) ) {
	$all_option_label = __( 'All', 'shadcn-blocks' );
}

$select_id          = wp_unique_id( 'shadcn-filterable-sections-' );
$wrapper_attributes = get_block_wrapper_attributes();
?>

<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php if ( ! empty( $labels ) ) : ?>
		<div class="wp-block-shadcn-filterable-sections__control">
			<?php if ( '' !== trim( $filter_label ) ) : ?>
				<label class="wp-block-shadcn-filterable-sections__label" for="<?php echo esc_attr( $select_id ); ?>">
					<?php echo esc_html( $filter_label ); ?>
				</label>
			<?php endif; ?>

			<span class="wp-block-shadcn-filterable-sections__select-wrap">
				<select class="wp-block-shadcn-filterable-sections__select" id="<?php echo esc_attr( $select_id ); ?>">
					<option value=""><?php echo esc_html( $all_option_label ); ?></option>
					<?php foreach ( $labels as $label ) : ?>
						<option value="<?php echo esc_attr( $label ); ?>"><?php echo esc_html( $label ); ?></option>
					<?php endforeach; ?>
				</select>
			</span>
		</div>
	<?php endif; ?>

	<div class="wp-block-shadcn-filterable-sections__sections">
		<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</div>
</div>
