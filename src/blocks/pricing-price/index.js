/**
 * WordPress dependencies
 */
import { registerBlockType } from "@wordpress/blocks";

/**
 * Internal dependencies
 */
import Edit from "./edit";
import metadata from "./block.json";

/**
 * Styles
 */
import "./editor.scss";
import "./style.scss";

/**
 * Register the Pricing Price block.
 */
registerBlockType(metadata.name, {
  ...metadata,
  edit: Edit,
  save: () => null,
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
        aria-hidden="true"
      >
        <rect width="20" height="12" x="2" y="6" rx="2" fill="none"></rect>
        <circle cx="12" cy="12" r="2" fill="none"></circle>
        <path d="M6 12h.01M18 12h.01"></path>
      </svg>
    ),
  },
});
