/**
 * Tooltip interactivity store.
 */
import { store, getContext } from "@wordpress/interactivity";

const tooltipStore = store(
  "shadcn/tooltip",
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
      },
      close: () => {
        const context = getContext();
        if (!context.open) {
          return;
        }
        context.open = false;
      },
      handleMouseEnter: () => {
        tooltipStore.actions.open();
      },
      handleMouseLeave: (event) => {
        // Only close if we're leaving the tooltip area entirely
        // Check if we're moving to the tooltip content
        const relatedTarget = event?.relatedTarget;
        if (relatedTarget) {
          const tooltipContent = relatedTarget.closest?.(
            ".wp-block-shadcn-tooltip-content"
          );
          if (tooltipContent) {
            return; // Don't close if moving to tooltip content
          }
        }
        tooltipStore.actions.close();
      },
      handleFocus: () => {
        tooltipStore.actions.open();
      },
      handleBlur: () => {
        tooltipStore.actions.close();
      },
      handleClick: (event) => {
        const context = getContext();
        const action = context.action || 'hover';
        
        if (action === 'click') {
          event.preventDefault();
          event.stopPropagation();
          if (context.open) {
            tooltipStore.actions.close();
          } else {
            tooltipStore.actions.open();
          }
        }
      },
      handleClickOutside: (event) => {
        const context = getContext();
        const action = context.action || 'hover';
        
        if (action === 'click' && context.open) {
          // Find the tooltip wrapper element that contains this context
          // The event target might be anywhere, so we need to find our tooltip
          const tooltipId = context.tooltipId;
          if (tooltipId) {
            // Find the tooltip content element by ID
            const tooltipContent = document.getElementById(`${tooltipId}-content`);
            if (tooltipContent) {
              const tooltipWrapper = tooltipContent.closest?.('.wp-block-shadcn-tooltip');
              const clickedElement = event.target;
              
              // Close if click is outside the tooltip wrapper
              if (tooltipWrapper && !tooltipWrapper.contains(clickedElement)) {
                tooltipStore.actions.close();
              }
            }
          }
        }
      },
      handleClickInside: (event) => {
        // Prevent clicks inside tooltip content from closing it
        event.stopPropagation();
      },
      handleEscape: (event) => {
        const context = getContext();
        const action = context.action || 'hover';
        
        if (action === 'click' && event?.key === 'Escape' && context.open) {
          event.preventDefault();
          tooltipStore.actions.close();
        }
      },
    },
  },
  { lock: true }
);
