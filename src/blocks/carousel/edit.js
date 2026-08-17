/**
 * WordPress dependencies
 */
import {
  BlockControls,
  InnerBlocks,
  InspectorControls,
  useBlockProps,
  store as blockEditorStore,
} from "@wordpress/block-editor";
import {
  PanelBody,
  RangeControl,
  SelectControl,
  ToggleControl,
  ToolbarButton,
  ToolbarGroup,
} from "@wordpress/components";
import { useSelect } from "@wordpress/data";
import { useEffect, useState } from "@wordpress/element";
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
    gap,
  } = attributes;

  // Preview state is editor-only and deliberately not an attribute: it must
  // never be written into post content. Starts playing so an inserted carousel
  // reads as a slider instead of a tall stack of every slide.
  const [isPlaying, setIsPlaying] = useState(true);
  const [previewIndex, setPreviewIndex] = useState(0);

  const slideCount = useSelect(
    (select) => select(blockEditorStore).getBlockCount(clientId),
    [clientId]
  );

  const visibleSlides = Math.max(
    1,
    "coverflow" === effect ? slidesPerViewDesktop || 3 : slidesPerViewDesktop || 1
  );
  // Last position that still fills the viewport, so the preview never scrolls
  // past the final slide into blank space.
  const lastIndex = Math.max(0, slideCount - visibleSlides);

  useEffect(() => {
    if (!isPlaying || lastIndex < 1) {
      return undefined;
    }

    const timer = setInterval(() => {
      setPreviewIndex((current) =>
        current >= lastIndex ? 0 : current + 1
      );
    }, Math.max(1000, autoplayDelay || 3000));

    return () => clearInterval(timer);
  }, [isPlaying, lastIndex, autoplayDelay]);

  // Removing slides can leave the preview parked past the end.
  useEffect(() => {
    setPreviewIndex((current) => Math.min(current, lastIndex));
  }, [lastIndex]);

  const blockProps = useBlockProps({
    className: isPlaying
      ? "wp-block-shadcn-carousel is-preview-playing"
      : "wp-block-shadcn-carousel",
    style: {
      "--carousel-editor-slides": visibleSlides,
      "--carousel-editor-gap": gap || "1rem",
      "--carousel-editor-index": previewIndex,
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
