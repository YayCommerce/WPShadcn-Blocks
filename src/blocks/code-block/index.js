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
import "./editor.scss";

/**
 * Register the Code Block block.
 *
 * Dynamic (server-rendered) block: the code lives in the `code` attribute and
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
        <rect x="3" y="4" width="18" height="16" rx="2" fill="none" />
        <path d="M3 9h18" fill="none" />
        <path d="m10 12.5-2 2 2 2" fill="none" />
        <path d="m14 12.5 2 2-2 2" fill="none" />
      </svg>
    ),
  },
});
