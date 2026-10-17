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
 * Variant options shared with render.php class names.
 */
const VARIANT_OPTIONS = [
  { label: __("Default", "yaycommerce-blocks-for-shadcn-ui"), value: "default" },
  { label: __("Separator", "yaycommerce-blocks-for-shadcn-ui"), value: "separator" },
  { label: __("Border", "yaycommerce-blocks-for-shadcn-ui"), value: "border" },
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const { content, variant, shimmer, url, linkTarget } = attributes;

  const blockProps = useBlockProps({
    className: `wp-block-shadcn-marker marker marker-${variant}${
      shimmer ? " marker-shimmer" : ""
    }`,
  });

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Marker Settings", "yaycommerce-blocks-for-shadcn-ui")}>
          <SelectControl
            label={__("Variant", "yaycommerce-blocks-for-shadcn-ui")}
            value={variant}
            options={VARIANT_OPTIONS}
            help={__(
              "Default is a muted text row, Separator centers the text between two lines, Border adds a bottom rule.",
              "yaycommerce-blocks-for-shadcn-ui"
            )}
            onChange={(value) => setAttributes({ variant: value })}
          />
          <ToggleControl
            label={__("Shimmer text", "yaycommerce-blocks-for-shadcn-ui")}
            checked={shimmer}
            help={__(
              "Animated streaming-text effect on the label.",
              "yaycommerce-blocks-for-shadcn-ui"
            )}
            onChange={(value) => setAttributes({ shimmer: value })}
          />
          <TextControl
            label={__("Link URL", "yaycommerce-blocks-for-shadcn-ui")}
            type="url"
            value={url}
            placeholder="https://"
            help={__(
              "Optional. When set, the whole marker becomes a link.",
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
      </InspectorControls>
      <div {...blockProps}>
        <RichText
          tagName="span"
          className="marker-content"
          value={content}
          allowedFormats={["core/bold", "core/italic", "core/link"]}
          placeholder={__("Marker text…", "yaycommerce-blocks-for-shadcn-ui")}
          onChange={(value) => setAttributes({ content: value })}
        />
      </div>
    </>
  );
}
