<?php
/**
 * Title: Stats Gradient Band
 * Slug: shadcn/stats-gradient-band
 * Categories: shadcn, stats
 * Description: A full-width dark gradient band carrying a claim and four counting figures in a single ruled row.
 * AI Hint: Dark gradient metric band — a full-width panel washed with a fixed dark gradient, holding a short eyebrow and heading above four counting figures divided by vertical hairlines, each with a pale caption; reach for it when a page needs one visually heavy break between light sections and the numbers are the reason for it.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","stats"],"patternName":"shadcn/stats-gradient-band","name":"Stats Gradient Band"},"align":"full","className":"is-style-shadcn-on-dark","style":{"color":{"gradient":"linear-gradient(135deg,rgb(9,9,11) 0%,rgb(39,39,45) 55%,rgb(24,24,27) 100%)"},"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|5","bottom":"var:preset|spacing|10","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-shadcn-on-dark has-background" style="background:linear-gradient(135deg,rgb(9,9,11) 0%,rgb(39,39,45) 55%,rgb(24,24,27) 100%);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"color":{"text":"#a1a1aa"},"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"fontSize":"xs"} -->
<p class="has-text-align-center has-text-color has-xs-font-size" style="color:#a1a1aa;font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Scale so far</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-fluid-4-xl-font-size" style="color:#ffffff;font-weight:600">Built for the volume you have not reached yet</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#d4d4d8"}},"fontSize":"base"} -->
<p class="has-text-align-center has-text-color has-base-font-size" style="color:#d4d4d8">Every figure below is a live production number, sampled on the busiest day of the last quarter.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:shadcn/counter {"endValue":1000000,"separator":true,"suffix":"+","style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","letterSpacing":"-0.03em"}},"fontSize":"3-xl"} /-->

<!-- wp:paragraph {"style":{"color":{"text":"#a1a1aa"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#a1a1aa">Records processed each day</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"left":{"color":"rgba(255,255,255,0.14)","style":"solid","width":"1px"}},"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column" style="border-left-color:rgba(255,255,255,0.14);border-left-style:solid;border-left-width:1px;padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:shadcn/counter {"endValue":95,"suffix":"%","style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","letterSpacing":"-0.03em"}},"fontSize":"3-xl"} /-->

<!-- wp:paragraph {"style":{"color":{"text":"#a1a1aa"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#a1a1aa">Queries answered from cache</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"left":{"color":"rgba(255,255,255,0.14)","style":"solid","width":"1px"}},"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column" style="border-left-color:rgba(255,255,255,0.14);border-left-style:solid;border-left-width:1px;padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:shadcn/counter {"endValue":3000,"separator":true,"suffix":"+","style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","letterSpacing":"-0.03em"}},"fontSize":"3-xl"} /-->

<!-- wp:paragraph {"style":{"color":{"text":"#a1a1aa"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#a1a1aa">Regions served at the edge</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"left":{"color":"rgba(255,255,255,0.14)","style":"solid","width":"1px"}},"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column" style="border-left-color:rgba(255,255,255,0.14);border-left-style:solid;border-left-width:1px;padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:shadcn/counter {"endValue":2,"decimals":1,"suffix":"s","style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","letterSpacing":"-0.03em"}},"fontSize":"3-xl"} /-->

<!-- wp:paragraph {"style":{"color":{"text":"#a1a1aa"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#a1a1aa">Slowest cold start measured</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
