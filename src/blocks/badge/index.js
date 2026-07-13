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
 * Register the Badge block.
 *
 * Dynamic (server-rendered) block: the label lives in the `text` attribute and
 * render.php emits the markup, so save returns null.
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
        <path
          d="M3.6 8.4A2 2 0 0 1 5.4 7.3l12.2-2A2 2 0 0 1 20 7.7l1 6a2 2 0 0 1-1.6 2.3l-12.2 2a2 2 0 0 1-2.2-1.4z"
          fill="none"
          stroke="currentColor"
        />
        <circle cx="8" cy="12" r="1" fill="none" stroke="currentColor" />
      </svg>
    ),
  },
});
