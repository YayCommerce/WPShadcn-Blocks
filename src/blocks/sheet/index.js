/**
 * WordPress dependencies
 */
import { registerBlockType, registerBlockVariation } from "@wordpress/blocks";
import { InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

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
 * Register the Sheet block.
 */
registerBlockType(metadata.name, {
  ...metadata,
  edit: Edit,
  save: () => <InnerBlocks.Content />,
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
      >
        <rect width="18" height="18" x="3" y="3" rx="2" fill="none" />
        <path d="M15 3v18" />
      </svg>
    ),
  },
});

/**
 * Dialog template, from the shadcn Dialog demo.
 */
const DIALOG_INNER_BLOCKS = [
  [
    "shadcn/sheet-trigger",
    {},
    [
      [
        "core/buttons",
        {},
        [
          [
            "core/button",
            {
              text: __("Open Dialog", "yaycommerce-blocks-for-shadcn-ui"),
              tagName: "button",
              className: "is-style-outline",
            },
          ],
        ],
      ],
    ],
  ],
  [
    "shadcn/sheet-header",
    {},
    [
      [
        "core/heading",
        {
          level: 3,
          content: __("Edit profile", "yaycommerce-blocks-for-shadcn-ui"),
        },
      ],
      [
        "core/paragraph",
        {
          content: __(
            "Make changes to your profile here. Click save when you're done.",
            "yaycommerce-blocks-for-shadcn-ui"
          ),
        },
      ],
    ],
  ],
  [
    "shadcn/sheet-content",
    {},
    [
      [
        "shadcn/input",
        {
          label: __("Name", "yaycommerce-blocks-for-shadcn-ui"),
          fieldName: "name",
          placeholder: "Pedro Duarte",
        },
      ],
      [
        "shadcn/input",
        {
          label: __("Username", "yaycommerce-blocks-for-shadcn-ui"),
          fieldName: "username",
          placeholder: "@peduarte",
        },
      ],
    ],
  ],
  [
    "shadcn/sheet-footer",
    {},
    [
      [
        "core/buttons",
        {},
        [
          // tagName "button": render.php wires the trigger and Cancel onto <button> only.
          [
            "core/button",
            {
              text: __("Cancel", "yaycommerce-blocks-for-shadcn-ui"),
              tagName: "button",
              className: "is-style-outline",
            },
          ],
          [
            "core/button",
            {
              text: __("Save changes", "yaycommerce-blocks-for-shadcn-ui"),
              tagName: "button",
            },
          ],
        ],
      ],
    ],
  ],
];

/**
 * Convert [name, attributes, innerBlocks] tuples to the example format.
 *
 * @param {Array} blocks Block tuples.
 * @return {Array} Example inner blocks.
 */
const toExample = (blocks) =>
  blocks.map(([name, attributes, innerBlocks = []]) => ({
    name,
    attributes,
    innerBlocks: toExample(innerBlocks),
  }));

/**
 * Dialog: a centered Sheet.
 */
registerBlockVariation(metadata.name, {
  name: "dialog",
  title: __("Dialog", "yaycommerce-blocks-for-shadcn-ui"),
  description: __(
    "A window overlaid on the page, centered, for forms, video or details.",
    "yaycommerce-blocks-for-shadcn-ui"
  ),
  keywords: ["dialog", "modal", "popup"],
  attributes: { direction: "center" },
  isActive: ["direction"],
  icon: (
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
    >
      <rect width="18" height="18" x="3" y="3" rx="2" fill="none" />
      <rect width="10" height="8" x="7" y="8" rx="1" fill="none" />
    </svg>
  ),
  innerBlocks: DIALOG_INNER_BLOCKS,
  example: {
    attributes: { dismissible: true, direction: "center" },
    innerBlocks: toExample(DIALOG_INNER_BLOCKS),
    viewportWidth: 900,
  },
});
