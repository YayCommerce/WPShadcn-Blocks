/**
 * WordPress dependencies
 */
import {
  InspectorControls,
  useBlockProps,
  store as blockEditorStore,
} from "@wordpress/block-editor";
import {
  DateTimePicker,
  PanelBody,
  Placeholder,
  SelectControl,
  TextControl,
  ToggleControl,
} from "@wordpress/components";
import { useSelect } from "@wordpress/data";
import { Fragment } from "@wordpress/element";
import { __ } from "@wordpress/i18n";

/**
 * How far ahead the inserter preview pretends the deadline is, in ms.
 */
const PREVIEW_LEAD_MS = 3 * 24 * 60 * 60 * 1000;

const LABELS = {
  days: __("Days", "shadcn-blocks"),
  hours: __("Hrs", "shadcn-blocks"),
  minutes: __("Min", "shadcn-blocks"),
  seconds: __("Sec", "shadcn-blocks"),
};

/**
 * Split a remaining span into units. Mirrors render.php and view.js so the
 * editor preview shows the same shape the frontend will.
 *
 * @param {number}  remaining   Seconds left.
 * @param {boolean} showDays    Whether a days unit is rendered.
 * @param {boolean} showSeconds Whether a seconds unit is rendered.
 * @return {Object} Unit key to value.
 */
function splitRemaining(remaining, showDays, showSeconds) {
  const parts = {};

  if (showDays) {
    parts.days = Math.floor(remaining / 86400);
    parts.hours = Math.floor((remaining % 86400) / 3600);
  } else {
    parts.hours = Math.floor(remaining / 3600);
  }

  parts.minutes = Math.floor((remaining % 3600) / 60);

  if (showSeconds) {
    parts.seconds = Math.floor(remaining % 60);
  }

  return parts;
}

/**
 * Edit component.
 *
 * The preview is a still frame, not a running clock: digits ticking in the
 * editor pull the eye away from whatever the author is actually writing, and
 * the count itself tells them nothing they cannot read off the date picker.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes }) {
  const {
    targetDate,
    showDays,
    showSeconds,
    showLabels,
    separator,
    pulseSeparator,
    onExpire,
    expiredMessage,
  } = attributes;

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-countdown",
  });

  // The inserter preview renders this same component with whatever the block's
  // `example` carries, and a date baked into block.json is wrong the day after
  // it ships — too far out and it reads as five-figure hours, past and the
  // block hides itself. So the example omits the date and the preview borrows a
  // relative one instead, computed fresh on every render.
  const isPreview = useSelect(
    (select) => !!select(blockEditorStore).getSettings().isPreviewMode,
    []
  );
  const targetMs = targetDate
    ? Date.parse(targetDate)
    : isPreview
      ? Date.now() + PREVIEW_LEAD_MS
      : NaN;
  const remaining = Number.isFinite(targetMs)
    ? Math.max(0, Math.floor((targetMs - Date.now()) / 1000))
    : 0;
  const parts = splitRemaining(remaining, showDays, showSeconds);

  const controls = (
    <InspectorControls>
      <PanelBody title={__("Countdown Settings", "shadcn-blocks")}>
        <DateTimePicker
          currentDate={targetDate || undefined}
          onChange={(value) => setAttributes({ targetDate: value || "" })}
          is12Hour={false}
          help={__(
            "Read in the site's timezone, so this is the local time visitors are counting down to.",
            "shadcn-blocks"
          )}
        />
        <ToggleControl
          label={__("Show days", "shadcn-blocks")}
          checked={showDays}
          help={__(
            "Off rolls the days into the hours, so two days reads as 48.",
            "shadcn-blocks"
          )}
          onChange={(value) => setAttributes({ showDays: value })}
        />
        <ToggleControl
          label={__("Show seconds", "shadcn-blocks")}
          checked={showSeconds}
          onChange={(value) => setAttributes({ showSeconds: value })}
        />
        <ToggleControl
          label={__("Show unit labels", "shadcn-blocks")}
          checked={showLabels}
          help={__("Print Days / Hrs / Min / Sec under each number.", "shadcn-blocks")}
          onChange={(value) => setAttributes({ showLabels: value })}
        />
        <TextControl
          __next40pxDefaultSize
          label={__("Separator", "shadcn-blocks")}
          value={separator}
          help={__("Leave empty for no separator.", "shadcn-blocks")}
          onChange={(value) => setAttributes({ separator: value.slice(0, 3) })}
        />
        <ToggleControl
          label={__("Blink the separator", "shadcn-blocks")}
          checked={pulseSeparator}
          help={__(
            "Ignored for visitors who have asked for reduced motion.",
            "shadcn-blocks"
          )}
          onChange={(value) => setAttributes({ pulseSeparator: value })}
        />
        <SelectControl
          __next40pxDefaultSize
          label={__("When the time runs out", "shadcn-blocks")}
          value={onExpire}
          options={[
            { label: __("Hide the countdown", "shadcn-blocks"), value: "hide" },
            { label: __("Show a message", "shadcn-blocks"), value: "message" },
            { label: __("Keep showing zeros", "shadcn-blocks"), value: "zeros" },
          ]}
          onChange={(value) => setAttributes({ onExpire: value })}
        />
        {onExpire === "message" && (
          <TextControl
            __next40pxDefaultSize
            label={__("Expired message", "shadcn-blocks")}
            value={expiredMessage}
            help={__(
              "Shown in place of the timer. With no message set, the countdown hides instead.",
              "shadcn-blocks"
            )}
            onChange={(value) => setAttributes({ expiredMessage: value })}
          />
        )}
      </PanelBody>
    </InspectorControls>
  );

  // Authors still get the "pick a date" prompt; only the inert preview skips it.
  if (!targetDate && !isPreview) {
    return (
      <>
        {controls}
        <div {...blockProps}>
          <Placeholder
            label={__("Countdown", "shadcn-blocks")}
            instructions={__(
              "Pick an end date and time in the block settings. Until then this block renders nothing on the site.",
              "shadcn-blocks"
            )}
          />
        </div>
      </>
    );
  }

  return (
    <>
      {controls}
      <div {...blockProps}>
        <span className="countdown-units">
          {Object.keys(parts).map((key, index) => (
            <Fragment key={key}>
              {index > 0 && separator !== "" && (
                <span
                  className={`countdown-separator${
                    pulseSeparator ? " is-pulsing" : ""
                  }`}
                >
                  {separator}
                </span>
              )}
              <span className="countdown-unit">
                <span className="countdown-value">
                  {String(parts[key]).padStart(2, "0")}
                </span>
                {showLabels && (
                  <span className="countdown-label">{LABELS[key]}</span>
                )}
              </span>
            </Fragment>
          ))}
        </span>
      </div>
    </>
  );
}
