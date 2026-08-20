<?php
/**
 * Title: Blog Category Overlay Grid
 * Slug: shadcn/blog-category-overlay-grid
 * Categories: shadcn, posts
 * Description: A centred blog preamble above a three-column grid of photo tiles that carry the category badge and the article title over the image itself.
 * AI Hint: Blog image grid — a centred badge, oversized headline, supporting line and an archive link above a responsive three-column grid of tall rounded photo tiles, each tile dimming its own image and stacking a category badge pinned to the top corner against a linked white article title with an author and date line pinned to the bottom edge; best for a picture-led magazine index or a featured-stories block where the imagery should carry the section.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","posts"],"patternName":"shadcn/blog-category-overlay-grid","name":"Blog Category Overlay Grid"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"The magazine","variant":"secondary","iconName":"book-open","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-fluid-5-xl-font-size">Stories from where the work happens</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-lg-font-size">Reporting from install sites, support queues and late-night deploy windows. Every piece begins with something that went differently than planned.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Browse every issue","variant":"ghost","url":"#","iconName":"arrow-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"https://ui.shadcn.com/placeholder.svg","alt":"An install crew unpacking equipment on a factory floor","dimRatio":60,"minHeight":420,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);min-height:420px"><img class="wp-block-cover__image-background" alt="An install crew unpacking equipment on a factory floor" src="https://ui.shadcn.com/placeholder.svg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"320px"},"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:320px"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Field notes","variant":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-color has-xl-font-size" style="color:#ffffff"><a href="#">Three weeks on the floor with the install crew</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff">Ines Duarte · 18 September 2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"https://ui.shadcn.com/placeholder.svg","alt":"A wall of printed support transcripts marked up in pencil","dimRatio":60,"minHeight":420,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);min-height:420px"><img class="wp-block-cover__image-background" alt="A wall of printed support transcripts marked up in pencil" src="https://ui.shadcn.com/placeholder.svg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"320px"},"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:320px"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Research","variant":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-color has-xl-font-size" style="color:#ffffff"><a href="#">What four hundred support transcripts said about week one</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff">Kofi Mensah · 9 September 2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"https://ui.shadcn.com/placeholder.svg","alt":"A portrait of a colleague beside a shelf of bound release notes","dimRatio":60,"minHeight":420,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);min-height:420px"><img class="wp-block-cover__image-background" alt="A portrait of a colleague beside a shelf of bound release notes" src="https://ui.shadcn.com/placeholder.svg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"320px"},"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:320px"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Interviews","variant":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-color has-xl-font-size" style="color:#ffffff"><a href="#">The archivist who keeps our changelog honest</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff">Ruth Farrow · 27 August 2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"https://ui.shadcn.com/placeholder.svg","alt":"A terminal window showing an overgrown build script","dimRatio":60,"minHeight":420,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);min-height:420px"><img class="wp-block-cover__image-background" alt="A terminal window showing an overgrown build script" src="https://ui.shadcn.com/placeholder.svg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"320px"},"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:320px"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Tooling","variant":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-color has-xl-font-size" style="color:#ffffff"><a href="#">Retiring the build script nobody would admit to writing</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff">Milan Petrovic · 14 August 2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"https://ui.shadcn.com/placeholder.svg","alt":"A design review in progress around a shared screen","dimRatio":60,"minHeight":420,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);min-height:420px"><img class="wp-block-cover__image-background" alt="A design review in progress around a shared screen" src="https://ui.shadcn.com/placeholder.svg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"320px"},"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:320px"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Practice","variant":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-color has-xl-font-size" style="color:#ffffff"><a href="#">Why our design reviews now open with the failure case</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff">Aiko Tanabe · 2 August 2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"https://ui.shadcn.com/placeholder.svg","alt":"A technician checking a tablet in a yard with no signal","dimRatio":60,"minHeight":420,"minHeightUnit":"px","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:12px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);min-height:420px"><img class="wp-block-cover__image-background" alt="A technician checking a tablet in a yard with no signal" src="https://ui.shadcn.com/placeholder.svg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"320px"},"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:320px"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Product","variant":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-color has-xl-font-size" style="color:#ffffff"><a href="#">Shipping the offline mode our crews kept asking for</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}},"fontSize":"xs"} -->
<p class="has-text-color has-xs-font-size" style="color:#ffffff">Gabriel Sousa · 21 July 2025</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
