<?php
/**
 * Title: Hero Video Frame Centered
 * Slug: shadcn/hero-video-frame-centered
 * Categories: shadcn, hero
 * Description: A centred headline, lead and single button above one wide bordered frame holding a video still and a play control.
 * AI Hint: Video-led launch hero — a narrow centred column stacks a large h1, a two-sentence muted lead and one filled call to action, followed by a wide hairline-bordered rounded panel that centres a product still above a pill play button; reach for it when a short recorded walkthrough sells the product better than a screenshot and the page should offer exactly one thing to do.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|9"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em","lineHeight":"1.05"}},"fontSize":"fluid-7-xl"} -->
<h1 class="wp-block-heading has-text-align-center has-fluid-7-xl-font-size" style="font-weight:600;letter-spacing:-0.02em;line-height:1.05">Plan the shop floor the way the shift actually runs</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Millrace turns work orders, machine time and crew availability into one schedule everyone can read. A change made at the desk reaches the floor terminals before the next changeover.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","size":"lg","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Start a pilot line</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"dimensions":{"minHeight":"560px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"muted","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-border-color has-muted-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px;min-height:560px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:image {"width":"220px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="The Millrace scheduling board as it appears on a floor terminal" style="width:220px"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","size":"lg","style":{"border":{"radius":"9999px"}},"iconName":"play","iconPosition":"left"} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:9999px">Play the two-minute tour</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
