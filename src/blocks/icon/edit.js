import { useBlockProps } from "@wordpress/block-editor";
import { lucideSVG } from "./utils";
import { InspectorControls } from "@wordpress/block-editor";
import { PanelBody } from "@wordpress/components";
import { TextControl, RangeControl, ColorPicker } from "@wordpress/components";
import { useState, useEffect } from "@wordpress/element";

export default function Edit({ attributes, setAttributes }) {
  const { icon, size, color } = attributes;
  const [svgContent, setSvgContent] = useState("");

  const blockProps = useBlockProps({
    className: "wp-block-wpshadcn-icon",
  });

  useEffect(() => {
    const loadSVG = async () => {
      const svg = await lucideSVG(icon, size, color);
      setSvgContent(svg);
    };
    loadSVG();
  }, [icon, size, color]);

  return (
    <>
      <InspectorControls>
        <PanelBody title="Icon Settings">
          <TextControl
            label="Icon name"
            help={
              <>
                Example: heart, camera, star. Visit{" "}
                <a
                  href="https://lucide.dev/icons/"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  https://lucide.dev/icons/
                </a>{" "}
                to see the list of available icons.
              </>
            }
            placeholder="Enter icon name"
            value={icon}
            onChange={(val) => setAttributes({ icon: val })}
          />

          <RangeControl
            label="Size"
            min={16}
            max={200}
            value={typeof size === "string" ? parseInt(size) : size || 24}
            onChange={(val) => setAttributes({ size: `${val}px` })}
          />

          <p>Color</p>
          <ColorPicker
            color={color}
            onChangeComplete={(val) => setAttributes({ color: val.hex })}
          />
        </PanelBody>
      </InspectorControls>
      <div {...blockProps}>
        {icon !== "" ? (
          <div
            dangerouslySetInnerHTML={{
              __html: svgContent,
            }}
          />
        ) : (
          <p className="text-sm text-gray-500">
            Enter an icon name to see it in action.
          </p>
        )}
      </div>
    </>
  );
}
