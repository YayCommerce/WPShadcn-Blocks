<?php
/**
 * Title: Ecommerce Hero Split Panels
 * Slug: shadcn/ecommerce-hero-split-panels
 * Categories: shadcn, hero
 * Description: Two side-by-side full-height media panels, one carrying a headline with an outline call to action, the other a compact product card with sale pricing.
 * AI Hint: Ecommerce split hero — two equal cover panels over dimmed photographs with content pinned bottom-left: the left panel holds an oversized white headline and an outline button, the right panel a compact white product card with a flush thumbnail, product name, red sale price beside a struck-through regular price, and a bag button; best for a shop landing page promoting one collection and one hero product at the same time.
 */

?>
<!-- wp:columns {"metadata":{"categories":["shadcn","hero"],"patternName":"shadcn/ecommerce-hero-split-panels","name":"Ecommerce Hero Split Panels"},"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"https://ui.shadcn.com/placeholder.svg","alt":"Model wearing a hooded jacket by the shore","dimRatio":30,"minHeight":640,"minHeightUnit":"px","contentPosition":"bottom left","style":{"border":{"radius":"16px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;min-height:640px"><img class="wp-block-cover__image-background" alt="Model wearing a hooded jacket by the shore" src="https://ui.shadcn.com/placeholder.svg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"style":{"color":{"text":"#ffffff"}},"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-text-color has-fluid-5-xl-font-size" style="color:#ffffff">Soft layers for the coldest days</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#ffffff"},"hoverTextColor":"#0a0a0a"}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#" style="color:#ffffff">Browse outerwear</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"https://ui.shadcn.com/placeholder.svg","alt":"Model in a wool overcoat outdoors","dimRatio":30,"minHeight":640,"minHeightUnit":"px","contentPosition":"bottom left","style":{"border":{"radius":"16px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:16px;min-height:640px"><img class="wp-block-cover__image-background" alt="Model in a wool overcoat outdoors" src="https://ui.shadcn.com/placeholder.svg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4","padding":{"top":"0","right":"var:preset|spacing|5","bottom":"0","left":"0"}}},"backgroundColor":"card","textColor":"card-foreground","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-card-foreground-color has-card-background-color has-text-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--5);padding-bottom:0;padding-left:0"><!-- wp:image {"width":"72px","height":"72px","scale":"cover","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Wool blend overcoat detail" style="object-fit:cover;width:72px;height:72px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600">Wool Blend Overcoat</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"destructive","fontSize":"sm"} -->
<p class="has-destructive-color has-text-color has-sm-font-size" style="font-weight:600">$310.00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size"><s>$460.00</s></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"iconName":"shopping-bag","size":"sm","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Add</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->