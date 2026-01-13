/**
 * Drawer interactivity store.
 */
import { store, getContext } from "@wordpress/interactivity";

const BODY_OPEN_CLASS = "wpshadcn-drawer-open";

const toggleBodyScroll = (isOpen) => {
  if (typeof document === "undefined") {
    return;
  }
  document.body.classList.toggle(BODY_OPEN_CLASS, !!isOpen);
};

const drawerStore = store(
  "wpshadcn/drawer",
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
        drawerStore.actions[context.open ? "close" : "open"]();
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
