<?php
/**
 * Per-IP, fixed-window rate limiter for the public live-purchase feed.
 *
 * Same technique as ShadcnBlocks\Form\RateLimiter — atomic SQL increment
 * against wp_options rather than get/set_transient (read-then-write is a
 * TOCTOU race under concurrent requests) or wp_cache_incr (only
 * cross-request-safe with a persistent object cache, which cannot be
 * assumed), with the IP hashed so no raw visitor PII lands in options.
 *
 * Different budget, though, and a different thing being protected. The form
 * limiter guards an inbox against 5 sends per window; this one guards order
 * data against sampling. A tab left open makes roughly two requests per ten
 * minutes (a batch lasts `batchSize * rotationInterval` seconds), so 20 is
 * generous for a reader and useless for a scraper trying to reconstruct order
 * velocity.
 *
 * The limit, window and option prefix are constructor arguments rather than
 * constants: this is the third limiter in the plugin and the first that could
 * absorb another. Folding Form\RateLimiter into it is a sensible follow-up,
 * deliberately not done here to keep a working email path untouched.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\LivePurchase;

defined( 'ABSPATH' ) || exit;

/**
 * Fixed-window per-IP request budget.
 */
class RateLimiter {

	/**
	 * Option-name prefix for this limiter's counter rows.
	 *
	 * @var string
	 */
	private $prefix;

	/**
	 * Requests allowed per IP per window.
	 *
	 * @var int
	 */
	private $limit;

	/**
	 * Window length in seconds.
	 *
	 * @var int
	 */
	private $window;

	/**
	 * @param string $prefix Option-name prefix (keep it short; it is indexed).
	 * @param int    $limit  Requests allowed per IP per window.
	 * @param int    $window Window length in seconds.
	 */
	public function __construct( $prefix = 'shadcn_lp_rl_', $limit = 20, $window = 600 ) {
		$this->prefix = (string) $prefix;
		$this->limit  = (int) $limit;
		$this->window = (int) $window;
	}

	/**
	 * Count this request against the IP's window.
	 *
	 * @param string $ip The client IP (REMOTE_ADDR).
	 *
	 * @return bool True when the request is within budget.
	 */
	public function is_allowed( $ip ) {
		global $wpdb;

		$option_name = $this->option_name( $ip, $this->current_bucket() );

		// phpcs:ignore WordPress.DB.DirectDatabaseQuery -- atomic increment has no Settings-API equivalent.
		$write_result = $wpdb->query(
			$wpdb->prepare(
				"INSERT INTO {$wpdb->options} (option_name, option_value, autoload)
				VALUES (%s, '1', 'no')
				ON DUPLICATE KEY UPDATE option_value = option_value + 1",
				$option_name
			)
		);

		// Fail closed on a DB error, matching the form limiter: silently
		// allowing would make an outage look like an idle endpoint.
		if ( false === $write_result ) {
			return false;
		}

		// phpcs:ignore WordPress.DB.DirectDatabaseQuery -- reading the just-incremented row.
		$count = (int) $wpdb->get_var(
			$wpdb->prepare(
				"SELECT option_value FROM {$wpdb->options} WHERE option_name = %s",
				$option_name
			)
		);

		$this->cleanup( $ip );

		return $count <= $this->limit;
	}

	/**
	 * Fixed-window bucket index; changes every window.
	 *
	 * @return int
	 */
	private function current_bucket() {
		return (int) floor( time() / $this->window );
	}

	/**
	 * @param string $ip     The client IP.
	 * @param int    $bucket Window bucket index.
	 *
	 * @return string
	 */
	private function option_name( $ip, $bucket ) {
		// Hashed so no raw visitor IP persists; the bucket is zero-padded so
		// the string comparison in cleanup() orders buckets numerically.
		return $this->prefix . substr( md5( (string) $ip ), 0, 16 ) . '_' . sprintf( '%010d', $bucket );
	}

	/**
	 * Drop this IP's rows from windows older than the previous one, bounding
	 * growth to ~2 rows per active IP with no cron. The previous window is
	 * kept so a request straddling a boundary never deletes a live row.
	 *
	 * @param string $ip The client IP.
	 */
	private function cleanup( $ip ) {
		global $wpdb;

		$stale_prefix = $this->prefix . substr( md5( (string) $ip ), 0, 16 ) . '_';

		// phpcs:ignore WordPress.DB.DirectDatabaseQuery -- prefix delete has no Settings-API equivalent.
		$wpdb->query(
			$wpdb->prepare(
				"DELETE FROM {$wpdb->options}
				WHERE option_name LIKE %s
				AND option_name < %s",
				$wpdb->esc_like( $stale_prefix ) . '%',
				$stale_prefix . sprintf( '%010d', $this->current_bucket() - 1 )
			)
		);
	}
}
