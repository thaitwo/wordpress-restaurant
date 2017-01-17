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
        <div class="hours-bar"></div>
        <div class="main-page">
            <div id="content" class="site-content inner">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="entry-content l-flex is-hori align-vert-center">
                        <div class="front-content">
                            <h2 class="section-subtitle">
                                <?php
                                    $section1_subtitle = get_field('section_1_subtitle');
                                    echo $section1_subtitle;
                                ?>
                            </h2>
                            <h1 class="section-title">
                                <?php
                                    $section1_title = get_field('section_1_title');
                                    echo $section1_title;
                                ?>
                            </h1>
                            <img class="stars-front" src="wp-content/themes/dojo/assets/stars.png">
                            <p class="section-description">
                                <?php
                                    $section1_text = get_field('section_1_text');
                                    echo $section1_text;
                                ?>
                            </p>

                            <?php $section_1_button = get_field( 'section_1_button_text' );
                            if ($section_1_button) : ?>
                                <a class="button button-secondary" href="<?php echo the_field('section_1_button_link') ?>">
                                <?php echo $section_1_button; ?>
                                </a>
                            <?php
                            endif; ?>
                        </div>
                        <div class="front-content">
                            <div class="section-image is-rounded l-right" style="background: url( <?php echo the_field('section_1_image'); ?>); background-size: cover;"></div>
                        </div>

                        <div class="clearfix"></div>

                        <?php
                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dojo' ),
                                'after'  => '</div>',
                            ) );
                        ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-## -->
            </div><!-- #content -->
        </div>



        <div class="section-divider full l-flex is-hori align-vert-center" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url( <?php echo the_field('section_1_divider_bg_img'); ?>) fixed; background-size: cover;">
            <div class="section-divider-text">
                <h2 class="section-divider-subtitle">
                    <?php $section_subtitle = get_field( 'section_1_divider_subtitle' );
                        if ($section_subtitle) {
                            echo $section_subtitle;
                        }
                        else {
                            echo "Welcome";
                        }
                    ?>
                </h2>
                <div class="section-divider-title">
                    <?php $section_title = get_field( 'section_1_divider_title' );
                        if ($section_title) {
                            echo $section_title;
                        }
                        else {
                            echo bloginfo( 'name' );
                        }
                    ?>
                </div>
                <img src="wp-content/themes/dojo/assets/stars.png" class="stars-front">
            </div>
        </div>



        <div class="main-page">
            <div id="content" class="site-content inner">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="entry-content l-flex is-hori-rev align-vert-center">
                        <div class="front-content">
                            <h2 class="section-subtitle">
                                <?php
                                    $section2_subtitle = get_field('section_2_subtitle');
                                    echo $section2_subtitle;
                                ?>
                            </h2>
                            <h1 class="section-title">
                                <?php
                                    $section2_title = get_field('section_2_title');
                                    echo $section2_title;
                                ?>
                            </h1>
                            <img class="stars-front" src="wp-content/themes/dojo/assets/stars.png">
                            <p class="section-description">
                                <?php
                                    $section2_text = get_field('section_2_text');
                                    echo $section2_text;
                                ?>
                            </p>

                            <?php $section_2_button = get_field( 'section_2_button_text' );
                            if ($section_2_button) : ?>
                                <a class="button button-secondary" href="<?php echo the_field('section_2_button_link') ?>">
                                <?php echo $section_2_button; ?>
                                </a>
                            <?php
                            endif; ?>
                        </div>
                        <div class="front-content">
                            <div class="section-image is-rounded l-left " style="background: url( <?php echo the_field('section_2_image'); ?>); background-size: cover;"></div>
                        </div>

                        <div class="clearfix"></div>

                        <?php
                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dojo' ),
                                'after'  => '</div>',
                            ) );
                        ?>
                    </div><!-- .entry-content -->

                    <?php if ( get_edit_post_link() ) : ?>
                        <footer class="entry-footer">
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
            </div><!-- #content -->
        </div>
    </div>
