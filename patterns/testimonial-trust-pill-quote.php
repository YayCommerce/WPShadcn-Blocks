<?php
/**
 * Title: Testimonial Trust Pill Quote
 * Slug: shadcn/testimonial-trust-pill-quote
 * Categories: shadcn, testimonials
 * Description: A tinted full-width band holding a rounded trust pill of overlapping avatars with a short endorsement label, above one centred quote.
 * AI Hint: Compact centred testimonial band on a tinted accent background — a white rounded pill combining a stack of overlapping customer avatars with a short "trusted by" label, followed by a single medium-weight quote centred beneath it. Best as a quiet proof strip between two heavier sections when one sentence of praise is enough.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"accent","textColor":"accent-foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-foreground-color has-accent-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|2","right":"var:preset|spacing|4","bottom":"var:preset|spacing|2","left":"var:preset|spacing|2"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"background","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--2);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)"><!-- wp:shadcn/avatar-group {"maxVisible":3} -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Marisol Duarte","size":"md","fallback":"MD"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Kwame Adjei","size":"md","fallback":"KA"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Freya Lindqvist","size":"md","fallback":"FL"} /-->
<!-- /wp:shadcn/avatar-group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="font-weight:500">Trusted by design teams everywhere</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500"}},"fontSize":"2-xl"} -->
<p class="has-text-align-center has-2-xl-font-size" style="font-weight:500">“We shipped our whole design system on it in a single quarter, and the parts we expected to fight with turned out to be the parts we never had to think about again.”</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
