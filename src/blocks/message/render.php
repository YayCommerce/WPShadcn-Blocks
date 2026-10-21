<?php
/**
 * Message block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner paragraphs).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

// Own align wins; otherwise inherit the Message Group default; otherwise "start".
$shadcn_align = isset( $attributes['align'] ) ? $attributes['align'] : '';
if ( '' === $shadcn_align ) {
	$shadcn_align = isset( $block->context['shadcn/message-align'] ) ? $block->context['shadcn/message-align'] : 'start';
}
$shadcn_align = 'end' === $shadcn_align ? 'end' : 'start';

$shadcn_variant = isset( $attributes['variant'] ) && '' !== $attributes['variant'] ? $attributes['variant'] : 'default';

$shadcn_header      = isset( $attributes['header'] ) ? $attributes['header'] : '';
$shadcn_footer      = isset( $attributes['footer'] ) ? $attributes['footer'] : '';
$shadcn_reaction    = isset( $attributes['reaction'] ) ? $attributes['reaction'] : '';
$shadcn_actions     = isset( $attributes['actions'] ) && is_array( $attributes['actions'] ) ? $attributes['actions'] : array();
$shadcn_show_avatar = ! isset( $attributes['showAvatar'] ) || $attributes['showAvatar'];
$shadcn_media_url   = isset( $attributes['mediaUrl'] ) ? $attributes['mediaUrl'] : '';
$shadcn_media_alt   = isset( $attributes['mediaAlt'] ) ? $attributes['mediaAlt'] : '';
$shadcn_size        = isset( $attributes['size'] ) ? $attributes['size'] : 'sm';
$shadcn_fallback    = isset( $attributes['fallback'] ) ? $attributes['fallback'] : '';

$shadcn_size = in_array( $shadcn_size, array( 'sm', 'md', 'lg' ), true ) ? $shadcn_size : 'sm';

$shadcn_wrapper_classes = array(
	'wp-block-shadcn-message',
	'message',
	'message-align-' . $shadcn_align,
);
// Footer actions: icons styled as shadcn ghost icon buttons. They have no
// behavior in a static layout, so they render as decorative spans rather than
// focusable buttons that do nothing. The name shows as a hover tooltip
// ("thumbs-up" reads as "Thumbs up", "refresh-cw" as "Refresh"). Unknown
// slugs render nothing.
//
// Actions are hidden for now: with the loop commented out the HTML stays
// empty, so no footer row or modifier class is output. Uncomment to restore.
$shadcn_actions_html = '';
/*
foreach ( $shadcn_actions as $shadcn_action ) {
	$shadcn_action_icon = \ShadcnBlocks\Icons::render_icon( (string) $shadcn_action );
	if ( '' !== $shadcn_action_icon ) {
		$shadcn_action_label  = ucfirst( str_replace( '-', ' ', preg_replace( '/-c?cw$/', '', (string) $shadcn_action ) ) );
		$shadcn_actions_html .= '<span class="message-action" title="' . esc_attr( $shadcn_action_label ) . '">' . $shadcn_action_icon . '</span>';
	}
}
*/

if ( '' !== $shadcn_footer || '' !== $shadcn_actions_html ) {
	$shadcn_wrapper_classes[] = 'message-has-footer';
}
if ( '' !== $shadcn_actions_html ) {
	$shadcn_wrapper_classes[] = 'message-has-actions';
}
if ( '' !== $shadcn_reaction ) {
	$shadcn_wrapper_classes[] = 'message-has-reaction';
}

// Color and radius supports skip serialization on the row wrapper and land on
// the bubble surface instead, the part a reader sees as "the message". Palette
// slugs go through the style engine so their classes match core's kebab-case.
$shadcn_bubble_color = isset( $attributes['style']['color'] ) ? $attributes['style']['color'] : array();
if ( ! empty( $attributes['backgroundColor'] ) ) {
	$shadcn_bubble_color['background'] = 'var:preset|color|' . $attributes['backgroundColor'];
}
if ( ! empty( $attributes['textColor'] ) ) {
	$shadcn_bubble_color['text'] = 'var:preset|color|' . $attributes['textColor'];
}
$shadcn_bubble_styles = wp_style_engine_get_styles(
	array(
		'color'  => $shadcn_bubble_color,
		'border' => array(
			'radius' => isset( $attributes['style']['border']['radius'] ) ? $attributes['style']['border']['radius'] : null,
		),
	),
	array( 'convert_vars_to_classnames' => true )
);
$shadcn_bubble_style   = isset( $shadcn_bubble_styles['css'] ) ? $shadcn_bubble_styles['css'] : '';
$shadcn_bubble_classes = array(
	'wp-block-shadcn-bubble',
	'bubble',
	'bubble-' . $shadcn_variant,
	isset( $shadcn_bubble_styles['classnames'] ) ? $shadcn_bubble_styles['classnames'] : '',
);

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => implode( ' ', array_map( 'esc_attr', $shadcn_wrapper_classes ) ),
	)
);
?>
<div <?php echo $shadcn_wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php if ( $shadcn_show_avatar ) : ?>
		<div class="message-avatar message-avatar--<?php echo esc_attr( $shadcn_size ); ?>">
			<?php if ( '' !== $shadcn_media_url ) : ?>
				<span class="shadcn-avatar shadcn-avatar--<?php echo esc_attr( $shadcn_size ); ?>">
					<img
						src="<?php echo esc_url( $shadcn_media_url ); ?>"
						alt="<?php echo esc_attr( $shadcn_media_alt ); ?>"
						class="shadcn-avatar__image"
						onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
					/>
					<span class="shadcn-avatar__fallback" style="display:none"><?php echo esc_html( $shadcn_fallback ); ?></span>
				</span>
			<?php elseif ( '' !== $shadcn_fallback ) : ?>
				<?php echo \ShadcnBlocks\Avatar::get_instance()->render_fallback_circle( $shadcn_fallback, $shadcn_size ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	<div class="message-content">
		<?php if ( '' !== $shadcn_header ) : ?>
			<div class="message-header"><?php echo wp_kses_post( $shadcn_header ); ?></div>
		<?php endif; ?>
		<?php // The surface reuses the Bubble block's classes and stylesheet. ?>
		<div class="<?php echo esc_attr( trim( implode( ' ', $shadcn_bubble_classes ) ) ); ?>"<?php echo '' !== $shadcn_bubble_style ? ' style="' . esc_attr( $shadcn_bubble_style ) . '"' : ''; ?>>
			<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			<?php if ( '' !== $shadcn_reaction ) : ?>
				<span class="message-reaction"><?php echo esc_html( $shadcn_reaction ); ?></span>
			<?php endif; ?>
		</div>
		<?php if ( '' !== $shadcn_footer || '' !== $shadcn_actions_html ) : ?>
			<div class="message-footer">
				<?php if ( '' !== $shadcn_footer ) : ?>
					<span class="message-footer-text"><?php echo wp_kses_post( $shadcn_footer ); ?></span>
				<?php endif; ?>
				<?php if ( '' !== $shadcn_actions_html ) : ?>
					<span class="message-actions" aria-hidden="true"><?php echo $shadcn_actions_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- built from Icons::render_icon() above. ?></span>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</div>
