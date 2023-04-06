<?php
/**
 * Home page template
 *
 * @package wpmb
 * @added 02APR2023
 */

get_header();
?>
<div class='container'>
	<div class='container-inner'>
	<?php
	// 1. get page id.
	// 2. get page content.
	// 3. display page content.
	$page_id  = get_the_ID();
	$page_obj = get_post( $page_id );
	$content  = apply_filters( 'the_content', $page_obj->post_content );
	echo wp_kses_post( $content );

	?>
</div></div>
<?php
get_footer();
