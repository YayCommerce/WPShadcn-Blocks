/**
 * Live Purchase interactivity store.
 *
 * Shows one toast at a time on a timer, drawn either from entries embedded in
 * the markup (`custom`) or from a batch fetched over the signed REST route
 * (`orders`). Deliberately its own store rather than sonner's: sonner stacks
 * user-triggered toasts in a deck, this shows exactly one from a timer, and
 * sharing state would tie two blocks' lifecycles together.
 *
 * Request budget is the constraint that shapes the fetching. One request per
 * toast would be ~50 requests for a tab left open ten minutes. Instead a batch
 * is consumed entry by entry and only refetched when it runs out AND enough
 * time has passed — with the defaults that is two requests per ten minutes.
 * The rotation also stops while the tab is hidden, so a background tab costs
 * nothing at all.
 */

import { store, getContext } from "@wordpress/interactivity";

/**
 * Session key for a dismissal. sessionStorage rather than localStorage on
 * purpose: dismissing a purchase toast means "not now", not "never again on
 * this device", and a permanent flag would quietly disable the block for
 * returning visitors with no way for them to undo it.
 */
const DISMISS_KEY = "shadcnLivePurchaseDismissed";

/**
 * Floor between fetches, in ms. A batch of 10 at a 12s rotation lasts 120s, so
 * refetching purely on exhaustion would be five requests per ten minutes.
 * Under this floor the current batch is replayed instead. The server caches
 * the feed for 60s anyway, so fetching more often mostly returns the same
 * payload.
 */
const MIN_FETCH_INTERVAL = 300000;

/**
 * How long the toast takes to fade out, in ms.
 *
 * Mirrors the transition duration on `.wp-block-shadcn-live-purchase__toast`
 * in style.scss. The loop waits this out after hiding before it advances to
 * the next entry — otherwise the text swaps while the old toast is still
 * fading and the viewer reads the next person's name on the way out.
 */
const EXIT_MS = 300;

/**
 * Read the dismissal flag.
 *
 * Storage access throws outright in Safari private mode and wherever site data
 * is blocked, so every touch is guarded. Losing the flag degrades to "the
 * toast comes back next reload", which is survivable; an uncaught exception
 * here would take down every other interactive block on the page.
 *
 * @return {boolean} Whether the visitor dismissed the toast this session.
 */
function readDismissed() {
  try {
    return window.sessionStorage.getItem(DISMISS_KEY) === "1";
  } catch (e) {
    return false;
  }
}

/**
 * Persist the dismissal flag, or give up quietly.
 */
function writeDismissed() {
  try {
    window.sessionStorage.setItem(DISMISS_KEY, "1");
  } catch (e) {
    // Blocked storage. The in-memory flag still hides the toast for this page.
  }
}

/**
 * Format a purchase timestamp as a short relative phrase.
 *
 * The server sends a UNIX timestamp rather than a rendered string precisely so
 * this runs at display time — the payload is cached, and a pre-rendered
 * "2 min ago" would freeze at whatever moment the cache was written.
 *
 * Anything past a day collapses to "recently": an order from three weeks ago
 * announced as "21 days ago" argues against the point the toast is making.
 *
 * @param {number} timestamp UNIX seconds.
 * @param {Object} i18n      Translated sentence pieces.
 * @return {string} Localised phrase, or an empty string when unusable.
 */
function relativeTime(timestamp, i18n) {
  if (!timestamp || typeof timestamp !== "number") {
    return "";
  }

  const seconds = Math.floor(Date.now() / 1000) - timestamp;

  // Clock skew between server and visitor can make this negative; treat any
  // non-positive age as "just now" rather than printing a negative count.
  if (seconds < 60) {
    return i18n.justNow || "";
  }

  if (seconds < 3600) {
    return (i18n.minutes || "").replace("%d", String(Math.floor(seconds / 60)));
  }

  if (seconds < 86400) {
    return (i18n.hours || "").replace("%d", String(Math.floor(seconds / 3600)));
  }

  return i18n.recently || "";
}

