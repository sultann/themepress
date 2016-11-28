<?php
if ( ! function_exists( 'themeeo_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function themeeo_posted_on() {
		$time_string = '<time class="entry-date themeeo updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			esc_html_x( '%s', 'post date', 'themeeo' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$byline = sprintf(
			esc_html_x( 'by %s', 'post author', 'themeeo' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"><i class="fa fa-user" aria-hidden="true"></i> ' . $byline . '</span> <span class="posted-on"><i class="fa fa-clock-o" aria-hidden="true"></i>' . $posted_on . '</span><span class="comments-link"><i class="fa fa-comments" aria-hidden="true"></i><a href="' . esc_url( get_the_permalink() ) . '#comments">' . get_comments_number() . ' Comments</a></span>';

	}
endif;
if ( ! function_exists( 'themeeo_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function themeeo_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' == get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'themeeo' ) );
			if ( $categories_list && themeeo_categorized_blog() ) {
				printf( '<span class="cat-links">' . __( 'Posted in %1$s', 'themeeo' ) . '</span>', $categories_list );
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', __( ', ', 'themeeo' ) );
			if ( $tags_list ) {
				printf( '<span class="tags-links">' . __( 'Tagged %1$s', 'themeeo' ) . '</span>', $tags_list );
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( __( 'Leave a comment', 'themeeo' ), __( '1 Comment', 'themeeo' ), __( '% Comments', 'themeeo' ) );
			echo '</span>';
		}

		edit_post_link(
			sprintf(
			/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'themeeo' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function themeeo_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'themeeo_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'themeeo_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so themeeo_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so themeeo_categorized_blog should return false.
		return false;
	}
}

function all_excerpts_get_more_link( $post_excerpt ) {

	return $post_excerpt . '<p><a class="btn btn-secondary read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More...', 'themeeo' ) . '</a></p>';
}

add_filter( 'wp_trim_excerpt', 'all_excerpts_get_more_link' );


function themeeo_custom_body_class( $classes ) {

	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	foreach ( $classes as $key => $value ) {
		if ( $value == 'tag' ) {
			unset( $classes[ $key ] );
		}
	}

	return $classes;
}

add_filter( 'body_class', 'themeeo_custom_body_class' );

/**
 * Flush out the transients used in themeeo_categorized_blog.
 */
function themeeo_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	delete_transient( 'themeeo_categories' );
}

add_action( 'edit_category', 'themeeo_category_transient_flusher' );
add_action( 'save_post', 'themeeo_category_transient_flusher' );

// Comment Form
add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
function bootstrap3_comment_form_fields( $fields ) {
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$html5 = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
	$fields = array(
		'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name', 'understrap' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
		            '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . '></div>',
		'email' => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email', 'understrap' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
		           '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . '></div>',
		'url' => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website', 'understrap' ) . '</label> ' .
		         '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"></div>',
	);
	return $fields;
}
add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
function bootstrap3_comment_form( $args ) {
	$args['comment_field'] = '<div class="form-group comment-form-comment">
    <label for="comment">' . _x( 'Comment', 'noun', 'understrap' ) . ( ' <span class="required">*</span>' ) . '</label>
    <textarea class="form-control" id="comment" name="comment" aria-required="true" cols="45" rows="8"></textarea>
    </div>';
	$args['class_submit'] = 'btn btn-secondary'; // since WP 4.1
	return $args;
}