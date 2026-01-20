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
    },
  },
  { lock: true }
);
