/**
 * WordPress dependencies
 */
import { registerBlockCollection } from '@wordpress/blocks';

/**
 * Register block collection.
 */
registerBlockCollection( 'wpshadcn', {
	title: 'Shadcn',
} );

/**
 * Import all blocks.
 */
import './blocks/card';
import './blocks/card-header';
import './blocks/card-content';
import './blocks/card-footer';
