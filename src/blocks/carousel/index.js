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
import "./editor.scss";
import "./style.scss";

/**
 * Register the Carousel block.
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
        <path d="M2 7v10" />
        <path d="M6 5v14" />
        <rect width="12" height="18" x="10" y="3" rx="2" fill="none" />
      </svg>
    ),
  },
});
