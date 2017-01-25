<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
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
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800,900" rel="stylesheet">

<?php wp_head(); ?>
</head>

<?php
$header_subtitle = get_field('header_subtitle');
$header_stars = get_field('header_stars');
$header_title = get_field('header_title');
$page_title = get_the_title();
$primary_color = get_theme_mod('primary_color', '#DAB075');
?>

<style type="text/css">
.site-title:hover > a { color: <?php echo $primary_color ?>; }

li:hover > a { color: <?php echo $primary_color ?>; }
</style>

<body <?php body_class(); ?>>
    <div class="header-area full" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url( <?php echo the_post_thumbnail_url(); ?>); background-size: cover">
        <div class="main-page">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dojo' ); ?></a>

            <header id="masthead" class="site-header inner" role="banner">
                <div class="site-branding">
                    <?php
                    if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></h1></p>
                    <?php
                    endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                    <?php
                    endif; ?>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dojo' ); ?></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'fallback_cb' => '___return_false' ) ); ?>
                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->
        </div>

        <?php
        if ($header_subtitle) : ?>
            <h2 class="header-subtitle" style="color: <?php echo $primary_color ?>"><?php echo $header_subtitle ?></h2>
        <?php
        endif; ?>

        <h2 class="header-title">
            <?php
            if ($header_title) {
                echo $header_title;
            }
            else {
                echo $page_title;
            }
            ?>
        </h2>

        <?php
        if ($header_stars === true) : ?>
            <div class="l-center">
                <i class="stars fa fa-star" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                <i class="stars fa fa-star" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                <i class="stars fa fa-star" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
            </div>
        <?php
        endif; ?>

    </div>