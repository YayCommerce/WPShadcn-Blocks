<?php
/**
 * Title: Contact Demo Booking Split
 * Slug: shadcn/contact-demo-booking-split
 * Categories: shadcn, contact
 * Description: A two-column contact section — persuasion on the left with an avatar stack, benefit checks and client logos; a bordered card on the right holding a booking form of inputs, dropdowns and a full-width submit.
 * AI Hint: Demo-booking contact split in two columns: the left carries an oversized headline, a muted lead, an overlapping avatar row with a small reassurance line, a three-item check list of benefits and a four-logo strip; the right is a bordered card-background form asking for name, work email, company, phone, then country and company-size dropdowns, closed by a full-width submit button that emails the site owner; reach for it when a product sells through sales calls and the page must argue for the meeting right beside the form that books it.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"fluid-5-xl"} -->
<h2 class="wp-block-heading has-fluid-5-xl-font-size">See it running on your own data</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"lg"} -->
<p class="has-muted-foreground-color has-text-color has-lg-font-size">Thirty minutes with an engineer, not a sales deck. Bring one workflow you want to speed up and leave with it wired end to end.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar-group {"maxVisible":4} -->
<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Ingrid Sørensen","size":"md","fallback":"IS"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Mateo Herrera","size":"md","fallback":"MH"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Amara Diallo","size":"md","fallback":"AD"} /-->

<!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Kenji Watanabe","size":"md","fallback":"KW"} /-->
<!-- /wp:shadcn/avatar-group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Guided by the team that runs 400+ demos a year</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-shadcn-check","fontSize":"sm"} -->
<ul class="wp-block-list is-style-shadcn-check has-sm-font-size"><!-- wp:list-item -->
<li>A working pipeline in your stack before the call ends</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Straight answers on limits, pricing and rollout effort</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A recording and sandbox access to share with your team</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6","margin":{"top":"var:preset|spacing|4"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--4)"><!-- wp:image {"width":"96px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Halbron logo" style="width:96px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"96px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Novaset logo" style="width:96px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"96px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Quailfield logo" style="width:96px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"96px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Tresmond logo" style="width:96px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"color":"var:preset|color|border","width":"1px","style":"solid","radius":"0.75rem"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"card","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:0.75rem;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size" style="font-weight:600">Book your demo</h3>
<!-- /wp:heading -->

<!-- wp:shadcn/form {"formName":"Demo request"} -->
<!-- wp:shadcn/input {"label":"Full name","required":true,"placeholder":"Ada Okafor"} /-->

<!-- wp:shadcn/input {"label":"Work email","type":"email","required":true,"placeholder":"ada@company.com"} /-->

<!-- wp:shadcn/input {"label":"Company","placeholder":"Company name"} /-->

<!-- wp:shadcn/input {"label":"Phone","type":"tel","placeholder":"+1 555 000 1234"} /-->

<!-- wp:shadcn/select {"label":"Country","placeholder":"Choose a country","options":["United States","United Kingdom","Germany","Vietnam","Singapore","Australia","Other"]} /-->

<!-- wp:shadcn/select {"label":"Company size","placeholder":"How many people?","options":["1–10","11–50","51–200","201–1,000","1,000+"]} /-->

<!-- wp:shadcn/form-submit {"label":"Request the demo","width":100} /-->
<!-- /wp:shadcn/form -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"xs"} -->
<p class="has-muted-foreground-color has-text-color has-xs-font-size">We reply within one business day and never share your details.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
