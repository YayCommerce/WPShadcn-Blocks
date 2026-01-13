<?php
/**
 * Icon block render.
 *
 * @package WpShadcnBlocks
 */

defined( 'ABSPATH' ) || exit;

$icon = isset( $attributes['icon'] ) ? $attributes['icon'] : '';
$size = isset( $attributes['size'] ) ? $attributes['size'] : '24px';
$color = isset( $attributes['color'] ) ? $attributes['color'] : 'currentColor';

$wrapper_attributes = get_block_wrapper_attributes(
  array(
    'class' => 'wp-block-wpshadcn-icon',
  )
);

// Fetch SVG content from Lucide CDN
$svg_content = '';
if ( ! empty( $icon ) ) {
  $svg_url = 'https://cdn.jsdelivr.net/npm/lucide-static@latest/icons/' . esc_attr( $icon ) . '.svg';
  $response = wp_remote_get( $svg_url );
  
  if ( ! is_wp_error( $response ) && wp_remote_retrieve_response_code( $response ) === 200 ) {
    $svg_body = wp_remote_retrieve_body( $response );
    
    // Parse the SVG to extract inner content
    $dom = new DOMDocument();
    @$dom->loadXML( $svg_body );
    $svg_element = $dom->getElementsByTagName( 'svg' )->item( 0 );
    
    if ( $svg_element ) {
      $inner_content = '';
      foreach ( $svg_element->childNodes as $child ) {
        $inner_content .= $dom->saveXML( $child );
      }
      
      $svg_content = sprintf(
        '<svg xmlns="http://www.w3.org/2000/svg" width="%s" height="%s" viewBox="0 0 24 24" fill="none" stroke="%s" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">%s</svg>',
        esc_attr( $size ),
        esc_attr( $size ),
        esc_attr( $color ),
        $inner_content
      );
    }
  }
}
?>

<div <?php echo $wrapper_attributes; ?>>
  <?php echo $svg_content; ?>
</div>
