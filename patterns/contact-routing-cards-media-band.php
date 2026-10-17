<?php
/**
 * Title: Contact Routing Cards Media Band
 * Slug: shadcn/contact-routing-cards-media-band
 * Categories: shadcn, contact
 * Description: A left-aligned contact intro above three bordered routing cards, closed by a wide image band carrying a small locations card.
 * AI Hint: Left-aligned eyebrow and a large two-line headline over a three-column row of bordered cards that each hold a bold heading, a two-line muted note and a plain text link for demos, support and general contact; underneath, a wide lightly dimmed cover image carries a small bordered card at its left naming how many offices the company runs; reach for it when a contact page has to split traffic three ways before it talks about locations.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size" style="font-weight:500">Contact us</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.03em"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-fluid-5-xl-font-size" style="letter-spacing:-0.03em">Tell us what you are building and we will point you at the right desk</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600">See it working</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Half an hour with an engineer on your own data, not a slide deck. Bring the workflow you want to shorten.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><a href="#">Request a demo</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600">Something broken</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Send the account name and roughly when it started. Weekday tickets are picked up inside two hours.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><a href="#">Get support</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600">Everything else</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Press, partnerships, invoices and the questions that fit none of the boxes above. A person reads each one.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><a href="#">Contact us</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","alt":"An aerial view of a harbour city at dusk","dimRatio":20,"minHeight":460,"minHeightUnit":"px","contentPosition":"center left","align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignwide has-custom-content-position is-position-center-left" style="border-radius:16px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8);min-height:460px"><img class="wp-block-cover__image-background" alt="An aerial view of a harbour city at dusk" src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"card","layout":{"type":"constrained","contentSize":"300px"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600">Four locations worldwide</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Lisbon, Toronto, Nairobi and Osaka — one team spread across four time zones.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><a href="#">See office details</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
