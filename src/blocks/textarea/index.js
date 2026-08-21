/**
 * WordPress dependencies
 */
import { registerBlockType } from '@wordpress/blocks';

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
 * Register the Textarea block.
 *
 * Dynamic (server-rendered) block: render.php emits the markup, so save
 * returns null.
 */
registerBlockType( metadata.name, {
	...metadata,
	edit: Edit,
	save: () => null,
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
				<rect x="3" y="5" width="18" height="14" rx="2" fill="none" />
				<path d="M7 9h10M7 13h6" />
			</svg>
		),
	},
} );
