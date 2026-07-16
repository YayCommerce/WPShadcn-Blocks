/**
 * WordPress dependencies
 */
import {
  InnerBlocks,
  InspectorControls,
  useBlockProps,
} from "@wordpress/block-editor";
import {
  PanelBody,
  RangeControl,
  SelectControl,
  ToggleControl,
} from "@wordpress/components";
import { __ } from "@wordpress/i18n";

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

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-marquee",
  });

  return (
    <>
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
        <div className="wp-block-shadcn-marquee__editor-row">
          <InnerBlocks template={TEMPLATE} templateLock={false} />
        </div>
      </div>
    </>
  );
}
