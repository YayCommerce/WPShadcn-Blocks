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
	}
}

add_action( 'init', 'shadcn_blocks_register_block_styles' );
