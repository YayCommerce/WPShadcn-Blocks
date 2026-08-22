/**
 * WordPress dependencies
 */
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import {
  Notice,
  PanelBody,
  RangeControl,
  ToggleControl,
  __experimentalToggleGroupControl as ToggleGroupControl,
  __experimentalToggleGroupControlOption as ToggleGroupControlOption,
} from "@wordpress/components";
import { __, sprintf } from "@wordpress/i18n";
import apiFetch from "@wordpress/api-fetch";
import { useEffect, useState } from "@wordpress/element";

/**
 * Live Purchase — editor.
 *
 * The real toast is fixed-position and printed in the footer, so there is
 * nothing for the canvas to show in place. This renders a standalone sample
 * instead: the same markup and styling as the front end, with fixed sample
 * content that follows the field toggles, and deliberately no data fetching —
 * a brand-new shop with zero orders must still see what it is configuring.
 *
 * Every numeric range below mirrors the clamps in
 * ShadcnBlocks\LivePurchase\RestController and in the block's render.php. A
 * control that let an author pick a value the server quietly reduces would be
 * worse than no control at all.
 */

/**
 * Sample entry for the canvas. Never leaves the editor.
 */
const SAMPLE = {
  name: __("Sarah M.", "shadcn-blocks"),
  location: __("Portland, OR", "shadcn-blocks"),
  product: __("Ceramic Mug", "shadcn-blocks"),
  time: __("4 min ago", "shadcn-blocks"),
  // Simulated mode invents no one; this is the whole subject.
  subject: __("Someone", "shadcn-blocks"),
};

