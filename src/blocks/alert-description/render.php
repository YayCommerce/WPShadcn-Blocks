<?php
/**
 * Alert Description block render.
 *
 * @package ShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (inner blocks).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'wp-block-shadcn-alert-description alert-description',
	)
);
?>

<div <?php echo $wrapper_attributes; ?>>
	<?php echo $content; ?>
</div>
