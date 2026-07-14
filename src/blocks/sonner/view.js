/**
 * Sonner (Toast) interactivity store.
 *
 * `state.toasts` is global store state (shared across every
 * data-wp-interactive="shadcn/sonner" region), so trigger buttons and the
 * footer toaster communicate through it. Each trigger's own toast config lives
 * in its element context ({ type, title, description }).
 *
 * Multi-toast behavior mirrors Sonner: a collapsed "deck" (front toast fully
 * visible, older ones peeking behind, scaled) that expands into a full list on
 * hover, with auto-dismiss paused while hovered. Positioning is done
 * imperatively in `layout()` (measured heights) because toast heights vary.
 */
import { store, getContext } from "@wordpress/interactivity";

const DURATION = 4000; // Auto-dismiss delay (Sonner default), ms.
const MAX_VISIBLE = 3; // Collapsed toasts shown before the rest hide behind.
const GAP = 14; // Vertical gap between expanded toasts, px.
const PEEK = 16; // Collapsed peek offset per toast behind the front, px.
const SCALE_STEP = 0.05; // Scale reduction per toast behind the front.
const COLLAPSE_DELAY = 120; // Grace period before collapsing after mouseleave, ms.

// Module-scoped incrementing id (avoids Date.now/Math.random in SSR-hydrated code).
let nextId = 0;
// Collapse debounce timer so moving between stacked toasts does not flicker.
let collapseTimer = null;
// Per-toast dismiss timers: id -> { timeoutId, expiresAt }.
const timers = new Map();

/**
 * Position every toast in the (single) toaster: collapsed deck or expanded list.
 * Runs on the next frame so it sees the DOM data-wp-each just rendered.
 */
function layout() {
  requestAnimationFrame(() => {
    const toaster = document.querySelector(".wp-block-shadcn-sonner__toaster");
    if (!toaster) {
      return;
    }

    const nodes = Array.prototype.slice.call(
      toaster.querySelectorAll(".wp-block-shadcn-sonner__toast")
    );
    const total = nodes.length;
    const expanded = !!state.expanded;
    const heights = nodes.map((el) => el.offsetHeight);

    nodes.forEach((el, domIndex) => {
      // DOM order = oldest..newest; the newest (last) is the front toast.
      const frontPos = total - 1 - domIndex; // 0 = front (newest).

      el.style.zIndex = String(total - frontPos);

      if (expanded) {
        // Full list: front at top, each older toast below the ones in front.
        let offset = 0;
        for (let k = 0; k < frontPos; k++) {
          offset += heights[total - 1 - k] + GAP;
        }
        el.style.transform = "translateY(" + offset + "px) scale(1)";
        el.style.opacity = "1";
        el.style.pointerEvents = "auto";
      } else {
        // Collapsed deck: front fully visible, older toasts peek + shrink.
        const y = frontPos * PEEK;
        const scale = Math.max(0.8, 1 - frontPos * SCALE_STEP);
        el.style.transform = "translateY(" + y + "px) scale(" + scale + ")";
        el.style.opacity = frontPos >= MAX_VISIBLE ? "0" : "1";
        el.style.pointerEvents = frontPos >= MAX_VISIBLE ? "none" : "auto";
      }
    });
  });
}

/**
 * Schedule a toast's auto-dismiss.
 *
 * @param {number} id    Toast id.
 * @param {number} delay Delay in ms.
 */
function scheduleDismiss(id, delay) {
  const timeoutId = setTimeout(() => {
    timers.delete(id);
    actions.remove(id);
  }, delay);
  timers.set(id, { timeoutId, expiresAt: Date.now() + delay });
}

/**
 * Pause every dismiss timer, remembering the remaining time.
 */
function pauseTimers() {
  const now = Date.now();
  timers.forEach((timer, id) => {
    clearTimeout(timer.timeoutId);
    timer.remaining = Math.max(0, timer.expiresAt - now);
  });
}

/**
 * Resume every dismiss timer from its remaining time.
 */
function resumeTimers() {
  timers.forEach((timer, id) => {
    scheduleDismiss(id, timer.remaining != null ? timer.remaining : DURATION);
  });
}

const { state, actions } = store(
  "shadcn/sonner",
  {
    state: {
      toasts: [],
      expanded: false,
    },
    actions: {
      /**
       * Show a toast built from the triggering element's context.
       */
      show() {
        const context = getContext();
        const id = ++nextId;
        const toast = {
          id,
          type: context.type || "default",
          title: context.title || "",
          description: context.description || "",
        };

        // Reassign (not push) so data-wp-each reacts to the change.
        state.toasts = [...state.toasts, toast];
        scheduleDismiss(id, DURATION);
        layout();
      },

      /**
       * Remove a toast by id.
       *
       * @param {number} id Toast id.
       */
      remove(id) {
        const timer = timers.get(id);
        if (timer) {
          clearTimeout(timer.timeoutId);
          timers.delete(id);
        }
        state.toasts = state.toasts.filter((toast) => toast.id !== id);
        layout();
      },

      /**
       * Expand the stack on hover and pause auto-dismiss.
       */
      expand() {
        if (collapseTimer) {
          clearTimeout(collapseTimer);
          collapseTimer = null;
        }
        if (!state.expanded) {
          state.expanded = true;
          pauseTimers();
        }
        layout();
      },

      /**
       * Collapse the stack shortly after the pointer leaves; resume timers.
       */
      collapse() {
        if (collapseTimer) {
          clearTimeout(collapseTimer);
        }
        collapseTimer = setTimeout(() => {
          collapseTimer = null;
          state.expanded = false;
          resumeTimers();
          layout();
        }, COLLAPSE_DELAY);
      },
    },
    callbacks: {
      /**
       * Re-layout whenever the toast list changes (covers hydration too).
       */
      onToastsChange() {
        // Reading state.toasts registers this callback as a dependency.
        void state.toasts.length;
        layout();
      },
    },
  },
  { lock: true }
);
