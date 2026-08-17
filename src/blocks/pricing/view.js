/**
 * Pricing interactivity store.
 *
 * The selected interval is a single key on the pricing root context. Prices
 * and switch options each carry their own `intervalKey` and compare the two,
 * so choosing a period swaps every figure at once and no per-plan state is
 * needed. Keys rather than a boolean is what lets a site offer more than two
 * billing periods.
 *
 * `isActive` is mirrored server-side in render.php: directive values are also
 * evaluated while the page is rendered, and a getter that only existed here
 * would hide every price until hydration.
 *
 * Built via an explicit webpack entry and enqueued as a script module by
 * Plugin.php — the Interactivity API ships only as a module, so a classic
 * `viewScript` tag could not execute this file.
 */
import { store, getContext } from "@wordpress/interactivity";

store(
  "shadcn/pricing",
  {
    state: {
      /**
       * Whether the current element belongs to the selected interval.
       *
       * @return {boolean} True when this element's key is the active one.
       */
      get isActive() {
        const { interval, intervalKey } = getContext();
        return interval === intervalKey;
      },
    },

    actions: {
      /**
       * Select the interval of the option that was clicked.
       */
      select() {
        const context = getContext();
        context.interval = context.intervalKey;
      },

      /**
       * Flip between two intervals.
       *
       * Used by the two-state toggle, which unlike a segmented option has to
       * know what to go back to — hence the `altKey` alongside its own key.
       */
      toggle() {
        const context = getContext();
        context.interval =
          context.interval === context.intervalKey
            ? context.altKey
            : context.intervalKey;
      },
    },
  },
  { lock: true }
);
