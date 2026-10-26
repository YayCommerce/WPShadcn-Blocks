/**
 * WordPress dependencies
 */
import {
  InspectorControls,
  PlainText,
  useBlockProps,
} from "@wordpress/block-editor";
import {
  PanelBody,
  SelectControl,
  TextControl,
  ToggleControl,
} from "@wordpress/components";
import { __ } from "@wordpress/i18n";

const TD = "yaycommerce-blocks-for-shadcn-ui";

/**
 * Parse "2,4-6" into a Set of line numbers (same rules as render.php).
 */
const lineSet = (ranges) => {
  const set = new Set();
  String(ranges || "")
    .split(",")
    .forEach((part) => {
      const m = part.match(/^\s*(\d+)\s*(?:-\s*(\d+))?\s*$/);
      if (!m) return;
      const from = +m[1];
      const to = m[2] ? Math.min(+m[2], from + 9999) : from;
      for (let i = from; i <= to; i++) set.add(i);
    });
  return set;
};

const Svg = ({ children }) => (
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    strokeWidth="2"
    strokeLinecap="round"
    strokeLinejoin="round"
    aria-hidden="true"
  >
    {children}
  </svg>
);

/**
 * Edit component.
 *
 * The code is edited in a plain textarea; line numbers, highlights and the
 * copy button only show on the frontend render.
 *
 * @param {Object} props Block props.
 * @return {Element} Block edit element.
 */
