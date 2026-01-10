/**
 * WordPress dependencies
 */
import { __ } from "@wordpress/i18n";
import {
  useBlockProps,
  useInnerBlocksProps,
  InspectorControls,
  store as blockEditorStore,
} from "@wordpress/block-editor";
import { useSelect } from "@wordpress/data";
import {
  ToggleControl,
  __experimentalToolsPanel as ToolsPanel,
  __experimentalToolsPanelItem as ToolsPanelItem,
} from "@wordpress/components";
/**
 * External dependencies
 */
import clsx from "clsx";

const TEMPLATE = [
  ["wpshadcn/accordion-trigger"],
  ["wpshadcn/accordion-content"],
];

export default function Edit({
  attributes,
  clientId,
  setAttributes,
  isSelected: isSingleSelected,
}) {
  const { isOpen } = attributes;
  const { isSelected } = useSelect(
    (select) => {
      if (isSingleSelected || isOpen) {
        return { isSelected: true };
      }

      return {
        isSelected: select(blockEditorStore).hasSelectedInnerBlock(
          clientId,
          true
        ),
      };
    },
    [clientId, isSingleSelected, isOpen]
  );

  const blockProps = useBlockProps({
    className: clsx({
      "is-open": isOpen || isSelected,
    }),
  });

  const innerBlocksProps = useInnerBlocksProps(blockProps, {
    template: TEMPLATE,
    templateLock: "all",
    directInsert: true,
    templateInsertUpdatesSelection: true,
  });

  return (
    <>
      <InspectorControls key="setting">
        <ToolsPanel
          label={__("Settings")}
          resetAll={() => {
            setAttributes({ isOpen: false });
          }}
        >
          <ToolsPanelItem
            label={__("Open by default")}
            isShownByDefault
            hasValue={() => !!isOpen}
            onDeselect={() => {
              setAttributes({ isOpen: false });
            }}
          >
            <ToggleControl
              label={__("Open by default")}
              onChange={(value) => {
                setAttributes({
                  isOpen: value,
                });
              }}
              checked={isOpen}
              help={__("Accordion content will be displayed by default.")}
            />
          </ToolsPanelItem>
        </ToolsPanel>
      </InspectorControls>
      <div {...innerBlocksProps} />
    </>
  );
}
