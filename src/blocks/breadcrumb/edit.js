/**
 * WordPress dependencies
 */
import {
  InspectorControls,
  PanelColorSettings,
  useBlockProps,
  useInnerBlocksProps,
} from "@wordpress/block-editor";
import {
  PanelBody,
  TextControl,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
} from "@wordpress/components";
import { __ } from "@wordpress/i18n";

/**
 * Internal dependencies — shared icon picker.
 */
import { IconPicker, IconGlyph } from "../../shared/icons/icon-picker.js";

/**
 * Default trail, as in shadcn's Basic example: two links and the current page.
 */
const TEMPLATE = [
  ["shadcn/breadcrumb-item", { label: __("Home", "yaycommerce-blocks-for-shadcn-ui"), url: "/" }],
  ["shadcn/breadcrumb-item", { label: __("Components", "yaycommerce-blocks-for-shadcn-ui"), url: "#" }],
  ["shadcn/breadcrumb-item", { label: __("Breadcrumb", "yaycommerce-blocks-for-shadcn-ui") }],
];

const ALLOWED_BLOCKS = ["shadcn/breadcrumb-item"];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const { separator, source, homeLabel, color, hoverColor } = attributes;
  const isAuto = "auto" === source;

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-breadcrumb breadcrumb",
    "aria-label": __("Breadcrumb", "yaycommerce-blocks-for-shadcn-ui"),
    style: {
      ...(color && { "--shadcn-breadcrumb-color": color }),
      ...(hoverColor && { "--shadcn-breadcrumb-hover-color": hoverColor }),
    },
  });

  // useInnerBlocksProps puts the items as direct children of the <ol>
  // (avatar-group precedent). Always called; in auto mode the inner blocks
  // stay in the store untouched, just not shown.
  const innerBlocksProps = useInnerBlocksProps(
    { className: "breadcrumb-list" },
    {
      template: TEMPLATE,
      allowedBlocks: ALLOWED_BLOCKS,
      templateLock: false,
      orientation: "horizontal",
    }
  );

  const preview = [
    homeLabel || __("Home", "yaycommerce-blocks-for-shadcn-ui"),
    "…",
    __("Current page", "yaycommerce-blocks-for-shadcn-ui"),
  ];

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Breadcrumb Settings", "yaycommerce-blocks-for-shadcn-ui")} initialOpen>
          <ToggleGroupControl
            __next40pxDefaultSize
            isBlock
            label={__("Source", "yaycommerce-blocks-for-shadcn-ui")}
            value={source}
            onChange={(value) => setAttributes({ source: value })}
            help={
              isAuto
                ? __(
                    "The trail is built from the page being viewed (parent pages, categories, archives). The items you added are kept but not shown.",
                    "yaycommerce-blocks-for-shadcn-ui"
                  )
                : undefined
            }
          >
            <ToggleGroupControlOption value="manual" label={__("Manual", "yaycommerce-blocks-for-shadcn-ui")} />
            <ToggleGroupControlOption value="auto" label={__("Auto", "yaycommerce-blocks-for-shadcn-ui")} />
          </ToggleGroupControl>
          {isAuto && (
            <TextControl
              label={__("Home label", "yaycommerce-blocks-for-shadcn-ui")}
              value={homeLabel}
              placeholder={__("Home", "yaycommerce-blocks-for-shadcn-ui")}
              onChange={(value) => setAttributes({ homeLabel: value })}
            />
          )}
          <p>{__("Separator", "yaycommerce-blocks-for-shadcn-ui")}</p>
          <IconPicker
            value={separator}
            onChange={(name) => setAttributes({ separator: name || "chevron-right" })}
          />
        </PanelBody>
      </InspectorControls>
      <InspectorControls group="styles">
        <PanelColorSettings
          title={__("Color", "yaycommerce-blocks-for-shadcn-ui")}
          colorSettings={[
            {
              label: __("Text", "yaycommerce-blocks-for-shadcn-ui"),
              value: color,
              onChange: (value) => setAttributes({ color: value || "" }),
            },
            {
              label: __("Link hover", "yaycommerce-blocks-for-shadcn-ui"),
              value: hoverColor,
              onChange: (value) => setAttributes({ hoverColor: value || "" }),
            },
          ]}
        />
      </InspectorControls>
      <nav {...blockProps}>
        {isAuto ? (
          <ol className="breadcrumb-list">
            {preview.map((label, index) => (
              <li key={index} className="breadcrumb-item">
                <span className="breadcrumb-separator">
                  <span className="shadcn-icon">
                    <IconGlyph name={separator} />
                  </span>
                </span>
                {index === preview.length - 1 ? (
                  <span className="breadcrumb-page">{label}</span>
                ) : (
                  <span className="breadcrumb-link">{label}</span>
                )}
              </li>
            ))}
          </ol>
        ) : (
          <ol {...innerBlocksProps} />
        )}
      </nav>
    </>
  );
}
