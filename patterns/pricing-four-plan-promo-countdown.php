<?php
/**
 * Title: Pricing Four Plan Promo Countdown
 * Slug: shadcn/pricing-four-plan-promo-countdown
 * Categories: shadcn, pricing
 * Description: A centred heading and billing control above four bordered plan cards, with a live countdown ribbon capping the featured tier and a row of payment marks closing the section.
 * AI Hint: Four-tier pricing grid with a deadline on it — a centred H2 and lead, a Monthly/Yearly segmented control, then four bordered cards each holding the plan name, an oversized interval-aware price, a cadence line, a hairline rule, a check list and a full-width button pinned to the card bottom, where the recommended tier is capped by a filled ribbon carrying a clock badge and a running countdown, and a muted checkout line above a row of payment marks closes it; reach for it when a promotion has an actual deadline and the page should say so without a popup.
 */

defined( 'ABSPATH' ) || exit;

// The countdown needs a real instant, and a date hard-coded into a pattern file
// is wrong the day after it is written: too far out and the preview reads in
// thousands of hours, past and the block hides itself entirely. Computing it as
// the pattern is inserted gives the author a sensible deadline to edit rather
// than a stale number to puzzle over.
$shadcn_countdown_target = ( new DateTimeImmutable( '+3 days', wp_timezone() ) )->format( 'Y-m-d\TH:i:s' );

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Pick a tier, move it later</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Start on the plan that fits this quarter. Changing tier takes one click and the difference is prorated.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shadcn/pricing {"align":"","intervals":[{"key":"monthly","label":"Monthly"},{"key":"yearly","label":"Yearly · save 10%"}],"defaultInterval":"monthly","style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"default"}} -->
<!-- wp:shadcn/pricing-switch {"variant":"segmented","justification":"center"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"17rem"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Sketch</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"0","period":""}],"style":{"typography":{"fontSize":"3rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Free for as long as you like</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Five saved drafts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Community forum answers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Weekly release notes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>200MB of asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Basic usage charts</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Start for free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|foreground","width":"2px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"0"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--foreground);border-style:solid;border-width:2px;border-radius:12px;min-height:100%"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|4","bottom":"var:preset|spacing|3","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"primary","textColor":"primary-foreground","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-primary-foreground-color has-primary-background-color has-text-color has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--4)"><!-- wp:shadcn/badge {"text":"Limited time","variant":"ghost","iconName":"clock"} /-->

<!-- wp:shadcn/countdown {"targetDate":"<?php echo esc_attr( $shadcn_countdown_target ); ?>","showDays":true,"showSeconds":true,"style":{"typography":{"fontWeight":"700"}},"fontSize":"sm"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Build</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"26","period":""},{"key":"yearly","amount":"23","period":""}],"style":{"typography":{"fontSize":"3rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Per month, billed to one workspace</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Unlimited drafts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Same-day email replies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daily release notes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>20GB of asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shared component presets</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Claim this price</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Deliver</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"84","period":""},{"key":"yearly","amount":"76","period":""}],"style":{"typography":{"fontSize":"3rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Per month, up to twenty seats</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Everything in Build</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A named support contact</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Live release feed</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Unmetered asset storage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Custom integrations</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Buy Deliver</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Estate</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/pricing-price {"currencyPlacement":"superscript","prices":[{"key":"monthly","amount":"210","period":""},{"key":"yearly","amount":"189","period":""}],"style":{"typography":{"fontSize":"3rem","fontWeight":"700","lineHeight":"1.1"}}} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Per month, seats unmetered</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|border"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--border);color:var:preset|color|border"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Single sign-on and audit trails</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A choice of data regions</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A dedicated success lead</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Custom reporting and response times</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Automated approval flows</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Talk to sales</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:shadcn/pricing -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Checkout takes cards, bank transfer or a purchase order.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Card network mark" style="height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Second card network mark" style="height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Digital wallet mark" style="height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Bank transfer mark" style="height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"height":"20px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Invoice provider mark" style="height:20px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
