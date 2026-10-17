<?php
/**
 * Bootstrap for the Live Purchase block's server side.
 *
 * The block itself registers through the standard build/blocks glob (gated on
 * WooCommerce in Plugin::register_blocks), so this file wires only the backend
 * that has no other home. Phase 2 adds the order feed, its REST route and the
 * rate limiter here; Phase 1 exists so the require in yaycommerce-blocks-for-shadcn-ui.php has a
 * target and the module boundary is set from the start.
 *
 * Loaded unconditionally. Nothing in here runs a WooCommerce call at include
 * time, and the REST route it will register is harmless without the block.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\LivePurchase;

use ShadcnBlocks\Traits\SingletonTrait;

defined( 'ABSPATH' ) || exit;

/**
 * Live Purchase module bootstrap.
 */
class Caller {
	use SingletonTrait;

	/**
	 * Wire the module.
	 */
	protected function __construct() {
		require_once __DIR__ . '/RateLimiter.php';
		require_once __DIR__ . '/OrderFeed.php';
		require_once __DIR__ . '/SimulatedFeed.php';
		require_once __DIR__ . '/RestController.php';

		RestController::get_instance();
	}
}

Caller::get_instance();
