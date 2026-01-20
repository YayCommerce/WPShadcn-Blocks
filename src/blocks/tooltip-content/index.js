/**
 * WordPress dependencies
 */
import { registerBlockType } from "@wordpress/blocks";
import { InnerBlocks } from "@wordpress/block-editor";

/**
 * Internal dependencies
 */
import Edit from "./edit";
import metadata from "./block.json";

/**
 * Register the Tooltip Content block.
 */
registerBlockType(metadata.name, {
  ...metadata,
  edit: Edit,
  save: () => <InnerBlocks.Content />,
  icon: {
    src: <svg
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
    <rect width="18" height="18" x="3" y="3" rx="2" fill="none" />
    <path d="M12 12H9.5a2.5 2.5 0 0 1 0-5H17" />
    <path d="M12 7v10" />
    <path d="M16 7v10" />
  </svg>
  }
});
