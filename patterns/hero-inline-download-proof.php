<?php
/**
 * Title: Hero Inline Download Proof
 * Slug: shadcn/hero-inline-download-proof
 * Categories: shadcn, hero
 * Description: A centred hero whose call to action sits in one row beside a rounded pill holding an avatar stack, an install count and its label.
 * AI Hint: Image-free centred hero in a 760px column: a fluid oversized h1, a two-line muted lead, then a single wrapping row that puts one filled primary button next to a muted rounded pill containing an overlapping four-avatar stack, a bold download figure and a small muted label, closing on a one-line muted trust statement; reach for it when the install number belongs beside the button rather than in a separate proof band.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-7-xl-font-size">One command, and your whole staging stack is already awake.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Harborlight boots the entire dependency graph from a single manifest, so a new contributor is running the test suite before the onboarding call has finished.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"lg","iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Install the CLI</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|2","right":"var:preset|spacing|4","bottom":"var:preset|spacing|2","left":"var:preset|spacing|3"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"muted","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--2);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--3)"><!-- wp:shadcn/avatar-group {"maxVisible":4} -->
<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Sunniva Aalto","size":"sm","fallback":"SA"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Mateo Quiroga","size":"sm","fallback":"MQ"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Zainab Haruna","size":"sm","fallback":"ZH"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Petra Novotná","size":"sm","fallback":"PN"} /-->
<!-- /wp:shadcn/avatar-group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:700">1.4M+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">installs</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Running in production at 4,200 teams, from two-person studios to public listings.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
