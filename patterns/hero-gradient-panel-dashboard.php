<?php
/**
 * Title: Hero Gradient Panel Dashboard
 * Slug: shadcn/hero-gradient-panel-dashboard
 * Categories: shadcn, hero
 * Description: A two-column hero pairing a headline, lead and a single button with fine print beside a tinted panel holding a screenshot and a stat card.
 * AI Hint: Split hero with a tinted media wash — the left half stacks a two-line display h1, a two-sentence muted lead and one filled arrow button sitting inline with a small muted reassurance line, while the right half is an accent-tinted rounded panel insetting a bordered product screenshot above a compact stat card naming one figure; reach for it when the page wants a soft branded surface behind the interface shot and a single low-friction call to action.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em","lineHeight":"1.1"}},"fontSize":"fluid-5-xl"} -->
<h1 class="wp-block-heading has-fluid-5-xl-font-size" style="font-weight:600;letter-spacing:-0.02em;line-height:1.1">Bill for what your customers actually used</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Ambercast meters usage as it happens and turns it into invoices your finance team can explain line by line. Pricing changes ship on a Tuesday afternoon instead of waiting on a migration.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}},"iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Create an account</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">No card needed for the first month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"accent","layout":{"type":"default"}} -->
<div class="wp-block-group has-accent-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","width":"100%","sizeSlug":"large","style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="https://ui.shadcn.com/placeholder.svg" alt="The Ambercast metering dashboard showing usage against invoiced revenue" class="has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;aspect-ratio:16/10;object-fit:cover;width:100%"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|5","right":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"card","layout":{"type":"constrained","contentSize":"300px","justifyContent":"left"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Invoices matched</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"1.1"}},"fontSize":"4-xl"} -->
<p class="has-4-xl-font-size" style="font-weight:600;line-height:1.1">99.4%</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Reconciled to metered usage with no manual edits</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
