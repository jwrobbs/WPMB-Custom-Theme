<?php
/**
 * General page template
 *
 * @package wpmb
 * @added 2023-04-06
 */

// 1. get page id.
// 2. get page content.
// 3. display page content.
$page_id    = get_the_ID();
$page_obj   = get_post( $page_id ); // ?? Is this necessary? Can't we just use $post?
$content    = apply_filters( 'the_content', $page_obj->post_content );
$page_title = apply_filters( 'the_title', $page_obj->post_title );
echo wp_kses_post( "<h1>$page_title</h1>" );
echo wp_kses_post( $content );
