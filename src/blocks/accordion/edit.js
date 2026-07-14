/**
 * WordPress dependencies
 */
import {
  useBlockProps,
  useInnerBlocksProps,
  InspectorControls,
} from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";
import {
  ToggleControl,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
  __experimentalToolsPanel as ToolsPanel,
  __experimentalToolsPanelItem as ToolsPanelItem,
} from "@wordpress/components";

/**
 * Default template: start with two items.
 */
const TEMPLATE = [
  ["shadcn/accordion-item", {}],
  ["shadcn/accordion-item", {}],
];

const ALLOWED_BLOCKS = ["shadcn/accordion-item"];

const HEADING_LEVELS = [2, 3, 4, 5, 6];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const { headingLevel, allowMultiple, outlined } = attributes;

  const blockProps = useBlockProps({
    className: outlined
      ? "wp-block-shadcn-accordion is-outlined"
      : "wp-block-shadcn-accordion",
  });

  const innerBlocksProps = useInnerBlocksProps(blockProps, {
    allowedBlocks: ALLOWED_BLOCKS,
    template: TEMPLATE,
    templateLock: false,
    orientation: "vertical",
  });

  return (
    <>
      <InspectorControls>
        <ToolsPanel
          label={__("Settings", "shadcn-blocks")}
          resetAll={() => setAttributes({ headingLevel: 3 })}
        >
          <ToolsPanelItem
            label={__("Heading level", "shadcn-blocks")}
            isShownByDefault
            hasValue={() => headingLevel !== 3}
            onDeselect={() => setAttributes({ headingLevel: 3 })}
          >
            <ToggleGroupControl
              __next40pxDefaultSize
              __nextHasNoMarginBottom
              isBlock
              label={__("Heading level", "shadcn-blocks")}
              help={__(
                "HTML heading level used for each item trigger.",
                "shadcn-blocks"
              )}
              value={headingLevel ?? 3}
              onChange={(value) =>
                setAttributes({ headingLevel: Number(value) })
              }
            >
              {HEADING_LEVELS.map((level) => (
                <ToggleGroupControlOption
                  key={level}
                  label={`H${level}`}
                  value={level}
                />
              ))}
            </ToggleGroupControl>
          </ToolsPanelItem>

          <ToolsPanelItem
            label={__("Allow multiple open", "shadcn-blocks")}
            isShownByDefault
            hasValue={() => !!allowMultiple}
            onDeselect={() => setAttributes({ allowMultiple: false })}
          >
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Allow multiple open", "shadcn-blocks")}
              help={__(
                "When enabled, more than one item can be open at a time.",
                "shadcn-blocks"
              )}
              checked={!!allowMultiple}
              onChange={(value) => setAttributes({ allowMultiple: value })}
            />
          </ToolsPanelItem>

          <ToolsPanelItem
            label={__("Outlined", "shadcn-blocks")}
            isShownByDefault
            hasValue={() => !!outlined}
            onDeselect={() => setAttributes({ outlined: false })}
          >
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Outlined", "shadcn-blocks")}
              help={__(
                "Wrap the accordion in a bordered, rounded container.",
                "shadcn-blocks"
              )}
              checked={!!outlined}
              onChange={(value) => setAttributes({ outlined: value })}
            />
          </ToolsPanelItem>
        </ToolsPanel>
      </InspectorControls>
      <div {...innerBlocksProps} />
    </>
  );
}