export default function Edit({ attributes, setAttributes, isSelected }) {
  const {
    code,
    language,
    title,
    variant,
    size,
    wrap,
    lineNumbers,
    startLine,
    copy,
    wrapToggle,
    download,
    maxLines,
    showMore,
    highlightLines,
    addedLines,
    removedLines,
  } = attributes;

  // Outer element = editor wrapper (alignment, margin). The card itself is
  // the inner preview, so the code input can sit outside of it.
  const blockProps = useBlockProps({ className: "wp-block-shadcn-code-block-editor" });

  const previewProps = {
    className: [
      "wp-block-shadcn-code-block",
      variant === "destructive" && "is-destructive",
      size === "sm" && "is-sm",
      wrap && "is-wrap",
      lineNumbers && "has-line-numbers",
      title && "has-header",
    ]
      .filter(Boolean)
      .join(" "),
  };

  const lines = code.replace(/\r\n/g, "\n").replace(/\n+$/, "").split("\n");
  const highlighted = lineSet(highlightLines);
  const added = lineSet(addedLines);
  const removed = lineSet(removedLines);

  const actions = (wrapToggle || download || copy) && (
    <div className={`code-block-actions${title ? "" : " is-floating"}`}>
      {wrapToggle && (
        <button type="button" className="code-block-wrap" aria-pressed={!!wrap} tabIndex={-1}>
          <Svg>
            <path d="m16 16-3 3 3 3" />
            <path d="M3 12h14.5a1 1 0 0 1 0 7H13" />
            <path d="M3 19h6" />
            <path d="M3 5h18" />
          </Svg>
        </button>
      )}
      {download && (
        <button type="button" className="code-block-download" tabIndex={-1}>
          <Svg>
            <path d="M12 15V3" />
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
            <path d="m7 10 5 5 5-5" />
          </Svg>
        </button>
      )}
      {copy && (
        <button type="button" className="code-block-copy" tabIndex={-1}>
          <Svg>
            <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
            <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
          </Svg>
          <Svg>
            <path d="M20 6 9 17l-5-5" />
          </Svg>
        </button>
      )}
    </div>
  );

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Code Block", TD)}>
          <TextControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            label={__("Title", TD)}
            help={__("A filename or label shown above the code.", TD)}
            value={title}
            onChange={(value) => setAttributes({ title: value })}
          />
          <TextControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            label={__("Language", TD)}
            help={__("A label only, no syntax colors.", TD)}
            value={language}
            onChange={(value) => setAttributes({ language: value })}
          />
          <SelectControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            label={__("Variant", TD)}
            value={variant}
            options={[
              { label: __("Default", TD), value: "default" },
              { label: __("Destructive", TD), value: "destructive" },
            ]}
            onChange={(value) => setAttributes({ variant: value })}
          />
          <SelectControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            label={__("Size", TD)}
            value={size}
            options={[
              { label: __("Default", TD), value: "default" },
              { label: __("Small", TD), value: "sm" },
            ]}
            onChange={(value) => setAttributes({ size: value })}
          />
        </PanelBody>
        <PanelBody title={__("Display", TD)}>
          <ToggleControl
            __nextHasNoMarginBottom
            label={__("Line numbers", TD)}
            checked={!!lineNumbers}
            onChange={(value) => setAttributes({ lineNumbers: value })}
          />
          {lineNumbers && (
            <TextControl
              __next40pxDefaultSize
              __nextHasNoMarginBottom
              type="number"
              min={1}
              label={__("Number the first line as", TD)}
              help={__("For a snippet from the middle of a file, e.g. 42. It does not hide any lines.", TD)}
              value={startLine}
              onChange={(value) =>
                setAttributes({ startLine: Math.max(1, parseInt(value, 10) || 1) })
              }
            />
          )}
          <ToggleControl
            __nextHasNoMarginBottom
            label={__("Wrap long lines", TD)}
            help={__("Off: long lines scroll sideways.", TD)}
            checked={!!wrap}
            onChange={(value) => setAttributes({ wrap: value })}
          />
          <TextControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            type="number"
            min={0}
            label={__("Visible lines", TD)}
            help={__("0 = show all. Otherwise only this many lines show on the page; the editor always shows all.", TD)}
            value={maxLines}
            onChange={(value) =>
              setAttributes({ maxLines: Math.max(0, parseInt(value, 10) || 0) })
            }
          />
          {maxLines > 0 && (
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Show more button", TD)}
              help={
                showMore
                  ? __("The rest is hidden behind a Show more button.", TD)
                  : __("The rest scrolls inside the box.", TD)
              }
              checked={!!showMore}
              onChange={(value) => setAttributes({ showMore: value })}
            />
          )}
        </PanelBody>
        <PanelBody title={__("Buttons", TD)}>
          <ToggleControl
            __nextHasNoMarginBottom
            label={__("Copy", TD)}
            checked={!!copy}
            onChange={(value) => setAttributes({ copy: value })}
          />
          <ToggleControl
            __nextHasNoMarginBottom
            label={__("Download", TD)}
            help={__("The file name comes from the title.", TD)}
            checked={!!download}
            onChange={(value) => setAttributes({ download: value })}
          />
          <ToggleControl
            __nextHasNoMarginBottom
            label={__("Wrap toggle", TD)}
            help={__("Lets visitors switch line wrapping.", TD)}
            checked={!!wrapToggle}
            onChange={(value) => setAttributes({ wrapToggle: value })}
          />
        </PanelBody>
        <PanelBody title={__("Line markers", TD)} initialOpen={false}>
          <TextControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            label={__("Highlighted lines", TD)}
            help={__("e.g. 2,4-6", TD)}
            value={highlightLines}
            onChange={(value) => setAttributes({ highlightLines: value })}
          />
          <TextControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            label={__("Added lines", TD)}
            value={addedLines}
            onChange={(value) => setAttributes({ addedLines: value })}
          />
          <TextControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            label={__("Removed lines", TD)}
            value={removedLines}
            onChange={(value) => setAttributes({ removedLines: value })}
          />
        </PanelBody>
      </InspectorControls>

      <div {...blockProps}>
        <div {...previewProps}>
          {title ? (
            <div className="code-block-header">
              <div className="code-block-title">{title}</div>
              {actions}
            </div>
          ) : (
            actions
          )}
          {code.trim() !== "" && (
            <pre
              className="code-block-content"
              dir="ltr"
              style={{ counterReset: `line ${startLine - 1}` }}
            >
              <code>
                {lines.map((line, i) => {
                  const n = i + 1;
                  const v = added.has(n)
                    ? "added"
                    : removed.has(n)
                    ? "removed"
                    : highlighted.has(n)
                    ? "highlighted"
                    : undefined;
                  return (
                    <span className="line" data-variant={v} key={i}>
                      <span className="line-content">{line === "" ? "\n" : line}</span>
                    </span>
                  );
                })}
              </code>
            </pre>
          )}
        </div>
        {(isSelected || code.trim() === "") && (
          <div className="code-block-editor">
            <span className="code-block-editor-label">{__("Code", TD)}</span>
            <PlainText
              className="code-block-input"
              value={code}
              onChange={(value) => setAttributes({ code: value })}
              placeholder={__("Write code…", TD)}
              aria-label={__("Code", TD)}
            />
          </div>
        )}
      </div>
    </>
  );
}
