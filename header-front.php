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
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

<?php wp_head(); ?>
</head>

<?php
$header_front_button = get_field('header_front_button');
$header_front_stars = get_field('header_front_stars');
$header_front_subtitle = get_field('header_front_subtitle');
$header_front_title = get_field('header_front_title');
$primary_color = get_theme_mod('primary_color', '#DAB075');
?>

<style type="text/css">
.site-title:hover > a { color: <?php echo $primary_color ?>; }
li:hover > a { color: <?php echo $primary_color ?>; }
.stars { color: <?php echo $primary_color ?>; }
</style>

<body <?php body_class(); ?>>

    <div class="header-area-front full l-flex is-vert" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url( <?php echo the_post_thumbnail_url(); ?>); background-size: cover">
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
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                    </button>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'fallback_cb' => '___return_false' ) ); ?>
                </nav><!-- #site-navigation -->

            </header><!-- #masthead -->
        </div>

        <div class="header-front">

            <?php
            if ($header_front_subtitle) { ?>
                <h1 class="header-front-subtitle" style="color: <?php echo $primary_color ?>;">
                <?php
                echo $header_front_subtitle;
            }
            else {
                echo "Welcome";
            } ?>
                </h1>

            <div class="header-front-title">
                <?php
                if ($header_front_title) {
                    echo $header_front_title;
                }
                else {
                    echo bloginfo('name');
                }
                ?>
            </div>

            <?php
            if ($header_front_stars === true && wp_is_mobile() ) { ?>
                <div class="l-center">
                    <i class="stars fa fa-star fa-0x" aria-hidden="true"></i>
                    <i class="stars fa fa-star fa-0x" aria-hidden="true"></i>
                    <i class="stars fa fa-star fa-0x" aria-hidden="true"></i>
                </div>
            <?php
            } else { ?>
                <div class="l-center">
                    <i class="stars fa fa-star" aria-hidden="true"></i>
                    <i class="stars fa fa-star" aria-hidden="true"></i>
                    <i class="stars fa fa-star" aria-hidden="true"></i>
                </div>
            <?php
            } ?>

            <?php
            if ($header_front_button) : ?>
                <a class="button button-primary" href="<?php echo the_field('header_front_button_link') ?>">
                <?php echo $header_front_button; ?>
                </a>
            <?php
            endif; ?>
        </div>
    </div>

