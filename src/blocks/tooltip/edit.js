/**
 * WordPress dependencies
 */
import {
  useBlockProps,
  useInnerBlocksProps,
  InspectorControls,
} from "@wordpress/block-editor";
import {
  PanelBody,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
} from "@wordpress/components";
import { useState, useEffect, useRef } from "@wordpress/element";

import { __ } from "@wordpress/i18n";

/**
 * Tooltip block template.
 */
const TEMPLATE = [
  ["shadcn/tooltip-trigger", {}],
  ["shadcn/tooltip-content", {}],
];

/**
 * Allowed inner blocks.
 */
const ALLOWED_BLOCKS = ["shadcn/tooltip-trigger", "shadcn/tooltip-content"];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit(props) {
  const { attributes, setAttributes, clientId } = props;
  const { action } = attributes;
  const [isOpen, setIsOpen] = useState(false);
  const tooltipRef = useRef(null);
  const currentAction = action || "hover";

  const blockProps = useBlockProps({
    ref: tooltipRef,
    className: `wp-block-shadcn-tooltip ${isOpen ? "is-tooltip-open" : ""}`,
    "data-action": currentAction,
    "data-tooltip-open": isOpen ? "true" : "false",
  });

  // Apply isOpen state to tooltip-content element via DOM manipulation
  useEffect(() => {
    if (!tooltipRef.current) return;

    const tooltipContent = tooltipRef.current.querySelector(
      ".wp-block-shadcn-tooltip-content"
    );
    if (tooltipContent) {
      if (isOpen) {
        tooltipContent.classList.add("is-open");
        tooltipContent.setAttribute("data-open", "true");
      } else {
        tooltipContent.classList.remove("is-open");
        tooltipContent.setAttribute("data-open", "false");
      }
    }
  }, [isOpen]);

  // Attach event handlers to trigger element after render
  useEffect(() => {
    if (!tooltipRef.current) return;

    const trigger = tooltipRef.current.querySelector(
      ".wp-block-shadcn-tooltip-trigger"
    );
    if (!trigger) return;

    const handleTriggerClick = (e) => {
      if (currentAction === "click") {
        e.preventDefault();
        e.stopPropagation();
        setIsOpen((prev) => !prev);
      }
    };

    const handleMouseEnter = () => {
      if (currentAction === "hover") {
        setIsOpen(true);
      }
    };

    const handleMouseLeave = () => {
      if (currentAction === "hover") {
        setIsOpen(false);
      }
    };

    if (currentAction === "click") {
      trigger.addEventListener("click", handleTriggerClick);
    } else {
      trigger.addEventListener("mouseenter", handleMouseEnter);
      trigger.addEventListener("mouseleave", handleMouseLeave);
    }

    return () => {
      trigger.removeEventListener("click", handleTriggerClick);
      trigger.removeEventListener("mouseenter", handleMouseEnter);
      trigger.removeEventListener("mouseleave", handleMouseLeave);
    };
  }, [currentAction]);

  // Handle click outside for click action
  useEffect(() => {
    if (currentAction !== "click" || !isOpen) return;

    const handleClickOutside = (event) => {
      if (tooltipRef.current && !tooltipRef.current.contains(event.target)) {
        setIsOpen(false);
      }
    };

    const handleEscape = (event) => {
      if (event.key === "Escape") {
        setIsOpen(false);
      }
    };

    // Use setTimeout to ensure this runs after the click event that opened it
    const timeoutId = setTimeout(() => {
      document.addEventListener("mousedown", handleClickOutside);
      document.addEventListener("keydown", handleEscape);
    }, 0);

    return () => {
      clearTimeout(timeoutId);
      document.removeEventListener("mousedown", handleClickOutside);
      document.removeEventListener("keydown", handleEscape);
    };
  }, [isOpen, currentAction]);

  const innerBlocksProps = useInnerBlocksProps(blockProps, {
    template: TEMPLATE,
    allowedBlocks: ALLOWED_BLOCKS,
    templateLock: false,
  });

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Tooltip Settings", "shadcn-blocks")}>
          <ToggleGroupControl
            __next40pxDefaultSize
            isBlock
            label={__("Action", "shadcn-blocks")}
            value={action ?? "hover"}
            onChange={(value) => {
              setAttributes({ action: value });
              setIsOpen(false); // Reset state when changing action
            }}
          >
            <ToggleGroupControlOption
              label={__("Hover", "shadcn-blocks")}
              value="hover"
            />
            <ToggleGroupControlOption
              label={__("Click", "shadcn-blocks")}
              value="click"
            />
          </ToggleGroupControl>
        </PanelBody>
      </InspectorControls>
      <div {...innerBlocksProps} />
    </>
  );
}
