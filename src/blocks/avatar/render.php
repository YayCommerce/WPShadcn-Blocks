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

$shadcn_media_url = isset( $attributes['mediaUrl'] ) ? $attributes['mediaUrl'] : '';
$shadcn_media_alt = isset( $attributes['mediaAlt'] ) ? $attributes['mediaAlt'] : '';
$shadcn_size      = isset( $attributes['size'] ) ? $attributes['size'] : 'md';
$shadcn_fallback  = isset( $attributes['fallback'] ) ? $attributes['fallback'] : '';

$shadcn_size = in_array( $shadcn_size, array( 'sm', 'md', 'lg' ), true ) ? $shadcn_size : 'md';

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'wp-block-shadcn-avatar',
	)
);
?>
<div <?php echo $shadcn_wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php if ( empty( $shadcn_media_url ) ) : ?>
		<?php echo \ShadcnBlocks\Avatar::get_instance()->render_fallback_circle( $shadcn_fallback, $shadcn_size ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	<?php else : ?>
		<span class="shadcn-avatar shadcn-avatar--<?php echo esc_attr( $shadcn_size ); ?>">
			<img
				src="<?php echo esc_url( $shadcn_media_url ); ?>"
				alt="<?php echo esc_attr( $shadcn_media_alt ); ?>"
				class="shadcn-avatar__image"
				onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
			/>
			<span class="shadcn-avatar__fallback" style="display:none"><?php echo esc_html( $shadcn_fallback ); ?></span>
		</span>
	<?php endif; ?>
</div>
