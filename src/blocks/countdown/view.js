/**
 * Countdown frontend script.
 *
 * render.php prints the remaining time as of render, so there is never an empty
 * frame and a visitor without JavaScript still sees a sensible value. This
 * script recalculates from `data-target` and keeps the digits moving.
 *
 * It never reads the printed digits. Behind a full-page cache those were
 * written whenever the cache entry was built and can be arbitrarily stale; the
 * target is an absolute instant and survives any amount of caching.
 *
 * There is deliberately no clock-skew correction. The usual trick — stamping
 * server time into the markup and offsetting against it — cannot work here for
 * the same reason: a cached page carries a stale server stamp, so correcting
 * against it would introduce exactly the error it is meant to remove. A visitor
 * with a wrong system clock sees a wrong countdown, which is the lesser and
 * far rarer problem.
 */

const ROOT_SELECTOR = ".wp-block-shadcn-countdown";

/**
 * Split a remaining span into units. Mirrors the arithmetic in render.php; if
 * one changes the other must change with it, or the digits jump when this
 * script takes over from the server-rendered markup.
 *
 * @param {number}  remaining   Seconds left.
 * @param {boolean} showDays    Whether a days unit is rendered.
 * @param {boolean} showSeconds Whether a seconds unit is rendered.
 * @return {Object} Unit key to value.
 */
function splitRemaining(remaining, showDays, showSeconds) {
  const parts = {};

  if (showDays) {
    parts.days = Math.floor(remaining / 86400);
    parts.hours = Math.floor((remaining % 86400) / 3600);
  } else {
    // Hours roll up rather than restart, so a two-day sale reads 48 hours.
    parts.hours = Math.floor(remaining / 3600);
  }

  parts.minutes = Math.floor((remaining % 3600) / 60);

  if (showSeconds) {
    parts.seconds = Math.floor(remaining % 60);
  }

  return parts;
}

/**
 * Apply whatever the block should do once the deadline passes.
 *
 * @param {HTMLElement} el The countdown element.
 */
function expire(el) {
  const mode = el.dataset.expire || "hide";

  if (mode === "hide") {
    el.hidden = true;
    return;
  }

  if (mode === "message") {
    const message = el.querySelector(".countdown-expired-message");

    if (message) {
      const units = el.querySelector(".countdown-units");

      if (units) {
        units.remove();
      }

      message.hidden = false;
      el.classList.add("is-expired");
      return;
    }
  }

  // "zeros", or a message mode with no message set: leave the units in place
  // showing 00, which the final paint below has already written.
  el.classList.add("is-expired");
}

/**
 * Wire up a single countdown block.
 *
 * @param {HTMLElement} el The countdown element.
 */
function initCountdown(el) {
  const targetMs = Date.parse(el.dataset.target);

  if (!Number.isFinite(targetMs)) {
    return;
  }

  const showDays = el.dataset.days === "1";
  const showSeconds = el.dataset.seconds === "1";
  const valueEls = {};

  el.querySelectorAll(".countdown-unit").forEach((unit) => {
    const value = unit.querySelector(".countdown-value");

    if (value) {
      valueEls[unit.dataset.unit] = value;
    }
  });

  let timer = null;

  const paint = () => {
    const remaining = Math.max(0, Math.floor((targetMs - Date.now()) / 1000));
    const parts = splitRemaining(remaining, showDays, showSeconds);

    Object.keys(parts).forEach((key) => {
      const valueEl = valueEls[key];

      if (!valueEl) {
        return;
      }

      const next = String(parts[key]).padStart(2, "0");

      // Only touch the DOM when the digits actually differ: at one tick a
      // second, most units are unchanged most of the time.
      if (valueEl.textContent !== next) {
        valueEl.textContent = next;
      }
    });

    return remaining;
  };

  const schedule = () => {
    window.clearTimeout(timer);

    if (paint() <= 0) {
      expire(el);
      return;
    }

    // Recomputed from the wall clock every tick rather than decremented, so a
    // throttled background tab or a busy main thread cannot accumulate drift.
    // Aligning to the next whole second keeps the flip on the second boundary.
    timer = window.setTimeout(schedule, 1000 - (Date.now() % 1000));
  };

  // A backgrounded tab has its timers throttled to as little as once a minute,
  // so the digits are stale the moment it comes back to the front.
  document.addEventListener("visibilitychange", () => {
    if (!document.hidden) {
      schedule();
    }
  });

  schedule();
}

/**
 * Initialize every countdown block on the page.
 */
function initAllCountdowns() {
  document.querySelectorAll(ROOT_SELECTOR).forEach(initCountdown);
}

// Initialize when DOM is ready.
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initAllCountdowns);
} else {
  initAllCountdowns();
}
