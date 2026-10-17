<?php
/**
 * Title: Compare Tinted Verdict Table
 * Slug: shadcn/compare-tinted-verdict-table
 * Categories: shadcn, compare
 * Description: A two-product comparison table whose feature names sit on a plain column while each product column runs as an unbroken tinted band under its own logo lockup.
 * AI Hint: Head-to-head comparison table for a competitor page: a short section heading over three columns where feature names run down a plain hairline-ruled left column and the two product columns are continuous tinted bands topped by a logo and product name, with the lower rows prefixing each value with a check or a cross so the verdict reads at a glance; reach for it when one product should win most rows and the contrast has to be obvious without a paragraph of explanation.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","compare"],"patternName":"shadcn/compare-tinted-verdict-table","name":"Compare Tinted Verdict Table"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:heading {"level":2,"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-fluid-4-xl-font-size">Side by side</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}}} -->
<div class="wp-block-column" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);flex-basis:40%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Feature</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"border":{"radius":{"topLeft":"0.75rem","topRight":"0.75rem"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"muted"} -->
<div class="wp-block-column has-muted-background-color has-background" style="border-top-left-radius:0.75rem;border-top-right-radius:0.75rem;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Northpeak logo" style="height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Northpeak</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"border":{"radius":{"topLeft":"0.75rem","topRight":"0.75rem"},"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"popover"} -->
<div class="wp-block-column has-popover-background-color has-background" style="border-top-left-radius:0.75rem;border-top-right-radius:0.75rem;border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Casetide logo" style="height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Casetide</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}}} -->
<div class="wp-block-column" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Rollout time</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"muted"} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Two weeks</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"popover"} -->
<div class="wp-block-column has-popover-background-color has-background" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Three months</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}}} -->
<div class="wp-block-column" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Setup fee</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"muted"} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">None</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"popover"} -->
<div class="wp-block-column has-popover-background-color has-background" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">20% of year one</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}}} -->
<div class="wp-block-column" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">On-time dispatch</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"muted"} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Top 4% of vendors</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"popover"} -->
<div class="wp-block-column has-popover-background-color has-background" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Not published</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}}} -->
<div class="wp-block-column" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Route rules</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"muted"} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M20 6 9 17l-5-5\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Fully configurable</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"popover"} -->
<div class="wp-block-column has-popover-background-color has-background" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M18 6 6 18\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022m6 6 12 12\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddestructive)","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Preset templates only</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}}} -->
<div class="wp-block-column" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Data export</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"muted"} -->
<div class="wp-block-column has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M20 6 9 17l-5-5\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Anytime, full history</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"border":{"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"popover"} -->
<div class="wp-block-column has-popover-background-color has-background" style="border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M18 6 6 18\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022m6 6 12 12\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddestructive)","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Last ninety days only</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:500">Support cover</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"border":{"radius":{"bottomLeft":"0.75rem","bottomRight":"0.75rem"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"muted"} -->
<div class="wp-block-column has-muted-background-color has-background" style="border-bottom-left-radius:0.75rem;border-bottom-right-radius:0.75rem;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M20 6 9 17l-5-5\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Round-the-clock crew</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"border":{"radius":{"bottomLeft":"0.75rem","bottomRight":"0.75rem"},"left":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|5","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5"}}},"backgroundColor":"popover"} -->
<div class="wp-block-column has-popover-background-color has-background" style="border-bottom-left-radius:0.75rem;border-bottom-right-radius:0.75rem;border-left-color:var(--wp--preset--color--border);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M18 6 6 18\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022m6 6 12 12\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddestructive)","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size">Weekday hours</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
