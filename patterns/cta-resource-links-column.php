<?php
/**
 * Title: CTA Resource Links Column
 * Slug: shadcn/cta-resource-links-column
 * Categories: shadcn, call-to-action
 * Description: A bordered panel on a faint dotted ground, split by a vertical rule into a pitch with two buttons and a divided column of three icon-labelled resource links.
 * AI Hint: Two-column call to action for visitors who are not ready to buy yet — the left cell carries an icon badge, a heading, a short paragraph and a solid plus outline button pair, while the right cell holds a hairline-divided stack of resource rows, each with its own icon badge, linked title and one explanatory line; reach for it when documentation, a sandbox or a recorded walkthrough deserve equal billing with the primary conversion, rather than being buried as text links under the buttons.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","call-to-action"],"patternName":"shadcn/cta-resource-links-column","name":"CTA Resource Links Column"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"align":"wide","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"color":{"gradient":"radial-gradient(var(--wp--preset--color--border) 1px,rgba(0,0,0,0) 1px) 0 0/18px 18px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px;background:radial-gradient(var(--wp--preset--color--border) 1px,rgba(0,0,0,0) 1px) 0 0/18px 18px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"58%","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|5"}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8);flex-basis:58%"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Get started","variant":"secondary","iconName":"sparkles"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"}},"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-4-xl-font-size" style="font-weight:700;letter-spacing:-0.02em">Two ways to see it working</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Read the guides at your own pace, or open a sandbox account with sample data already loaded and click straight through the flows your team would use.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Start a free trial</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Book a demo</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"42%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;flex-basis:42%"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Docs","variant":"secondary","iconName":"file-text"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600"><a href="#">Documentation</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Guides, API references and migration notes for every part of the platform.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Sandbox","variant":"secondary","iconName":"layout-dashboard"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600"><a href="#">Interactive demo</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Open a seeded workspace and try the flows without signing anything first.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Video","variant":"secondary","iconName":"play"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size" style="font-weight:600"><a href="#">Product walkthrough</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">A twelve-minute tour of setup, permissions and your first automation.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
