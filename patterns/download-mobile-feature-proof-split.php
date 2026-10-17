<?php
/**
 * Title: Download Mobile Feature Proof Split
 * Slug: shadcn/download-mobile-feature-proof-split
 * Categories: shadcn, download
 * Description: A two-column mobile download section pairing a badge, headline, three icon features and a star rating with a phone mockup and two callout cards.
 * AI Hint: Split app download section whose left half runs a small icon badge, a one-line h2, a two-line muted lead, a three-up row of icon plus bold title plus muted note, a five-star row above a muted adoption count, and an uppercase availability label over two platform buttons, while the right half stacks a tall rounded phone mockup above a pair of bordered callout cards; reach for it when the install needs feature proof and social proof in the same screen.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Mobile app","variant":"secondary","iconName":"scan"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em","lineHeight":"1.1"}},"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-4-xl-font-size" style="font-weight:600;letter-spacing:-0.02em;line-height:1.1">Count stock without leaving the aisle</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Alderway turns a phone into the scanner, the count sheet and the sign-off. Scan a bin, post the difference, and let the next shift pick up an aisle that already balances.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5","margin":{"top":"var:preset|spacing|3"}}},"layout":{"type":"grid","columnCount":3}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--3)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 aria-hidden=\u0022true\u0022\u003e\u003ccircle cx=\u002212\u0022 cy=\u002212\u0022 r=\u002210\u0022 fill=\u0022none\u0022/\u003e\u003ccircle cx=\u002212\u0022 cy=\u002212\u0022 r=\u00226\u0022 fill=\u0022none\u0022/\u003e\u003ccircle cx=\u002212\u0022 cy=\u002212\u0022 r=\u00222\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Counts that hold</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Every scan lands against the bin it came from, so variance has nothing left to guess at.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M12 2 3 7v10l9 5 9-5V7z\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M3 7l9 5 9-5\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M12 12v10\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Move a pallet, log it</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Transfers, splits and write-offs post from the aisle instead of a sheet at close.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022m9 12 2 2 4-4\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Locked to the right hands</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Access is set per site, and every adjustment keeps the name that made it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2","margin":{"top":"var:preset|spacing|3"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--3)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022currentColor\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00221\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z\u0022 fill=\u0022currentColor\u0022/\u003e\u003c/svg\u003e","svgColor":"var(--wp--preset--color--primary)","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022currentColor\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00221\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z\u0022 fill=\u0022currentColor\u0022/\u003e\u003c/svg\u003e","svgColor":"var(--wp--preset--color--primary)","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022currentColor\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00221\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z\u0022 fill=\u0022currentColor\u0022/\u003e\u003c/svg\u003e","svgColor":"var(--wp--preset--color--primary)","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022currentColor\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00221\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z\u0022 fill=\u0022currentColor\u0022/\u003e\u003c/svg\u003e","svgColor":"var(--wp--preset--color--primary)","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002218\u0022 height=\u002218\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022currentColor\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00221\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z\u0022 fill=\u0022currentColor\u0022/\u003e\u003c/svg\u003e","svgColor":"var(--wp--preset--color--primary)","svgSize":"18px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Counting weekly across 2,100 warehouse teams</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"top":"var:preset|spacing|3"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--3)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Available on</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"8px"}},"iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:8px">Get it for Android</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"8px"}},"iconName":"download","iconPosition":"left"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:8px">Get it for iOS</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"9/19","scale":"cover","width":"280px","sizeSlug":"large","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"32px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="The Alderway count screen on a phone, listing bins with their scanned quantities" class="has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:32px;aspect-ratio:9/19;object-fit:cover;width:280px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"grid","columnCount":2}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|1"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Live count progress</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">See which aisles are closed and which are still open, refreshed as scans land.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|1"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Short-pick alerts</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Hear about a bin reading under its expected quantity while the picker is still there.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
