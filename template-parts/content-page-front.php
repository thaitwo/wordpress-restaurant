<?php
/**
 * Template part for displaying page content in page-front.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pappo
 */
$primary_color = get_theme_mod('primary_color', '#DAB075');
$secondary_color = get_theme_mod('secondary_color', '#263238');
$tertiary_color = get_theme_mod('tertiary_color', '#FFFFFF');
$testimonial_section_image = get_field('testimonial_section_image');
$testimonial_section_subtitle = get_field('testimonial_section_subtitle');
$testimonial_section_title = get_field('testimonial_section_title');
$testimonials_stars = get_field('testimonials_stars');
?>

<style type="text/css">
.button.button-secondary { background-color: <?php echo $primary_color ?>; }
.button.button-secondary:hover { background-color: <?php echo $secondary_color ?>; }
.stars { color: <?php echo $primary_color ?>; }
</style>

<div class="main-content-area full">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php
            // parent loop
            if( have_rows('front_page_section') ):

                while( have_rows('front_page_section') ) : the_row();

                    // vars
                    $front_page_button = get_sub_field('front_page_button');
                    $front_page_button_link = get_sub_field('front_page_button_link');
                    $front_page_divider_subtitle = get_sub_field('front_page_divider_subtitle');
                    $front_page_divider_title = get_sub_field('front_page_divider_title');
                    $front_page_divider_stars = get_sub_field('front_page_divider_stars');
                    $front_page_divider_bg_image = get_sub_field('front_page_divider_bg_image');
                    $front_page_image = get_sub_field('front_page_image');
                    $front_page_section_layout = get_sub_field('front_page_section_layout');
                    $front_page_subtitle = get_sub_field('front_page_subtitle');
                    $front_page_stars = get_sub_field('front_page_stars');
                    $front_page_text = get_sub_field('front_page_text');
                    $front_page_title = get_sub_field('front_page_title');
                    ?>

                    <?php
                    // image divider conditional
                    if ($front_page_divider_bg_image) : ?>
                        <div class="section-divider full l-flex is-hori align-vert-center" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url( <?php echo $front_page_divider_bg_image; ?>) fixed; background-size: cover;">
                            <div class="section-divider-text">
                                <h2 class="section-divider-subtitle" style="color: <?php echo $primary_color ?>;">
                                    <?php
                                    if ($front_page_divider_subtitle) {
                                        echo $front_page_divider_subtitle;
                                    }
                                    else {
                                        echo " ";
                                    }
                                    ?>
                                </h2>

                                <div class="section-divider-title">
                                    <?php
                                    if ($front_page_divider_title) {
                                        echo $front_page_divider_title;
                                    }
                                    else {
                                        echo " ";
                                    }
                                    ?>
                                </div>

                                <?php
                                if ($front_page_divider_stars === true && wp_is_mobile() ) { ?>
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
                            </div>
                        </div>
                    <?php
                    // end image divider conditional
                    endif; ?>

                    <div class="main-page">
                        <?php
                        // if box is checked, image will display on the left side, otherwise right side
                        if ($front_page_section_layout === true) : ?>
                            <div class="front-section-content l-flex is-hori-rev align-hori-space-between">
                        <?php
                        else : ?>
                            <div class="front-section-content l-flex is-hori align-hori-space-between">
                        <?php
                        endif; ?>

                            <div class="front-column-container l-flex align-vert-center">
                                <div class="front-content-container">
                                    <h2 class="section-subtitle" style="color: <?php echo $primary_color ?>;">
                                        <?php echo $front_page_subtitle; ?>
                                    </h2>

                                    <h1 class="section-title" style="color: <?php echo $secondary_color ?>;">
                                        <?php echo $front_page_title; ?>
                                    </h1>

                                    <?php
                                    if ($front_page_divider_stars === true && wp_is_mobile() ) { ?>
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

                                    <p class="section-description" style="color: <?php echo $secondary_color ?>;">
                                        <?php echo $front_page_text; ?>
                                    </p>

                                    <?php
                                    if ($front_page_button) : ?>
                                        <a class="button button-secondary" href="<?php echo $front_page_button_link; ?>">
                                        <?php echo $front_page_button; ?>
                                        </a>
                                    <?php
                                    endif; ?>
                                </div>
                            </div>

                            <div class="front-column-container">
                                <div class="section-image is-rounded" style="background: url( <?php echo $front_page_image; ?>); background-size: cover;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                <?php
                endwhile;

            // end parent loop
            endif; ?>

            <?php

            // image divider
            if ($testimonial_section_image): ?>
                <div class="section-divider full l-flex is-hori align-vert-center" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url( <?php echo $testimonial_section_image; ?>) fixed; background-size: cover;">
                    <div class="section-divider-text">
                        <h2 class="section-divider-subtitle" style="color: <?php echo $primary_color ?>;">
                            <?php
                                if ($testimonial_section_subtitle) {
                                    echo $testimonial_section_subtitle;
                                }
                                else {
                                    echo " ";
                                }
                            ?>
                        </h2>
                        <div class="section-divider-title">
                            <?php
                                if ($testimonial_section_title) {
                                    echo $testimonial_section_title;
                                }
                                else {
                                    echo " ";
                                }
                            ?>
                        </div>

                        <?php
                        if ($testimonials_stars === true && wp_is_mobile() ) { ?>
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

                    </div>
                </div>
            <?php
            endif;
            ?>

            <div class="main-page">
                <div class="testimonial-section l-flex is-hori align-hori-space-between">
                    <div class="testimonial-column-container l-flex is-vert align-vert-flex-start">
                        <?php
                        if( have_rows('testimonial_container_l') ):

                            while( have_rows('testimonial_container_l') ) : the_row();

                                $testimonial_left = get_sub_field('testimonial_l');
                                $testimonial_name_left = get_sub_field('testimonial_name_l');
                                ?>

                                <div class="testimonial-container">
                                    <p class="testimonial-quotes" style="color: <?php echo $secondary_color ?>;">
                                        <?php echo $testimonial_left; ?>
                                    </p>

                                    <h3 class="testimonial-name" style="color: <?php echo $primary_color ?>;">
                                        <?php echo $testimonial_name_left; ?>
                                    </h3>
                                </div>

                            <?php
                            endwhile;

                        endif;
                        ?>
                    </div>

                    <div class="testimonial-column-container l-flex is-vert align-vert-flex-start">
                        <?php
                        if( have_rows('testimonial_container_r') ):

                            while( have_rows('testimonial_container_r') ) : the_row();

                                $testimonial_right = get_sub_field('testimonial_r');
                                $testimonial_name_right = get_sub_field('testimonial_name_r');
                                ?>

                                <div class="testimonial-container">
                                    <p class="testimonial-quotes" style="color: <?php echo $secondary_color ?>;">
                                        <?php echo $testimonial_right; ?>
                                    </p>

                                    <h3 class="testimonial-name" style="color: <?php echo $primary_color ?>;">
                                        <?php echo $testimonial_name_right; ?>
                                    </h3>
                                </div>

                            <?php
                            endwhile;

                        endif;
                        ?>
                    </div>
                </div>
            </div>

            <!-- #content -->

            <?php if ( get_edit_post_link() ) : ?>
                <footer class="entry-footer main-page">
                    <?php
                        edit_post_link(
                            sprintf(
                                /* translators: %s: Name of current post */
                                esc_html__( 'Edit %s', 'pappo' ),
                                the_title( '<span class="screen-reader-text">"', '"</span>', false )
                            ),
                            '<span class="edit-link">',
                            '</span>'
                        );
                    ?>
                </footer><!-- .entry-footer -->
            <?php endif; ?>
        </article><!-- #post-## -->
