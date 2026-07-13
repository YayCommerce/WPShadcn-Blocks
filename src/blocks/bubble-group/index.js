/**
 * WordPress dependencies
 */
import { InnerBlocks } from "@wordpress/block-editor";
import { registerBlockType } from "@wordpress/blocks";

/**
 * Internal dependencies
 */
import metadata from "./block.json";
import Edit from "./edit";

/**
 * Styles
 */
import "./style.scss";

/**
 * Register the Bubble Group block.
 */
registerBlockType(metadata.name, {
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
        <path d="M13 8a4 4 0 0 1-4 4H6l-4 3V7a4 4 0 0 1 4-4h3a4 4 0 0 1 4 4Z" fill="none" stroke="currentColor" />
        <path d="M17 8h1a4 4 0 0 1 4 4v8l-4-3h-4a4 4 0 0 1-3.4-1.9" fill="none" stroke="currentColor" />
      </svg>
    ),
  },
});
