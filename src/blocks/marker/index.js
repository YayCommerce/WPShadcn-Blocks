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
 * Register the Marker block.
 *
 * Dynamic (server-rendered) block: the label lives in the `content` attribute
 * and render.php emits the markup, so save returns null.
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
        <line x1="3" x2="9" y1="12" y2="12" fill="none" stroke="currentColor" />
        <line x1="15" x2="21" y1="12" y2="12" fill="none" stroke="currentColor" />
        <circle cx="12" cy="12" r="3" fill="none" stroke="currentColor" />
      </svg>
    ),
  },
});
