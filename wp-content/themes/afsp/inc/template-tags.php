<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package afsp
 */

if ( ! function_exists( 'afsp_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function afsp_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="updated" datetime="%3$s">%4$s</time>';
		}
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
		$posted_on   = sprintf(
			// translators: %s: $time_string.
			esc_html_x( '%s', 'post date', 'afsp' ),
			$time_string
		);
		$byline = sprintf(
			// translators: %s: get_the_author.
			esc_html_x( '| by %s', 'post author', 'afsp' ),
			esc_html( get_the_author() )
		);
		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
	}
endif;

if ( ! function_exists( 'afsp_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function afsp_posted_by() {
		$byline = sprintf(
			// translators: %s: get_the_author.
			esc_html_x( 'by %s', 'post author', 'afsp' ),
			esc_html( get_the_author() )
		);

		echo '<span class="feed__byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'afsp_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function afsp_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			$categories_list = get_the_category_list( esc_html__( ', ', 'afsp' ) );
			if ( $categories_list && function_exists( 'afsp_categorized_blog' ) ) {
				// translators: %1$s: $categories_list.
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'afsp' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'afsp' ) );
			if ( $tags_list ) {
				// translators: %1$s: $tags_list.
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'afsp' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Leave a comment', 'afsp' ), esc_html__( '1 Comment', 'afsp' ), esc_html__( '% Comments', 'afsp' ) );
			echo '</span>';
		}
	}
endif;

if ( ! function_exists( 'afsp_entry_footer' ) ) :
	/**
	 * Returns true if a blog has more than 1 category.
	 *
	 * @return bool
	 */
	function afsp_categorized_blog() {
		$all_the_cool_cats = get_transient( 'afsp_categories' );
		if ( false === $all_the_cool_cats ) {
			// Create an array of all the categories that are attached to posts.
			$all_the_cool_cats = get_categories( array(
				'fields'     => 'ids',
				'hide_empty' => 1,

				// We only need to know if there is more than one category.
				'number'     => 2,
			) );

			// Count the number of categories that are attached to the posts.
			$all_the_cool_cats = count( $all_the_cool_cats );

			set_transient( 'afsp_categories', $all_the_cool_cats );
		}

		if ( $all_the_cool_cats > 1 ) {
			// This blog has more than 1 category so afsp_categorized_blog should return true.
			return true;
		} else {
			// This blog has only 1 category so afsp_categorized_blog should return false.
			return false;
		}
	}
endif;

if ( ! function_exists( 'afsp_category_transient_flusher' ) ) :
	/**
	 * Flush out the transients used in afsp_categorized_blog.
	 */
	function afsp_category_transient_flusher() {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}
		// Like, beat it. Dig?
		delete_transient( 'afsp_categories' );
	}
	add_action( 'edit_category', 'afsp_category_transient_flusher' );
	add_action( 'save_post', 'afsp_category_transient_flusher' );
endif;

