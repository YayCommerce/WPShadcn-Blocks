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
 * Internal dependencies — shared icon picker.
 */
import { IconPanelBody } from "../../shared/icons/icon-panel.js";
import { IconGlyph } from "../../shared/icons/icon-picker.js";
import { buildIconClasses } from "../../shared/icons/icon-attributes.js";

/**
 * Variant options shared with render.php class names.
 */
const VARIANT_OPTIONS = [
  { label: __("Default", "yaycommerce-blocks-for-shadcn-ui"), value: "default" },
  { label: __("Secondary", "yaycommerce-blocks-for-shadcn-ui"), value: "secondary" },
  { label: __("Destructive", "yaycommerce-blocks-for-shadcn-ui"), value: "destructive" },
  { label: __("Outline", "yaycommerce-blocks-for-shadcn-ui"), value: "outline" },
  { label: __("Ghost", "yaycommerce-blocks-for-shadcn-ui"), value: "ghost" },
  { label: __("Link", "yaycommerce-blocks-for-shadcn-ui"), value: "link" },
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const {
    text,
    variant,
    url,
    linkTarget,
    iconName = "",
    iconPosition = "left",
    iconSize = "",
  } = attributes;

  const isRight = iconPosition === "right";
  // Shared class contract (single source: buildIconClasses()).
  const iconClasses = buildIconClasses(iconName, iconPosition);

  // Keep the badge a span in the editor even when linked (avoids nested-anchor
  // issues); the <a> only materializes on the frontend render.
  const blockProps = useBlockProps({
    className: `wp-block-shadcn-badge badge badge-${variant}${
      iconClasses ? ` ${iconClasses}` : ""
    }`,
  });

  // Editor icon preview mirrors the frontend render (DOM order = position).
  const glyph = iconName ? (
    <span
      className="shadcn-icon"
      style={iconSize ? { width: iconSize, height: iconSize } : undefined}
    >
      <IconGlyph name={iconName} />
    </span>
  ) : null;

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Badge Settings", "yaycommerce-blocks-for-shadcn-ui")}>
          <SelectControl
            label={__("Variant", "yaycommerce-blocks-for-shadcn-ui")}
            value={variant}
            options={VARIANT_OPTIONS}
            onChange={(value) => setAttributes({ variant: value })}
          />
          <TextControl
            label={__("Link URL", "yaycommerce-blocks-for-shadcn-ui")}
            type="url"
            value={url}
            placeholder="https://"
            help={__(
              "Optional. When set, the badge renders as a link.",
              "yaycommerce-blocks-for-shadcn-ui"
            )}
            onChange={(value) =>
              setAttributes(
                value ? { url: value } : { url: "", linkTarget: "", rel: "" }
              )
            }
          />
          <ToggleControl
            label={__("Open in new tab", "yaycommerce-blocks-for-shadcn-ui")}
            checked={linkTarget === "_blank"}
            disabled={!url}
            onChange={(checked) =>
              setAttributes({
                linkTarget: checked ? "_blank" : "",
                rel: checked ? "noreferrer noopener" : "",
              })
            }
          />
        </PanelBody>
        <IconPanelBody attributes={attributes} setAttributes={setAttributes} />
      </InspectorControls>
      <span {...blockProps}>
        {!isRight && glyph}
        <RichText
          tagName="span"
          className="wp-block-shadcn-badge__text"
          value={text}
          allowedFormats={["core/bold", "core/italic"]}
          placeholder={__("Badge", "yaycommerce-blocks-for-shadcn-ui")}
          onChange={(value) => setAttributes({ text: value })}
        />
        {isRight && glyph}
      </span>
    </>
  );
}
