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
 * Register the Breadcrumb Item block.
 */
registerBlockType(metadata.name, {
  ...metadata,
  edit: Edit,
  icon: {
    src: (
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style={{ fill: "none" }}><rect x="3" y="7" width="18" height="10" rx="2" style={{ fill: "none" }}/><path d="m11 10 2 2-2 2" style={{ fill: "none" }}/></svg>
    ),
  },
  save: () => null, // Server-side rendered via render.php
});
