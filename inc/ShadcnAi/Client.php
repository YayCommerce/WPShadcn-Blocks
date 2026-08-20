<?php
/**
 * This site's identity with the Shadcn AI proxy: which server, and the
 * token that names this site there. The token is earned silently by
 * self-registration on first use; sites the server cannot verify from the
 * outside (local and staging URLs) paste a manually issued one under
 * Shadcn → Shadcn AI. Consumers never configure the server URL — the
 * plugin ships pointed at the right one, and a filter covers the rest.
 *
 * @package ShadcnBlocks
 * @since 1.2.0
 */

namespace ShadcnBlocks\ShadcnAi;

defined( 'ABSPATH' ) || exit;

class Client {

	const DEFAULT_SERVER = 'https://thien.ninjateam.org';

	const TOKEN_OPTION = 'shadcn_ai_site_token';

	// The site's ownership secret with the server: generated once, kept across
	// token rotations, and proves at re-registration that this is the same
	// install. Sent only to the server's /register, never to the browser.
	const SECRET_OPTION = 'shadcn_ai_site_secret';

	/**
	 * @return string the AI server this site talks to, no trailing slash
	 */
	public static function server_url() {
		$url = apply_filters( 'shadcn_ai_server_url', self::DEFAULT_SERVER );
		return untrailingslashit( (string) $url );
	}

	/**
	 * @return string the stored site token, '' when none
	 */
	public static function token() {
		return (string) get_option( self::TOKEN_OPTION, '' );
	}

	/**
	 * @param string $token the token to keep
	 */
	public static function store_token( $token ) {
		update_option( self::TOKEN_OPTION, (string) $token, false );
	}

	/**
	 * A 401 from the server means the token died; forgetting it is the cure.
	 * The secret is NOT forgotten — it is how the next registration proves
	 * this is the same site and earns a fresh token rather than being refused.
	 */
	public static function forget_token() {
		delete_option( self::TOKEN_OPTION );
	}

	/**
	 * This site's ownership secret, minted once and kept. Generated lazily so
	 * every install has one the first time it registers, and stable forever
	 * after so token rotations keep proving continuity.
	 *
	 * @return string
	 */
	public static function site_secret() {
		$secret = (string) get_option( self::SECRET_OPTION, '' );
		if ( '' === $secret ) {
			$secret = bin2hex( random_bytes( 32 ) );
			update_option( self::SECRET_OPTION, $secret, false );
		}
		return $secret;
	}

	/**
	 * The stored token, or the one this site earns right now by registering
	 * with the server — the invisible path that makes "install the plugin and
	 * it works" true.
	 *
	 * @return string|\WP_Error
	 */
	public static function token_or_register() {
		$token = self::token();
		if ( '' !== $token ) {
			return $token;
		}

		$response = wp_remote_post(
			self::server_url() . '/?rest_route=/shadcn-ai-proxy/v1/register',
			array(
				'timeout' => 30,
				'body'    => array(
					'site_url'    => untrailingslashit( home_url() ),
					'site_secret' => self::site_secret(),
				),
			)
		);
		if ( is_wp_error( $response ) ) {
			return new \WP_Error(
				'shadcn_ai_upstream_unreachable',
				__( 'The AI service could not be reached. Please try again.', 'shadcn-blocks' ),
				array( 'status' => 502 )
			);
		}

		$body  = json_decode( wp_remote_retrieve_body( $response ), true );
		$token = ( is_array( $body ) && isset( $body['token'] ) ) ? (string) $body['token'] : '';
		if ( 200 !== wp_remote_retrieve_response_code( $response ) || '' === $token ) {
			// The server's refusal says what to do (manual token, slow down);
			// relay it rather than translating it into something vaguer.
			$message = ( is_array( $body ) && isset( $body['message'] ) )
				? (string) $body['message']
				: __( 'The AI service refused this site\'s registration.', 'shadcn-blocks' );
			return new \WP_Error( 'shadcn_ai_registration_refused', $message, array( 'status' => 400 ) );
		}

		self::store_token( $token );
		error_log( 'shadcn-blocks: registered with ' . self::server_url() );
		return $token;
	}
}
