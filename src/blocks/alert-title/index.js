/**
 * WordPress dependencies
 */
import { RichText } from "@wordpress/block-editor";
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
 * Register the Alert Title block.
 */
registerBlockType(metadata.name, {
  ...metadata,
  edit: Edit,
  save: ({ attributes }) => {
    const { title } = attributes;
    if (!title) {
      return null;
    }
    return <RichText.Content value={title} tagName="div" className="alert-title" />;
  },
});
