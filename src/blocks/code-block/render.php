<?php
/**
 * Code Block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused, dynamic render).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'shadcn_code_block_line_set' ) ) {
	/**
	 * Parse "2,4-6" into a set of line numbers. Bad parts are ignored; a
	 * range is capped so a stray "1-999999999" cannot allocate a huge array.
	 *
	 * @param string $ranges Comma separated numbers and ranges.
	 * @return array<int,true>
	 */
	function shadcn_code_block_line_set( $ranges ) {
		$set = array();
		foreach ( explode( ',', (string) $ranges ) as $part ) {
			if ( ! preg_match( '/^\s*(\d+)\s*(?:-\s*(\d+))?\s*$/', $part, $m ) ) {
				continue;
			}
			$from = (int) $m[1];
			$to   = isset( $m[2] ) ? min( (int) $m[2], $from + 9999 ) : $from;
			for ( $i = $from; $i <= $to; $i++ ) {
				$set[ $i ] = true;
			}
		}
		return $set;
	}
}

$shadcn_code = isset( $attributes['code'] ) ? (string) $attributes['code'] : '';

if ( '' === trim( $shadcn_code ) ) {
	return;
}

$shadcn_title       = isset( $attributes['title'] ) ? trim( $attributes['title'] ) : '';
$shadcn_language    = isset( $attributes['language'] ) ? trim( $attributes['language'] ) : '';
$shadcn_start       = isset( $attributes['startLine'] ) ? (int) $attributes['startLine'] : 1;
$shadcn_max_lines   = isset( $attributes['maxLines'] ) ? max( 0, (int) $attributes['maxLines'] ) : 0;
$shadcn_lines       = explode( "\n", rtrim( str_replace( "\r\n", "\n", $shadcn_code ), "\n" ) );
// Cap only when there are more lines than "Visible lines". Decided here, not
// by measuring in view.js, so it also works inside closed tabs or accordions.
$shadcn_capped      = $shadcn_max_lines > 0 && count( $shadcn_lines ) > $shadcn_max_lines;
$shadcn_show_more   = $shadcn_capped && ( ! isset( $attributes['showMore'] ) || $attributes['showMore'] );
// Line markers use the numbers shown in the gutter.
$shadcn_first       = ! empty( $attributes['lineNumbers'] ) ? $shadcn_start : 1;
$shadcn_has_copy    = ! isset( $attributes['copy'] ) || $attributes['copy'];
$shadcn_has_header  = '' !== $shadcn_title;
$shadcn_highlighted = shadcn_code_block_line_set( $attributes['highlightLines'] ?? '' );
$shadcn_added       = shadcn_code_block_line_set( $attributes['addedLines'] ?? '' );
$shadcn_removed     = shadcn_code_block_line_set( $attributes['removedLines'] ?? '' );
$shadcn_td          = 'yaycommerce-blocks-for-shadcn-ui';

$shadcn_classes = array( 'wp-block-shadcn-code-block' );
if ( isset( $attributes['variant'] ) && 'destructive' === $attributes['variant'] ) {
	$shadcn_classes[] = 'is-destructive';
}
if ( isset( $attributes['size'] ) && 'sm' === $attributes['size'] ) {
	$shadcn_classes[] = 'is-sm';
}
if ( ! empty( $attributes['wrap'] ) ) {
	$shadcn_classes[] = 'is-wrap';
}
if ( ! empty( $attributes['lineNumbers'] ) ) {
	$shadcn_classes[] = 'has-line-numbers';
}
if ( $shadcn_capped ) {
	$shadcn_classes[] = 'has-max-height';
}
if ( $shadcn_show_more ) {
	$shadcn_classes[] = 'has-show-more';
}
if ( $shadcn_has_header ) {
	$shadcn_classes[] = 'has-header';
}

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => implode( ' ', $shadcn_classes ),
		'style' => $shadcn_capped ? '--code-max-lines:' . $shadcn_max_lines . ';' : '',
	)
);