const { state } = store("shadcn/live-purchase", {
  state: {
    /**
     * The entry currently on screen, or null.
     */
    get current() {
      const context = getContext();
      const entries = context.entries;

      if (!Array.isArray(entries) || entries.length === 0) {
        return null;
      }

      return entries[context.index % entries.length] || null;
    },

    get isVisible() {
      const context = getContext();
      return !context.dismissed && context.showing && !!state.current;
    },

    get name() {
      return state.current?.name || "";
    },

    get product() {
      return state.current?.product || "";
    },

    get image() {
      return state.current?.image || "";
    },

    get hasImage() {
      return !!state.current?.image;
    },

    get locationText() {
      const context = getContext();
      const location = state.current?.location;

      if (!location) {
        return "";
      }

      return `${context.i18n?.from || ""} ${location}`.trim();
    },

    /**
     * The verb phrase only appears when there is a product to attach it to.
     */
    get purchasedText() {
      const context = getContext();
      return state.current?.product ? context.i18n?.purchased || "" : "";
    },

    get timeText() {
      const context = getContext();
      const entry = state.current;

      if (!entry) {
        return "";
      }

      // `custom` entries carry an author-written phrase; `orders` entries
      // carry a timestamp this formats.
      if (entry.timeText) {
        return entry.timeText;
      }

      return relativeTime(entry.time, context.i18n || {});
    },

    get dismissible() {
      const context = getContext();
      return !!context.dismissible && !!state.current;
    },
  },

  actions: {
    dismiss() {
      const context = getContext();
      context.dismissed = true;
      context.showing = false;
      writeDismissed();
    },
  },

  callbacks: {
    /**
     * Mount: seed runtime keys, then start the rotation unless the visitor
     * already dismissed it this session.
     */
    *start() {
      const context = getContext();

      context.index = 0;
      context.showing = false;
      context.lastFetch = 0;
      context.stopped = false;

      if (readDismissed()) {
        context.dismissed = true;
        return;
      }

      yield runLoop(context);
    },
  },
});

/**
 * Build a round of simulated entries from the catalogue pool.
 *
 * The picking happens here rather than in PHP so it survives page caching: a
 * server-built sequence would be frozen into the cached HTML, handing every
 * visitor the same purchases in the same order, with timestamps that drift
 * further from now the longer the cache lives. Choosing per visitor costs
 * nothing and keeps both the selection and the clock honest to the moment.
 *
 * No buyer is invented — the subject is a fixed generic word — so the only
 * thing drawn from the shop is which product to name.
 *
 * @param {Array}  pool    Catalogue items, each { product, image? }.
 * @param {number} count   How many entries to build.
 * @param {string} subject Localised generic subject, e.g. "Someone".
 * @return {Array} Entries in the same shape the orders feed returns.
 */
function buildSimulated(pool, count, subject) {
  if (!Array.isArray(pool) || pool.length === 0) {
    return [];
  }

  // Shuffle a copy so a round never repeats a product, then take what is
  // needed. With a pool smaller than the count the round is simply shorter,
  // which reads better than the same item twice in one cycle.
  const shuffled = pool.slice();
  for (let i = shuffled.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
  }

  const picked = shuffled.slice(0, Math.min(count, shuffled.length));
  const now = Math.floor(Date.now() / 1000);

  // Ages inside the last three quarters of an hour, sorted newest first so the
  // sequence reads like a feed rather than a random walk through time.
  //
  // The ceiling matters more than it looks. relativeTime() collapses anything
  // past an hour into "1 hr ago", so a wider spread does not read as variety —
  // it reads as every notification carrying the same stale timestamp. Staying
  // under the hour keeps the phrasing in minutes, where the numbers differ.
  const ages = picked
    .map(() => 45 + Math.floor(Math.random() * 2700))
    .sort((a, b) => a - b);

  return picked.map((item, index) => {
    const entry = {
      name: subject,
      product: item.product,
      time: now - ages[index],
    };

    if (item.image) {
      entry.image = item.image;
    }

    return entry;
  });
}

/**
 * Sleep helper. Resolves immediately for non-positive durations so a
 * misconfigured interval cannot wedge the loop.
 *
 * @param {number} ms Milliseconds.
 * @return {Promise<void>} Resolves after the delay.
 */
