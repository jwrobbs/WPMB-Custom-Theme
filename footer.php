<?php
/**
 * Footer template
 *
 * @package wpmb
 * @added 02APR2023
 */

defined( 'ABSPATH' ) || exit;

?>
</div> <!-- end of #content -->
<div class='container footer-wrapper'>
	<footer>
		<div class='footer-section footer-biz-data'>
			<!-- this should be a function or template -->
			<h2 class=footer-title>WP MASTER BUILDER</h2>
			<div>©2023 Josh Robbs</div>
		</div>
		<div class='footer-section footer-pages'>
			<?php echo wp_kses_post( wpmb_get_footer_pages() ); ?>
		</div>
		<div class='footer-section footer-categories'>
		<?php echo wp_kses_post( wpmb_get_footer_categories() ); ?>
		</div>
		<div class='footer-section footer-posts'>
		<?php echo wp_kses_post( wpmb_get_footer_posts() ); ?>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
<?php
