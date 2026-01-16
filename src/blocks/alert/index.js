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
 * Register the Alert block.
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
        fill="transparent"
        stroke="transparent"
        stroke-width="1.5"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" stroke="currentColor" fill="none"/>
        <path d="M12 9v4" stroke="currentColor"/>
        <path d="M12 17h.01" stroke="currentColor"/>
      </svg>
    ),
  },
});
