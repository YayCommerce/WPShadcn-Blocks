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
 * Register the Counter block.
 *
 * Dynamic (server-rendered) block: render.php prints the final value so the
 * number is correct without JavaScript, and view.js animates from the start
 * value once the block enters the viewport.
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
        <path d="M9 7 12 5v14" />
        <path d="M10 19h4" />
        <path d="M17 5h4l-3 4a2.5 2.5 0 1 1-1.5 4.5" />
      </svg>
    ),
  },
});
