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
    "shadcn/carousel-item",
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
    "shadcn/carousel-item",
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
    "shadcn/carousel-item",
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
    effect,
  } = attributes;

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-carousel",
  });

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Carousel Settings", "shadcn-blocks")}>
          <ToggleControl
            label={__("Autoplay", "shadcn-blocks")}
            checked={autoplay}
            onChange={(value) => setAttributes({ autoplay: value })}
          />
          {autoplay && (
            <RangeControl
              label={__("Autoplay Delay (ms)", "shadcn-blocks")}
              value={autoplayDelay}
              onChange={(value) => setAttributes({ autoplayDelay: value })}
              min={1000}
              max={10000}
              step={500}
            />
          )}
          <ToggleControl
            label={__("Loop", "shadcn-blocks")}
            checked={loop}
            onChange={(value) => setAttributes({ loop: value })}
          />
          <SelectControl
            label={__("Orientation", "shadcn-blocks")}
            value={orientation}
            options={[
              {
                label: __("Horizontal", "shadcn-blocks"),
                value: "horizontal",
              },
              { label: __("Vertical", "shadcn-blocks"), value: "vertical" },
            ]}
            onChange={(value) => setAttributes({ orientation: value })}
          />
          <SelectControl
            label={__("Effect", "shadcn-blocks")}
            help={__(
              "Coverflow centres the active slide and scales back its neighbours. It also applies the Responsive slides-per-view settings, which plain carousels ignore.",
              "shadcn-blocks"
            )}
            value={effect || "none"}
            options={[
              { label: __("None", "shadcn-blocks"), value: "none" },
              { label: __("Coverflow", "shadcn-blocks"), value: "coverflow" },
            ]}
            onChange={(value) => setAttributes({ effect: value })}
          />
        </PanelBody>
        <PanelBody title={__("Navigation", "shadcn-blocks")}>
          <ToggleControl
            label={__("Show Arrows", "shadcn-blocks")}
            checked={showArrows}
            onChange={(value) => setAttributes({ showArrows: value })}
          />
          <ToggleControl
            label={__("Show Dots", "shadcn-blocks")}
            checked={showDots}
            onChange={(value) => setAttributes({ showDots: value })}
          />
        </PanelBody>
        <PanelBody title={__("Responsive", "shadcn-blocks")}>
          <RangeControl
            label={__("Slides Per View (Mobile)", "shadcn-blocks")}
            value={slidesPerView}
            onChange={(value) => setAttributes({ slidesPerView: value })}
            min={1}
            max={6}
          />
          <RangeControl
            label={__("Slides Per View (Tablet)", "shadcn-blocks")}
            value={slidesPerViewTablet}
            onChange={(value) => setAttributes({ slidesPerViewTablet: value })}
            min={1}
            max={6}
          />
          <RangeControl
            label={__("Slides Per View (Desktop)", "shadcn-blocks")}
            value={slidesPerViewDesktop}
            onChange={(value) => setAttributes({ slidesPerViewDesktop: value })}
            min={1}
            max={6}
          />
        </PanelBody>
      </InspectorControls>
      <div {...blockProps}>
        <div className="wp-block-shadcn-carousel__content">
          <InnerBlocks template={TEMPLATE} templateLock={false} />
        </div>
      </div>
    </>
  );
}
