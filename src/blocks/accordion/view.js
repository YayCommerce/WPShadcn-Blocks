/**
 * Accordion interactivity store.
 *
 * Single-open (exclusive) + collapsible. The `openId` value lives on the
 * accordion root context; each item adds only its own `id`. Writing
 * `context.openId` from an item updates the shared root value, so opening
 * one item re-derives `isOpen` on every sibling and closes the others.
 *
 * Autoplay reuses that same shared value: the root runs one timer, fills
 * `progress` from 0 to 100 over `delay`, then moves `openId` to the next
 * entry in `ids`. Items register themselves into `ids` on init, which is the
 * only way the root learns their order — item ids are generated per item at
 * render time, after the root has already built its context.
 */
import { store, getContext } from "@wordpress/interactivity";

/**
 * How often the autoplay timer wakes up, in milliseconds.
 *
 * Small enough that the progress bar reads as a smooth fill, large enough
 * that a page full of accordions is not repainting constantly.
 */
const TICK_MS = 50;

store(
  "shadcn/accordion",
  {
    state: {
      /**
       * Whether the current item's panel is open.
       *
       * Multiple mode: each item tracks its own local `open`.
       * Single mode (default): the item whose id matches the shared `openId`.
       *
       * @return {boolean} True when this item is open.
       */
      get isOpen() {
        const context = getContext();
        if (context.multiple) {
          return !!context.open;
        }
        return context.openId != null && context.openId === context.id;
      },

      /**
       * Width of this item's progress bar as a CSS length.
       *
       * Only the open item advances; every other bar sits empty so a closed
       * item never shows a stale fill when it reopens.
       *
       * @return {string} Percentage width, e.g. `"42%"`.
       */
      get progressWidth() {
        const context = getContext();
        const isOpen =
          context.openId != null && context.openId === context.id;
        return isOpen ? `${context.progress}%` : "0%";
      },
    },
    actions: {
      /**
       * Toggle the current item.
       *
       * Multiple mode: flip this item's local `open` (independent).
       * Single mode: set the shared `openId` (exclusive); clicking the open
       * item closes it (collapsible).
       *
       * Under autoplay the click also rewinds `progress`, so a reader who
       * jumps to an item gets that item's full turn rather than whatever was
       * left of the previous one.
       */
      toggle() {
        const context = getContext();
        if (context.multiple) {
          context.open = !context.open;
          return;
        }
        context.openId = context.openId === context.id ? null : context.id;
        context.progress = 0;
      },
    },
    callbacks: {
      /**
       * Register this item with the root, in document order.
       *
       * Runs once per item on init. Disabled items stay out of the list so
       * autoplay never rotates to an item nobody is allowed to open.
       */
      register() {
        const context = getContext();

        if (context.multiple || context.disabled) {
          return;
        }

        if (!context.ids.includes(context.id)) {
          context.ids.push(context.id);
        }

        // The first item to register is the one `openFirst` opens.
        if (context.openFirst && context.openId == null) {
          context.openId = context.id;
        }
      },

      /**
       * Drive the autoplay timer from the accordion root.
       *
       * Returns a cleanup function so the interval dies with the element.
       * Readers who asked for reduced motion get the open first item but no
       * rotation, since the moving bar and the swapping panels are exactly
       * the motion they opted out of.
       */
      autoplay() {
        const context = getContext();

        if (
          window.matchMedia("(prefers-reduced-motion: reduce)").matches
        ) {
          return;
        }

        // Progress is measured against the clock, not counted up per tick:
        // browsers throttle timers in background tabs to about one call a
        // second, and a tick-counted bar would crawl for as long as the tab
        // stayed hidden and then be wrong when it came back.
        let startedAt = Date.now();
        let lastOpenId = context.openId;

        const timer = setInterval(() => {
          // Nothing open (the reader collapsed the open item): hold still
          // rather than rotating a panel back open under them.
          if (context.openId == null) {
            startedAt = Date.now();
            return;
          }

          // The reader jumped to another item: give that item a full turn.
          if (context.openId !== lastOpenId) {
            lastOpenId = context.openId;
            startedAt = Date.now();
          }

          const elapsed = Date.now() - startedAt;

          if (elapsed < context.delay) {
            context.progress = (elapsed / context.delay) * 100;
            return;
          }

          const current = context.ids.indexOf(context.openId);
          const next = context.ids[(current + 1) % context.ids.length];

          context.openId = next ?? context.openId;
          lastOpenId = context.openId;
          startedAt = Date.now();
          context.progress = 0;
        }, TICK_MS);

        return () => clearInterval(timer);
      },
    },
  },
  { lock: true }
);
