<?php
/**
 * Title: Contact Statement Author Form
 * Slug: shadcn/contact-statement-author-form
 * Categories: shadcn, contact
 * Description: A cardless two-column contact section pairing an oversized muted statement and a signing author row with a bare name, email and message form.
 * AI Hint: Editorial contact split with no card and no border: the left column carries one large muted-grey statement paragraph whose closing clause is set in bold, then a long gap and an author row of a round avatar beside a bold name over a muted role line; the right column is a large heading followed by a stripped-back form of name, email and message closed by a full-width dark submit labelled with an arrow glyph. Reach for it when the brand voice should carry the page and a bordered form card would feel too transactional.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|9","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"3-xl"} -->
<p class="has-muted-foreground-color has-text-color has-3-xl-font-size">Every message sent from this page is read by someone who builds the product, not by a routing rule. Whether you are sketching an idea, stuck halfway through a migration, or ready to ship next week — <strong>we're here to help</strong>.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--10)"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Rosalind Achebe","size":"md","fallback":"RA"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Rosalind Achebe</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Customer engineering lead</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size">Get in Touch</h2>
<!-- /wp:heading -->

<!-- wp:shadcn/form {"formName":"Contact message"} -->
<!-- wp:shadcn/input {"label":"Name","required":true,"placeholder":"Ada Okafor"} /-->

<!-- wp:shadcn/input {"label":"Email","type":"email","required":true,"placeholder":"ada@example.com"} /-->

<!-- wp:shadcn/textarea {"label":"Message","required":true,"rows":6,"placeholder":"What would you like to talk about?"} /-->

<!-- wp:shadcn/form-submit {"label":"Send message →","width":100} /-->
<!-- /wp:shadcn/form --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
