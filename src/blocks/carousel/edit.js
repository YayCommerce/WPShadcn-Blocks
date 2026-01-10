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

const TEMPLATE = [
  [
    "wpshadcn/carousel-item",
    {},
    [
      ["core/heading", { content: "Carousel Item 1" }],
      [
        "core/paragraph",
        {
          content:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.",
        },
      ],
    ],
  ],
  [
    "wpshadcn/carousel-item",
    {},
    [
      ["core/heading", { content: "Carousel Item 2" }],
      [
        "core/paragraph",
        {
          content:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.",
        },
      ],
    ],
  ],
  [
    "wpshadcn/carousel-item",
    {},
    [
      ["core/heading", { content: "Carousel Item 3" }],
      [
        "core/paragraph",
        {
          content:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.",
        },
      ],
    ],
  ],
];

/**
 * Edit component.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes, clientId, name }) {
  const {
    autoplay,
    autoplayDelay,
    loop,
    showArrows,
    showDots,
    slidesPerView,
    slidesPerViewTablet,
    slidesPerViewDesktop,
    orientation,
  } = attributes;

  const blockProps = useBlockProps({
    className: "wp-block-wpshadcn-carousel",
  });

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Carousel Settings", "wpshadcn-blocks")}>
          <ToggleControl
            label={__("Autoplay", "wpshadcn-blocks")}
            checked={autoplay}
            onChange={(value) => setAttributes({ autoplay: value })}
          />
          {autoplay && (
            <RangeControl
              label={__("Autoplay Delay (ms)", "wpshadcn-blocks")}
              value={autoplayDelay}
              onChange={(value) => setAttributes({ autoplayDelay: value })}
              min={1000}
              max={10000}
              step={500}
            />
          )}
          <ToggleControl
            label={__("Loop", "wpshadcn-blocks")}
            checked={loop}
            onChange={(value) => setAttributes({ loop: value })}
          />
          <SelectControl
            label={__("Orientation", "wpshadcn-blocks")}
            value={orientation}
            options={[
              {
                label: __("Horizontal", "wpshadcn-blocks"),
                value: "horizontal",
              },
              { label: __("Vertical", "wpshadcn-blocks"), value: "vertical" },
            ]}
            onChange={(value) => setAttributes({ orientation: value })}
          />
        </PanelBody>
        <PanelBody title={__("Navigation", "wpshadcn-blocks")}>
          <ToggleControl
            label={__("Show Arrows", "wpshadcn-blocks")}
            checked={showArrows}
            onChange={(value) => setAttributes({ showArrows: value })}
          />
          <ToggleControl
            label={__("Show Dots", "wpshadcn-blocks")}
            checked={showDots}
            onChange={(value) => setAttributes({ showDots: value })}
          />
        </PanelBody>
        <PanelBody title={__("Responsive", "wpshadcn-blocks")}>
          <RangeControl
            label={__("Slides Per View (Mobile)", "wpshadcn-blocks")}
            value={slidesPerView}
            onChange={(value) => setAttributes({ slidesPerView: value })}
            min={1}
            max={6}
          />
          <RangeControl
            label={__("Slides Per View (Tablet)", "wpshadcn-blocks")}
            value={slidesPerViewTablet}
            onChange={(value) => setAttributes({ slidesPerViewTablet: value })}
            min={1}
            max={6}
          />
          <RangeControl
            label={__("Slides Per View (Desktop)", "wpshadcn-blocks")}
            value={slidesPerViewDesktop}
            onChange={(value) => setAttributes({ slidesPerViewDesktop: value })}
            min={1}
            max={6}
          />
        </PanelBody>
      </InspectorControls>
      <div {...blockProps}>
        <div className="wp-block-wpshadcn-carousel__content">
          <InnerBlocks template={TEMPLATE} templateLock={false} />
        </div>
      </div>
    </>
  );
}
