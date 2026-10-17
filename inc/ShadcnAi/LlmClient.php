<?php
/**
 * HTTP client for the Shadcn AI proxy: the shipped server
 * (Client::server_url()) with a site token the site earns by registering
 * itself on first use. A 401 forgets the token so the next attempt
 * registers fresh — how a rotated token or a moved domain self-heals.
 *
 * Purely an HTTP client — no knowledge of patterns/catalog internals.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\ShadcnAi;

class LlmClient {

	/**
	 * Cap the AI endpoint's response body size to guard against a
	 * compromised/misbehaving endpoint sending an oversized response.
	 */
	const MAX_RESPONSE_BYTES = 524288; // 512KB.

	/**
	 * Send { prompt, catalogVersion, siteContext } to the AI proxy and return
	 * the decoded JSON response as-is (shape validation is RestController's
	 * job, not this class's).
	 *
	 * The catalog itself is NOT sent: the proxy holds its own committed copy
	 * (exported with `wp shadcn-ai-eval export-catalog`), so the request stays
	 * ~1KB regardless of how many patterns exist. catalogVersion only lets the
	 * server log version skew — the plan is whitelisted against this site's
	 * real patterns either way.
	 *
	 * @param string $prompt       User's design request.
	 * @param array  $site_context Optional site identity hints; omitted from
	 *                             the request body when empty.
	 * @return mixed Whatever the endpoint's JSON body decodes to.
	 * @throws LlmRequestException On transport error, refused registration,
	 *                              non-200 response, or malformed JSON.
	 */
	public function request( $prompt, array $site_context = array() ) {
		$endpoint = Client::server_url() . '/?rest_route=/shadcn-ai-proxy/v1/generate';
		$token    = Client::token_or_register();
		if ( is_wp_error( $token ) ) {
			throw new LlmRequestException( $token->get_error_message() );
		}

		// Clamp below the environment's max_execution_time so PHP doesn't
		// kill the request before our own HTTP timeout would have fired.
		$max_execution_time = (int) ini_get( 'max_execution_time' );
		$timeout             = min( 30, $max_execution_time ? $max_execution_time : 30 );

		$response = wp_remote_post(
			$endpoint,
			array(
				'timeout'             => $timeout,
				'limit_response_size' => self::MAX_RESPONSE_BYTES,
				'headers'             => array(
					'Content-Type'  => 'application/json',
					'Authorization' => 'Bearer ' . $token,
				),
				'body'                => wp_json_encode(
					array_merge(
						array(
							'prompt'         => $prompt,
							'catalogVersion' => SHADCN_BLOCKS_VERSION,
						),
						// Force object encoding — a PHP array with string keys
						// already encodes as an object, but never send an
						// empty [] where the proxy expects an object.
						empty( $site_context ) ? array() : array( 'siteContext' => (object) $site_context )
					)
				),
			)
		);

		if ( is_wp_error( $response ) ) {
			throw new LlmRequestException( $response->get_error_message() );
		}

		$status_code = (int) wp_remote_retrieve_response_code( $response );
		$body        = wp_remote_retrieve_body( $response );

		if ( 200 !== $status_code ) {
			// A dead site token self-heals: forget it so the next attempt
			// registers fresh — also how a moved domain recovers on its own.
			if ( 401 === $status_code ) {
				Client::forget_token();
			}
			// The proxy's refusal (quota used up, capacity reached) says what
			// to do; relay its message rather than a bare status code.
			$json    = json_decode( $body, true );
			$message = ( is_array( $json ) && isset( $json['message'] ) && is_string( $json['message'] ) )
				? $json['message']
				: sprintf( 'AI endpoint returned HTTP %d.', $status_code );
			throw new LlmRequestException( $message );
		}

		$data = json_decode( $body, true );

		if ( null === $data && JSON_ERROR_NONE !== json_last_error() ) {
			throw new LlmRequestException( 'AI endpoint returned malformed JSON.' );
		}

		return $data;
	}

	/**
	 * Streaming twin of request(): asks the proxy for Server-Sent Events and
	 * calls $on_event(event, data) for every frame as it arrives — `status`
	 * and `entry` during the model call, then `plan` with the finished plan.
	 * The caller decides what to do with each (relay, collect, both).
	 *
	 * cURL directly rather than wp_remote_post: the WP HTTP API buffers the
	 * whole body, and a stream that arrives all at once is a spinner, not
	 * progress. No total timeout — the point is outliving a slow generation;
	 * a stall is caught by throughput instead (under 1 B/s for 30s aborts).
	 *
	 * @param string   $prompt       User's design request.
	 * @param array    $site_context Optional site identity hints.
	 * @param callable $on_event     fn(string $event, array $data): void.
	 * @throws LlmRequestException On registration refusal, transport error,
	 *                              or an HTTP error response.
	 */
	public function request_stream( $prompt, array $site_context, $on_event ) {
		$endpoint = Client::server_url() . '/?rest_route=/shadcn-ai-proxy/v1/generate';
		$token    = Client::token_or_register();
		if ( is_wp_error( $token ) ) {
			throw new LlmRequestException( $token->get_error_message() );
		}

		$parser     = new SseFrameParser();
		$status     = 0;
		$error_body = '';

		$ch = curl_init( $endpoint );
		curl_setopt_array(
			$ch,
			array(
				CURLOPT_POST            => true,
				CURLOPT_POSTFIELDS      => wp_json_encode(
					array_merge(
						array(
							'prompt'         => $prompt,
							'catalogVersion' => SHADCN_BLOCKS_VERSION,
							'stream'         => true,
						),
						empty( $site_context ) ? array() : array( 'siteContext' => (object) $site_context )
					)
				),
				CURLOPT_HTTPHEADER      => array(
					'Content-Type: application/json',
					'Authorization: Bearer ' . $token,
					'Accept: text/event-stream',
				),
				CURLOPT_RETURNTRANSFER  => false,
				CURLOPT_TIMEOUT         => 0,
				CURLOPT_CONNECTTIMEOUT  => 15,
				CURLOPT_LOW_SPEED_LIMIT => 1,
				CURLOPT_LOW_SPEED_TIME  => 30,
				CURLOPT_WRITEFUNCTION   => function ( $handle, $chunk ) use ( &$status, &$error_body, $parser, $on_event ) {
					$status = (int) curl_getinfo( $handle, CURLINFO_RESPONSE_CODE );
					// A refusal (quota, capacity, auth) arrives as a JSON
					// body, not a stream; collect it for the error message.
					if ( $status < 200 || $status >= 300 ) {
						$error_body .= $chunk;
						return strlen( $chunk );
					}
					foreach ( $parser->push( $chunk ) as $frame ) {
						call_user_func( $on_event, $frame['event'], $frame['data'] );
					}
					return strlen( $chunk );
				},
			)
		);
		$ok = curl_exec( $ch );
		curl_close( $ch );

		if ( $status < 200 || $status >= 300 || false === $ok ) {
			// Same self-heal as the blocking path: a dead token is forgotten
			// so the next attempt registers fresh.
			if ( 401 === $status ) {
				Client::forget_token();
			}
			$json    = json_decode( $error_body, true );
			$message = ( is_array( $json ) && isset( $json['message'] ) && is_string( $json['message'] ) )
				? $json['message']
				: ( $status >= 300
					? sprintf( 'AI endpoint returned HTTP %d.', $status )
					: __( 'The AI service could not be reached. Please try again.', 'yaycommerce-blocks-for-shadcn-ui' ) );
			throw new LlmRequestException( $message );
		}
	}
}
