/**
 * WordPress dependencies
 */
import {
  useBlockProps,
  useInnerBlocksProps,
  InspectorControls,
  BlockControls,
  useBlockEditingMode,
  store as blockEditorStore,
} from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";
import {
  ToggleControl,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
  __experimentalToolsPanel as ToolsPanel,
  __experimentalToolsPanelItem as ToolsPanelItem,
  ToolbarButton,
} from "@wordpress/components";
import { useDispatch } from "@wordpress/data";
import { createBlock } from "@wordpress/blocks";

const ACCORDION_BLOCK_NAME = "wpshadcn/accordion-item";
const ACCORDION_TRIGGER_BLOCK_NAME = "wpshadcn/accordion-trigger";
const ACCORDION_CONTENT_BLOCK_NAME = "wpshadcn/accordion-content";
const ACCORDION_BLOCK = {
  name: ACCORDION_BLOCK_NAME,
};

// Default template matching shadcn preview
const DEFAULT_TEMPLATE = [
  [
    ACCORDION_BLOCK_NAME,
    {
      isOpen: true, // First item open by default
    },
    [
      [
        ACCORDION_TRIGGER_BLOCK_NAME,
        {
          title: "Product Information",
        },
      ],
      [
        ACCORDION_CONTENT_BLOCK_NAME,
        {},
        [
          [
            "core/paragraph",
            {
              content:
                "Our flagship product combines cutting-edge technology with sleek design. Built with premium materials, it offers unparalleled performance and reliability.",
            },
          ],
          [
            "core/paragraph",
            {
              content:
                "Key features include advanced processing capabilities, and an intuitive user interface designed for both beginners and experts.",
            },
          ],
        ],
      ],
    ],
  ],
  [
    ACCORDION_BLOCK_NAME,
    {},
    [
      [
        ACCORDION_TRIGGER_BLOCK_NAME,
        {
          title: "Shipping Details",
        },
      ],
      [
        ACCORDION_CONTENT_BLOCK_NAME,
        {},
        [
          [
            "core/paragraph",
            {
              content:
                "We offer worldwide shipping through trusted courier partners. Standard delivery takes 3-5 business days, while express shipping ensures delivery within 1-2 business days.",
            },
          ],
          [
            "core/paragraph",
            {
              content:
                "All orders are carefully packaged and fully insured. Track your shipment in real-time through our dedicated tracking portal.",
            },
          ],
        ],
      ],
    ],
  ],
];

export default function Edit({
  attributes: { autoclose, iconPosition, showIcon },
  clientId,
  setAttributes,
  isSelected: isSingleSelected,
}) {
  const blockProps = useBlockProps({
    role: "group",
  });
  const { insertBlock } = useDispatch(blockEditorStore);
  const blockEditingMode = useBlockEditingMode();
  const isContentOnlyMode = blockEditingMode === "contentOnly";

  const innerBlocksProps = useInnerBlocksProps(blockProps, {
    template: DEFAULT_TEMPLATE,
    defaultBlock: ACCORDION_BLOCK,
    directInsert: true,
    templateInsertUpdatesSelection: true,
  });

  const addAccordionItemBlock = () => {
    const newAccordionItem = createBlock(ACCORDION_BLOCK_NAME, {}, [
      createBlock(ACCORDION_TRIGGER_BLOCK_NAME, {}),
      createBlock("wpshadcn/accordion-content", {}),
    ]);
    insertBlock(newAccordionItem, undefined, clientId);
  };

  return (
    <>
      {isSingleSelected && !isContentOnlyMode && (
        <BlockControls group="other">
          <ToolbarButton onClick={addAccordionItemBlock}>
            {__("Add item")}
          </ToolbarButton>
        </BlockControls>
      )}
      <InspectorControls key="setting">
        <ToolsPanel
          label={__("Settings")}
          resetAll={() => {
            setAttributes({
              autoclose: false,
              showIcon: true,
              iconPosition: "right",
            });
          }}
        >
          <ToolsPanelItem
            label={__("Auto-close")}
            isShownByDefault
            hasValue={() => !!autoclose}
            onDeselect={() => setAttributes({ autoclose: false })}
          >
            <ToggleControl
              isBlock
              label={__("Auto-close")}
              onChange={(value) => {
                setAttributes({
                  autoclose: value,
                });
              }}
              checked={autoclose}
              help={__(
                "Automatically close accordions when a new one is opened."
              )}
            />
          </ToolsPanelItem>
          <ToolsPanelItem
            label={__("Show icon")}
            isShownByDefault
            hasValue={() => !showIcon}
            onDeselect={() => setAttributes({ showIcon: true })}
          >
            <ToggleControl
              isBlock
              label={__("Show icon")}
              onChange={(value) => {
                setAttributes({
                  showIcon: value,
                  iconPosition: value ? iconPosition : "right",
                });
              }}
              checked={showIcon}
              help={__("Display a plus icon next to the accordion header.")}
            />
          </ToolsPanelItem>
          {showIcon && (
            <ToolsPanelItem
              label={__("Icon Position")}
              isShownByDefault
              hasValue={() => iconPosition !== "right"}
              onDeselect={() => setAttributes({ iconPosition: "right" })}
            >
              <ToggleGroupControl
                __next40pxDefaultSize
                isBlock
                label={__("Icon Position")}
                value={iconPosition}
                onChange={(value) => {
                  setAttributes({ iconPosition: value });
                }}
              >
                <ToggleGroupControlOption label={__("Left")} value="left" />
                <ToggleGroupControlOption label={__("Right")} value="right" />
              </ToggleGroupControl>
            </ToolsPanelItem>
          )}
        </ToolsPanel>
      </InspectorControls>
      <div {...innerBlocksProps} />
    </>
  );
}
