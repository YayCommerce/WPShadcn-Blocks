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
  { label: __("Default", "shadcn-blocks"), value: "default" },
  { label: __("Secondary", "shadcn-blocks"), value: "secondary" },
  { label: __("Destructive", "shadcn-blocks"), value: "destructive" },
  { label: __("Outline", "shadcn-blocks"), value: "outline" },
  { label: __("Ghost", "shadcn-blocks"), value: "ghost" },
  { label: __("Link", "shadcn-blocks"), value: "link" },
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const { text, variant, url, linkTarget } = attributes;

  // Keep the badge a span in the editor even when linked (avoids nested-anchor
  // issues); the <a> only materializes on the frontend render.
  const blockProps = useBlockProps({
    className: `wp-block-shadcn-badge badge badge-${variant}`,
  });

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Badge Settings", "shadcn-blocks")}>
          <SelectControl
            label={__("Variant", "shadcn-blocks")}
            value={variant}
            options={VARIANT_OPTIONS}
            onChange={(value) => setAttributes({ variant: value })}
          />
          <TextControl
            label={__("Link URL", "shadcn-blocks")}
            type="url"
            value={url}
            placeholder="https://"
            help={__(
              "Optional. When set, the badge renders as a link.",
              "shadcn-blocks"
            )}
            onChange={(value) =>
              setAttributes(
                value ? { url: value } : { url: "", linkTarget: "", rel: "" }
              )
            }
          />
          <ToggleControl
            label={__("Open in new tab", "shadcn-blocks")}
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
      <RichText
        {...blockProps}
        tagName="span"
        value={text}
        allowedFormats={["core/bold", "core/italic"]}
        placeholder={__("Badge", "shadcn-blocks")}
        onChange={(value) => setAttributes({ text: value })}
      />
    </>
  );
}
