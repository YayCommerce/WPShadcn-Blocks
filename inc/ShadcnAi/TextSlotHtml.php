<?php
/**
 * Text-slot HTML helper for Shadcn AI.
 *
 * Locates the single text node inside a leaf block's `innerHTML` fragment
 * (core/heading, core/paragraph, core/button) and reads/replaces its text
 * content only, leaving the element's tag and attributes untouched.
 *
 * @package ShadcnBlocks
 * @since 1.0.0
 */

namespace ShadcnBlocks\ShadcnAi;

defined( 'ABSPATH' ) || exit;

class TextSlotHtml {

	/**
	 * Block names whose slot text lives in their innerHTML fragment.
	 */
	const SLOT_BLOCK_NAMES = array( 'core/heading', 'core/paragraph', 'core/button', 'core/list-item' );

	/**
	 * Block names whose slot text lives in block attributes instead of HTML —
	 * dynamic blocks that save self-closing markup. Value is the ordered list
	 * of attribute keys. The first key is the block's identity text and is
	 * always a slot; keys after it become slots only when the pattern gives
	 * them a non-empty default — mirroring the render side, which hides those
	 * optional texts when empty, so a slot exists exactly when the text is
	 * visible. Unlike the HTML leaves these blocks can wrap innerBlocks (an
	 * accordion item's panel, a tab's content), so tree walkers must keep
	 * recursing into them after recording the slots.
	 */
	const ATTR_SLOT_BLOCKS = array(
		'shadcn/badge'          => array( 'text' ),
		'shadcn/accordion-item' => array( 'title', 'summary' ),
		'shadcn/tab'            => array( 'label' ),
		'shadcn/filter-section' => array( 'label' ),
		'shadcn/alert-title'    => array( 'title' ),
		'shadcn/marker'         => array( 'content' ),
		'shadcn/form-submit'    => array( 'label' ),
		'shadcn/input'          => array( 'label' ),
		'shadcn/textarea'       => array( 'label' ),
		'shadcn/select'         => array( 'label' ),
	);

	/**
	 * Tag whose text holds the actual link label inside a core/button fragment.
	 */
	const BUTTON_TEXT_TAG = 'a';

	/**
	 * Whether a block name carries a text slot (HTML or attribute kind).
	 */
	public static function is_slot_block( $block_name ) {
		return in_array( $block_name, self::SLOT_BLOCK_NAMES, true )
			|| isset( self::ATTR_SLOT_BLOCKS[ $block_name ] );
	}

	/**
	 * The ordered attribute keys holding an attr-slot block's texts,
	 * array() for HTML slots.
	 */
	public static function attr_keys( $block_name ) {
		return isset( self::ATTR_SLOT_BLOCKS[ $block_name ] ) ? self::ATTR_SLOT_BLOCKS[ $block_name ] : array();
	}

	/**
	 * Which of a block's attr keys are slots for THIS block instance, given
	 * its parsed attrs. Encodes the optional-key rule from ATTR_SLOT_BLOCKS;
	 * CatalogBuilder (slot extraction) and PlanResolver (slot application)
	 * must both call this so their index sequences cannot drift.
	 */
	public static function slot_attr_keys( $block_name, array $attrs ) {
		$keys  = array();
		$first = true;

		foreach ( self::attr_keys( $block_name ) as $key ) {
			$default = isset( $attrs[ $key ] ) ? (string) $attrs[ $key ] : '';

			if ( $first || '' !== $default ) {
				$keys[] = $key;
			}
			$first = false;
		}

		return $keys;
	}

	/**
	 * Read the slot's current text.
	 */
	public static function read( $block_name, $html_fragment ) {
		$context = self::locate( $block_name, $html_fragment );

		return $context ? $context['target']->textContent : '';
	}

	/**
	 * Replace the slot's text, preserving tag/attributes and surrounding whitespace.
	 */
	public static function write( $block_name, $html_fragment, $new_text ) {
		$context = self::locate( $block_name, $html_fragment );

		if ( ! $context ) {
			return $html_fragment;
		}

		$dom    = $context['dom'];
		$root   = $context['root'];
		$target = $context['target'];

		while ( $target->firstChild ) {
			$target->removeChild( $target->firstChild );
		}
		$target->appendChild( $dom->createTextNode( $new_text ) );

		preg_match( '/^\s*/', $html_fragment, $leading );
		preg_match( '/\s*$/', $html_fragment, $trailing );

		return $leading[0] . $dom->saveHTML( $root ) . $trailing[0];
	}

	/**
	 * Parse the fragment and locate the DOM element that holds the slot's text:
	 * the root element itself for heading/paragraph, the nested `<a>` for button.
	 *
	 * @return array{dom: \DOMDocument, root: \DOMNode, target: \DOMNode}|null
	 */
	private static function locate( $block_name, $html_fragment ) {
		$dom = new \DOMDocument();

		$previous_setting = libxml_use_internal_errors( true );
		$dom->loadHTML( '<?xml encoding="utf-8" ?><html><body>' . $html_fragment . '</body></html>' );
		libxml_clear_errors();
		libxml_use_internal_errors( $previous_setting );

		$body = $dom->getElementsByTagName( 'body' )->item( 0 );
		$root = $body ? self::first_element_child( $body ) : null;

		if ( ! $root ) {
			return null;
		}

		if ( 'core/button' === $block_name ) {
			$nodes  = $dom->getElementsByTagName( self::BUTTON_TEXT_TAG );
			$target = $nodes->length ? $nodes->item( 0 ) : null;
		} else {
			$target = $root;
		}

		if ( ! $target ) {
			return null;
		}

		return array(
			'dom'    => $dom,
			'root'   => $root,
			'target' => $target,
		);
	}

	/**
	 * First child node that is an actual element (skips whitespace text nodes).
	 */
	private static function first_element_child( \DOMNode $node ) {
		foreach ( $node->childNodes as $child ) {
			if ( XML_ELEMENT_NODE === $child->nodeType ) {
				return $child;
			}
		}

		return null;
	}
}
