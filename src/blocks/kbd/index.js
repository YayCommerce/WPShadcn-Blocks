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

const icon = (
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
    <rect x="3" y="4" width="18" height="16" rx="3" fill="none" stroke="currentColor" />
    <rect x="6.5" y="7" width="11" height="9" rx="1.5" fill="none" stroke="currentColor" />
  </svg>
);

/**
 * Register the Kbd block.
 *
 * Dynamic (server-rendered) block: the key label lives in the `text` attribute
 * and render.php emits the markup, so save returns null.
 */
registerBlockType(metadata.name, {
  ...metadata,
  edit: Edit,
  save: () => null,
  icon: { src: icon },
});

