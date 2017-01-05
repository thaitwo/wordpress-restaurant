<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dojo
 */

?>

<div class="main-content-area full">
        <div class="main-page">
            <div id="content" class="site-content inner">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="entry-content">
                        <div class="grid col-6">



                            <?php

                            // parent loop
                            if( have_rows('menu_section') ):

                                while( have_rows('menu_section') ) : the_row();

                                    // vars
                                    $section_image = get_sub_field('section_image');
                                    $section_image_subtitle = get_sub_field('section_image_subtitle');
                                    $section_image_title = get_sub_field('section_image_title');
                                    $stars = get_sub_field('stars');
                                    $menu_category = get_sub_field('menu_category');

                                    ?>

                                    <h1 class="menu-category">
                                        <?php
                                            echo $menu_category;
                                        ?>
                                    </h1>

                                    <?php

                                    // child loop
                                    if( have_rows('menu_list') ):

                                        while( have_rows('menu_list') ) : the_row();

                                            // vars
                                            $menu_item = get_sub_field('menu_item');
                                            $menu_item_des = get_sub_field('menu_item_des');
                                            $menu_item_price = get_sub_field('menu_item_price');

                                            ?>


                                            <p class="menu-item">
                                                <?php
                                                    echo $menu_item;
                                                ?>
                                            </p>

                                            <p class="menu-item-des">
                                                <?php
                                                    echo $menu_item_des;
                                                ?>
                                            </p>

                                        <?php
                                        endwhile;

                                    endif;
                                    // end child loop

                                endwhile;

                            endif;
                            // end parent loop

                            ?>


















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



        <div class="section-divider full l-flex is-hori align-vert-center" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url( <?php echo the_post_thumbnail_url(); ?>) fixed; background-size: cover;">
            <div class="section-divider-text">
                <div class="section-divider-subtitle">
                    <?php $section_subtitle = get_field( 'section_1_divider_subtitle' );
                        if ($section_subtitle) {
                            echo $section_subtitle;
                        }
                        else {
                            echo "Welcome";
                        }
                    ?>
                </div>
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
                <img src="../wp-content/themes/dojo/assets/stars.png" class="stars-front">
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
