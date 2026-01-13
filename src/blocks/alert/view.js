/**
 * Alert frontend script.
 *
 * Handles dismissible alert functionality using WordPress Interactivity API.
 */
import { store, getContext } from "@wordpress/interactivity";

store("wpshadcn/alert", {
  actions: {
    dismiss: () => {
      const context = getContext();
      // Set visibility to false to trigger the dismiss animation
      context.isVisible = false;
    },
  },
});