export default function Edit({ attributes, setAttributes }) {
  const {
    source,
    showName,
    showLocation,
    showProduct,
    showImage,
    showTime,
    rotationInterval,
    displayDuration,
    batchSize,
    minOrders,
    lookbackDays,
    dismissible,
    hideOnMobile,
  } = attributes;

  const isOrders = source !== "simulated";

  // Mirrors the guard in render.php: with every text field off there is
  // nothing to say, so the block prints nothing at all on the front end.
  const nothingToShow = isOrders
    ? !showName && !showProduct && !showLocation
    : !showProduct;

  const blockProps = useBlockProps({
    className: "wp-block-shadcn-live-purchase-preview",
  });

  // How many orders would actually qualify right now.
  //
  // `minOrders` is otherwise an invisible setting: an author sets it to 8, the
  // shop has 3, the toast never appears on the site and nothing explains why.
  // This asks WooCommerce's own authenticated route for the count only — the
  // editor user can already read orders, so nothing is exposed that they could
  // not see anyway, and the public feed endpoint is not touched.
  //
  // Best-effort: a shop whose user lacks the capability, or an older
  // WooCommerce, simply leaves the count unknown and the notice unshown.
  const [orderCount, setOrderCount] = useState(null);

  useEffect(() => {
    if (!isOrders) {
      return undefined;
    }

    let cancelled = false;
    const days = lookbackDays ?? 30;
    const after = new Date(Date.now() - days * 86400000).toISOString();

    apiFetch({
      path: `/wc/v3/orders?per_page=1&status=processing,completed&after=${encodeURIComponent(after)}`,
      parse: false,
    })
      .then((response) => {
        if (cancelled) {
          return;
        }
        const total = parseInt(response.headers.get("X-WP-Total"), 10);
        setOrderCount(Number.isNaN(total) ? null : total);
      })
      .catch(() => {
        if (!cancelled) {
          setOrderCount(null);
        }
      });

    return () => {
      cancelled = true;
    };
  }, [isOrders, lookbackDays]);

  const belowThreshold =
    isOrders && orderCount !== null && orderCount < (minOrders ?? 8);

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Source", "shadcn-blocks")}>
          <ToggleGroupControl
            __next40pxDefaultSize
            __nextHasNoMarginBottom
            isBlock
            label={__("Where entries come from", "shadcn-blocks")}
            value={source ?? "orders"}
            onChange={(value) => setAttributes({ source: value })}
          >
            <ToggleGroupControlOption
              label={__("Real orders", "shadcn-blocks")}
              value="orders"
            />
            <ToggleGroupControlOption
              label={__("Simulated", "shadcn-blocks")}
              value="simulated"
            />
          </ToggleGroupControl>
        </PanelBody>

        {isOrders && (
          <PanelBody title={__("What to show", "shadcn-blocks")}>
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Buyer name", "shadcn-blocks")}
              help={__(
                "Shown as a first name and a last initial. Full names never appear.",
                "shadcn-blocks"
              )}
              checked={!!showName}
              onChange={(value) => setAttributes({ showName: value })}
            />
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Location", "shadcn-blocks")}
              help={__(
                "City and region only. In a small town a first name plus a city can be enough to identify the buyer — leave this off unless you have a reason.",
                "shadcn-blocks"
              )}
              checked={!!showLocation}
              onChange={(value) => setAttributes({ showLocation: value })}
            />
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Product", "shadcn-blocks")}
              checked={!!showProduct}
              onChange={(value) => setAttributes({ showProduct: value })}
            />
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Product image", "shadcn-blocks")}
              checked={!!showImage}
              onChange={(value) => setAttributes({ showImage: value })}
            />
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Time since the order", "shadcn-blocks")}
              checked={!!showTime}
              onChange={(value) => setAttributes({ showTime: value })}
            />
          </PanelBody>
        )}

        {isOrders && (
          <PanelBody
            title={__("Which orders", "shadcn-blocks")}
            initialOpen={false}
          >
            {belowThreshold && (
              <Notice status="warning" isDismissible={false}>
                {sprintf(
                  /* translators: 1: number of qualifying orders, 2: the threshold. */
                  __(
                    "This shop has %1$d qualifying order(s) in the chosen window, and the toast stays hidden below %2$d. Lower the threshold, widen the window, or wait for more orders.",
                    "shadcn-blocks"
                  ),
                  orderCount,
                  minOrders ?? 8
                )}
              </Notice>
            )}

            <RangeControl
              __nextHasNoMarginBottom
              label={__("Stay quiet below", "shadcn-blocks")}
              help={__(
                "A shop with only a handful of recent orders replays the same few people all day, which reads as less credible than showing nothing. Below this many matching orders the toast does not appear.",
                "shadcn-blocks"
              )}
              value={minOrders ?? 8}
              onChange={(value) => setAttributes({ minOrders: value })}
              min={0}
              max={100}
            />
            <RangeControl
              __nextHasNoMarginBottom
              label={__("Look back (days)", "shadcn-blocks")}
              value={lookbackDays ?? 30}
              onChange={(value) => setAttributes({ lookbackDays: value })}
              min={1}
              max={365}
            />
            <RangeControl
              __nextHasNoMarginBottom
              label={__("Orders per fetch", "shadcn-blocks")}
              help={__(
                "Entries are fetched in batches and rotated locally, so a larger batch means fewer requests.",
                "shadcn-blocks"
              )}
              value={batchSize ?? 10}
              onChange={(value) => setAttributes({ batchSize: value })}
              min={1}
              max={20}
            />
          </PanelBody>
        )}

        {!isOrders && (
          <PanelBody title={__("Simulated purchases", "shadcn-blocks")}>
            <Notice status="warning" isDismissible={false}>
              {__(
                "These notifications are generated, not real. Presenting invented purchases as genuine is restricted in the EU and the US — use this for a demo or a staging site, and think carefully before running it on a live shop.",
                "shadcn-blocks"
              )}
            </Notice>

            <p className="wp-block-shadcn-live-purchase__panel-note">
              {__(
                "Products are drawn from your best sellers, in stock and visible in the catalogue. No buyer is invented: every notification reads \u201cSomeone just purchased\u2026\u201d, with no name and no location.",
                "shadcn-blocks"
              )}
            </p>

            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Product image", "shadcn-blocks")}
              checked={!!showImage}
              onChange={(value) => setAttributes({ showImage: value })}
            />
            <ToggleControl
              __nextHasNoMarginBottom
              label={__("Time since the purchase", "shadcn-blocks")}
              help={__(
                "Ages are spread across the last couple of hours and recalculated for each visitor.",
                "shadcn-blocks"
              )}
              checked={!!showTime}
              onChange={(value) => setAttributes({ showTime: value })}
            />
          </PanelBody>
        )}

        <PanelBody title={__("Timing", "shadcn-blocks")} initialOpen={false}>
          <RangeControl
            __nextHasNoMarginBottom
            label={__("Seconds between toasts", "shadcn-blocks")}
            value={rotationInterval ?? 12}
            onChange={(value) => setAttributes({ rotationInterval: value })}
            min={4}
            max={120}
          />
          <RangeControl
            __nextHasNoMarginBottom
            label={__("Seconds on screen", "shadcn-blocks")}
            help={__(
              "Kept below the interval, so one toast finishes leaving before the next arrives.",
              "shadcn-blocks"
            )}
            value={displayDuration ?? 6}
            onChange={(value) => setAttributes({ displayDuration: value })}
            min={2}
            // A toast that outlasts its own interval has no gap to leave in.
            max={Math.max(2, (rotationInterval ?? 12) - 1)}
          />
          <ToggleControl
            __nextHasNoMarginBottom
            label={__("Show a dismiss button", "shadcn-blocks")}
            help={__(
              "Dismissing hides the toast for the rest of the visit, not forever.",
              "shadcn-blocks"
            )}
            checked={!!dismissible}
            onChange={(value) => setAttributes({ dismissible: value })}
          />
          <ToggleControl
            __nextHasNoMarginBottom
            label={__("Hide on small screens", "shadcn-blocks")}
            help={__(
              "Worth turning on for shops: a corner toast can land on top of the add-to-cart button on a phone.",
              "shadcn-blocks"
            )}
            checked={!!hideOnMobile}
            onChange={(value) => setAttributes({ hideOnMobile: value })}
          />
        </PanelBody>
      </InspectorControls>

      <div {...blockProps}>
        {nothingToShow && (
          <Notice status="warning" isDismissible={false}>
            {__(
              "Name, location and product are all switched off, so there is nothing to say and the block will not appear on the site.",
              "shadcn-blocks"
            )}
          </Notice>
        )}

        <div className="wp-block-shadcn-live-purchase__toast">
          {showImage && (
            <span
              className="wp-block-shadcn-live-purchase__thumb is-shown is-placeholder"
              aria-hidden="true"
            />
          )}
          <div className="wp-block-shadcn-live-purchase__body">
            <p className="wp-block-shadcn-live-purchase__line">
              {(isOrders ? showName : true) && (
                <strong>{isOrders ? SAMPLE.name : SAMPLE.subject}</strong>
              )}{" "}
              {isOrders && showLocation && (
                <span>
                  {__("from", "shadcn-blocks")} {SAMPLE.location}
                </span>
              )}{" "}
              {showProduct && (
                <>
                  <span>{__("just purchased", "shadcn-blocks")}</span>{" "}
                  <strong>{SAMPLE.product}</strong>
                </>
              )}
            </p>
            {showTime && (
              <p className="wp-block-shadcn-live-purchase__time">
                {SAMPLE.time}
              </p>
            )}
          </div>
          {dismissible && (
            <span
              className="wp-block-shadcn-live-purchase__dismiss is-shown"
              aria-hidden="true"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                strokeWidth="2"
                strokeLinecap="round"
                strokeLinejoin="round"
              >
                <path d="M18 6 6 18" style={{ fill: "none" }}></path>
                <path d="m6 6 12 12" style={{ fill: "none" }}></path>
              </svg>
            </span>
          )}
        </div>

        <p className="wp-block-shadcn-live-purchase__note">
          {isOrders
            ? __(
                "Preview with sample data. On the site this floats in the corner of every page carrying this block, showing real recent orders.",
                "shadcn-blocks"
              )
            : __(
                "Preview with sample data. On the site this floats in the corner and rotates through generated purchases of your products.",
                "shadcn-blocks"
              )}
        </p>
      </div>
    </>
  );
}
