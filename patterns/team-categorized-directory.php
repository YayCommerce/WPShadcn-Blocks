<?php
/**
 * Title: Team Categorized Directory
 * Slug: shadcn/team-categorized-directory
 * Categories: shadcn, team
 * Description: A sticky left heading beside a right column that groups the whole team under category headings, each person listed with a small avatar, a role badge and a short bio shown at rest.
 * AI Hint: Org-chart style team directory — a narrow sticky left column holds the section heading while the right column runs down named categories, each introduced by a heading and a one-line note and laid out as two columns of people, every one of them a small round avatar beside a name and a role badge with a two-line bio underneath; reach for it when a practice or department wants its structure legible on the page, with no filter control and nothing hidden behind a hover.
 */

defined( 'ABSPATH' ) || exit;

?>
<!-- wp:group {"metadata":{"categories":["shadcn","team"],"patternName":"shadcn/team-categorized-directory","name":"Team Categorized Directory"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"className":"is-style-shadcn-sticky","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadcn-sticky"><!-- wp:group {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:shadcn/badge {"text":"Directory","variant":"outline","iconName":"users","iconPosition":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.02em","lineHeight":"1.1"}},"fontSize":"4-xl"} -->
<h2 class="wp-block-heading has-4-xl-font-size" style="font-weight:600;letter-spacing:-0.02em;line-height:1.1">Everyone, by what they do</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"base"} -->
<p class="has-muted-foreground-color has-text-color has-base-font-size">Nineteen people in three groups. Names, roles and what each of them is actually responsible for, all of it on the page rather than tucked behind a hover.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|9"}}} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"metadata":{"name":"Category"},"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--4)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:600;letter-spacing:-0.01em">Partners</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">The four names on the door, and the work each of them still keeps a hand in.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Person"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Portrait of Beatriz Salgado, managing partner","size":"sm","fallback":"BS"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Beatriz Salgado</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/badge {"text":"Managing partner","variant":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Runs the practice and every fee conversation that follows a first meeting. Twenty-two years in, still writes the scope herself.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Person"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Portrait of Hugh Ellery, design partner","size":"sm","fallback":"HE"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Hugh Ellery</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/badge {"text":"Design partner","variant":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Signs off every drawing that leaves the building and keeps a shelf of rejected schemes to explain why.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Person"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Portrait of Ifeoma Nwachukwu, technical partner","size":"sm","fallback":"IN"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Ifeoma Nwachukwu</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/badge {"text":"Technical partner","variant":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Owns specification and the awkward questions about buildability that get asked too late everywhere else.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Person"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Portrait of Petter Brenna, partner for new work","size":"sm","fallback":"PB"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Petter Brenna</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/badge {"text":"Partner, new work","variant":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Meets everyone who enquires, and turns down about half of it before it ever reaches a proposal.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Category"},"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--4)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:600;letter-spacing:-0.01em">Studio</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Eleven designers and drafters; four of them lead their own projects end to end.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Person"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Portrait of Marisol Iglesias, studio lead","size":"sm","fallback":"MI"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Marisol Iglesias</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/badge {"text":"Studio lead","variant":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Sets the studio's week and keeps three projects moving without any of them going quiet on the client.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Person"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Portrait of Dov Sharabi, senior designer","size":"sm","fallback":"DS"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Dov Sharabi</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/badge {"text":"Senior designer","variant":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Concept work and the long middle stretch where a scheme has to survive a budget.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Person"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Portrait of Halina Kowalczyk, interiors designer","size":"sm","fallback":"HK"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Halina Kowalczyk</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/badge {"text":"Interiors","variant":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Materials, lighting and the sample library nobody else is allowed to reorganise.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Person"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Portrait of Tunde Adewale, visualisation specialist","size":"sm","fallback":"TA"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Tunde Adewale</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/badge {"text":"Visualisation","variant":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Builds the model everyone argues over, then rebuilds it the way the argument landed.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Category"},"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--4)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size" style="font-weight:600;letter-spacing:-0.01em">Delivery</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">The people who take a signed scheme and make it real on a wet site in February.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Person"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Portrait of Grainne Fallon, project manager","size":"sm","fallback":"GF"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Grainne Fallon</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/badge {"text":"Project manager","variant":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Programme, procurement and the weekly call where slippage gets named instead of hidden.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Person"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Portrait of Emil Vranjes, site architect","size":"sm","fallback":"EV"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Emil Vranješ</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/badge {"text":"Site architect","variant":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Two days a week on site, three at the desk, and a phone that rings from both.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Person"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Portrait of Noor Al-Sabah, contract administrator","size":"sm","fallback":"NA"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Noor Al-Sabah</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/badge {"text":"Contract administrator","variant":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Valuations, variations and the paper trail that decides who pays for the surprise in the ground.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Person"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:shadcn/avatar {"mediaUrl":"<?php echo esc_url( SHADCN_BLOCKS_URL . 'assets/images/placeholder.svg' ); ?>","mediaAlt":"Portrait of Callum Rutherford, handover lead","size":"sm","fallback":"CR"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600">Callum Rutherford</p>
<!-- /wp:paragraph -->

<!-- wp:shadcn/badge {"text":"Handover","variant":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted-foreground","fontSize":"sm"} -->
<p class="has-muted-foreground-color has-text-color has-sm-font-size">Snagging, manuals and the twelve-month call-back that most practices quietly skip.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
