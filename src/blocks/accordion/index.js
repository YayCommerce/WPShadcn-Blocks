/**
 * WordPress dependencies
 */
import { registerBlockType } from "@wordpress/blocks";

/**
 * Internal dependencies
 */
import Edit from "./edit";
import metadata from "./block.json";
import Save from "./save";

/**
 * Styles
 */
import "./style.scss";

/**
 * Register the Accordion block.
 */
registerBlockType(metadata.name, {
  ...metadata,
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
        <path d="M3 5h8" />
        <path d="M3 12h8" />
        <path d="M3 19h8" />
        <path d="m15 5 3 3 3-3" fill="none"/>
        <path d="m15 19 3-3 3 3" fill="none"/>
      </svg>
    ),
  },
  edit: Edit,
  save: Save,
});
