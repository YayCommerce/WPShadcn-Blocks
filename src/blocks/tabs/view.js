/**
 * Tabs interactivity store.
 *
 * `activeIndex` lives on the tabs root context; each trigger and each panel
 * adds only its own `index`. Writing `activeIndex` from a trigger updates the
 * shared root value, so `isSelected` re-derives on every trigger and panel at
 * once (same mechanism the accordion uses for `openId`).
 *
 * Keyboard handling follows the ARIA tabs pattern: automatic activation, a
 * roving tabindex, and arrow keys that wrap around while skipping disabled
 * tabs.
 *
 * Built via an explicit webpack entry rather than a `viewScript` field, and
 * enqueued as a script module by Plugin.php — the Interactivity API ships
 * only as a module, so a classic `viewScript` tag cannot execute this file.
 */
import { store, getContext } from "@wordpress/interactivity";

/**
 * Map a keyboard key to a direction of travel along the tab list.
 *
 * @param {string} key KeyboardEvent key.
 * @return {number} 1 for forward, -1 for backward, 0 when not an arrow key.
 */
const directionFor = (key) => {
  if ("ArrowRight" === key || "ArrowDown" === key) {
    return 1;
  }
  if ("ArrowLeft" === key || "ArrowUp" === key) {
    return -1;
  }
  return 0;
};

store(
  "shadcn/tabs",
  {
    state: {
      /**
       * Whether the current trigger or panel belongs to the open tab.
       *
       * @return {boolean} True when this item's index is the active one.
       */
      get isSelected() {
        const { activeIndex, index } = getContext();
        return activeIndex === index;
      },

      /**
       * Roving tabindex: only the selected trigger is reachable by Tab.
       *
       * @return {number} 0 for the selected trigger, -1 otherwise.
       */
      get tabIndex() {
        const { activeIndex, index } = getContext();
        return activeIndex === index ? 0 : -1;
      },
    },

    actions: {
      /**
       * Open the tab whose trigger was clicked.
       */
      select() {
        const context = getContext();
        context.activeIndex = context.index;
      },

      /**
       * Move between tabs with the arrow, Home and End keys.
       *
       * Bound on the tab list, whose context is the root — it carries
       * `activeIndex` but no `index` of its own.
       *
       * @param {KeyboardEvent} event Keydown event.
       */
      handleKeydown(event) {
        const context = getContext();

        // Keydown originates on a trigger and bubbles to the list this is
        // bound to; walking up from the target avoids needing `getElement`.
        const list = event.target.closest('[role="tablist"]');

        if (!list) {
          return;
        }

        const triggers = Array.from(list.querySelectorAll('[role="tab"]'));
        const total = triggers.length;

        if (!total) {
          return;
        }

        const direction = directionFor(event.key);
        let next = -1;

        if (direction) {
          // Step over disabled tabs, wrapping around the ends.
          let candidate = context.activeIndex;
          for (let step = 0; step < total; step += 1) {
            candidate = (candidate + direction + total) % total;
            if (!triggers[candidate].disabled) {
              next = candidate;
              break;
            }
          }
        } else if ("Home" === event.key) {
          next = triggers.findIndex((trigger) => !trigger.disabled);
        } else if ("End" === event.key) {
          for (let index = total - 1; index >= 0; index -= 1) {
            if (!triggers[index].disabled) {
              next = index;
              break;
            }
          }
        } else {
          return;
        }

        // Every tab disabled, or nowhere to move.
        if (next < 0 || next === context.activeIndex) {
          return;
        }

        event.preventDefault();
        context.activeIndex = next;
        triggers[next].focus();
      },
    },
  },
  { lock: true }
);
