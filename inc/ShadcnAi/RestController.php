<?php
/**
 * REST route for the Shadcn AI: prompt in, plan validated, resolved
 * markup + warnings out. Owns the security trust boundary — permission
 * check, rate limit, LLM response shape validation, and slug whitelisting
 * all happen here before anything reaches PlanResolver.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\ShadcnAi;

use ShadcnBlocks\Traits\SingletonTrait;

class RestController {
	use SingletonTrait;

	/**
	 * Reject/truncate plans larger than this — an unbounded plan is a
	 * resource-exhaustion vector, not just a correctness concern.
	 */
	const MAX_PLAN_ENTRIES = 10;

	private $rate_limiter;

	protected function __construct() {
		$this->rate_limiter = new RateLimiter();

		add_action( 'rest_api_init', array( $this, 'register_route' ) );
	}

	public function register_route() {
		register_rest_route(
			'shadcn/v1',
			'/ai/generate',
			array(
				'methods'             => 'POST',
				'callback'            => array( $this, 'handle_generate' ),
				'permission_callback' => array( $this, 'check_permission' ),
				'args'                => array(
					'prompt' => array(
						'required'          => true,
						'type'              => 'string',
						'sanitize_callback' => 'sanitize_text_field',
					),
					// Ask for Server-Sent Events: progress frames relayed
					// from the AI proxy while the model writes, then a final
					// `result {markup, warnings}` once the plan is resolved
					// into real block markup here.
					'stream' => array(
						'required' => false,
						'type'     => 'boolean',
						'default'  => false,
					),
				),
			)
		);

		// The AI proxy's registration callback: when this site self-registers,
		// the proxy calls back here with a fresh challenge — only a live site
		// running this code can echo it, which is what earns the site token.
		// Public by design: it discloses nothing but the plugin's presence,
		// which the register flow needs.
		register_rest_route(
			'shadcn/v1',
			'/ai/ping',
			array(
				'methods'             => \WP_REST_Server::READABLE,
				'callback'            => array( $this, 'handle_ping' ),
				'permission_callback' => '__return_true',
				'args'                => array(
					'challenge' => array(
						'type'      => 'string',
						'required'  => false,
						'maxLength' => 64,
					),
				),
			)
		);
	}

	/**
	 * @param \WP_REST_Request $request the proxy's verification call
	 * @return \WP_REST_Response
	 */
	public function handle_ping( \WP_REST_Request $request ) {
		return rest_ensure_response(
			array(
				'shadcn_ai' => true,
				'challenge' => (string) $request['challenge'],
			)
		);
	}

	/**
	 * Gated on edit_theme_options (not edit_posts) — this route spends an
	 * admin-configured, cost-bearing external credential; edit_posts would
	 * let any Contributor-level account independently drive billed requests.
	 *
	 * The theme requirement is re-checked here rather than trusted from
	 * registration time: a theme switch mid-session must not leave a live
	 * route that spends money to produce markup the active theme cannot
	 * render.
	 */
	public function check_permission() {
		if ( ! Caller::is_supported() ) {
			return new \WP_Error(
				'shadcn_ai_unsupported_theme',
				__( 'Shadcn AI requires the Shadcn theme, or a child theme of it, to be active.', 'shadcn-blocks' ),
				array( 'status' => 403 )
			);
		}

		return current_user_can( 'edit_theme_options' );
	}

	public function handle_generate( \WP_REST_Request $request ) {
		// Rate limit is checked FIRST, before any catalog build or LLM call,
		// to fail closed on cost rather than just on abuse. The cap is
		// site-wide per day, so it does not read the current user.
		if ( ! $this->rate_limiter->is_allowed() ) {
			return new \WP_Error(
				'shadcn_ai_rate_limited',
				__( 'This site has reached the Shadcn AI request limit for today. Please try again tomorrow.', 'shadcn-blocks' ),
				array( 'status' => 429 )
			);
		}

		$prompt          = $request->get_param( 'prompt' );
		$catalog_builder = new CatalogBuilder();
		$catalog         = $catalog_builder->build();
		$site_context    = ( new SiteContextBuilder() )->build();

		if ( $request->get_param( 'stream' ) ) {
			$this->handle_generate_stream( $prompt, $catalog, $site_context ); // Never returns.
		}

		try {
			// The proxy running on this very install answers in-process — no
			// HTTP loop back to ourselves, no token; remote otherwise.
			$llm_client = InProcessProxy::available() ? new InProcessProxy() : new LlmClient();
			$raw_plan   = $llm_client->request( $prompt, $site_context );
		} catch ( LlmRequestException $e ) {
			return new \WP_Error(
				'shadcn_ai_llm_error',
				$e->getMessage(),
				array( 'status' => 502 )
			);
		}

		list( $valid_plan, $warnings ) = $this->validate_and_filter_plan( $raw_plan, $catalog );

		if ( empty( $valid_plan ) ) {
			// Surface WHY every entry was rejected (unknown slug, malformed
			// shape, etc.) instead of discarding $warnings here — this is
			// the only diagnostic signal available when the whole plan
			// fails, and without it there's no way to tell "the LLM
			// hallucinated a slug" apart from "the LLM returned garbage
			// shape" apart from "the LLM returned zero entries". Also
			// surface catalog/raw-plan sizes: an empty $warnings array with
			// a non-empty catalog means the LLM itself returned zero
			// entries (the foreach loop in validate_and_filter_plan never
			// ran); an empty catalog means CatalogBuilder found no patterns
			// to send in the first place — two very different root causes.
			return new \WP_Error(
				'shadcn_ai_empty_plan',
				__( 'No valid layout could be generated from that prompt.', 'shadcn-blocks' ),
				array(
					'status'         => 422,
					'warnings'       => $warnings,
					'catalog_count'  => count( $catalog ),
					'raw_plan_count' => is_array( $raw_plan ) ? count( $raw_plan ) : null,
				)
			);
		}

		$resolver = new PlanResolver();

		try {
			$markup = $resolver->resolve_plan( $valid_plan );
		} catch ( UnknownPatternSlugException $e ) {
			// The whitelist filter below should have already caught this —
			// PlanResolver's own internal guard tripping here means our
			// filter had a bug, not that the LLM is untrustworthy. Fail
			// closed rather than surface a fatal.
			return new \WP_Error(
				'shadcn_ai_resolve_error',
				__( 'Layout could not be generated.', 'shadcn-blocks' ),
				array( 'status' => 500 )
			);
		}

		return rest_ensure_response(
			array(
				'markup'   => $markup,
				'warnings' => $warnings,
			)
		);
	}

	/**
	 * Serve the generation as Server-Sent Events and exit. The proxy's
	 * progress frames (`status`, `entry`) are relayed to the browser as they
	 * arrive; its final `plan` is intercepted, validated and resolved into
	 * real block markup HERE — the trust boundary does not move just because
	 * the transport streams — and leaves as one `result {markup, warnings}`
	 * event. A stream that ends without `result` or `error` is a dropped
	 * connection, and the browser treats it as one.
	 *
	 * @param string $prompt       The user's design request.
	 * @param array  $catalog      Pattern catalog (slug whitelist source).
	 * @param array  $site_context Site identity hints for the proxy.
	 */
	private function handle_generate_stream( $prompt, array $catalog, array $site_context ) {
		// The relay outlives PHP's default limit on a slow generation; the
		// proxy hop is uncapped and throughput-guarded, so match it.
		if ( function_exists( 'set_time_limit' ) ) {
			set_time_limit( 300 );
		}

		self::begin_event_stream();

		$plan       = null;
		$upstream_error = false;

		try {
			// Same selection as the blocking path: the proxy on this very
			// install answers in-process, emitting the identical event
			// sequence, so everything below is transport-blind.
			$llm_client = InProcessProxy::available() ? new InProcessProxy() : new LlmClient();
			$llm_client->request_stream(
				$prompt,
				$site_context,
				function ( $event, array $data ) use ( &$plan, &$upstream_error ) {
					if ( 'plan' === $event ) {
						// Intercepted, not relayed: raw slugs mean nothing to
						// the browser until they survive the whitelist below.
						$plan = isset( $data['plan'] ) && is_array( $data['plan'] ) ? $data['plan'] : array();
						return;
					}
					if ( 'error' === $event ) {
						$upstream_error = true;
					}
					self::emit( $event, $data );
				}
			);
		} catch ( LlmRequestException $e ) {
			self::emit( 'error', array( 'message' => $e->getMessage() ) );
			exit;
		}

		if ( $upstream_error ) {
			exit; // The proxy's own error frame was already relayed.
		}

		if ( null === $plan ) {
			self::emit(
				'error',
				array( 'message' => __( 'The AI service stopped responding partway through.', 'shadcn-blocks' ) )
			);
			exit;
		}

		// The wait is over but the browser is not done waiting: naming the
		// build step covers the resolve that follows.
		self::emit( 'status', array( 'stage' => 'building' ) );

		list( $valid_plan, $warnings ) = $this->validate_and_filter_plan( $plan, $catalog );

		if ( empty( $valid_plan ) ) {
			self::emit(
				'error',
				array(
					'message'  => __( 'No valid layout could be generated from that prompt.', 'shadcn-blocks' ),
					'warnings' => $warnings,
				)
			);
			exit;
		}

		try {
			$markup = ( new PlanResolver() )->resolve_plan( $valid_plan );
		} catch ( UnknownPatternSlugException $e ) {
			self::emit(
				'error',
				array( 'message' => __( 'Layout could not be generated.', 'shadcn-blocks' ) )
			);
			exit;
		}

		self::emit(
			'result',
			array(
				'markup'   => $markup,
				'warnings' => $warnings,
			)
		);
		exit;
	}

	/**
	 * Take the response over from WordPress and hold it open: SSE content
	 * type, no caching, opt out of reverse-proxy buffering, drop every
	 * output buffer so each event leaves as it is written. Mirrors the
	 * proxy's transport — the protocol's home is there.
	 */
	private static function begin_event_stream() {
		header( 'Content-Type: text/event-stream; charset=utf-8' );
		header( 'Cache-Control: no-cache, no-store, must-revalidate' );
		header( 'X-Accel-Buffering: no' );

		@ini_set( 'zlib.output_compression', '0' ); // phpcs:ignore WordPress.PHP.NoSilencedErrors
		@ini_set( 'implicit_flush', '1' ); // phpcs:ignore WordPress.PHP.NoSilencedErrors
		while ( ob_get_level() > 0 ) {
			ob_end_flush();
		}
		ob_implicit_flush( true );
	}

	/**
	 * @param string $event SSE event name.
	 * @param array  $data  JSON payload.
	 */
	private static function emit( $event, array $data ) {
		echo 'event: ' . $event . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput -- SSE protocol frame, name is a literal.
		echo 'data: ' . wp_json_encode( $data ) . "\n\n"; // phpcs:ignore WordPress.Security.EscapeOutput -- JSON-encoded SSE payload.
		flush();
	}

	/**
	 * Validate the LLM's decoded response shape, then filter to only
	 * whitelisted pattern slugs, collecting a human-readable warning for
	 * every dropped/rejected entry instead of silently discarding them.
	 *
	 * @return array{0: array, 1: string[]} [ valid plan entries, warnings ]
	 */
	private function validate_and_filter_plan( $raw_plan, array $catalog ) {
		$warnings = array();

		if ( ! is_array( $raw_plan ) ) {
			return array( array(), array( __( 'AI response was not in the expected format.', 'shadcn-blocks' ) ) );
		}

		$total_entries = count( $raw_plan );
		$entries       = array_slice( $raw_plan, 0, self::MAX_PLAN_ENTRIES );

		if ( $total_entries > self::MAX_PLAN_ENTRIES ) {
			$warnings[] = sprintf(
				/* translators: %d: max number of layout sections used. */
				__( 'Only the first %d layout sections were used; the rest were dropped.', 'shadcn-blocks' ),
				self::MAX_PLAN_ENTRIES
			);
		}

		$valid_slugs = wp_list_pluck( $catalog, 'slug' );
		$valid       = array();

		foreach ( $entries as $entry ) {
			if ( ! is_array( $entry ) || empty( $entry['slug'] ) || ! is_string( $entry['slug'] ) ) {
				$warnings[] = __( 'A layout section had an invalid format and was skipped.', 'shadcn-blocks' );
				continue;
			}

			// array_key_exists(), not isset() — isset() returns false for an
			// explicit null value, which would silently default a malformed
			// "textSlots": null response to an empty array instead of
			// rejecting it as invalid shape.
			$text_slots = array_key_exists( 'textSlots', $entry ) ? $entry['textSlots'] : array();

			if ( ! is_array( $text_slots ) ) {
				$warnings[] = sprintf(
					/* translators: %s: pattern slug. */
					__( 'Section "%s" had invalid text and was skipped.', 'shadcn-blocks' ),
					$entry['slug']
				);
				continue;
			}

			if ( ! in_array( $entry['slug'], $valid_slugs, true ) ) {
				$warnings[] = sprintf(
					/* translators: %s: pattern slug. */
					__( 'Section "%s" is not a known layout pattern and was skipped.', 'shadcn-blocks' ),
					$entry['slug']
				);
				continue;
			}

			$sanitized_slots = array();

			foreach ( $text_slots as $index => $text ) {
				if ( ! is_int( $index ) && ! ctype_digit( (string) $index ) ) {
					continue; // Non-numeric slot key — not a valid index, silently ignored.
				}

				// Never render LLM text as HTML/markup — plain text only.
				$sanitized_slots[ (int) $index ] = sanitize_text_field( (string) $text );
			}

			$valid[] = array(
				'slug'      => $entry['slug'],
				'textSlots' => $sanitized_slots,
			);
		}

		return array( $valid, $warnings );
	}
}
