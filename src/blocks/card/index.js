/**
 * WordPress dependencies
 */
import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks } from '@wordpress/block-editor';

/**
 * Internal dependencies
 */
import Edit from './edit';
import metadata from './block.json';

/**
 * Styles
 */
import './style.scss';

/**
 * Register the Card block.
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
        stroke-width="1.5"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <rect width="20" height="14" x="2" y="5" rx="2" fill="none"/>
        <line x1="2" x2="22" y1="10" y2="10" />
      </svg>
    ),
  },
} );
