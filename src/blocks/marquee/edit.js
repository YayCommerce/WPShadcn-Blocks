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

const PLACEHOLDER_IMAGE = window.shadcnBlocksEditor?.placeholderImage ?? "";

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
                ? __("Pause preview", "yaycommerce-blocks-for-shadcn-ui")
                : __("Play preview", "yaycommerce-blocks-for-shadcn-ui")
            }
            isPressed={isPlaying}
            onClick={() => setIsPlaying(!isPlaying)}
          />
        </ToolbarGroup>
      </BlockControls>
      <InspectorControls>
        <PanelBody title={__("Marquee Settings", "yaycommerce-blocks-for-shadcn-ui")}>
          <RangeControl
            label={__("Speed (seconds per loop)", "yaycommerce-blocks-for-shadcn-ui")}
            value={speed}
            onChange={(value) => setAttributes({ speed: value })}
            min={5}
            max={120}
          />
          <SelectControl
            label={__("Direction", "yaycommerce-blocks-for-shadcn-ui")}
            value={direction}
            options={[
              { label: __("Left", "yaycommerce-blocks-for-shadcn-ui"), value: "left" },
              { label: __("Right", "yaycommerce-blocks-for-shadcn-ui"), value: "right" },
            ]}
            onChange={(value) => setAttributes({ direction: value })}
          />
          <ToggleControl
            label={__("Pause on Hover", "yaycommerce-blocks-for-shadcn-ui")}
            checked={pauseOnHover}
            onChange={(value) => setAttributes({ pauseOnHover: value })}
          />
          <ToggleControl
            label={__("Fade Edges", "yaycommerce-blocks-for-shadcn-ui")}
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