$shadcn_lines_html = '';
foreach ( $shadcn_lines as $shadcn_index => $shadcn_line ) {
	$shadcn_number  = $shadcn_first + $shadcn_index;
	$shadcn_variant = '';
	if ( isset( $shadcn_added[ $shadcn_number ] ) ) {
		$shadcn_variant = 'added';
	} elseif ( isset( $shadcn_removed[ $shadcn_number ] ) ) {
		$shadcn_variant = 'removed';
	} elseif ( isset( $shadcn_highlighted[ $shadcn_number ] ) ) {
		$shadcn_variant = 'highlighted';
	}
	// An empty line holds a newline so copying a selection keeps blank lines (as shadcn).
	$shadcn_lines_html .= sprintf(
		'<span class="line"%s><span class="line-content">%s</span></span>',
		'' !== $shadcn_variant ? ' data-variant="' . esc_attr( $shadcn_variant ) . '"' : '',
		'' === $shadcn_line ? "\n" : esc_html( $shadcn_line )
	);
}

// Lucide icons, as shadcn uses them.
$shadcn_svg = static function ( $paths ) {
	return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths . '</svg>';
};

// Action buttons, in the order of shadcn's "Actions" example: wrap, download, copy.
$shadcn_actions = '';
if ( ! empty( $attributes['wrapToggle'] ) ) {
	$shadcn_actions .= '<button type="button" class="code-block-wrap" aria-pressed="' . ( ! empty( $attributes['wrap'] ) ? 'true' : 'false' ) . '" aria-label="' . esc_attr__( 'Wrap lines', $shadcn_td ) . '">'
		. $shadcn_svg( '<path d="m16 16-3 3 3 3"/><path d="M3 12h14.5a1 1 0 0 1 0 7H13"/><path d="M3 19h6"/><path d="M3 5h18"/>' ) . '</button>';
}
if ( ! empty( $attributes['download'] ) ) {
	$shadcn_filename = sanitize_file_name( $shadcn_title );
	if ( '' === $shadcn_filename ) {
		$shadcn_filename = 'code';
	}
	if ( false === strpos( $shadcn_filename, '.' ) ) {
		$shadcn_filename .= '.txt';
	}
	$shadcn_actions .= '<button type="button" class="code-block-download" data-filename="' . esc_attr( $shadcn_filename ) . '" aria-label="' . esc_attr__( 'Download', $shadcn_td ) . '">'
		. $shadcn_svg( '<path d="M12 15V3"/><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="m7 10 5 5 5-5"/>' ) . '</button>';
}
if ( $shadcn_has_copy ) {
	$shadcn_actions .= '<button type="button" class="code-block-copy" aria-label="' . esc_attr__( 'Copy', $shadcn_td ) . '" data-label="' . esc_attr__( 'Copy', $shadcn_td ) . '" data-copied-label="' . esc_attr__( 'Copied', $shadcn_td ) . '">'
		. $shadcn_svg( '<rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/>' )
		. $shadcn_svg( '<path d="M20 6 9 17l-5-5"/>' ) . '</button>';
}

$shadcn_pre_id = wp_unique_id( 'shadcn-code-' );

// Show more example: footer with a ghost xs button + chevron.
$shadcn_footer = '';
if ( $shadcn_show_more ) {
	$shadcn_footer = '<div class="code-block-footer"><button type="button" class="code-block-more" aria-expanded="false" aria-controls="' . esc_attr( $shadcn_pre_id ) . '" data-more="' . esc_attr__( 'Show more', $shadcn_td ) . '" data-less="' . esc_attr__( 'Show less', $shadcn_td ) . '">'
		. $shadcn_svg( '<path d="m6 9 6 6 6-6"/>' ) . '<span>' . esc_html__( 'Show more', $shadcn_td ) . '</span></button></div>';
}
?>
<div <?php echo $shadcn_wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php if ( $shadcn_has_header ) : ?>
		<div class="code-block-header">
			<div class="code-block-title"><?php echo esc_html( $shadcn_title ); ?></div>
			<?php echo $shadcn_actions ? '<div class="code-block-actions">' . $shadcn_actions . '</div>' : ''; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
	<?php elseif ( $shadcn_actions ) : ?>
		<div class="code-block-actions is-floating"><?php echo $shadcn_actions; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
	<?php endif; ?>
	<pre id="<?php echo esc_attr( $shadcn_pre_id ); ?>" class="code-block-content" dir="ltr" tabindex="0" style="counter-reset:line <?php echo (int) ( $shadcn_start - 1 ); ?>"><code<?php echo '' !== $shadcn_language ? ' data-language="' . esc_attr( $shadcn_language ) . '"' : ''; ?>><?php echo $shadcn_lines_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></code></pre>
	<?php echo $shadcn_footer; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	<span class="screen-reader-text code-block-status" aria-live="polite"></span>
</div>
