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
        <path d="M16 7h6v6" fill="none" />
        <path d="m22 7-8.5 8.5-5-5L2 17" fill="none" />
      </svg>
    ),
  },
});
