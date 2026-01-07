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
import Save from "./save";
/**
 * Styles
 */
import "./style.scss";

/**
 * Register the Accordion Content block.
 */
registerBlockType(metadata.name, {
  ...metadata,
  edit: Edit,
  save: Save,
});
