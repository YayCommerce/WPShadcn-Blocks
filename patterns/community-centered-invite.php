<?php
/**
 * Title: Community Centered Invite
 * Slug: shadcn/community-centered-invite
 * Categories: shadcn, community
 * Description: A quiet centred invitation with a small brand mark, a short heading, one muted line and a row of three outline channel links.
 * AI Hint: Minimal centred community block — a 40px logo mark above a mid-sized heading and a single muted sentence naming who the group is for, closing with a horizontal row of three small outline badge links to chat, source and newsletter channels; reach for it when a page only needs a short invitation to join rather than a grid of channel cards.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:image {"align":"center","width":"40px","sizeSlug":"thumbnail"} -->
<figure class="wp-block-image aligncenter size-thumbnail is-resized"><img src="<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>" alt="Brand mark" style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-text-align-center has-4-xl-font-size">Come build alongside us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-text-align-center has-muted-foreground-color has-text-color has-base-font-size">Open to anyone shipping with the toolkit — makers, maintainers and the curious who are still reading the docs.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Chat","variant":"outline","url":"#","iconName":"message-circle"} /-->

<!-- wp:shadcn/badge {"text":"Source","variant":"outline","url":"#","iconName":"code"} /-->

<!-- wp:shadcn/badge {"text":"Newsletter","variant":"outline","url":"#","iconName":"send"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
