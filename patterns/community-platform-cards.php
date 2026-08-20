<?php
/**
 * Title: Community Platform Cards
 * Slug: shadcn/community-platform-cards
 * Categories: shadcn, community
 * Description: A centred community invitation over three generous bordered channel cards, closing on a short reassurance line.
 * AI Hint: Centred community section — a badge eyebrow above a large heading and a muted lead line, then a three-column row of roomy bordered cards each carrying a labelled chip, a channel name and a two-line description, finished with a quiet reassurance sentence; best for inviting readers into chat, forum and newsletter channels from a docs, product or open-source page.
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Community","variant":"secondary","iconName":"users"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-4-xl-font-size">Come build alongside us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-base-font-size">Every channel below is run by the same people who ship the product. Ask a question, <strong>show what you made</strong>, or simply read along — <strong>no introduction needed</strong>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Chat","variant":"secondary","iconName":"message-circle","iconSize":"20px"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-align-center has-xl-font-size">Live chat</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Quick questions and quicker answers, most days of the week. Bring the screenshot of whatever broke at midnight.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Forum","variant":"secondary","iconName":"message-square","iconSize":"20px"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-align-center has-xl-font-size">Discussion forum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Longer threads worth keeping — setup notes, feature debates and answers that stay searchable a year later.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Newsletter","variant":"secondary","iconName":"send","iconSize":"20px"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-text-align-center has-xl-font-size">Monthly letter</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">One short note each month on what shipped, what changed, and what we learned the hard way.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-sm-font-size">Free to join, easy to leave, and your address never goes anywhere else.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
