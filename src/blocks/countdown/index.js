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
 * Register the Countdown block.
 *
 * Dynamic (server-rendered) block: render.php prints the time remaining as of
 * render so the block is correct without JavaScript, and view.js recalculates
 * from the absolute target and keeps it ticking.
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
        <path d="M10 2h4" />
        <path d="M12 14v-4" />
        <circle cx="12" cy="14" r="8" />
      </svg>
    ),
  },
});
