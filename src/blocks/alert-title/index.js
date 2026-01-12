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
    
    // For dynamic blocks, save the content that matches the selector
    // The selector is "div", so we save just the div with the title content
    if (!title) {
      return null;
    }
    
    // Save structure that matches the selector in block.json
    // WordPress will extract the innerHTML of the div as the attribute
    return <RichText.Content value={title} tagName="div" />;
  },
});
