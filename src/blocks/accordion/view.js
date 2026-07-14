/**
 * Accordion interactivity store.
 *
 * Single-open (exclusive) + collapsible. The `openId` value lives on the
 * accordion root context; each item adds only its own `id`. Writing
 * `context.openId` from an item updates the shared root value, so opening
 * one item re-derives `isOpen` on every sibling and closes the others.
 */
import { store, getContext } from "@wordpress/interactivity";

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
    },
    actions: {
      /**
       * Toggle the current item.
       *
       * Multiple mode: flip this item's local `open` (independent).
       * Single mode: set the shared `openId` (exclusive); clicking the open
       * item closes it (collapsible).
       */
      toggle() {
        const context = getContext();
        if (context.multiple) {
          context.open = !context.open;
          return;
        }
        context.openId = context.openId === context.id ? null : context.id;
      },
    },
  },
  { lock: true }
);
