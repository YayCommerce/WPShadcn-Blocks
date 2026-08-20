<?php
/**
 * Title: Timeline Bordered Journey Panel
 * Slug: shadcn/timeline-bordered-journey-panel
 * Categories: shadcn, timeline
 * Description: A launch journey held inside one bordered panel, split into three stage cells that each carry a rail segment, a numbered label, a progress bar and a duration.
 * AI Hint: Single bordered panel timeline — a panel header pairing a title with a call-to-action button, then three side-by-side stage cells, each opening on a hairline rail segment with a split index-and-name pill, a stage title, a short description, a progress bar and a duration line; reach for it when a process needs to be readable at a glance in one framed block rather than scrolled through.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","timeline"],"patternName":"shadcn/timeline-bordered-journey-panel","name":"Timeline Bordered Journey Panel"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size" style="font-weight:600;letter-spacing:-0.02em">From first sketch to public launch</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Three stages, each showing the work it covers, roughly how long it runs and where the current release has got to.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:600">Where the current release stands</h3>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"size":"md"} -->
<div class="wp-block-button is-size-md"><a class="wp-block-button__link wp-element-button" href="#">Book a walkthrough</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|foreground","style":"solid","width":"2px"}},"spacing":{"padding":{"top":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--foreground);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"6px"},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:6px"><!-- wp:paragraph {"style":{"border":{"right":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.55rem","right":"0.55rem"}},"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="border-right-color:var(--wp--preset--color--border);border-right-style:solid;border-right-width:1px;padding-top:0.2rem;padding-right:0.55rem;padding-bottom:0.2rem;padding-left:0.55rem;font-family:ui-monospace, SFMono-Regular, Menlo, monospace">01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.65rem","right":"0.65rem"}},"typography":{"fontWeight":"600"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="padding-top:0.2rem;padding-right:0.65rem;padding-bottom:0.2rem;padding-left:0.65rem;font-weight:600">Discovery</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h4 class="wp-block-heading has-lg-font-size" style="font-weight:600">Agree what we are actually building</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Customer interviews, a sweep of the alternatives, and a written problem statement that everyone signs before a single ticket is scheduled.</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/progress {"staticValue":20,"style":{"trackColor":"var(--wp--preset--color--muted)","fillColor":"var(--wp--preset--color--foreground)","border":{"radius":"9999px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">About 2 weeks</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","fontWeight":"600"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;font-weight:600">20%</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|foreground","style":"solid","width":"2px"}},"spacing":{"padding":{"top":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--foreground);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"6px"},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:6px"><!-- wp:paragraph {"style":{"border":{"right":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.55rem","right":"0.55rem"}},"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="border-right-color:var(--wp--preset--color--border);border-right-style:solid;border-right-width:1px;padding-top:0.2rem;padding-right:0.55rem;padding-bottom:0.2rem;padding-left:0.55rem;font-family:ui-monospace, SFMono-Regular, Menlo, monospace">02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.65rem","right":"0.65rem"}},"typography":{"fontWeight":"600"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="padding-top:0.2rem;padding-right:0.65rem;padding-bottom:0.2rem;padding-left:0.65rem;font-weight:600">Build</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h4 class="wp-block-heading has-lg-font-size" style="font-weight:600">Ship the smallest honest version</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Design, prototype and release the narrow slice that solves the problem end to end, then correct it against how people actually use it.</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/progress {"staticValue":85,"style":{"trackColor":"var(--wp--preset--color--muted)","fillColor":"var(--wp--preset--color--foreground)","border":{"radius":"9999px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">About 6 weeks</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","fontWeight":"600"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;font-weight:600">85%</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|foreground","style":"solid","width":"2px"}},"spacing":{"padding":{"top":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--foreground);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"6px"},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:6px"><!-- wp:paragraph {"style":{"border":{"right":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.55rem","right":"0.55rem"}},"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="border-right-color:var(--wp--preset--color--border);border-right-style:solid;border-right-width:1px;padding-top:0.2rem;padding-right:0.55rem;padding-bottom:0.2rem;padding-left:0.55rem;font-family:ui-monospace, SFMono-Regular, Menlo, monospace">03</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.65rem","right":"0.65rem"}},"typography":{"fontWeight":"600"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="padding-top:0.2rem;padding-right:0.65rem;padding-bottom:0.2rem;padding-left:0.65rem;font-weight:600">Launch</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg"} -->
<h4 class="wp-block-heading has-lg-font-size" style="font-weight:600">Take it out to the market</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Pricing, documentation, the onboarding email and the support rota all standing before the switch is flipped on launch morning.</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/progress {"staticValue":100,"style":{"trackColor":"var(--wp--preset--color--muted)","fillColor":"var(--wp--preset--color--foreground)","border":{"radius":"9999px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Launch week</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"ui-monospace, SFMono-Regular, Menlo, monospace","fontWeight":"600"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="font-family:ui-monospace, SFMono-Regular, Menlo, monospace;font-weight:600">100%</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
