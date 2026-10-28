<?php
/**
 * Attachment block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused, dynamic render).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$shadcn_title       = isset( $attributes['title'] ) ? $attributes['title'] : '';
$shadcn_description = isset( $attributes['description'] ) ? $attributes['description'] : '';
$shadcn_url         = isset( $attributes['url'] ) ? $attributes['url'] : '';
$shadcn_link_target = isset( $attributes['linkTarget'] ) && '_blank' === $attributes['linkTarget'] ? '_blank' : '';
$shadcn_icon_name   = isset( $attributes['iconName'] ) ? $attributes['iconName'] : '';
$shadcn_image_url   = isset( $attributes['imageUrl'] ) ? $attributes['imageUrl'] : '';
$shadcn_image_alt   = isset( $attributes['imageAlt'] ) ? $attributes['imageAlt'] : '';

// Allow-lists: these values become attribute values and class names.
$shadcn_state       = isset( $attributes['state'] ) ? $attributes['state'] : 'done';
$shadcn_size        = isset( $attributes['size'] ) ? $attributes['size'] : 'default';
$shadcn_orientation = isset( $attributes['orientation'] ) ? $attributes['orientation'] : 'horizontal';
$shadcn_media_type  = isset( $attributes['mediaType'] ) ? $attributes['mediaType'] : 'icon';
$shadcn_download    = ! empty( $attributes['showDownload'] );

$shadcn_state       = in_array( $shadcn_state, array( 'idle', 'uploading', 'processing', 'error', 'done' ), true ) ? $shadcn_state : 'done';
$shadcn_size        = in_array( $shadcn_size, array( 'default', 'sm', 'xs' ), true ) ? $shadcn_size : 'default';
$shadcn_orientation = 'vertical' === $shadcn_orientation ? 'vertical' : 'horizontal';
$shadcn_media_type  = in_array( $shadcn_media_type, array( 'icon', 'image', 'none' ), true ) ? $shadcn_media_type : 'icon';

$shadcn_label   = trim( wp_strip_all_tags( $shadcn_title ) );
// esc_url() drops unsafe protocols (javascript:), which would leave an empty href that reloads the page.
$shadcn_has_url = '' !== esc_url( $shadcn_url );

// Media: the spinner replaces the icon while uploading; an image without a URL falls back to the icon.
$shadcn_media_html = '';
if ( 'image' === $shadcn_media_type && '' !== esc_url( $shadcn_image_url ) ) {
	$shadcn_media_html = '<img src="' . esc_url( $shadcn_image_url ) . '" alt="' . esc_attr( $shadcn_image_alt ) . '" loading="lazy" />';
} elseif ( 'none' !== $shadcn_media_type ) {
	$shadcn_media_type = 'icon';
	$shadcn_media_html = \ShadcnBlocks\Icons::render_icon( 'uploading' === $shadcn_state ? 'loader-circle' : $shadcn_icon_name );
}

// An empty card has nothing to show.
if ( '' === $shadcn_media_html && '' === trim( wp_strip_all_tags( $shadcn_title . $shadcn_description ) ) ) {
	return;
}

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'data-state'       => $shadcn_state,
		'data-size'        => $shadcn_size,
		'data-orientation' => $shadcn_orientation,
	)
);
?>
<div <?php echo $shadcn_wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php if ( '' !== $shadcn_media_html ) : ?>
		<div class="wp-block-shadcn-attachment__media wp-block-shadcn-attachment__media--<?php echo esc_attr( $shadcn_media_type ); ?><?php echo 'uploading' === $shadcn_state && 'icon' === $shadcn_media_type ? ' is-spinning' : ''; ?>">
			<?php echo $shadcn_media_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Icons::render_icon() is sanitized, <img> built above. ?>
		</div>
	<?php endif; ?>
	<?php if ( '' !== $shadcn_title || '' !== $shadcn_description ) : ?>
		<div class="wp-block-shadcn-attachment__content">
			<?php if ( '' !== $shadcn_title ) : ?>
				<span class="wp-block-shadcn-attachment__title"><?php echo wp_kses_post( $shadcn_title ); ?></span>
			<?php endif; ?>
			<?php if ( '' !== $shadcn_description ) : ?>
				<span class="wp-block-shadcn-attachment__description"><?php echo wp_kses_post( $shadcn_description ); ?></span>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	<?php if ( $shadcn_download && $shadcn_has_url ) : ?>
		<div class="wp-block-shadcn-attachment__actions">
			<a
				class="wp-block-shadcn-attachment__action"
				href="<?php echo esc_url( $shadcn_url ); ?>"
				download
				aria-label="<?php echo esc_attr( '' !== $shadcn_label ? sprintf( /* translators: %s: file name */ __( 'Download %s', 'yaycommerce-blocks-for-shadcn-ui' ), $shadcn_label ) : __( 'Download', 'yaycommerce-blocks-for-shadcn-ui' ) ); ?>"
			>
				<?php echo \ShadcnBlocks\Icons::render_icon( 'download' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- sanitized by Icons::render_icon(). ?>
			</a>
		</div>
	<?php endif; ?>
	<?php if ( $shadcn_has_url ) : ?>
		<a
			class="wp-block-shadcn-attachment__trigger"
			href="<?php echo esc_url( $shadcn_url ); ?>"
			<?php echo '' !== $shadcn_link_target ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>
			aria-label="<?php echo esc_attr( '' !== $shadcn_label ? sprintf( /* translators: %s: file name */ __( 'Open %s', 'yaycommerce-blocks-for-shadcn-ui' ), $shadcn_label ) : __( 'Open attachment', 'yaycommerce-blocks-for-shadcn-ui' ) ); ?>"
		></a>
	<?php endif; ?>
</div>
