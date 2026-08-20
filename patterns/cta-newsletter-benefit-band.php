<?php
/**
 * Title: CTA Newsletter Benefit Band
 * Slug: shadcn/cta-newsletter-benefit-band
 * Categories: shadcn, call-to-action
 * Description: A full-width muted band with a pill badge, a centred newsletter headline, one subscribe button and a row of ticked benefits.
 * AI Hint: Call to action — a soft grey full-width band centring a small icon badge, a large headline, one supporting line, a single subscribe button and a wrapping row of three tick-marked benefit labels beneath it; reach for it when a page needs a calm mailing-list invitation that states what a subscriber actually gets.
 */

?>
<!-- wp:group {"metadata":{"categories":["shadcn","call-to-action"],"patternName":"shadcn/cta-newsletter-benefit-band","name":"CTA Newsletter Benefit Band"},"align":"full","backgroundColor":"muted","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|4","bottom":"var:preset|spacing|10","left":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Stay informed","variant":"default","iconName":"mail","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"600","lineHeight":"1.15"}},"textColor":"foreground","fontSize":"fluid-4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-fluid-4-xl-font-size" style="font-weight:600;line-height:1.15">One letter, every other Thursday</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"xl"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-xl-font-size">Release notes, a field story from a studio using the library, and whatever we learned the hard way that fortnight.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--5)"><!-- wp:button {"size":"lg","iconName":"arrow-right","iconPosition":"right","backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button is-size-lg"><a class="wp-block-button__link has-primary-foreground-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:8px">Sign up for the letter</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5","margin":{"top":"var:preset|spacing|4"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--4)"><!-- wp:shadcn/badge {"text":"A fortnightly rhythm","variant":"ghost","iconName":"circle-check","iconPosition":"left"} /-->

<!-- wp:shadcn/badge {"text":"Subscriber-only teardowns","variant":"ghost","iconName":"circle-check","iconPosition":"left"} /-->

<!-- wp:shadcn/badge {"text":"New sections first","variant":"ghost","iconName":"circle-check","iconPosition":"left"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
