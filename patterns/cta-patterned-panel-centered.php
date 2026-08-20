<?php
/**
 * Title: Cta Patterned Panel Centered
 * Slug: shadcn/cta-patterned-panel-centered
 * Categories: shadcn, call-to-action
 * Description: A full-width call to action band filled with concentric decorative rings behind a centred headline, supporting line and two buttons.
 * AI Hint: Full-bleed call to action — a hairline-topped and hairline-bottomed band spans the viewport, fills with faint concentric rings drawn as a repeating radial gradient over the muted surface, and centres a headline, one supporting sentence and a solid-plus-outline button pair; reach for it when a conversion prompt has to interrupt a long page with texture rather than another plain white section.
 */

?>
<!-- wp:group {"align":"full","style":{"border":{"top":{"color":"var:preset|color|border","width":"1px","style":"solid"},"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"color":{"gradient":"repeating-radial-gradient(circle at 50% 50%,var(--wp--preset--color--muted) 0px,var(--wp--preset--color--muted) 79px,var(--wp--preset--color--border) 79px,var(--wp--preset--color--border) 80px)"},"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|4","bottom":"var:preset|spacing|10","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group alignfull has-background" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;background:repeating-radial-gradient(circle at 50% 50%,var(--wp--preset--color--muted) 0px,var(--wp--preset--color--muted) 79px,var(--wp--preset--color--border) 79px,var(--wp--preset--color--border) 80px);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--4)"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em","lineHeight":"1.1"}},"textColor":"foreground","fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-fluid-5-xl-font-size" style="font-weight:600;letter-spacing:-0.02em;line-height:1.1">Everything you need for the next page you publish</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">A growing set of sections built for the block editor, so the layout is done before the copy is written.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"top":"var:preset|spacing|5"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--5)"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","size":"lg","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Get instant access</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"lg","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-lg"><a class="wp-block-button__link wp-element-button" href="#">Schedule a demo</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
