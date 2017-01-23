<?php
/**
 * Template part for displaying page content in page-front.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dojo
 */

?>

<div class="main-content-area full">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-content">

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
                        $primary_color = get_theme_mod('primary_color', '#DAB075');
                        $secondary_color = get_theme_mod('secondary_color', '#263238');
                        $tertiary_color = get_theme_mod('tertiary_color', '#FFFFFF');

                        ?>

                        <?php
                        // image divider conditional
                        if ($front_page_divider_bg_image) : ?>
                            <div class="section-divider has-vert-margin-large full l-flex is-hori align-vert-center" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url( <?php echo $front_page_divider_bg_image; ?>) fixed; background-size: cover;">
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
                                    if ($front_page_divider_stars === true) : ?>
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
                        // end image divider conditional
                        endif; ?>

                        <div class="main-page">
                            <?php
                            // if box is checked, image will display on the left side, otherwise right side
                            if ($front_page_section_layout === true) : ?>
                                <div class="l-flex is-hori-rev align-hori-space-between">
                            <?php
                            else : ?>
                                <div class="l-flex is-hori align-hori-space-between">
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
                                        if ($front_page_stars === true) : ?>
                                            <div class="l-center">
                                                <i class="stars fa fa-star" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                                                <i class="stars fa fa-star" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                                                <i class="stars fa fa-star" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                                            </div>
                                        <?php
                                        endif; ?>

                                        <p class="section-description" style="color: <?php echo $secondary_color ?>;">
                                            <?php echo $front_page_text; ?>
                                        </p>

                                        <?php
                                        if ($front_page_button) : ?>
                                            <a class="button button-secondary" href="<?php echo $front_page_button_link; ?>" style="background-color: <?php echo $primary_color ?>;">
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


            </div><!-- #content -->

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
