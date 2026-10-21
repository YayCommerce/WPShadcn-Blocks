/**
 * Sheet interactivity store.
 */
import { store, getContext } from "@wordpress/interactivity";

const BODY_OPEN_CLASS = "shadcn-sheet-open";

const toggleBodyScroll = (isOpen) => {
  if (typeof document === "undefined") {
    return;
  }
  document.body.classList.toggle(BODY_OPEN_CLASS, !!isOpen);
};

const FOCUSABLE =
  'a[href], button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])';

// Element focused before each sheet opened, keyed by drawerId.
const returnFocus = new Map();

const getPanel = (drawerId) =>
  document.getElementById(`${drawerId}-content`);

const getFocusable = (panel) =>
  Array.from(panel.querySelectorAll(FOCUSABLE)).filter(
    (el) => el.getClientRects().length
  );

const drawerStore = store(
  "shadcn/sheet",
  {
    state: {
      get isOpen() {
        const { open } = getContext();
        return !!open;
      },
    },
    actions: {
      open: () => {
        const context = getContext();
        if (context.open) {
          return;
        }
        context.open = true;
        toggleBodyScroll(true);
      },
      close: () => {
        const context = getContext();
        if (!context.open) {
          return;
        }
        context.open = false;
        toggleBodyScroll(false);
      },
      toggle: () => {
        const context = getContext();
        if (context.open) {
          drawerStore.actions.close();
        } else {
          drawerStore.actions.open();
        }
      },
      handleEscape: (event) => {
        if (event?.key === "Escape") {
          event.preventDefault();
          drawerStore.actions.close();
        }
      },
      handleKeydown: (event) => {
        if (event?.key === "Escape") {
          event.preventDefault();
          drawerStore.actions.close();
          return;
        }

        // Trap Tab and Shift+Tab inside the panel.
        if (event?.key !== "Tab") {
          return;
        }
        const panel = getPanel(getContext().drawerId);
        const focusable = panel ? getFocusable(panel) : [];
        if (!focusable.length) {
          event.preventDefault();
          return;
        }
        const first = focusable[0];
        const last = focusable[focusable.length - 1];
        const active = document.activeElement;
        if (event.shiftKey && (active === first || active === panel)) {
          event.preventDefault();
          last.focus();
        } else if (!event.shiftKey && active === last) {
          event.preventDefault();
          first.focus();
        }
      },
      handlePanelClick: (event) => {
        // Stop propagation so clicks inside the panel don't bubble to overlay
        event.stopPropagation();
      },
      handleOverlayClick: (event) => {
        // Close drawer when clicking on overlay
        // The panel's handlePanelClick stops propagation for clicks inside the panel
        drawerStore.actions.close();
      },
    },
    callbacks: {
      syncBodyScroll: () => {
        const { open } = getContext();
        toggleBodyScroll(open);
      },
      syncFocus: () => {
        const { open, drawerId } = getContext();
        const panel = getPanel(drawerId);
        if (!panel) {
          return;
        }
        if (open) {
          returnFocus.set(drawerId, document.activeElement);
          (getFocusable(panel)[0] || panel).focus();
          return;
        }
        // Only restore after a real open, not on the initial closed render.
        if (returnFocus.has(drawerId)) {
          returnFocus.get(drawerId)?.focus?.();
          returnFocus.delete(drawerId);
        }
      },
    },
  },
  { lock: true }
);
