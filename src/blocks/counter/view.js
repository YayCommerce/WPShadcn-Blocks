/**
 * Counter frontend script.
 *
 * render.php prints the end value, so a visitor without JavaScript — or with
 * reduced motion, or an old browser lacking IntersectionObserver — always sees
 * the final number. This script only rewinds the number to the start value and
 * counts back up once the block scrolls into view.
 */

const ROOT_SELECTOR = ".wp-block-shadcn-counter";

/**
 * Format a value the way render.php does, so the animation ends on exactly the
 * markup the server produced.
 *
 * @param {number}  value     Value to format.
 * @param {number}  decimals  Decimal places.
 * @param {boolean} separator Whether to group thousands with a comma.
 * @return {string} Formatted number.
 */
function formatValue(value, decimals, separator) {
  const fixed = value.toFixed(decimals);

  if (!separator) {
    return fixed;
  }

  const [integer, fraction] = fixed.split(".");
  const grouped = integer.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

  return fraction ? `${grouped}.${fraction}` : grouped;
}

/**
 * Ease-out cubic: fast at first, settling on the target value.
 *
 * @param {number} progress Linear progress from 0 to 1.
 * @return {number} Eased progress.
 */
function easeOutCubic(progress) {
  return 1 - Math.pow(1 - progress, 3);
}

/**
 * Run the count-up on a single counter.
 *
 * @param {HTMLElement} valueEl  The element holding the number (never the
 *                               wrapper, which may also hold a suffix).
 * @param {Object}      settings Parsed counter settings.
 */
function animateCounter(
  valueEl,
  { start, end, duration, decimals, separator }
) {
  const startedAt = performance.now();

  const step = (now) => {
    const progress = Math.min((now - startedAt) / duration, 1);
    const value = start + (end - start) * easeOutCubic(progress);

    valueEl.textContent = formatValue(value, decimals, separator);

    if (progress < 1) {
      requestAnimationFrame(step);
    }
  };

  requestAnimationFrame(step);
}

/**
 * Wire up a single counter block.
 *
 * @param {HTMLElement} el The counter element.
 */
function initCounter(el) {
  const valueEl = el.querySelector(".counter-value");

  if (!valueEl) {
    return;
  }

  const start = parseFloat(el.dataset.start);
  const end = parseFloat(el.dataset.end);
  const duration = parseInt(el.dataset.duration, 10);
  const decimals = parseInt(el.dataset.decimals, 10) || 0;
  const separator = el.dataset.separator === "1";

  // Anything unusable, nothing to count, or motion the visitor asked us not to
  // play: leave the server-rendered end value alone.
  if (
    !Number.isFinite(start) ||
    !Number.isFinite(end) ||
    !Number.isFinite(duration) ||
    duration <= 0 ||
    start === end ||
    typeof IntersectionObserver === "undefined" ||
    window.matchMedia("(prefers-reduced-motion: reduce)").matches
  ) {
    return;
  }

  const settings = { start, end, duration, decimals, separator };

  valueEl.textContent = formatValue(start, decimals, separator);

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          return;
        }

        // One run per counter: re-scrolling past it should not restart it.
        observer.unobserve(entry.target);
        animateCounter(valueEl, settings);
      });
    },
    { threshold: 0.3 }
  );

  observer.observe(el);
}

/**
 * Initialize every counter block on the page.
 */
function initAllCounters() {
  document.querySelectorAll(ROOT_SELECTOR).forEach(initCounter);
}

// Initialize when DOM is ready.
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initAllCounters);
} else {
  initAllCounters();
}
