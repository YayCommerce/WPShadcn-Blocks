/**
 * Drawer interactivity store.
 */
import { store, getContext } from "@wordpress/interactivity";

const BODY_OPEN_CLASS = "wpshadcn-drawer-open";

// Store drag state per drawer element (to avoid context issues in global handlers)
const dragStateMap = new WeakMap();

// Helper function to close drawer by element
const closeDrawerByElement = (drawerElement) => {
  if (!drawerElement) return;
  
  // Method 1: Try to trigger close via overlay click (most reliable with Interactivity API)
  const overlay = drawerElement.querySelector('.wp-block-wpshadcn-drawer__overlay');
  if (overlay) {
    // Use requestAnimationFrame to ensure drag has ended and DOM is ready
    requestAnimationFrame(() => {
      // Try native click first (most reliable)
      overlay.click();
    });
  }
  
  // Method 2: Also try to update context directly as backup
  try {
    // WordPress Interactivity API stores context in data-wp-context as JSON
    const contextAttr = drawerElement.getAttribute('data-wp-context');
    if (contextAttr) {
      const context = JSON.parse(contextAttr);
      if (context.open !== false) {
        context.open = false;
        context.isDragging = false;
        context.currentDragOffset = 0;
        // Update the attribute
        drawerElement.setAttribute('data-wp-context', JSON.stringify(context));
        
        // Also update the portal's data-open attribute directly
        const portal = drawerElement.querySelector('.wp-block-wpshadcn-drawer__portal');
        if (portal) {
          portal.classList.remove('is-open');
          portal.setAttribute('data-open', 'false');
        }
        
        // Update body scroll
        document.body.classList.remove(BODY_OPEN_CLASS);
      }
    }
  } catch (e) {
    // If context update fails, that's okay - overlay click should handle it
  }
};

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
      get dragOffset() {
        const context = getContext();
        if (!context.isDragging) {
          return 0;
        }
        return context.currentDragOffset || 0;
      },
      get dragTransform() {
        try {
          const context = getContext();
          if (!context) {
            return "";
          }
          const offset = context.currentDragOffset || 0;
          if (!offset || !context.isDragging) {
            return "";
          }
          const direction = context.direction || "bottom";
          if (direction === "bottom" || direction === "top") {
            return `transform: translateY(${direction === "bottom" ? offset : -offset}px);`;
          } else {
            return `transform: translateX(${direction === "right" ? offset : -offset}px);`;
          }
        } catch (error) {
          // Context not available, return empty (style will be handled directly)
          return "";
        }
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
        if (!context || !context.open) {
          return;
        }
        context.open = false;
        context.isDragging = false;
        context.currentDragOffset = 0;
        
        // Clean up drag state from WeakMap
        try {
          const panelElement = document.querySelector(`#${context.drawerId}-content`);
          if (panelElement) {
            dragStateMap.delete(panelElement);
            panelElement.style.transform = "";
          }
        } catch (error) {
          // Ignore errors during cleanup
        }
        
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
      // Drag handlers
      handleDragStart: (event) => {
        const context = getContext();
        if (!context || !context.open) {
          return;
        }

        // Don't start drag if clicking on interactive elements
        const target = event.target;
        if (
          target?.closest?.("button") ||
          target?.closest?.("a") ||
          target?.closest?.("input") ||
          target?.closest?.("select") ||
          target?.closest?.("textarea") ||
          target?.closest?.("[role='button']") ||
          target?.closest?.(".wp-block-wpshadcn-drawer__close")
        ) {
          return;
        }

        const direction = context.direction || "bottom";
        const drawerId = context.drawerId;
        const panelElement = event.target?.closest?.(".wp-block-wpshadcn-drawer__panel") ||
          document.querySelector(`#${drawerId}-content`);
        
        if (!panelElement) {
          return;
        }

        // Get initial touch/mouse position
        const clientY = event.touches?.[0]?.clientY ?? event.clientY;
        const clientX = event.touches?.[0]?.clientX ?? event.clientX;

        // Store drag state on the element
        const dragState = {
          isDragging: true,
          dragStartY: clientY,
          dragStartX: clientX,
          currentDragOffset: 0,
          direction: direction,
          drawerId: drawerId,
          panelElement: panelElement,
        };
        dragStateMap.set(panelElement, dragState);

        // Update context
        context.isDragging = true;
        context.dragStartY = clientY;
        context.dragStartX = clientX;
        context.currentDragOffset = 0;
        context.dragDirection = direction;

        // Set up global mouse tracking for mouse events
        if (event.type === "mousedown") {
          const handleGlobalMouseMove = (e) => {
            const state = dragStateMap.get(panelElement);
            if (!state || !state.isDragging) {
              document.removeEventListener("mousemove", handleGlobalMouseMove);
              document.removeEventListener("mouseup", handleGlobalMouseUp);
              return;
            }

            // Calculate drag distance
            const currentY = e.clientY;
            const currentX = e.clientX;
            let dragDistance = 0;

            if (state.direction === "bottom" || state.direction === "top") {
              dragDistance = currentY - state.dragStartY;
              if (state.direction === "top") {
                dragDistance = state.dragStartY - currentY;
              }
            } else {
              dragDistance = currentX - state.dragStartX;
              if (state.direction === "left") {
                dragDistance = state.dragStartX - currentX;
              }
            }

            // Only allow dragging in the closing direction
            if (dragDistance > 0) {
              state.currentDragOffset = dragDistance;
              // Update panel style directly
              if (state.direction === "bottom" || state.direction === "top") {
                panelElement.style.transform = `translateY(${state.direction === "bottom" ? dragDistance : -dragDistance}px)`;
              } else {
                panelElement.style.transform = `translateX(${state.direction === "right" ? dragDistance : -dragDistance}px)`;
              }
              // Try to update context if available
              try {
                const ctx = getContext();
                if (ctx) {
                  ctx.currentDragOffset = dragDistance;
                }
              } catch (err) {
                // Context not available, that's okay
              }
            }

            e.preventDefault();
          };

          const handleGlobalMouseUp = (e) => {
            document.removeEventListener("mousemove", handleGlobalMouseMove);
            document.removeEventListener("mouseup", handleGlobalMouseUp);

            const state = dragStateMap.get(panelElement);
            if (!state || !state.isDragging) {
              return;
            }

            const threshold = state.panelElement 
              ? (state.direction === "bottom" || state.direction === "top" 
                  ? state.panelElement.offsetHeight 
                  : state.panelElement.offsetWidth) * 0.3
              : 100;

            // Close if dragged beyond threshold, otherwise snap back
            if (state.currentDragOffset > threshold) {
              // Find the drawer wrapper and close it
              const drawerWrapper = panelElement.closest('[data-wp-interactive="wpshadcn/drawer"]');
              closeDrawerByElement(drawerWrapper);
            } else {
              // Snap back - remove inline style to let CSS transition handle it
              panelElement.style.transform = "";
            }

            // Clean up drag state
            state.isDragging = false;
            state.currentDragOffset = 0;
            dragStateMap.delete(panelElement);
          };

          document.addEventListener("mousemove", handleGlobalMouseMove);
          document.addEventListener("mouseup", handleGlobalMouseUp);
        }

        // Prevent default to avoid scrolling while dragging
        event.preventDefault();
        event.stopPropagation();
      },
      handleDragMove: (event) => {
        // For touch events, we can use context directly
        // For mouse events, we use the WeakMap (handled in global handlers)
        const context = getContext();
        if (!context || !context.isDragging || !context.open) {
          return;
        }

        const direction = context.dragDirection || context.direction || "bottom";
        const panelElement = event.target?.closest?.(".wp-block-wpshadcn-drawer__panel") ||
          document.querySelector(`#${context.drawerId}-content`);

        // Get current touch position
        const clientY = event.touches?.[0]?.clientY;
        const clientX = event.touches?.[0]?.clientX;

        if (clientY === undefined && clientX === undefined) {
          // Not a touch event, skip (mouse events handled globally)
          return;
        }

        // Calculate drag distance
        let dragDistance = 0;
        if (direction === "bottom" || direction === "top") {
          dragDistance = clientY - context.dragStartY;
          // For top drawer, reverse the direction
          if (direction === "top") {
            dragDistance = context.dragStartY - clientY;
          }
        } else {
          dragDistance = clientX - context.dragStartX;
          // For left drawer, reverse the direction
          if (direction === "left") {
            dragDistance = context.dragStartX - clientX;
          }
        }

        // Only allow dragging in the closing direction (positive values)
        if (dragDistance > 0) {
          context.currentDragOffset = dragDistance;
          // Update panel style directly for smooth dragging
          if (panelElement) {
            if (direction === "bottom" || direction === "top") {
              panelElement.style.transform = `translateY(${direction === "bottom" ? dragDistance : -dragDistance}px)`;
            } else {
              panelElement.style.transform = `translateX(${direction === "right" ? dragDistance : -dragDistance}px)`;
            }
          }
        } else {
          context.currentDragOffset = 0;
          if (panelElement) {
            panelElement.style.transform = "";
          }
        }

        event.preventDefault();
        event.stopPropagation();
      },
      handleDragEnd: (event) => {
        const context = getContext();
        if (!context || !context.isDragging) {
          return;
        }

        const direction = context.dragDirection || context.direction || "bottom";
        const panelElement = event.target?.closest?.(".wp-block-wpshadcn-drawer__panel") ||
          document.querySelector(`#${context.drawerId}-content`);
        
        const threshold = panelElement 
          ? (direction === "bottom" || direction === "top" 
              ? panelElement.offsetHeight 
              : panelElement.offsetWidth) * 0.3
          : 100;

        // Close if dragged beyond threshold, otherwise snap back
        if (context.currentDragOffset > threshold) {
          drawerStore.actions.close();
        } else {
          // Snap back
          context.isDragging = false;
          context.currentDragOffset = 0;
          if (panelElement) {
            panelElement.style.transform = "";
          }
        }

        context.dragStartY = null;
        context.dragStartX = null;
        context.dragDirection = null;
        
        // Clean up WeakMap
        if (panelElement) {
          dragStateMap.delete(panelElement);
        }
      },
    },
    callbacks: {
      syncBodyScroll: () => {
        const { open } = getContext();
        toggleBodyScroll(open);
      },
      resetDragState: () => {
        const context = getContext();
        // Ensure smooth snap-back by re-enabling transition
        if (!context.isDragging && context.currentDragOffset === 0) {
          // Force a reflow to ensure transition is applied
          const panelElement = document.querySelector(`#${context.drawerId}-content`);
          if (panelElement) {
            // Trigger reflow
            void panelElement.offsetHeight;
          }
        }
      },
    },
  },
  { lock: true }
);
