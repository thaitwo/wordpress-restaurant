<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dojo
 */

?>

            </div><!-- #content -->
        </div>
    </div>

    <?php
    // colors
    $footer_bg_color = get_theme_mod('footer_bg_color', '#263238');
    $footer_text_color = get_theme_mod('footer_text_color', '#FFFFFF');
    $primary_color = get_theme_mod('primary_color', '#DAB075');
    // social media urls
    $facebook_url = get_theme_mod('facebook_url');
    $twitter_url = get_theme_mod('twitter_url');
    $instagram_url = get_theme_mod('instagram_url');
    $google_url = get_theme_mod('google_url');
    $pinterest_url = get_theme_mod('pinterest_url');
    $youtube_url = get_theme_mod('youtube_url');
    $linkedin_url = get_theme_mod('linkedin_url');
    ?>

    <div class="footer-area full" style="background-color: <?php echo $footer_bg_color ?>;">
        <div class="main-page">
            <footer id="colophon" class="site-footer inner l-center" role="contentinfo">

                <h1 class="footer-title" style="color: <?php echo $footer_text_color ?>;">
                    <?php echo bloginfo('name'); ?>
                </h1>

                <div class="footer-title-line"></div>

                <i class="fa fa-map-marker fa-2x" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>

                <?php
                /* The footer widget area is triggered if any of the areas
                 * have widgets. So let's check that first.
                 *
                 * If none of the sidebars have widgets, then let's bail early.
                 */
                if (   ! is_active_sidebar( 'first-footer-widget-area'  )
                )
                    return;

                if (   is_active_sidebar( 'first-footer-widget-area'  )
                ) : ?>

                <aside class="fatfooter l-flex align-hori-center" role="complementary">
                    <div class="widget-area" style="color: <?php echo $footer_text_color ?>;">
                        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                    </div><!-- .first .widget-area -->
                </aside><!-- #fatfooter -->

                <?php
                //end of all sidebar checks.
                endif;?>


                <!-- social media icons -->

                <div class="footer-social-icons">
                    <?php
                    if ($facebook_url) : ?>
                    <a class="icon-margin" href="<?php echo $facebook_url ?>" target="_blank" style="color: <?php echo $primary_color ?>;">
                        <i class="fa fa-facebook fa-1x" aria-hidden="true"></i>
                    </a>
                    <?php
                    endif; ?>

                    <?php
                    if ($twitter_url) : ?>
                    <a class="icon-margin" href="<?php echo $twitter_url ?>" target="_blank" style="color: <?php echo $primary_color ?>;">
                        <i class="fa fa-twitter fa-1x" aria-hidden="true"></i>
                    </a>
                    <?php
                    endif; ?>

                    <?php
                    if ($instagram_url) : ?>
                    <a class="icon-margin" href="<?php echo $instagram_url ?>" target="_blank" style="color: <?php echo $primary_color ?>;">
                        <i class="fa fa-instagram fa-1x" aria-hidden="true"></i>
                    </a>
                    <?php
                    endif; ?>

                    <?php
                    if ($google_url) : ?>
                    <a class="icon-margin" href="<?php echo $google_url ?>" target="_blank" style="color: <?php echo $primary_color ?>;">
                        <i class="fa fa-google-plus fa-1x" aria-hidden="true"></i>
                    </a>
                    <?php
                    endif; ?>

                    <?php
                    if ($pinterest_url) : ?>
                    <a class="icon-margin" href="<?php echo $pinterest_url ?>" target="_blank" style="color: <?php echo $primary_color ?>;">
                        <i class="fa fa-pinterest-p fa-1x" aria-hidden="true"></i>
                    </a>
                    <?php
                    endif; ?>

                    <?php
                    if ($youtube_url) : ?>
                    <a class="icon-margin" href="<?php echo $youtube_url ?>" target="_blank" style="color: <?php echo $primary_color ?>;">
                        <i class="fa fa-youtube-play fa-1x" aria-hidden="true"></i>
                    </a>
                    <?php
                    endif; ?>

                    <?php
                    if ($linkedin_url) : ?>
                    <a class="icon-margin" href="<?php echo $linkedin_url ?>" target="_blank" style="color: <?php echo $primary_color ?>;">
                        <i class="fa fa-linkedin fa-1x" aria-hidden="true"></i>
                    </a>
                    <?php
                    endif; ?>
                </div>


                <div class="site-info">
                    <?php printf( esc_html__( 'COPYRIGHT © %1$s %2$s', 'dojo' ), 'DOJO', '2017' ); ?>
                </div><!-- .site-info -->
            </footer><!-- #colophon -->
        </div>
    </div>

<?php wp_footer(); ?>

</body>
</html>
