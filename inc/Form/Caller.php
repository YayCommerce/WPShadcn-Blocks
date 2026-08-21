<?php
/**
 * Bootstrap for the Form block's server side: the submit REST route and its
 * rate limiter. The blocks themselves register through the standard
 * build/blocks glob; only this backend needs explicit wiring.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\Form;

use ShadcnBlocks\Traits\SingletonTrait;

class Caller {
	use SingletonTrait;

	protected function __construct() {
		require_once __DIR__ . '/RateLimiter.php';
		require_once __DIR__ . '/RestController.php';

		RestController::get_instance();
	}
}

Caller::get_instance();
