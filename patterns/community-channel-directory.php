<?php
/**
 * Title: Community Channel Directory
 * Slug: shadcn/community-channel-directory
 * Categories: shadcn, community
 * Description: A borderless directory of six community channels in two rows of three, each with a labelled badge, a placeholder address, and a status line.
 * AI Hint: Plain three-by-two directory of community channels — no cards or borders, just centred stacks pairing an icon badge, the channel name, a placeholder address link, and a ghost status chip beside a muted member count; best for listing every place a project can be reached when a card grid would feel too heavy.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|9"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-4-xl-font-size">Where to find us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-base-font-size">Six doors into the same room. Pick whichever suits how you like to talk, and swap these addresses for your own.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Chat","variant":"outline","iconName":"message-circle","iconPosition":"left"} /-->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size" style="font-weight:600">Live chat room</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"xs"} -->
<p class="has-text-align-center has-xs-font-size"><a href="#">chat.your-project.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Online","variant":"ghost","iconName":"circle-check"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">2,400 members</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Forum","variant":"outline","iconName":"message-square","iconPosition":"left"} /-->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size" style="font-weight:600">Long-form threads</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"xs"} -->
<p class="has-text-align-center has-xs-font-size"><a href="#">forum.your-project.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Active","variant":"ghost","iconName":"circle-check"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">1,150 members</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Newsletter","variant":"outline","iconName":"rss","iconPosition":"left"} /-->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size" style="font-weight:600">Friday digest</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"xs"} -->
<p class="has-text-align-center has-xs-font-size"><a href="#">your-project.example/digest</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Weekly","variant":"ghost","iconName":"calendar"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">3,800 readers</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Source","variant":"outline","iconName":"code","iconPosition":"left"} /-->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size" style="font-weight:600">Code and issues</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"xs"} -->
<p class="has-text-align-center has-xs-font-size"><a href="#">code.your-project.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Open","variant":"ghost","iconName":"circle-check"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">620 contributors</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Events","variant":"outline","iconName":"users","iconPosition":"left"} /-->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size" style="font-weight:600">Office hours call</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"xs"} -->
<p class="has-text-align-center has-xs-font-size"><a href="#">your-project.example/office-hours</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Monthly","variant":"ghost","iconName":"calendar"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">180 regulars</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Video","variant":"outline","iconName":"play","iconPosition":"left"} /-->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} -->
<p class="has-text-align-center has-sm-font-size" style="font-weight:600">Recorded walkthroughs</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"xs"} -->
<p class="has-text-align-center has-xs-font-size"><a href="#">video.your-project.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"New","variant":"ghost","iconName":"star"} /-->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">340 subscribers</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
