<?php
/**
 * Avatar block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (unused, dynamic render).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$media_url = isset( $attributes['mediaUrl'] ) ? $attributes['mediaUrl'] : '';
$media_alt = isset( $attributes['mediaAlt'] ) ? $attributes['mediaAlt'] : '';
$size      = isset( $attributes['size'] ) ? $attributes['size'] : 'md';
$fallback  = isset( $attributes['fallback'] ) ? $attributes['fallback'] : '';

$size = in_array( $size, array( 'sm', 'md', 'lg' ), true ) ? $size : 'md';

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'wp-block-shadcn-avatar',
	)
);
?>
<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php if ( empty( $media_url ) ) : ?>
		<?php echo \ShadcnBlocks\Avatar::get_instance()->render_fallback_circle( $fallback, $size ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	<?php else : ?>
		<span class="shadcn-avatar shadcn-avatar--<?php echo esc_attr( $size ); ?>">
			<img
				src="<?php echo esc_url( $media_url ); ?>"
				alt="<?php echo esc_attr( $media_alt ); ?>"
				class="shadcn-avatar__image"
				onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
			/>
			<span class="shadcn-avatar__fallback" style="display:none"><?php echo esc_html( $fallback ); ?></span>
		</span>
	<?php endif; ?>
</div>
