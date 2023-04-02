<?php
/**
 * Header theme template
 *
 * @package wpmb
 * @added 02APR2023
 */

defined( 'ABSPATH' ) || exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php
do_action( 'wp_body_open' );
?>
<header class='container site-header'>
	<div class='site-title'>
		<?php
		if ( is_home() ) {
			echo 'WP Master Builder';
		} else {
			echo '<a href="/">WP Master Builder</a>';
		}
		?>
	</div>
	<nav>
		<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
	</nav>
</header>
