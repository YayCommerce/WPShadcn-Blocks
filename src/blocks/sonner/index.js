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
 * Register the Sonner (Toast) block.
 *
 * Fully dynamic block: the trigger and the shared toaster are rendered by
 * PHP (render.php + a wp_footer mount), so save() returns null.
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
        <path d="M10.268 21a2 2 0 0 0 3.464 0" style={{ fill: "none" }}></path>
        <path
          d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"
          style={{ fill: "none" }}
        ></path>
      </svg>
    ),
  },
});
