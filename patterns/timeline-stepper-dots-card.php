<?php
/**
 * Title: Timeline Stepper Dots Card
 * Slug: shadcn/timeline-stepper-dots-card
 * Categories: shadcn, timeline
 * Description: A five-step stepper whose numbered dots sit on a segmented track above a single bordered card that spells out the step currently in progress.
 * AI Hint: Numbered stepper with a detail card — a centred eyebrow badge, heading and intro, then a five-column track where each step shows a numbered dot filled for the steps already done and outlined for the ones ahead, with its title and a one-line note always readable beneath it, followed by a wide bordered card carrying a step counter badge, the current step heading, a paragraph, a ticked list of what it covers and a pair of buttons; reach for it on an onboarding, application or setup page where the reader needs to see the whole run of steps and the detail of exactly one of them.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","timeline"],"patternName":"shadcn/timeline-stepper-dots-card","name":"Timeline Stepper Dots Card"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"metadata":{"name":"Header"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Setup","variant":"outline","iconName":"list"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"style":{"typography":{"textAlign":"center","fontWeight":"600","letterSpacing":"-0.02em"}},"fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-4-xl-font-size" style="font-weight:600;letter-spacing:-0.02em">Five steps to a working workspace</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Most teams finish the whole run in an afternoon. Nothing is locked, so you can leave a step and come back to it later.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|foreground","width":"2px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--foreground);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"0.4rem","bottom":"0.4rem","left":"0.8rem","right":"0.8rem"}},"typography":{"fontWeight":"600"}},"backgroundColor":"foreground","textColor":"background","fontSize":"xs"} -->
<p class="has-background-color has-foreground-background-color has-text-color has-background has-xs-font-size" style="border-radius:9999px;padding-top:0.4rem;padding-right:0.8rem;padding-bottom:0.4rem;padding-left:0.8rem;font-weight:600">1</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size" style="font-weight:600">Create the account</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Done · 4 January</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|foreground","width":"2px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--foreground);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"0.4rem","bottom":"0.4rem","left":"0.8rem","right":"0.8rem"}},"typography":{"fontWeight":"600"}},"backgroundColor":"foreground","textColor":"background","fontSize":"xs"} -->
<p class="has-background-color has-foreground-background-color has-text-color has-background has-xs-font-size" style="border-radius:9999px;padding-top:0.4rem;padding-right:0.8rem;padding-bottom:0.4rem;padding-left:0.8rem;font-weight:600">2</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size" style="font-weight:600">Bring your data across</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">Done · 6 January</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|foreground","width":"2px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--foreground);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"0.4rem","bottom":"0.4rem","left":"0.8rem","right":"0.8rem"}},"typography":{"fontWeight":"600"}},"backgroundColor":"foreground","textColor":"background","fontSize":"xs"} -->
<p class="has-background-color has-foreground-background-color has-text-color has-background has-xs-font-size" style="border-radius:9999px;padding-top:0.4rem;padding-right:0.8rem;padding-bottom:0.4rem;padding-left:0.8rem;font-weight:600">3</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size" style="font-weight:600">Connect your tools</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"600"}},"fontSize":"xs"} -->
<p class="has-text-align-center has-xs-font-size" style="font-weight:600">In progress</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","width":"2px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.4rem","bottom":"0.4rem","left":"0.8rem","right":"0.8rem"}},"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.4rem;padding-right:0.8rem;padding-bottom:0.4rem;padding-left:0.8rem;font-weight:600">4</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size" style="font-weight:600">Invite the team</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">About 10 minutes</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","width":"2px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"9999px"},"spacing":{"padding":{"top":"0.4rem","bottom":"0.4rem","left":"0.8rem","right":"0.8rem"}},"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-border-color has-muted-foreground-color has-text-color has-xs-font-size" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:9999px;padding-top:0.4rem;padding-right:0.8rem;padding-bottom:0.4rem;padding-left:0.8rem;font-weight:600">5</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size" style="font-weight:600">Switch it on</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xs-font-size">About 5 minutes</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Current step"},"align":"wide","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"14px"},"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:14px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Step 3 of 5","variant":"secondary","iconName":"link-2"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"card-foreground","fontSize":"3-xl"} -->
<h3 class="wp-block-heading has-card-foreground-color has-text-color has-3-xl-font-size" style="font-weight:600;letter-spacing:-0.01em">Connect your tools</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Point the workspace at the calendar, repository and chat channel your team already uses. Each connection is read-only until you grant it more, and any of them can be revoked from settings without touching the rest.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Calendar sync, so scheduled work shows up on the board automatically</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Repository links that attach a branch to the item it belongs to</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A chat channel for the digest, chosen per project rather than per account</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Connect a tool</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Skip for now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
