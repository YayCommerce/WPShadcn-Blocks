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
 * Register the Accordion item block.
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
        <path d="M16 5H3" />
        <path d="M11 12H3" />
        <path d="M16 19H3" />
        <path d="M21 12h-6" />
      </svg>
    ),
  },
  edit: Edit,
  save: Save,
});