function wait(ms) {
  return new Promise((resolve) => {
    window.setTimeout(resolve, Math.max(0, ms));
  });
}

/**
 * Block until the tab is visible.
 *
 * A background tab neither shows the toast nor should spend the visitor's
 * request budget, so the loop parks here instead of rotating into the void.
 *
 * @return {Promise<void>} Resolves once the document is visible.
 */
function whenVisible() {
  if (document.visibilityState === "visible") {
    return Promise.resolve();
  }

  return new Promise((resolve) => {
    const onChange = () => {
      if (document.visibilityState === "visible") {
        document.removeEventListener("visibilitychange", onChange);
        resolve();
      }
    };

    document.addEventListener("visibilitychange", onChange);
  });
}

/**
 * Fetch one batch of entries from the signed feed.
 *
 * Any failure — network, 4xx, 429, malformed body — stops the loop rather than
 * retrying. A rate-limited client that retries harder is the exact behaviour
 * the server's limiter exists to punish, and there is nothing on this page
 * important enough to justify pushing.
 *
 * @param {Object} context Element context.
 * @return {Promise<Array>} Entries, empty on any failure.
 */
async function fetchBatch(context) {
  const feed = context.feed;

  if (!feed || !feed.url || !feed.config || !feed.signature) {
    context.stopped = true;
    return [];
  }

  const url = `${feed.url}?c=${encodeURIComponent(feed.config)}&s=${encodeURIComponent(feed.signature)}`;

  try {
    const response = await window.fetch(url, {
      credentials: "same-origin",
      headers: { Accept: "application/json" },
    });

    if (!response.ok) {
      context.stopped = true;
      return [];
    }

    const body = await response.json();
    const entries = Array.isArray(body?.entries) ? body.entries : [];

    context.lastFetch = Date.now();

    // An empty feed is a settled answer, not a hiccup: the shop is under its
    // minimum-orders threshold, or has nothing recent. Stop asking.
    if (entries.length === 0) {
      context.stopped = true;
    }

    return entries;
  } catch (e) {
    context.stopped = true;
    return [];
  }
}

/**
 * The rotation.
 *
 * @param {Object} context Element context.
 */
async function runLoop(context) {
  const rotation = (Number(context.rotationInterval) || 12) * 1000;
  const display = (Number(context.displayDuration) || 6) * 1000;
  const isOrders = context.source === "orders";
  const batch = Number(context.batchSize) || 10;
  const subject = context.i18n?.someone || "";

  if (isOrders) {
    context.entries = await fetchBatch(context);
  } else {
    context.entries = buildSimulated(context.pool, batch, subject);
  }

  // Nothing to show and nothing coming. Leave the region empty rather than
  // mounting a blank toast.
  if (!Array.isArray(context.entries) || context.entries.length === 0) {
    return;
  }

  // A beat before the first toast so it reads as an event rather than as part
  // of the page load.
  await wait(rotation);

  while (!context.dismissed) {
    await whenVisible();

    if (context.dismissed) {
      return;
    }

    if (context.index >= context.entries.length) {
      if (isOrders) {
        // Refetch only if the floor has passed, otherwise replay what is
        // already here — the server would mostly hand back the same rows.
        if (
          !context.stopped &&
          Date.now() - context.lastFetch >= MIN_FETCH_INTERVAL
        ) {
          const fresh = await fetchBatch(context);

          if (fresh.length > 0) {
            context.entries = fresh;
          }
        }
      } else {
        // Simulated rounds are free to rebuild: a new draw from the pool with
        // fresh timestamps, so a long visit does not loop the same products in
        // the same order with ages frozen at page load.
        context.entries = buildSimulated(context.pool, batch, subject);
      }

      context.index = 0;
    }

    context.showing = true;
    await wait(display);
    context.showing = false;

    // Let the fade-out finish before swapping the content underneath it.
    await wait(EXIT_MS);
    context.index += 1;

    // The gap between toasts. Rotation is measured start-to-start, so the
    // pause is whatever is left once the toast has been on screen and has
    // finished leaving.
    await wait(Math.max(600, rotation - display - EXIT_MS));
  }
}
