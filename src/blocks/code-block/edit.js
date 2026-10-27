/**
 * WordPress dependencies
 */
import { InspectorControls, useBlockProps } from "@wordpress/block-editor";
import {
  PanelBody,
  SelectControl,
  TextControl,
  ToggleControl,
} from "@wordpress/components";
import { useLayoutEffect, useMemo, useRef } from "@wordpress/element";
import { __ } from "@wordpress/i18n";

/**
 * Internal dependencies
 */
import { LANGUAGES, tokenize } from "./highlight";

const TD = "yaycommerce-blocks-for-shadcn-ui";

// Options from highlight.js, so the list has one source.
const LANGUAGE_OPTIONS = [
  { label: __("Plain text", TD), value: "" },
  ...Object.keys(LANGUAGES).map((value) => ({ label: value, value })),
];

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
export default function Edit({ attributes, setAttributes }) {
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

  const blockProps = useBlockProps({
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
  });

  // One token array per line, same output as view.js on the page. The
  // trailing newline is kept here so a new last line shows while typing.
  const lines = useMemo(
    () => tokenize(code.replace(/\r\n/g, "\n"), language),
    [code, language]
  );

  // The code is typed in a transparent textarea laid exactly over the colored
  // lines (only its caret and selection show). It is placed over the text
  // column, so it skips the line-number gutter, and sized to the code so the
  // pre scrolls both together.
  const codeRef = useRef();
  const inputRef = useRef();
  useLayoutEffect(() => {
    const code = codeRef.current;
    const pre = code.parentElement;
    const place = () => {
      const first = code.querySelector(".line-content");
      const box = pre.getBoundingClientRect();
      const text = first.getBoundingClientRect();
      Object.assign(inputRef.current.style, {
        left: `${text.left - box.left + pre.scrollLeft}px`,
        top: `${code.getBoundingClientRect().top - box.top + pre.scrollTop}px`,
        width: `${text.width}px`,
        height: `${code.offsetHeight}px`,
      });
    };
    place();
    // Re-place when the canvas or sidebar changes the width (lines re-wrap).
    const observer = new ResizeObserver(place);
    observer.observe(pre);
    observer.observe(code);
    return () => observer.disconnect();
  }, [lines, wrap, lineNumbers, startLine, size]);
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
          <SelectControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            label={__("Language", TD)}
            help={__("Adds syntax colors.", TD)}
            value={language}
            options={LANGUAGE_OPTIONS}
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
            help={__("Line numbers as shown in the gutter, e.g. 2,4-6", TD)}
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
        {title ? (
          <div className="code-block-header">
            <div className="code-block-title">{title}</div>
            {actions}
          </div>
        ) : (
          actions
        )}
        <pre
          className="code-block-content"
          dir="ltr"
          style={{ counterReset: `line ${startLine - 1}` }}
        >
          <code ref={codeRef}>
            {lines.map((line, i) => {
              // Line markers use the numbers shown in the gutter.
              const n = (lineNumbers ? startLine : 1) + i;
              const v = added.has(n)
                ? "added"
                : removed.has(n)
                ? "removed"
                : highlighted.has(n)
                ? "highlighted"
                : undefined;
              return (
                <span className="line" data-variant={v} key={i}>
                  <span className="line-content">
                    {line.length === 0
                      ? "\n"
                      : line.map(({ type, text }, j) =>
                          type ? (
                            <span className={`tok-${type}`} key={j}>
                              {text}
                            </span>
                          ) : (
                            text
                          )
                        )}
                  </span>
                </span>
              );
            })}
          </code>
          <textarea
            ref={inputRef}
            className="code-block-input"
            value={code}
            onChange={(event) => setAttributes({ code: event.target.value })}
            placeholder={__("Write code…", TD)}
            aria-label={__("Code", TD)}
            spellCheck={false}
            autoCapitalize="off"
            autoComplete="off"
            autoCorrect="off"
            wrap={wrap ? "soft" : "off"}
          />
        </pre>
      </div>
    </>
  );
}
