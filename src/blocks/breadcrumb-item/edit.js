/**
 * WordPress dependencies
 */
import {
  InspectorControls,
  RichText,
  useBlockProps,
} from "@wordpress/block-editor";
import {
  PanelBody,
  SelectControl,
  TextControl,
  ToggleControl,
} from "@wordpress/components";
import { __ } from "@wordpress/i18n";

/**
 * Internal dependencies — shared icon glyph.
 */
import { IconGlyph } from "../../shared/icons/icon-picker.js";

const TYPE_OPTIONS = [
  { label: __("Link / current page", "yaycommerce-blocks-for-shadcn-ui"), value: "link" },
  { label: __("Ellipsis (collapsed)", "yaycommerce-blocks-for-shadcn-ui"), value: "ellipsis" },
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes, context }) {
  const { type, label, url, linkTarget } = attributes;
  const separator = context["shadcn/breadcrumb-separator"] || "chevron-right";
  const isEllipsis = "ellipsis" === type;

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-breadcrumb-item breadcrumb-item",
  });

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Breadcrumb Item Settings", "yaycommerce-blocks-for-shadcn-ui")}>
          <SelectControl
            label={__("Type", "yaycommerce-blocks-for-shadcn-ui")}
            value={type}
            options={TYPE_OPTIONS}
            onChange={(value) => setAttributes({ type: value })}
          />
          <TextControl
            label={__("Link URL", "yaycommerce-blocks-for-shadcn-ui")}
            type="url"
            value={url}
            placeholder="https://"
            help={
              isEllipsis
                ? __("Optional.", "yaycommerce-blocks-for-shadcn-ui")
                : __(
                    "Leave empty for the current page (shown without a link).",
                    "yaycommerce-blocks-for-shadcn-ui"
                  )
            }
            onChange={(value) =>
              setAttributes(value ? { url: value } : { url: "", linkTarget: "" })
            }
          />
          <ToggleControl
            label={__("Open in new tab", "yaycommerce-blocks-for-shadcn-ui")}
            checked={linkTarget === "_blank"}
            disabled={!url}
            onChange={(checked) => setAttributes({ linkTarget: checked ? "_blank" : "" })}
          />
        </PanelBody>
      </InspectorControls>
      <li {...blockProps}>
        <span className="breadcrumb-separator">
          <span className="shadcn-icon">
            <IconGlyph name={separator} />
          </span>
        </span>
        {isEllipsis ? (
          <span className="breadcrumb-ellipsis">
            <span className="shadcn-icon">
              <IconGlyph name="more-horizontal" />
            </span>
          </span>
        ) : (
          // Never an <a> in the editor (nested-anchor and click-through issues).
          <RichText
            tagName="span"
            className={url ? "breadcrumb-link" : "breadcrumb-page"}
            value={label}
            allowedFormats={["core/bold", "core/italic"]}
            placeholder={__("Label", "yaycommerce-blocks-for-shadcn-ui")}
            onChange={(value) => setAttributes({ label: value })}
          />
        )}
      </li>
    </>
  );
}
