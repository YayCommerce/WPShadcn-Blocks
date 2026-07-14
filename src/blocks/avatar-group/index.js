/**
 * WordPress dependencies
 */
import { registerBlockType } from "@wordpress/blocks";
import { InnerBlocks } from "@wordpress/block-editor";

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
 * Register the Avatar Group block.
 */
registerBlockType(metadata.name, {
  ...metadata,
  edit: Edit,
  save: () => <InnerBlocks.Content />,
  icon: {
    src: (
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style={{ fill: "none" }}><path d="M18 21a8 8 0 0 0-16 0" style={{ fill: "none" }}/><circle cx="10" cy="8" r="5" style={{ fill: "none" }}/><path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" style={{ fill: "none" }}/></svg>
    ),
  },
});
