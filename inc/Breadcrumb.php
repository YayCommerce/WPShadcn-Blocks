<?php
/**
 * Breadcrumb block shared helpers.
 *
 * @package ShadcnBlocks
 */

namespace ShadcnBlocks;

defined( 'ABSPATH' ) || exit;

/**
 * Breadcrumb class.
 *
 * Builds the trail for the Breadcrumb block's "auto" source.
 */
class Breadcrumb {

	/**
	 * Build the trail for the current request.
	 *
	 * @param string $home_label Label of the first entry.
	 * @return array[] List of `array( label, url )`. The last entry has an empty url (current page).
	 */
	public static function get_trail( $home_label ) {
		if ( is_front_page() ) {
			return array( array( $home_label, '' ) );
		}

		$trail = array( array( $home_label, home_url( '/' ) ) );

		if ( is_home() ) {
			$posts_page = (int) get_option( 'page_for_posts' );
			$trail[]    = array( $posts_page ? get_the_title( $posts_page ) : __( 'Blog', 'yaycommerce-blocks-for-shadcn-ui' ), '' );
		} elseif ( is_singular() ) {
			$post = get_queried_object();

			if ( $post->post_parent ) {
				foreach ( array_reverse( get_post_ancestors( $post ) ) as $ancestor_id ) {
					$trail[] = array( get_the_title( $ancestor_id ), get_permalink( $ancestor_id ) );
				}
			} elseif ( 'post' === $post->post_type ) {
				$categories = get_the_category( $post->ID );
				if ( $categories ) {
					$trail = array_merge( $trail, self::term_trail( $categories[0] ) );
				}
			} else {
				$post_type = get_post_type_object( $post->post_type );
				if ( $post_type && $post_type->has_archive ) {
					$trail[] = array( $post_type->labels->name, get_post_type_archive_link( $post->post_type ) );
				}
			}

			$title   = get_the_title( $post );
			$trail[] = array( '' !== $title ? $title : __( '(no title)', 'yaycommerce-blocks-for-shadcn-ui' ), '' );
		} elseif ( is_category() || is_tag() || is_tax() ) {
			// term_trail() ends with the term itself: it is the current page here.
			$trail                           = array_merge( $trail, self::term_trail( get_queried_object() ) );
			$trail[ count( $trail ) - 1 ][1] = '';
		} elseif ( is_search() ) {
			/* translators: %s: search query. */
			$trail[] = array( sprintf( __( 'Search results for "%s"', 'yaycommerce-blocks-for-shadcn-ui' ), get_search_query() ), '' );
		} elseif ( is_404() ) {
			$trail[] = array( __( 'Page not found', 'yaycommerce-blocks-for-shadcn-ui' ), '' );
		} elseif ( is_archive() ) {
			// Post type, author and date archives: the title minus its "Category:"-style prefix.
			add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );
			$trail[] = array( wp_strip_all_tags( get_the_archive_title() ), '' );
			remove_filter( 'get_the_archive_title_prefix', '__return_empty_string' );
		} else {
			$trail[0][1] = '';
		}

		// Only the last entry may lack a link; a mid-trail entry whose URL
		// couldn't be resolved would read as a second "current page".
		$current = array_pop( $trail );
		$trail   = array_filter(
			$trail,
			function ( $entry ) {
				return $entry[1];
			}
		);

		return array_merge( array_values( $trail ), array( $current ) );
	}

	/**
	 * A term's ancestors followed by the term itself, as linked entries.
	 *
	 * @param \WP_Term $term Term.
	 * @return array[] List of `array( label, url )`.
	 */
	private static function term_trail( $term ) {
		$entries = array();
		$ids     = array_reverse( get_ancestors( $term->term_id, $term->taxonomy, 'taxonomy' ) );
		$ids[]   = $term->term_id;

		foreach ( $ids as $id ) {
			$item = get_term( $id, $term->taxonomy );
			if ( $item instanceof \WP_Term ) {
				$link      = get_term_link( $item );
				$entries[] = array( $item->name, is_wp_error( $link ) ? '' : $link );
			}
		}

		return $entries;
	}
}
