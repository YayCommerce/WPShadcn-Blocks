<?php
/**
 * Per-IP, fixed-window rate limiter for the public form submit route.
 *
 * A different shape from ShadcnAi\RateLimiter (site-wide daily budget): this
 * one buckets by client IP and a short window, because the route is open to
 * logged-out visitors and the resource being protected is the recipient's
 * inbox, not a billed external credential.
 *
 * Shares that class's storage technique: a direct atomic SQL increment
 * against wp_options instead of get/set_transient (read-then-write is a
 * TOCTOU race under concurrent requests) or wp_cache_incr (only
 * cross-request-safe with a persistent object cache, which cannot be
 * assumed). The IP is stored hashed — options rows must not accumulate raw
 * visitor PII.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\Form;

defined( 'ABSPATH' ) || exit;

class RateLimiter {

	/**
	 * Submissions allowed per IP per window. A human retrying a failed send
	 * stays comfortably under this; a script hammering the route does not.
	 */
	const LIMIT_PER_WINDOW = 5;

	/**
	 * Window length in seconds (10 minutes).
	 */
	const WINDOW_SECONDS = 600;

	/**
	 * @param string $ip The client IP (REMOTE_ADDR).
	 * @return bool True if this request is allowed under the IP's current window.
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

		// Fail closed on a DB error: silently allowing would make an outage
		// indistinguishable from "no submissions yet".
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

		return $count <= self::LIMIT_PER_WINDOW;
	}

	/**
	 * Fixed-window bucket index: changes every WINDOW_SECONDS.
	 *
	 * @return int
	 */
	private function current_bucket() {
		return (int) floor( time() / self::WINDOW_SECONDS );
	}

	/**
	 * @param string $ip     The client IP.
	 * @param int    $bucket Window bucket index.
	 * @return string
	 */
	private function option_name( $ip, $bucket ) {
		// Hashed so no raw visitor IP persists in the database; truncated
		// because the full digest adds nothing against collision here.
		// The bucket is zero-padded so the string comparison in cleanup()
		// orders buckets numerically.
		return 'shadcn_form_rl_' . substr( md5( (string) $ip ), 0, 16 ) . '_' . sprintf( '%010d', $bucket );
	}

	/**
	 * Drop this IP's rows from windows before the previous one, bounding
	 * growth to ~2 rows per active IP with no cron. Previous window is kept
	 * so a request straddling a boundary never deletes a row still in use.
	 *
	 * @param string $ip The client IP.
	 */
	private function cleanup( $ip ) {
		global $wpdb;

		$stale_prefix = 'shadcn_form_rl_' . substr( md5( (string) $ip ), 0, 16 ) . '_';

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
