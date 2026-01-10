/**
 * WordPress dependencies
 */
import { InnerBlocks } from '@wordpress/block-editor';
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
 * Register the Carousel block.
 */
registerBlockType( metadata.name, {
	...metadata,
	edit: Edit,
	save: () => <InnerBlocks.Content />,
} );
