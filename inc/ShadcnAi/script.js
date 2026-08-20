/**
 * Shadcn AI — prompt-to-layout modal.
 *
 * A launcher in the editor sidebar opens a modal: prompt in, a live outline
 * while the model writes (one row per planned section, streamed as SSE),
 * then a full block preview with Insert / Copy / Start over. Cancel aborts
 * the request at any point.
 *
 * The stream is asked for, never assumed: the response's content type
 * decides which reader runs, so a server that predates streaming still
 * returns one JSON body and still works. Both paths end in the same
 * {markup, warnings} result.
 */
(function () {
  "use strict";

  var el = wp.element.createElement;
  var Fragment = wp.element.Fragment;
  var useState = wp.element.useState;
  var useRef = wp.element.useRef;
  var useMemo = wp.element.useMemo;
  var useEffect = wp.element.useEffect;
  var useCallback = wp.element.useCallback;
  var __ = wp.i18n.__;
  var sprintf = wp.i18n.sprintf;
  var registerPlugin = wp.plugins.registerPlugin;

  // WP moved PluginSidebar from wp.editPost to wp.editor over time; support both.
  var PluginSidebar =
    (wp.editor && wp.editor.PluginSidebar) || wp.editPost.PluginSidebar;
  var PluginSidebarMoreMenuItem =
    (wp.editor && wp.editor.PluginSidebarMoreMenuItem) ||
    wp.editPost.PluginSidebarMoreMenuItem;

  var Modal = wp.components.Modal;
  var TextareaControl = wp.components.TextareaControl;
  var Button = wp.components.Button;
  var Notice = wp.components.Notice;

  var useCopyToClipboard = wp.compose.useCopyToClipboard;

  var BlockPreview =
    wp.blockEditor.BlockPreview || wp.blockEditor.__experimentalBlockPreview;

  var PLUGIN_NAME = "shadcn-ai";

  // Silence thresholds, in ms. The stream reports the model's own writing,
  // so a gap is evidence — but the FIRST entry is honestly slow: the model
  // reads the whole catalog before one section can be named.
  var STALL_WARN = 30000;
  var STALL_FAIL = 120000;
  var FIRST_ENTRY_GRACE = 120000;

  /**
   * "shadcn/pricing-two-tier" → "Pricing two tier" — the slug is the only
   * name a plan entry carries, and raw slugs read as debugging output.
   */
  function humanizeSlug(slug) {
    var name = String(slug || "").replace(/^shadcn\//, "");
    name = name.replace(/-/g, " ");
    return name.charAt(0).toUpperCase() + name.slice(1);
  }

  /** Split an SSE byte stream into (event, data) callbacks. */
  function createFrameReader(onFrame) {
    var decoder = new TextDecoder();
    var buffer = "";

    return function (chunk) {
      // `stream: true` keeps a multi-byte character split across two network
      // reads from decoding into a replacement character.
      buffer += decoder.decode(chunk, { stream: true });

      var boundary;
      while ((boundary = buffer.indexOf("\n\n")) !== -1) {
        var frame = buffer.slice(0, boundary);
        buffer = buffer.slice(boundary + 2);

        var event = (frame.match(/^event: (.*)$/m) || [])[1];
        var raw = (frame.match(/^data: (.*)$/m) || [])[1];
        if (!event || !raw) {
          continue;
        }
        try {
          onFrame(event, JSON.parse(raw));
        } catch (e) {
          // One unreadable frame is not worth abandoning a generation that
          // is otherwise arriving correctly.
        }
      }
    };
  }

  /** An apiFetch rejection → one sentence the user can act on. */
  function normalizeError(err) {
    if (err && err.message && err.code !== "invalid_json") {
      return err.message;
    }
    if (err && err.code === "fetch_error") {
      return __(
        "The connection dropped while generating. Check your network and try again.",
        "shadcn-blocks"
      );
    }
    return __(
      "The AI service did not respond. Please try again.",
      "shadcn-blocks"
    );
  }

  /**
   * The generate request as a hook: status is idle | generating | done |
   * error; progress.entries fills row by row while the model writes.
   */
  function useGenerateLayout() {
    var s;
    s = useState("idle");
    var status = s[0], setStatus = s[1];
    s = useState(null);
    var result = s[0], setResult = s[1];
    s = useState("");
    var error = s[0], setError = s[1];
    s = useState([]);
    var entries = s[0], setEntries = s[1];
    s = useState("designing");
    var stage = s[0], setStage = s[1];
    s = useState(false);
    var stalled = s[0], setStalled = s[1];

    var controllerRef = useRef(null);
    var watchdogRef = useRef(null);

    var stopWatchdog = useCallback(function () {
      if (watchdogRef.current) {
        clearInterval(watchdogRef.current);
        watchdogRef.current = null;
      }
    }, []);

    // Closing the sidebar unmounts the modal mid-generation; without this
    // the request keeps running with nobody to receive it.
    useEffect(function () {
      return function () {
        if (watchdogRef.current) {
          clearInterval(watchdogRef.current);
        }
        if (controllerRef.current) {
          controllerRef.current.abort();
        }
      };
    }, []);

    var generate = useCallback(
      function (prompt) {
        var controller = new AbortController();
        controllerRef.current = controller;
        setStatus("generating");
        setError("");
        setResult(null);
        setEntries([]);
        setStage("designing");
        setStalled(false);

        // Held in closures rather than state: the watchdog and the frame
        // reader both need the live value between renders.
        var lastEventAt = Date.now();
        var sawFirstEntry = false;
        var streamError = null;
        var streamWarnings = [];
        var finalResult = null;
        var rows = [];

        stopWatchdog();
        watchdogRef.current = setInterval(function () {
          var quiet = Date.now() - lastEventAt;
          var limit = sawFirstEntry ? STALL_FAIL : FIRST_ENTRY_GRACE;
          setStalled(quiet > STALL_WARN);
          if (quiet > limit) {
            streamError = new Error(
              __("The AI service stopped responding partway through.", "shadcn-blocks")
            );
            controller.abort();
          }
        }, 2000);

        return wp
          .apiFetch({
            path: "/shadcn/v1/ai/generate",
            method: "POST",
            data: { prompt: prompt, stream: true },
            parse: false,
            signal: controller.signal,
          })
          .then(function (response) {
            var contentType =
              (response.headers && response.headers.get
                ? response.headers.get("content-type")
                : "") || "";

            // Not a stream: an older server ignored the `stream` argument,
            // or something between here and PHP buffered it into one body.
            if (contentType.indexOf("text/event-stream") === -1) {
              return response.json().then(function (json) {
                stopWatchdog();
                if (!json || !json.markup) {
                  throw new Error(
                    __("No valid layout could be generated from that prompt.", "shadcn-blocks")
                  );
                }
                finalResult = { markup: json.markup, warnings: json.warnings || [] };
                setResult(finalResult);
                setStatus("done");
                return finalResult;
              });
            }

            var readFrame = createFrameReader(function (event, data) {
              lastEventAt = Date.now();
              setStalled(false);

              if (event === "status") {
                setStage(data.stage || "designing");
                return;
              }
              if (event === "entry") {
                sawFirstEntry = true;
                rows[data.index] = data;
                setEntries(rows.filter(Boolean));
                return;
              }
              if (event === "result") {
                finalResult = {
                  markup: data.markup || "",
                  warnings: data.warnings || [],
                };
                return;
              }
              if (event === "error") {
                streamError = new Error(data.message || "");
                streamWarnings = data.warnings || [];
              }
            });

            var reader = response.body.getReader();
            function pump() {
              return reader.read().then(function (step) {
                if (step.done) {
                  return null;
                }
                readFrame(step.value);
                return pump();
              });
            }

            return pump().then(function () {
              stopWatchdog();
              if (streamError) {
                var message = streamError.message;
                if (streamWarnings.length) {
                  message += " " + streamWarnings.join(" ");
                }
                throw new Error(message);
              }
              if (!finalResult || !finalResult.markup) {
                throw new Error(
                  __("The AI service stopped responding partway through.", "shadcn-blocks")
                );
              }
              setResult(finalResult);
              setStatus("done");
              return finalResult;
            });
          })
          .catch(function (err) {
            stopWatchdog();

            // Cancelling is the user asking to stop. A watchdog abort only
            // looks like one — it recorded the real reason before firing.
            var userCancelled =
              !streamError &&
              ((err && err.name === "AbortError") || controller.signal.aborted);
            if (userCancelled) {
              setStatus("idle");
              return null;
            }

            // apiFetch with parse:false rejects with the raw Response on an
            // HTTP error; its JSON body carries the REST error message.
            if (err && typeof err.json === "function") {
              return err.json().then(
                function (body) {
                  var message = (body && body.message) || normalizeError(null);
                  if (body && body.data && body.data.warnings && body.data.warnings.length) {
                    message += " " + body.data.warnings.join(" ");
                  }
                  setError(message);
                  setStatus("error");
                  return null;
                },
                function () {
                  setError(normalizeError(null));
                  setStatus("error");
                  return null;
                }
              );
            }

            setError(normalizeError(streamError || err));
            setStatus("error");
            return null;
          });
      },
      [stopWatchdog]
    );

    var cancel = useCallback(
      function () {
        stopWatchdog();
        if (controllerRef.current) {
          controllerRef.current.abort();
        }
      },
      [stopWatchdog]
    );

    var reset = useCallback(
      function () {
        cancel();
        setStatus("idle");
        setResult(null);
        setError("");
        setEntries([]);
        setStage("designing");
        setStalled(false);
      },
      [cancel]
    );

    return {
      status: status,
      result: result,
      error: error,
      progress: { entries: entries, stage: stage, stalled: stalled },
      generate: generate,
      cancel: cancel,
      reset: reset,
    };
  }

  /** Waiting state: the plan's outline, one row per section as it is written. */
  function GeneratingProgress(props) {
    var entries = props.entries;
    var stage = props.stage;
    var stalled = props.stalled;

    var liveLabel;
    if (stalled) {
      liveLabel = __("Taking longer than usual — still working…", "shadcn-blocks");
    } else if (stage === "building") {
      liveLabel = __("Building the sections…", "shadcn-blocks");
    } else if (entries.length > 0) {
      liveLabel = sprintf(
        /* translators: %d: position of the section being planned. */
        __("Planning section %d…", "shadcn-blocks"),
        entries.length + 1
      );
    } else {
      liveLabel = __("Reading your prompt and choosing sections…", "shadcn-blocks");
    }

    return el(
      "div",
      { className: "shadcn-ai-progress" },
      el(
        "ol",
        { className: "shadcn-ai-progress__list", role: "list" },
        entries
          .map(function (entry, index) {
            return el(
              "li",
              { key: index, className: "shadcn-ai-progress__item is-done" },
              el(
                "span",
                { className: "shadcn-ai-progress__marker", "aria-hidden": "true" },
                "✓"
              ),
              el(
                "span",
                { className: "shadcn-ai-progress__title" },
                humanizeSlug(entry.slug)
              )
            );
          })
          .concat([
            el(
              "li",
              {
                key: "live",
                className:
                  "shadcn-ai-progress__item is-live" + (stalled ? " is-stalled" : ""),
              },
              el("span", {
                className: "shadcn-ai-progress__spinner",
                "aria-hidden": "true",
              }),
              el(
                "span",
                {
                  className: "shadcn-ai-progress__title",
                  "aria-live": "polite",
                  "aria-atomic": "true",
                },
                liveLabel
              )
            ),
          ])
      ),
      el(
        "p",
        { className: "shadcn-ai-progress__hint" },
        stalled
          ? __(
              "A long pause usually means the AI service is busy. Cancelling keeps your prompt so you can try again.",
              "shadcn-blocks"
            )
          : __(
              "Each section is named as it is planned — you can leave this open.",
              "shadcn-blocks"
            )
      )
    );
  }

  function ShadcnAiModal(props) {
    var onClose = props.onClose;

    var s = useState("");
    var prompt = s[0], setPrompt = s[1];

    var hook = useGenerateLayout();
    var status = hook.status;
    var result = hook.result;

    // Parsed once per result. Parsing is also the insert-time operation, so
    // the preview cannot drift from what Insert will place.
    var blocks = useMemo(
      function () {
        return result && result.markup ? wp.blocks.parse(result.markup) : [];
      },
      [result]
    );

    var copyRef = useCopyToClipboard(
      function () {
        return result ? result.markup : "";
      },
      function () {
        wp.data
          .dispatch("core/notices")
          .createSuccessNotice(
            __("Blocks copied — paste them into any page or post.", "shadcn-blocks"),
            { type: "snackbar" }
          );
      }
    );

    var trimmed = prompt.trim();
    var canSubmit = trimmed.length >= 3 && status !== "generating";

    function submit() {
      if (canSubmit) {
        hook.generate(trimmed);
      }
    }

    // A prompt can be several lines, so plain Enter stays a newline; the
    // modifier chord is the usual way out of a textarea.
    function onPromptKeyDown(event) {
      if (event.key === "Enter" && (event.metaKey || event.ctrlKey)) {
        event.preventDefault();
        submit();
      }
    }

    function close() {
      hook.cancel();
      onClose();
    }

    function insert() {
      if (!blocks.length) {
        return;
      }
      wp.data.dispatch("core/block-editor").insertBlocks(blocks);
      wp.data
        .dispatch("core/notices")
        .createSuccessNotice(
          __("AI layout added to the page — one undo removes it all.", "shadcn-blocks"),
          { type: "snackbar" }
        );
      onClose();
    }

    return el(
      Modal,
      {
        title: __("Shadcn AI", "shadcn-blocks"),
        onRequestClose: close,
        className: "shadcn-ai-modal is-" + status,
        // A prompt mid-typing and a finished preview are both too expensive
        // to lose to a stray click on the overlay.
        shouldCloseOnClickOutside: false,
      },
      status === "idle" || status === "error"
        ? el(
            Fragment,
            null,
            el(TextareaControl, {
              label: __("Describe the page you want", "shadcn-blocks"),
              help: __(
                "e.g. “landing page for a coffee roastery: hero, three features, testimonials, and a call to action”",
                "shadcn-blocks"
              ),
              value: prompt,
              onChange: setPrompt,
              onKeyDown: onPromptKeyDown,
              rows: 5,
              autoFocus: true,
              __nextHasNoMarginBottom: true,
            }),
            status === "error"
              ? el(
                  Notice,
                  { status: "error", isDismissible: false, className: "shadcn-ai-modal__notice" },
                  hook.error
                )
              : null,
            el(
              "div",
              { className: "shadcn-ai-modal__actions" },
              el(
                Button,
                { variant: "primary", disabled: !canSubmit, onClick: submit },
                status === "error"
                  ? __("Try again", "shadcn-blocks")
                  : __("Generate layout", "shadcn-blocks")
              ),
              el(
                Button,
                { variant: "tertiary", onClick: close },
                __("Cancel", "shadcn-blocks")
              )
            )
          )
        : null,
      status === "generating"
        ? el(
            Fragment,
            null,
            el(GeneratingProgress, {
              entries: hook.progress.entries,
              stage: hook.progress.stage,
              stalled: hook.progress.stalled,
            }),
            el(
              "div",
              { className: "shadcn-ai-modal__actions" },
              el(
                Button,
                { variant: "secondary", onClick: hook.cancel },
                __("Cancel generation", "shadcn-blocks")
              )
            )
          )
        : null,
      status === "done"
        ? el(
            Fragment,
            null,
            result.warnings.length
              ? el(
                  Notice,
                  { status: "warning", isDismissible: false, className: "shadcn-ai-modal__notice" },
                  result.warnings.join(" ")
                )
              : null,
            el(
              "div",
              { className: "shadcn-ai-modal__preview" },
              BlockPreview && blocks.length
                ? el(BlockPreview, { blocks: blocks, viewportWidth: 1200 })
                : el(
                    "p",
                    null,
                    __(
                      "Preview isn't available in this WordPress version, but you can still insert the layout below.",
                      "shadcn-blocks"
                    )
                  )
            ),
            el(
              "div",
              { className: "shadcn-ai-modal__actions" },
              el(
                Button,
                { variant: "primary", disabled: !blocks.length, onClick: insert },
                __("Insert into page", "shadcn-blocks")
              ),
              el(
                Button,
                { variant: "tertiary", disabled: !result.markup, ref: copyRef },
                __("Copy blocks", "shadcn-blocks")
              ),
              el(
                Button,
                { variant: "tertiary", onClick: hook.reset },
                __("Start over", "shadcn-blocks")
              )
            )
          )
        : null
    );
  }

  /** Sidebar launcher: one card whose only job is opening the modal. */
  function ShadcnAiPanel() {
    var s = useState(false);
    var open = s[0], setOpen = s[1];

    return el(
      Fragment,
      null,
      el(
        PluginSidebarMoreMenuItem,
        { target: PLUGIN_NAME, icon: "art" },
        __("Shadcn AI", "shadcn-blocks")
      ),
      el(
        PluginSidebar,
        {
          name: PLUGIN_NAME,
          icon: "art",
          title: __("Shadcn AI", "shadcn-blocks"),
        },
        el(
          "div",
          { className: "shadcn-ai-launcher" },
          el(
            "p",
            { className: "shadcn-ai-launcher__description" },
            __(
              "Describe a page and let AI compose it from Shadcn patterns — preview first, then insert.",
              "shadcn-blocks"
            )
          ),
          el(
            Button,
            {
              variant: "primary",
              className: "shadcn-ai-launcher__open",
              onClick: function () {
                setOpen(true);
              },
            },
            __("Open Shadcn AI", "shadcn-blocks")
          )
        ),
        open
          ? el(ShadcnAiModal, {
              onClose: function () {
                setOpen(false);
              },
            })
          : null
      )
    );
  }

  registerPlugin(PLUGIN_NAME, {
    render: ShadcnAiPanel,
    icon: "art",
  });
})();
