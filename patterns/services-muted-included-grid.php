<?php
/**
 * Title: Services Muted Included Grid
 * Slug: shadcn/services-muted-included-grid
 * Categories: shadcn, services
 * Description: A two-column grid of borderless muted service cards, each closing with an uppercase "What's included" label above a two-column tick list of everything the engagement covers.
 * AI Hint: Four soft, low-contrast service cards on a wide two-column grid, each holding a small bordered icon tile, an H3, a muted description, an uppercase included label and a dense two-column check list, so reach for it when each service has a long list of concrete inclusions and you want the scope legible without borders or shadows competing for attention.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:heading {"style":{"typography":{"textAlign":"center","letterSpacing":"-0.02em"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size" style="letter-spacing:-0.02em">Pick the engagement, keep the whole list</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">No line-item surprises. Each service ships with the same set of inclusions we quote on day one.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|8"} -->
<div style="height:var(--wp--preset--spacing--8)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"grid","minimumColumnWidth":"32rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"border":{"radius":"16px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:16px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"}}},"backgroundColor":"card","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022m21 8-9-5-9 5v8l9 5 9-5z\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022m3 8 9 5 9-5\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M12 13v9\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600">Platform migration</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">We lift your content, redirects and integrations onto the new stack in one planned cutover, with a rehearsal run first so launch night is boring.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase">What's included</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"grid","minimumColumnWidth":"13rem"}} -->
<div class="wp-block-group"><!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Content audit and mapping</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Redirect table, checked twice</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Media library transfer</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Staging rehearsal</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>DNS and TLS cutover</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Two weeks of watch duty</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"16px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:16px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"}}},"backgroundColor":"card","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cellipse cx=\u002212\u0022 cy=\u00225\u0022 rx=\u00229\u0022 ry=\u00223\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M3 5v14c0 1.7 4 3 9 3s9-1.3 9-3V5\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M3 12c0 1.7 4 3 9 3s9-1.3 9-3\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600">Managed hosting</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Your site runs on infrastructure we patch, back up and watch, so an expired certificate never becomes a Monday morning fire drill.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase">What's included</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"grid","minimumColumnWidth":"13rem"}} -->
<div class="wp-block-group"><!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Nightly off-site backups</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Certificates renewed for you</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Edge caching and image resizing</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Uptime checks every minute</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Staging clone on request</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Restore tested each quarter</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"16px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:16px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"}}},"backgroundColor":"card","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600">Support retainer</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">A named engineer who already knows your codebase, a shared channel instead of a ticket queue, and a monthly hour budget that rolls over once.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase">What's included</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"grid","minimumColumnWidth":"13rem"}} -->
<div class="wp-block-group"><!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Shared channel, same-day reply</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Named engineer on your account</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dependency updates handled</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Hours that roll over once</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Small changes shipped weekly</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Written incident notes</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"16px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-muted-background-color has-background" style="border-radius:16px;min-height:100%;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|3"}}},"backgroundColor":"card","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--3)"><!-- wp:image {"svgCode":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022 aria-hidden=\u0022true\u0022\u003e\u003cpath d=\u0022M2 4h6a3 3 0 0 1 3 3v13a2 2 0 0 0-2-2H2z\u0022 fill=\u0022none\u0022/\u003e\u003cpath d=\u0022M22 4h-6a3 3 0 0 0-3 3v13a2 2 0 0 1 2-2h7z\u0022 fill=\u0022none\u0022/\u003e\u003c/svg\u003e","svgColor":"currentColor","svgSize":"20px"} -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600">Team enablement</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">We hand the work over properly: sessions recorded for the people who join later, and documentation written against your real setup rather than a generic one.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase">What's included</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"grid","minimumColumnWidth":"13rem"}} -->
<div class="wp-block-group"><!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Two live editor workshops</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Recordings kept for a year</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Runbook for common fixes</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:list {"className":"is-style-shadcn-check","textColor":"muted-foreground","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-muted-foreground-color has-text-color has-sm-font-size"><!-- wp:list-item -->
<li>Pattern library walkthrough</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Editorial checklist template</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Thirty-day question window</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
