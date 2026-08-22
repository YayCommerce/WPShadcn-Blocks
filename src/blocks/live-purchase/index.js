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
import "./style.scss";

/**
 * Register the Live Purchase block.
 *
 * Fully dynamic: render.php parks the config in a global and the toast region
 * is printed once in the footer, so save() returns null and the canvas shows a
 * standalone preview instead of the real thing.
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
        style={{ fill: "none" }}
      >
        <path
          d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"
          style={{ fill: "none" }}
        ></path>
        <path d="M3 6h18" style={{ fill: "none" }}></path>
        <path
          d="M16 10a4 4 0 0 1-8 0"
          style={{ fill: "none" }}
        ></path>
      </svg>
    ),
  },
});
