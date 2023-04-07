<?php
/**
 * Page template
 *
 * @package wpmb
 * @added 2023-04-06
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class='container'>
	<div class='container-inner'>
	<?php
	// If page is home page, display home page content from home-page.php, else display page content from general-page.php.
	if ( is_front_page() || is_home() ) {
		get_template_part( 'template-parts/home-page' );
	} else {
		get_template_part( 'template-parts/general-page' );
	}

	?>
</div></div>
<?php
get_footer();
