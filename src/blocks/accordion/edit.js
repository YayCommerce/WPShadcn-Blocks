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
  RangeControl,
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
  const {
    headingLevel,
    allowMultiple,
    outlined,
    openFirst,
    autoplay,
    autoplayDelay,
  } = attributes;

  // Opening one item on load and rotating between items both assume a single
  // open item, so neither is offered once multiple items may be open.
  const singleOpen = !allowMultiple;

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
          label={__("Settings", "yaycommerce-blocks-for-shadcn-ui")}
          resetAll={() => setAttributes({ headingLevel: 3 })}
        >
          <ToolsPanelItem
            label={__("Heading level", "yaycommerce-blocks-for-shadcn-ui")}
            isShownByDefault
            hasValue={() => headingLevel !== 3}
            onDeselect={() => setAttributes({ headingLevel: 3 })}
          >
            <ToggleGroupControl
              __next40pxDefaultSize
              __nextHasNoMarginBottom
              isBlock
              label={__("Heading level", "yaycommerce-blocks-for-shadcn-ui")}
              help={__(
                "HTML heading level used for each item trigger.",
                "yaycommerce-blocks-for-shadcn-ui"
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
            label={__("Allow multiple open", "yaycommerce-blocks-for-shadcn-ui")}
            isShownByDefault
            hasValue={() => !!allowMultiple}
            onDeselect={() => setAttributes({ allowMultiple: false })}
          >
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Allow multiple open", "yaycommerce-blocks-for-shadcn-ui")}
              help={__(
                "When enabled, more than one item can be open at a time.",
                "yaycommerce-blocks-for-shadcn-ui"
              )}
              checked={!!allowMultiple}
              onChange={(value) => setAttributes({ allowMultiple: value })}
            />
          </ToolsPanelItem>

          <ToolsPanelItem
            label={__("Outlined", "yaycommerce-blocks-for-shadcn-ui")}
            isShownByDefault
            hasValue={() => !!outlined}
            onDeselect={() => setAttributes({ outlined: false })}
          >
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Outlined", "yaycommerce-blocks-for-shadcn-ui")}
              help={__(
                "Wrap the accordion in a bordered, rounded container.",
                "yaycommerce-blocks-for-shadcn-ui"
              )}
              checked={!!outlined}
              onChange={(value) => setAttributes({ outlined: value })}
            />
          </ToolsPanelItem>

          {singleOpen && (
            <ToolsPanelItem
              label={__("Open first item", "yaycommerce-blocks-for-shadcn-ui")}
              isShownByDefault
              hasValue={() => !!openFirst}
              onDeselect={() => setAttributes({ openFirst: false })}
            >
              <ToggleControl
                __nextHasNoMarginBottom
                label={__("Open first item", "yaycommerce-blocks-for-shadcn-ui")}
                help={__(
                  "Show the first item already open when the page loads.",
                  "yaycommerce-blocks-for-shadcn-ui"
                )}
                checked={!!openFirst || !!autoplay}
                disabled={!!autoplay}
                onChange={(value) => setAttributes({ openFirst: value })}
              />
            </ToolsPanelItem>
          )}

          {singleOpen && (
            <ToolsPanelItem
              label={__("Auto rotate", "yaycommerce-blocks-for-shadcn-ui")}
              isShownByDefault
              hasValue={() => !!autoplay}
              onDeselect={() =>
                setAttributes({ autoplay: false, autoplayDelay: 5000 })
              }
            >
              <ToggleControl
                __nextHasNoMarginBottom
                label={__("Auto rotate", "yaycommerce-blocks-for-shadcn-ui")}
                help={__(
                  "Open each item in turn, with a progress bar counting down to the next one. Always starts on the first item.",
                  "yaycommerce-blocks-for-shadcn-ui"
                )}
                checked={!!autoplay}
                onChange={(value) => setAttributes({ autoplay: value })}
              />
            </ToolsPanelItem>
          )}

          {singleOpen && autoplay && (
            <ToolsPanelItem
              label={__("Time per item", "yaycommerce-blocks-for-shadcn-ui")}
              isShownByDefault
              hasValue={() => autoplayDelay !== 5000}
              onDeselect={() => setAttributes({ autoplayDelay: 5000 })}
            >
              <RangeControl
                __next40pxDefaultSize
                __nextHasNoMarginBottom
                label={__("Time per item (seconds)", "yaycommerce-blocks-for-shadcn-ui")}
                value={(autoplayDelay ?? 5000) / 1000}
                min={1}
                max={30}
                step={1}
                onChange={(value) =>
                  setAttributes({ autoplayDelay: (value ?? 5) * 1000 })
                }
              />
            </ToolsPanelItem>
          )}
        </ToolsPanel>
      </InspectorControls>
      <div {...innerBlocksProps} />
    </>
  );
}
