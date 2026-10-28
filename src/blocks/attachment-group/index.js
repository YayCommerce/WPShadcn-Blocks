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
 * Register the Attachment Group block.
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
        <rect x="2" y="6" width="8" height="12" rx="2" fill="none" stroke="currentColor" />
        <rect x="14" y="6" width="8" height="12" rx="2" fill="none" stroke="currentColor" />
        <path d="M5 10h2" fill="none" stroke="currentColor" />
        <path d="M17 10h2" fill="none" stroke="currentColor" />
      </svg>
    ),
  },
});
