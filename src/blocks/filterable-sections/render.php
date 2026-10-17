<?php
/**
 * Filterable Sections block render.
 *
 * The control is built here from the child `shadcn/filter-section` labels
 * rather than from a list of its own, so the choices can never drift out of
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

$shadcn_inner_blocks = ( isset( $block ) && isset( $block->parsed_block['innerBlocks'] ) )
	? $block->parsed_block['innerBlocks']
	: array();

// Collect the distinct section labels, in author order. An unlabelled section
// gets no option and stays visible under every filter, which is what makes it
// usable for a standing intro or "featured" block above the filtered ones.
$shadcn_labels = array();
foreach ( $shadcn_inner_blocks as $shadcn_inner_block ) {
	if ( ! isset( $shadcn_inner_block['blockName'] ) || 'shadcn/filter-section' !== $shadcn_inner_block['blockName'] ) {
		continue;
	}

	$shadcn_label = isset( $shadcn_inner_block['attrs']['label'] ) ? trim( (string) $shadcn_inner_block['attrs']['label'] ) : '';

	if ( '' !== $shadcn_label && ! in_array( $shadcn_label, $shadcn_labels, true ) ) {
		$shadcn_labels[] = $shadcn_label;
	}
}

$shadcn_filter_label     = isset( $attributes['filterLabel'] ) ? (string) $attributes['filterLabel'] : '';
$shadcn_all_option_label = isset( $attributes['allOptionLabel'] ) ? (string) $attributes['allOptionLabel'] : '';

if ( '' === trim( $shadcn_all_option_label ) ) {
	$shadcn_all_option_label = __( 'All', 'yaycommerce-blocks-for-shadcn-ui' );
}

// Only a known control/position may reach the class list, so a crafted
// attribute cannot inject a class of its own.
$shadcn_control  = ( isset( $attributes['control'] ) && 'buttons' === $attributes['control'] ) ? 'buttons' : 'dropdown';
$shadcn_position = ( isset( $attributes['controlPosition'] ) && 'side' === $attributes['controlPosition'] ) ? 'side' : 'top';

$shadcn_control_id = wp_unique_id( 'shadcn-filterable-sections-' );

// Core only turns `blockGap` into CSS for blocks that declare layout support,
// and this one builds its own markup instead. Resolving the value here is what
// keeps the block-gap control real rather than a slider that does nothing: a
// feed whose rows carry their own dividers wants the sections closed right up,
// while headed sections want plenty of air. Only a preset reference or a bare
// CSS length is accepted, so nothing else can reach the style attribute.
$shadcn_block_gap = isset( $attributes['style']['spacing']['blockGap'] )
	? $attributes['style']['spacing']['blockGap']
	: '';

if ( is_array( $shadcn_block_gap ) ) {
	$shadcn_block_gap = isset( $shadcn_block_gap['top'] ) ? $shadcn_block_gap['top'] : '';
}

$shadcn_block_gap    = trim( (string) $shadcn_block_gap );
$shadcn_sections_gap = '';

if ( preg_match( '/^var:preset\|spacing\|([A-Za-z0-9-]+)$/', $shadcn_block_gap, $matches ) ) {
	$shadcn_sections_gap = 'var(--wp--preset--spacing--' . $matches[1] . ')';
} elseif ( preg_match( '/^(0|[0-9]+(\.[0-9]+)?(px|rem|em|vh|vw|%))$/', $shadcn_block_gap ) ) {
	$shadcn_sections_gap = $shadcn_block_gap;
}

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'has-control-' . $shadcn_control . ' has-control-' . $shadcn_position,
	)
);
?>

<div <?php echo $shadcn_wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php if ( ! empty( $shadcn_labels ) ) : ?>
		<div class="wp-block-shadcn-filterable-sections__control">
			<?php if ( '' !== trim( $shadcn_filter_label ) ) : ?>
				<?php if ( 'buttons' === $shadcn_control ) : ?>
					<span class="wp-block-shadcn-filterable-sections__label" id="<?php echo esc_attr( $shadcn_control_id ); ?>">
						<?php echo esc_html( $shadcn_filter_label ); ?>
					</span>
				<?php else : ?>
					<label class="wp-block-shadcn-filterable-sections__label" for="<?php echo esc_attr( $shadcn_control_id ); ?>">
						<?php echo esc_html( $shadcn_filter_label ); ?>
					</label>
				<?php endif; ?>
			<?php endif; ?>

			<?php if ( 'buttons' === $shadcn_control ) : ?>
				<?php
				// A group of toggle buttons rather than radios: `aria-pressed`
				// states which filter is on without claiming these are form
				// inputs, and it is the pressed button the styles key off.
				?>
				<div
					class="wp-block-shadcn-filterable-sections__buttons"
					role="group"
					<?php if ( '' !== trim( $shadcn_filter_label ) ) : ?>
						aria-labelledby="<?php echo esc_attr( $shadcn_control_id ); ?>"
					<?php endif; ?>
				>
					<button type="button" class="wp-block-shadcn-filterable-sections__button is-active" value="" aria-pressed="true">
						<?php echo esc_html( $shadcn_all_option_label ); ?>
					</button>
					<?php foreach ( $shadcn_labels as $shadcn_label ) : ?>
						<button type="button" class="wp-block-shadcn-filterable-sections__button" value="<?php echo esc_attr( $shadcn_label ); ?>" aria-pressed="false">
							<?php echo esc_html( $shadcn_label ); ?>
						</button>
					<?php endforeach; ?>
				</div>
			<?php else : ?>
				<span class="wp-block-shadcn-filterable-sections__select-wrap">
					<select class="wp-block-shadcn-filterable-sections__select" id="<?php echo esc_attr( $shadcn_control_id ); ?>">
						<option value=""><?php echo esc_html( $shadcn_all_option_label ); ?></option>
						<?php foreach ( $shadcn_labels as $shadcn_label ) : ?>
							<option value="<?php echo esc_attr( $shadcn_label ); ?>"><?php echo esc_html( $shadcn_label ); ?></option>
						<?php endforeach; ?>
					</select>
				</span>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<div
		class="wp-block-shadcn-filterable-sections__sections"
		<?php if ( '' !== $shadcn_sections_gap ) : ?>
			style="--shadcn-filter-sections-gap:<?php echo esc_attr( $shadcn_sections_gap ); ?>"
		<?php endif; ?>
	>
		<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</div>
</div>
