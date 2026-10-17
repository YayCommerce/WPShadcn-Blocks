<?php
/**
 * The same-install path: when the Shadcn AI Proxy plugin is active on THIS
 * site, generation runs its pipeline in-process — PromptBuilder + provider,
 * directly — instead of making an HTTP loop back to itself with a bearer
 * token. Brandy's client steps aside the same way when the full AI server
 * plugin shares its install.
 *
 * No token, no self-registration, no quota: the site holds its own OpenAI
 * key, so its own editors are not metered — auth is the REST route's
 * edit_theme_options check, exactly as for the remote path. The catalog is
 * the live local one (CatalogBuilder), which cannot be version-skewed
 * against this site's patterns by definition.
 *
 * Mirrors LlmClient's request()/request_stream() contract so RestController
 * and EvalCommand can hold either without caring which.
 *
 * @package ShadcnBlocks
 * @since 1.2.0
 */

namespace ShadcnBlocks\ShadcnAi;

defined( 'ABSPATH' ) || exit;

class InProcessProxy {

	/**
	 * @return bool whether the proxy plugin is active on this install
	 */
	public static function available() {
		return class_exists( 'ShadcnAiProxy\OpenAiProvider' )
			&& class_exists( 'ShadcnAiProxy\PromptBuilder' )
			&& class_exists( 'ShadcnAiProxy\PlanNormalizer' );
	}

	/**
	 * Blocking generation, same return shape as LlmClient::request(): the
	 * normalized plan array.
	 *
	 * @param string $prompt User's design request.
	 * @return array Normalized plan entries.
	 * @throws LlmRequestException On provider or shape errors.
	 */
	public function request( $prompt ) {
		list( $system, $user ) = $this->build_messages( $prompt );

		try {
			$plan = ( new \ShadcnAiProxy\OpenAiProvider() )->generate_plan( $system, $user );
		} catch ( \ShadcnAiProxy\LlmProviderException $e ) {
			throw new LlmRequestException( $e->getMessage() );
		}

		return $this->normalize( $plan );
	}

	/**
	 * Streaming generation, same event sequence LlmClient::request_stream()
	 * relays from the remote proxy — status, entry per written plan entry,
	 * then plan — so the REST route's stream handler cannot tell the
	 * difference.
	 *
	 * @param string   $prompt   User's design request.
	 * @param callable $on_event fn(string $event, array $data): void.
	 * @throws LlmRequestException On provider or shape errors.
	 */
	public function request_stream( $prompt, $on_event ) {
		list( $system, $user ) = $this->build_messages( $prompt );

		call_user_func( $on_event, 'status', array( 'stage' => 'designing' ) );

		try {
			$plan = ( new \ShadcnAiProxy\OpenAiProvider() )->generate_plan_stream(
				$system,
				$user,
				function ( array $entry ) use ( $on_event ) {
					call_user_func( $on_event, 'entry', $entry );
				},
				// Heartbeat between entries — the same `tick` the remote proxy
				// streams, so the REST relay keeps bytes moving to the browser
				// during model silences on this path too.
				function () use ( $on_event ) {
					call_user_func( $on_event, 'tick', array() );
				}
			);
		} catch ( \ShadcnAiProxy\LlmProviderException $e ) {
			throw new LlmRequestException( $e->getMessage() );
		}

		call_user_func( $on_event, 'plan', array( 'plan' => $this->normalize( $plan ) ) );
	}

	/**
	 * @param string $prompt User's design request.
	 * @return array{0: string, 1: string} [system prompt, user message]
	 */
	private function build_messages( $prompt ) {
		$prompt_builder = new \ShadcnAiProxy\PromptBuilder();

		return array(
			$prompt_builder->system_prompt(),
			$prompt_builder->user_message( $prompt, ( new CatalogBuilder() )->build(), array() ),
		);
	}

	/**
	 * @param array $plan Plan entries as the provider returned them.
	 * @return array Normalized plan.
	 * @throws LlmRequestException When the plan shape is invalid.
	 */
	private function normalize( array $plan ) {
		$normalized = \ShadcnAiProxy\PlanNormalizer::normalize( $plan );
		if ( is_wp_error( $normalized ) ) {
			throw new LlmRequestException( $normalized->get_error_message() );
		}

		return $normalized;
	}
}
