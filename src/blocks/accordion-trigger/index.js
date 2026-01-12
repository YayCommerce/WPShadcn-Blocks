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
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path d="M12 22v-6" />
        <path d="M12 8V2" />
        <path d="M4 12H2" />
        <path d="M10 12H8" />
        <path d="M16 12h-2" />
        <path d="M22 12h-2" />
        <path d="m15 19-3-3-3 3" />
        <path d="m15 5-3 3-3-3" />
      </svg>
    ),
  },
  edit: Edit,
  save: Save,
});
