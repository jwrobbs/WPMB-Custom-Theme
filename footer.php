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
			<div>©<?php echo do_shortcode( '[wpmb_current_year]' ); ?> Josh Robbs</div>
			<div class='footer-social'>
				<div class='twitter social-link'>
					<a href='https://twitter.com/joshrobbs' target='_blank'><i class='fab fa-twitter'></i></a>
				</div>
				<div class="instagram social-link">
					<a href="https://www.instagram.com/joshrobbs/" target="_blank"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="linkedin social-link">
					<a href="https://www.linkedin.com/in/joshrobbs/" target="_blank"><i class="fab fa-linkedin"></i></a>
				</div>
				<div class="youtube social-link">
					<a href="https://www.youtube.com/channel/UCqwXzxkCClsh_4nMGNBK6xw" target="_blank"><i class="fab fa-youtube"></i></a>
				</div>
			</div>
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
