/**
 * WordPress dependencies
 */
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
 * Register the Attachment block.
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
      >
        <rect x="2" y="6" width="20" height="12" rx="3" fill="none" stroke="currentColor" />
        <rect x="5" y="9" width="6" height="6" rx="1.5" fill="none" stroke="currentColor" />
        <path d="M14 10h5" fill="none" stroke="currentColor" />
        <path d="M14 14h3" fill="none" stroke="currentColor" />
      </svg>
    ),
  },
});
