<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dojo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="header-area-front full" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url( <?php echo the_field('bg_image'); ?>); background-size: cover">
		<div class="main-page">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dojo' ); ?></a>

			<header id="masthead" class="site-header inner" role="banner">
				<div class="site-branding">
					<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dojo' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'fallback_cb' => '___return_false' ) ); ?>
				</nav><!-- #site-navigation -->

			</header><!-- #masthead -->
		</div>

		<div class="front-header">
			<div class="front-header-subtitle">
				<?php $front_subtitle = get_field( 'subtitle' );
					if ($front_subtitle) {
						echo $front_subtitle;
					}
					else {
						echo "Welcome";
					}
				?>
			</div>

			<div class="front-header-title">
				<?php $front_title = get_field( 'title' );
					if ($front_title) {
						echo $front_title;
					}
					else {
						echo bloginfo( 'name' );
					}
				?>
			</div>

			<img src="wp-content/themes/dojo/assets/stars.png" class="stars-front">

			<a class="button button-primary" href="#">
				<?php $front_button = get_field( 'button' );
					if ($front_button) {
						echo $front_button;
					}
				?>
			</a>

		</div>

	</div>

	<div class="main-content-area full">
		<div class="hours-bar"></div>
		<div class="main-page">
			<div id="content" class="site-content inner">
