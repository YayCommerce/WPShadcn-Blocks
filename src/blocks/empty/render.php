<?php
/**
 * Empty block render.
 *
 * @package ShadcnBlocks
 */

defined( 'ABSPATH' ) || exit;

$shadcn_wrapper_attributes = get_block_wrapper_attributes(
  array(
    'class' => 'wp-block-shadcn-empty',
  )
);
?>

<div <?php echo $shadcn_wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
  <?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div>
