<?php
/**
 * Block style variations registered on core blocks.
 *
 * @package ShadcnBlocks
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'shadcn_blocks_register_block_styles' ) ) {
	/**
	 * Register the shared core-block style variations.
	 *
	 * The check list replaces the bullet with a tick drawn as a mask, so it
	 * takes its colour from `currentColor` and therefore follows the text and
	 * dark mode without a second rule.
	 *
	 * The sticky column pins a group to the top of the viewport while a taller
	 * sibling scrolls past it. Core's own position support would do this, but
	 * it only renders when the active theme opts in via `settings.position`,
	 * and these patterns ship with the plugin, not the theme.
	 *
	 * The divided group rules its own children rather than asking every row to
	 * carry a border and matching padding, so rows stay plain blocks that can
	 * be duplicated or reordered without any styling to keep in sync.
	 *
	 * The vertical rail gives `shadcn/carousel` a definite viewport height so
	 * a vertical carousel has something to clip against — without it every
	 * slide renders stacked at once instead of paging through them, since the
	 * block's own CSS only sizes slides against a definite axis, which
	 * `orientation: vertical` doesn't have on its own (block height is auto).
	 *
	 * It also overrides two of the block's own defaults, both needed and
	 * both load-bearing for Embla's `loop` to work at all:
	 *
	 * - Slides get `flex: 0 0 auto` instead of the block's `flex: 0 0 100%`
	 *   (built for horizontal, where 100% of the block's own width is
	 *   exactly one full slide). Stretching a short product card to 100% of
	 *   an unrelated rail height leaves a slab of empty space below it every
	 *   time the carousel pages.
	 * - `__content` (Embla's "container" — see view.js) keeps a *fixed*
	 *   `height: 100%` rather than the `auto` its own natural sizing would
	 *   give it. Embla decides whether looping is even possible by comparing
	 *   its container's own measured size against its slides' total size;
	 *   an `auto` container always measures out to exactly its slides' total
	 *   (that's what `auto` means), so the two can never differ and Embla
	 *   silently falls back to `loop: false` — `scrollNext()` stops dead at
	 *   the last slide instead of wrapping. Capping the container below the
	 *   slides' total restores the size gap Embla's loop check needs.
	 *
	 * The hover reveal parks a panel below a row and slides it up on hover.
	 * `isolation: isolate` is what makes the panel land in the right layer: it
	 * opens a stacking context on the row, so the `z-index: -1` pseudo paints
	 * above the row's own background but below every child. Without it the
	 * panel sinks behind whatever section background sits underneath and is
	 * never seen. Hover sits behind `@media (hover: hover)` because touch
	 * browsers leave an emulated hover stuck on the last-tapped element, and
	 * `:focus-within` carries the same reveal for keyboard users. The panel is
	 * decoration only — a device that cannot hover never reveals it, so nothing
	 * informational may be placed inside.
	 */
	function shadcn_blocks_register_block_styles() {
		if ( ! function_exists( 'register_block_style' ) ) {
			return;
		}

		register_block_style(
			'core/group',
			array(
				'name'         => 'shadcn-sticky',
				'label'        => __( 'Sticky column', 'shadcn-blocks' ),
				'inline_style' => '
/* Below the columns breakpoint the siblings stack, so there is nothing left to
   scroll past and pinning would only strand the group mid-screen. */
@media (min-width: 782px) {
	.wp-block-group.is-style-shadcn-sticky {
		position: sticky;
		top: calc(2rem + var(--wp-admin--admin-bar--position-offset, 0px));
	}
}
',
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'         => 'shadcn-divided',
				'label'        => __( 'Divided rows', 'shadcn-blocks' ),
				'inline_style' => '
.wp-block-group.is-style-shadcn-divided > * {
	padding-top: 1rem;
	padding-bottom: 1rem;
	border-bottom: 1px solid var(--wp--preset--color--border, #e5e5e5);
}

.wp-block-group.is-style-shadcn-divided > *:first-child {
	padding-top: 0;
}
',
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'         => 'shadcn-on-dark',
				'label'        => __( 'On dark', 'shadcn-blocks' ),
				'inline_style' => '
/* Links inside a dark panel. The theme paints links with the `primary`
 * colour, which is near-black in light mode and so invisible against a dark
 * section. Inheriting instead lets each block keep whatever colour it already
 * set — a muted nav column stays muted, body copy stays bright — while
 * buttons, which carry their own colours, are left alone.
 *
 * `style.elements.link` is the usual way to do this and cannot be used from a
 * pattern: its class is a hash of the whole block, so hand-written markup can
 * never match what save() emits and the block loads as invalid.
 *
 * The border and muted-foreground tokens are re-pointed at the values the theme
 * uses in dark mode, so hairlines read as a faint light rule and secondary copy
 * lifts off the dark ground, rather than the light-mode values which assume a
 * pale background underneath them. */
.wp-block-group.is-style-shadcn-on-dark {
	--wp--preset--color--border: rgba(255, 255, 255, 0.1);
	--wp--preset--color--muted-foreground: #a1a1a1;
}

.wp-block-group.is-style-shadcn-on-dark a:where(:not(.wp-element-button)) {
	color: inherit;
}

/* Headings do not inherit the group\'s text colour: theme.json sets
 * `elements.heading.color.text` to the `foreground` preset, which WordPress
 * emits as `:root :where(h1,…,h6)` and which therefore beats plain inheritance
 * — painting every heading in a dark panel near-black on near-black. Matching
 * that with one extra class outweighs it, while the inner `:where()` keeps
 * specificity low enough that a heading setting its own palette colour still
 * wins. */
.wp-block-group.is-style-shadcn-on-dark :where(h1, h2, h3, h4, h5, h6) {
	color: inherit;
}
',
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'         => 'shadcn-check',
				'label'        => __( 'Check list', 'shadcn-blocks' ),
				'inline_style' => '
.wp-block-list.is-style-shadcn-check {
	list-style: none;
	padding-left: 0;
}

.wp-block-list.is-style-shadcn-check li {
	position: relative;
	padding-left: 1.75rem;
}

.wp-block-list.is-style-shadcn-check li::before {
	content: "";
	position: absolute;
	top: 0.25em;
	left: 0;
	width: 1rem;
	height: 1rem;
	background-color: currentColor;
	-webkit-mask-image: var(--shadcn-check-mask);
	mask-image: var(--shadcn-check-mask);
	-webkit-mask-repeat: no-repeat;
	mask-repeat: no-repeat;
	-webkit-mask-size: contain;
	mask-size: contain;
}

:root {
	--shadcn-check-mask: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'%23000\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3E%3Cpath d=\'M20 6 9 17l-5-5\'/%3E%3C/svg%3E");
}
',
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'         => 'shadcn-plain',
				'label'        => __( 'Plain list', 'shadcn-blocks' ),
				'inline_style' => '
/* Navigation columns are lists semantically but never read as bullets. Using
 * core/list keeps a footer column one block instead of one paragraph per link,
 * which also keeps the Shadcn AI catalog from filling up with link labels it
 * has no business rewriting. */
.wp-block-list.is-style-shadcn-plain {
	list-style: none;
	padding-left: 0;
}

/* The theme underlines content links, which is right for prose and wrong for a
 * column of twenty nav labels. The rule is restored on hover so the affordance
 * is not lost. */
.wp-block-list.is-style-shadcn-plain a:where(:not(.wp-element-button)) {
	text-decoration: none;
}

.wp-block-list.is-style-shadcn-plain a:where(:not(.wp-element-button)):hover {
	text-decoration: underline;
}
',
			)
		);

		register_block_style(
			'shadcn/carousel',
			array(
				'name'         => 'shadcn-vertical-rail',
				'label'        => __( 'Vertical rail', 'shadcn-blocks' ),
				'inline_style' => '
.wp-block-shadcn-carousel.is-style-shadcn-vertical-rail.orientation-vertical .wp-block-shadcn-carousel__viewport {
	height: min(48rem, 80vh);
}

.wp-block-shadcn-carousel.is-style-shadcn-vertical-rail.orientation-vertical .wp-block-shadcn-carousel__content {
	height: 100%;
}

.wp-block-shadcn-carousel.is-style-shadcn-vertical-rail.orientation-vertical .wp-block-shadcn-carousel-item {
	flex: 0 0 auto;
	width: 100%;
}
',
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'         => 'shadcn-hover-reveal',
				'label'        => __( 'Hover reveal panel', 'shadcn-blocks' ),
				'inline_style' => '
.wp-block-group.is-style-shadcn-hover-reveal {
	position: relative;
	overflow: hidden;
	isolation: isolate;
}

.wp-block-group.is-style-shadcn-hover-reveal::before {
	content: "";
	position: absolute;
	inset: 0;
	z-index: -1;
	background: var(--wp--preset--color--muted, #f5f5f5);
	transform: translateY(100%);
	transition: transform 300ms cubic-bezier(0.4, 0, 0.2, 1);
}

.wp-block-group.is-style-shadcn-hover-reveal:focus-within::before {
	transform: translateY(0);
}

@media (hover: hover) {
	.wp-block-group.is-style-shadcn-hover-reveal:hover::before {
		transform: translateY(0);
	}
}

@media (prefers-reduced-motion: reduce) {
	.wp-block-group.is-style-shadcn-hover-reveal::before {
		transition: none;
	}
}
',
			)
		);
	}
}

add_action( 'init', 'shadcn_blocks_register_block_styles' );
