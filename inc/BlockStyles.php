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
	 */
	function shadcn_blocks_register_block_styles() {
		if ( ! function_exists( 'register_block_style' ) ) {
			return;
		}

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
