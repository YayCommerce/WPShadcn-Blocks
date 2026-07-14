/**
 * WordPress dependencies
 */
import {
  useBlockProps,
  useInnerBlocksProps,
  RichText,
  InspectorControls,
} from "@wordpress/block-editor";
import {
  ToggleControl,
  __experimentalToolsPanel as ToolsPanel,
  __experimentalToolsPanelItem as ToolsPanelItem,
} from "@wordpress/components";
import { __ } from "@wordpress/i18n";

/**
 * Default panel content.
 */
const TEMPLATE = [
  ["core/paragraph", { placeholder: __("Add content…", "shadcn-blocks") }],
];

/**
 * Chevron indicator (static in the editor).
 *
 * @return {Element} SVG element.
 */
function Chevron() {
  return (
    <svg
      className="wp-block-shadcn-accordion-item__chevron"
      xmlns="http://www.w3.org/2000/svg"
      width="16"
      height="16"
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
      aria-hidden="true"
    >
      <path d="m6 9 6 6 6-6"></path>
    </svg>
  );
}

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes, context }) {
  const { title, disabled } = attributes;
  const headingLevel = context["shadcn/headingLevel"] || 3;
  const TagName = `h${headingLevel}`;

  const blockProps = useBlockProps({
    className: disabled
      ? "wp-block-shadcn-accordion-item is-disabled"
      : "wp-block-shadcn-accordion-item",
  });

  const panelProps = useInnerBlocksProps(
    { className: "wp-block-shadcn-accordion-item__panel" },
    {
      template: TEMPLATE,
      templateLock: false,
    }
  );

  return (
    <>
      <InspectorControls>
        <ToolsPanel
          label={__("Settings", "shadcn-blocks")}
          resetAll={() => setAttributes({ disabled: false })}
        >
          <ToolsPanelItem
            label={__("Disabled", "shadcn-blocks")}
            isShownByDefault
            hasValue={() => !!disabled}
            onDeselect={() => setAttributes({ disabled: false })}
          >
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Disabled", "shadcn-blocks")}
              help={__(
                "Prevent this item from being opened or closed.",
                "shadcn-blocks"
              )}
              checked={!!disabled}
              onChange={(value) => setAttributes({ disabled: value })}
            />
          </ToolsPanelItem>
        </ToolsPanel>
      </InspectorControls>
      <div {...blockProps}>
        <TagName className="wp-block-shadcn-accordion-item__heading">
          <span className="wp-block-shadcn-accordion-item__trigger">
            <RichText
              tagName="span"
              className="wp-block-shadcn-accordion-item__title"
              value={title || ""}
              onChange={(value) => setAttributes({ title: value })}
              placeholder={__("Accordion title", "shadcn-blocks")}
              allowedFormats={[]}
            />
            <Chevron />
          </span>
        </TagName>
        <div {...panelProps} />
      </div>
    </>
  );
}
