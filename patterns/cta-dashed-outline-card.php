<?php
/**
 * Title: Cta Dashed Outline Card
 * Slug: shadcn/cta-dashed-outline-card
 * Categories: shadcn, call-to-action
 * Description: A centred call to action framed by a dashed hairline card holding a headline, a supporting line and two buttons.
 * AI Hint: Low-key call to action — a rounded card drawn with a one-pixel dashed border and no fill centres a headline, a muted supporting sentence and a solid-plus-outline button pair; reach for it when a conversion prompt should read as an invitation placed on the page rather than a filled banner competing with the surrounding content.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"align":"wide","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"dashed","radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|7","bottom":"var:preset|spacing|9","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignwide has-border-color" style="border-color:var(--wp--preset--color--border);border-style:dashed;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--7)"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em","lineHeight":"1.15"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size" style="font-weight:600;letter-spacing:-0.02em;line-height:1.15">Start with a section, finish with a site</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Pick the layout you need, swap the words for yours and publish. No build step, no design handoff.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"top":"var:preset|spacing|4"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--4)"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","size":"lg","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Claim your seat</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"lg","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Schedule a demo</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
