<?php
/**
 * General page template
 *
 * @package wpmb
 * @added 2023-04-06
 */

// Get the post title and content from $post.
$page_title = apply_filters( 'the_title', $post->post_title );
$content    = apply_filters( 'the_content', $post->post_content );
echo wp_kses_post( "<h1>$page_title</h1>" );
echo wp_kses_post( $content );
