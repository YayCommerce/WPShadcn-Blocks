<?php
/**
 * Empty block render.
 *
 * @package WpShadcnBlocks
 */

defined( 'ABSPATH' ) || exit;

$wrapper_attributes = get_block_wrapper_attributes(
  array(
    'class' => 'wp-block-wpshadcn-empty',
  )
);
?>

<div <?php echo $wrapper_attributes; ?>>
  <?php echo $content; ?>
</div>
