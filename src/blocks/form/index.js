/**
 * WordPress dependencies
 */
import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks } from '@wordpress/block-editor';

/**
 * Internal dependencies
 */
import metadata from './block.json';
import Edit from './edit';

/**
 * Styles
 */
import './editor.scss';
import './style.scss';

/**
 * Register the Form block.
 *
 * Dynamic wrapper: render.php emits the <form> chrome, but the inner field
 * blocks live in post content, so save persists InnerBlocks.Content.
 */
registerBlockType( metadata.name, {
	...metadata,
	edit: Edit,
	save: () => <InnerBlocks.Content />,
	icon: {
		src: (
			<svg
				xmlns="http://www.w3.org/2000/svg"
				width="24"
				height="24"
				viewBox="0 0 24 24"
				fill="none"
				stroke="currentColor"
				strokeWidth="1.5"
				strokeLinecap="round"
				strokeLinejoin="round"
			>
				<rect x="3" y="3" width="18" height="7" rx="2" fill="none" />
				<rect x="3" y="14" width="12" height="7" rx="2" fill="none" />
				<path d="m18.5 15.5 3 3-3 3" />
			</svg>
		),
	},
} );
