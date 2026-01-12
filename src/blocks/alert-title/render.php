<?php
/**
 * Alert Title block render.
 *
 * @package WpShadcnBlocks
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content (saved HTML from save function).
 * @var WP_Block $block      Block instance.
 */

defined( 'ABSPATH' ) || exit;

// The content from save() is just the div with the title: <div>title</div>
// We need to wrap it with the block wrapper classes
$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'wp-block-wpshadcn-alert-title alert-title',
	)
);
?>
<div <?php echo $wrapper_attributes; ?>>
	<?php echo $content; ?>
</div>
