<?php
/**
 * Title: Stats Year Pill Timeline
 * Slug: shadcn/stats-year-pill-timeline
 * Categories: shadcn, stats
 * Description: A row of year pills above four fiscal figures, closing on a ruled baseline that ticks off each year in order.
 * AI Hint: Fiscal year metric board — a row of outlined year pills with the reported year filled in, four counting figures beneath with bold captions, and a hairline baseline ticked at each year like a ruler, followed by a primary and outline button; reach for it when an annual report needs its headline numbers dated and placed in a run of years.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","stats"],"patternName":"shadcn/stats-year-pill-timeline","name":"Stats Year Pill Timeline"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Annual report</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:600">Where the last financial year landed</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Figures for the year ended March, filed and independently reviewed before publication.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.85rem","right":"0.85rem"}},"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.25rem;padding-right:0.85rem;padding-bottom:0.25rem;padding-left:0.85rem;font-weight:500">2021</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.85rem","right":"0.85rem"}},"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.25rem;padding-right:0.85rem;padding-bottom:0.25rem;padding-left:0.85rem;font-weight:500">2022</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.85rem","right":"0.85rem"}},"typography":{"fontWeight":"600"}},"backgroundColor":"foreground","textColor":"background","fontSize":"xs"} -->
<p class="has-background-color has-foreground-background-color has-text-color has-background has-xs-font-size" style="border-radius:9999px;padding-top:0.25rem;padding-right:0.85rem;padding-bottom:0.25rem;padding-left:0.85rem;font-weight:600">2023 · reported</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.85rem","right":"0.85rem"}},"typography":{"fontWeight":"500"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.25rem;padding-right:0.85rem;padding-bottom:0.25rem;padding-left:0.85rem;font-weight:500">2024</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|7"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column"><!-- wp:shadcn/counter {"endValue":48,"decimals":1,"suffix":"M","style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"}},"fontSize":"fluid-4-xl"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Revenue recognised</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column"><!-- wp:shadcn/counter {"endValue":21,"suffix":"%","style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"}},"fontSize":"fluid-4-xl"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Year on year growth</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column"><!-- wp:shadcn/counter {"endValue":41,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"}},"fontSize":"fluid-4-xl"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">New markets entered</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-column"><!-- wp:shadcn/counter {"endValue":33,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"}},"fontSize":"fluid-4-xl"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">People hired this year</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px"><!-- wp:paragraph {"style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|2","left":"var:preset|spacing|2"}}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)">2021</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|2","left":"var:preset|spacing|2"}}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)">2022</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"left":{"color":"var:preset|color|foreground","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|2","left":"var:preset|spacing|2"}},"typography":{"fontWeight":"600"}},"fontSize":"xs"} -->
<p class="has-border-color has-xs-font-size" style="border-left-color:var(--wp--preset--color--foreground);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2);font-weight:600">2023</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|2","left":"var:preset|spacing|2"}}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)">2024</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md"} -->
<div class="wp-block-button is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Download the report</a></div>
<!-- /wp:button -->

<!-- wp:button {"size":"md","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-md"><a class="wp-block-button__link wp-element-button" href="#">See prior years</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
