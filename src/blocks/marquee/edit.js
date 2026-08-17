/**
 * WordPress dependencies
 */
import {
  BlockControls,
  InnerBlocks,
  InspectorControls,
  useBlockProps,
} from "@wordpress/block-editor";
import {
  PanelBody,
  RangeControl,
  SelectControl,
  ToggleControl,
  ToolbarButton,
  ToolbarGroup,
} from "@wordpress/components";
import { useState } from "@wordpress/element";
import { __ } from "@wordpress/i18n";

/**
 * Preview transport icons, inline to match the rest of the block set.
 */
const PlayIcon = (
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="currentColor"
    aria-hidden="true"
  >
    <path d="M8 5v14l11-7z"></path>
  </svg>
);

const PauseIcon = (
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="currentColor"
    aria-hidden="true"
  >
    <path d="M6 5h4v14H6zM14 5h4v14h-4z"></path>
  </svg>
);

const PLACEHOLDER_IMAGE = "https://ui.shadcn.com/placeholder.svg";

const TEMPLATE = Array.from({ length: 6 }, (_, index) => [
  "shadcn/marquee-item",
  {},
  [
    [
      "core/image",
      {
        url: PLACEHOLDER_IMAGE,
        alt: `Partner logo placeholder ${index + 1}`,
        sizeSlug: "thumbnail",
      },
    ],
  ],
]);

/**
 * Edit component.
 *
 * @param {Object}   props               Block props.
 * @param {Object}   props.attributes    Block attributes.
 * @param {Function} props.setAttributes Attribute setter.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const { speed, direction, pauseOnHover, showFade } = attributes;

  // Preview state is editor-only and deliberately not an attribute: it must
  // never be written into post content. Starts playing so the block reads as
  // a marquee on insert rather than a flat row of items.
  const [isPlaying, setIsPlaying] = useState(true);

  const blockProps = useBlockProps({
    className: isPlaying
      ? "wp-block-shadcn-marquee is-preview-playing"
      : "wp-block-shadcn-marquee",
    style: {
      "--marquee-editor-duration": `${speed || 30}s`,
    },
  });

  return (
    <>
      <BlockControls>
        <ToolbarGroup>
          <ToolbarButton
            icon={isPlaying ? PauseIcon : PlayIcon}
            label={
              isPlaying
                ? __("Pause preview", "shadcn-blocks")
                : __("Play preview", "shadcn-blocks")
            }
            isPressed={isPlaying}
            onClick={() => setIsPlaying(!isPlaying)}
          />
        </ToolbarGroup>
      </BlockControls>
      <InspectorControls>
        <PanelBody title={__("Marquee Settings", "shadcn-blocks")}>
          <RangeControl
            label={__("Speed (seconds per loop)", "shadcn-blocks")}
            value={speed}
            onChange={(value) => setAttributes({ speed: value })}
            min={5}
            max={120}
          />
          <SelectControl
            label={__("Direction", "shadcn-blocks")}
            value={direction}
            options={[
              { label: __("Left", "shadcn-blocks"), value: "left" },
              { label: __("Right", "shadcn-blocks"), value: "right" },
            ]}
            onChange={(value) => setAttributes({ direction: value })}
          />
          <ToggleControl
            label={__("Pause on Hover", "shadcn-blocks")}
            checked={pauseOnHover}
            onChange={(value) => setAttributes({ pauseOnHover: value })}
          />
          <ToggleControl
            label={__("Fade Edges", "shadcn-blocks")}
            checked={showFade}
            onChange={(value) => setAttributes({ showFade: value })}
          />
        </PanelBody>
      </InspectorControls>
      <div {...blockProps}>
        <div
          className="wp-block-shadcn-marquee__editor-row"
          data-direction={direction}
        >
          <InnerBlocks template={TEMPLATE} templateLock={false} />
        </div>
      </div>
    </>
  );
}
