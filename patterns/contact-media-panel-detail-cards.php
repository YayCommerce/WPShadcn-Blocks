<?php
/**
 * Title: Contact Media Panel Detail Cards
 * Slug: shadcn/contact-media-panel-detail-cards
 * Categories: shadcn, contact
 * Description: A centred contact heading above two equal columns — a tall tinted media panel on the left, two bordered detail cards with bottom-anchored email and office details on the right.
 * AI Hint: Formless contact layout: a centred heading and a short muted line sit above two roughly equal columns, the left one a tall muted rounded panel holding a single centred image, the right one two stacked bordered cards of matched height whose headings pin to the top while the email lines and the two side-by-side office addresses pin to the bottom. Reach for it when a page should publish contact details and a location photo rather than capture an enquiry.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"textAlign":"center"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size">Contact</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-base-font-size">Write to the desk that owns the answer, or drop by either studio during opening hours.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"}}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-column has-muted-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:image {"width":"280px","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The reception desk at the Cavendish Row studio" style="width:280px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"dimensions":{"minHeight":"240px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem;min-height:240px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600">Email</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"base"} -->
<p class="has-base-font-size">hello@example.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"base"} -->
<p class="has-base-font-size">support@example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"dimensions":{"minHeight":"240px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem;min-height:240px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600">Offices</h3>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Leeds</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">14 Cavendish Row, LS2 7QP</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Porto</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Rua da Alegria 208, 4000-035</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
