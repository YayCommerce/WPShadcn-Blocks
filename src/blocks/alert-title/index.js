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
        <path d="M6 12h12" />
        <path d="M6 20V4" />
        <path d="M18 20V4" />
      </svg>
    ),
  },
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
