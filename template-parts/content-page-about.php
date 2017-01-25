<?php
/**
 * Template part for displaying page content in page-about.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dojo
 */

?>

<?php
// vars
$testimonial_section_image = get_field('testimonial_section_image');
$testimonial_section_subtitle = get_field('testimonial_section_subtitle');
$testimonial_section_title = get_field('testimonial_section_title');
$testimonials_stars = get_field('testimonials_stars');
$primary_color = get_theme_mod('primary_color', '#DAB075');
$secondary_color = get_theme_mod('secondary_color', '#263238');
?>

<style type="text/css">
.entry-content p { color: <?php echo $secondary_color ?>; }
</style>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content">
            <div class="main-page">
                <?php the_content(); ?>
            </div>

            <?php

            // image divider
            if ($testimonial_section_image): ?>
                <div class="section-divider has-vert-margin full l-flex is-hori align-vert-center" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url( <?php echo $testimonial_section_image; ?>) fixed; background-size: cover;">
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
                        if ($testimonials_stars === true) : ?>
                            <div class="l-center">
                                <i class="stars fa fa-star" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                                <i class="stars fa fa-star" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                                <i class="stars fa fa-star" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                            </div>
                        <?php
                        endif; ?>

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

            <div class="main-page">
                <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dojo' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div>
        </div><!-- .entry-content -->

        <?php if ( get_edit_post_link() ) : ?>
            <footer class="entry-footer main-page">
                <?php
                    edit_post_link(
                        sprintf(
                            /* translators: %s: Name of current post */
                            esc_html__( 'Edit %s', 'dojo' ),
                            the_title( '<span class="screen-reader-text">"', '"</span>', false )
                        ),
                        '<span class="edit-link">',
                        '</span>'
                    );
                ?>
            </footer><!-- .entry-footer -->
        <?php endif; ?>
    </article><!-- #post-## -->
