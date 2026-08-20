<?php
/**
 * Title: Blog Team Branded Rows
 * Slug: shadcn/blog-team-branded-rows
 * Categories: shadcn, posts
 * Description: A split masthead above hairline-divided post rows, each row led by the writing team's logo and stacked member avatars beside the headline and its category pills.
 * AI Hint: Blog index — a two-column masthead with an eyebrow, oversized heading and a supporting note, then a hairline-divided stack of full-width post rows where the left column carries a team wordmark, an overlapping avatar cluster and the team name, the middle column carries the date, linked headline and outline category pills with chevrons, and the right column an outline read button; best for an engineering or studio blog where posts belong to named teams rather than single authors.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","posts"],"patternName":"shadcn/blog-team-branded-rows","name":"Blog Team Branded Rows"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"62%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:62%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size" style="font-weight:600">Engineering notebook</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-fluid-5-xl-font-size">Posts, and the teams behind them</h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:38%"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Every entry is signed by the group that shipped the work, so you can follow a team through a whole year of decisions instead of chasing one byline.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"is-style-shadcn-divided","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group is-style-shadcn-divided"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"28%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:28%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-group"><!-- wp:image {"height":"24px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Foundry Platform wordmark" style="height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar-group {"maxVisible":3} -->
<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Nadia Fontaine","size":"sm","fallback":"NF"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Oskar Brandt","size":"sm","fallback":"OB"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Rhea Kulkarni","size":"sm","fallback":"RK"} /-->
<!-- /wp:shadcn/avatar-group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Foundry Platform</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Team</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">14 May 2025</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">Cutting the deploy window from forty minutes to four</a></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Delivery","variant":"outline","url":"#","iconName":"chevron-right","iconPosition":"right"} /-->

<!-- wp:shadcn/badge {"text":"Tooling","variant":"outline","url":"#","iconName":"chevron-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"16%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:16%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","className":"is-style-outline","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Read</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"28%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:28%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-group"><!-- wp:image {"height":"24px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Loom Design Systems wordmark" style="height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar-group {"maxVisible":3} -->
<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Ingrid Solheim","size":"sm","fallback":"IS"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Caleb Mensah","size":"sm","fallback":"CM"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Yuki Tanabe","size":"sm","fallback":"YT"} /-->
<!-- /wp:shadcn/avatar-group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Loom Design Systems</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Team</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">2 May 2025</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">One token file, eleven products, far fewer arguments</a></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Design systems","variant":"outline","url":"#","iconName":"chevron-right","iconPosition":"right"} /-->

<!-- wp:shadcn/badge {"text":"Process","variant":"outline","url":"#","iconName":"chevron-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"16%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:16%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","className":"is-style-outline","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Read</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"28%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:28%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-group"><!-- wp:image {"height":"24px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Harbor Data wordmark" style="height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar-group {"maxVisible":3} -->
<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Tomasz Wierzba","size":"sm","fallback":"TW"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Elif Karadag","size":"sm","fallback":"EK"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Bram de Ridder","size":"sm","fallback":"BR"} /-->
<!-- /wp:shadcn/avatar-group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Harbor Data</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Team</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">18 April 2025</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">Retiring the nightly batch, one table at a time</a></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Data","variant":"outline","url":"#","iconName":"chevron-right","iconPosition":"right"} /-->

<!-- wp:shadcn/badge {"text":"Architecture","variant":"outline","url":"#","iconName":"chevron-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"16%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:16%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","className":"is-style-outline","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Read</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"28%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:28%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-group"><!-- wp:image {"height":"24px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Wren Mobile wordmark" style="height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar-group {"maxVisible":3} -->
<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Sofia Almeida","size":"sm","fallback":"SA"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Marcus Hollingsworth","size":"sm","fallback":"MH"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Amara Ndiaye","size":"sm","fallback":"AN"} /-->
<!-- /wp:shadcn/avatar-group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Wren Mobile</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Team</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">3 April 2025</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">Offline first, three years and one rewrite later</a></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Mobile","variant":"outline","url":"#","iconName":"chevron-right","iconPosition":"right"} /-->

<!-- wp:shadcn/badge {"text":"Sync","variant":"outline","url":"#","iconName":"chevron-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"16%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:16%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","className":"is-style-outline","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Read</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"28%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:28%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-group"><!-- wp:image {"height":"24px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="https://ui.shadcn.com/placeholder.svg" alt="Sable Reliability wordmark" style="height:24px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar-group {"maxVisible":3} -->
<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Joaquin Reyes","size":"sm","fallback":"JR"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Hanne Vestergaard","size":"sm","fallback":"HV"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"https://ui.shadcn.com/placeholder.svg","mediaAlt":"Devon Achebe","size":"sm","fallback":"DA"} /-->
<!-- /wp:shadcn/avatar-group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-sm-font-size" style="font-weight:600">Sable Reliability</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">Team</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">21 March 2025</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><a href="#">The on-call rota that finally let people sleep</a></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Reliability","variant":"outline","url":"#","iconName":"chevron-right","iconPosition":"right"} /-->

<!-- wp:shadcn/badge {"text":"Team health","variant":"outline","url":"#","iconName":"chevron-right","iconPosition":"right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"16%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:16%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"size":"sm","className":"is-style-outline","iconName":"arrow-right","iconPosition":"right"} -->
<div class="wp-block-button is-style-outline is-size-sm"><a class="wp-block-button__link wp-element-button" href="#">Read</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
