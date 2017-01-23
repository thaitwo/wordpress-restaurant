<?php
/**
 * Template part for displaying page content in page-menu.php.
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
                    if( have_rows('menu_section') ):

                        while( have_rows('menu_section') ) : the_row();

                            // vars
                            $section_image = get_sub_field('section_image');
                            $section_image_subtitle = get_sub_field('section_image_subtitle');
                            $section_image_title = get_sub_field('section_image_title');
                            $menu_divider_stars = get_sub_field('menu_divider_stars');
                            $primary_color = get_theme_mod('primary_color', '#DAB075');
                            $secondary_color = get_theme_mod('secondary_color', '#263238');
                            $tertiary_color = get_theme_mod('tertiary_color', '#B0BEC5');

                            ?>

                            <?php
                            if ($section_image): ?>
                                <div class="section-divider has-vert-margin full l-flex is-hori align-vert-center" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url( <?php echo $section_image; ?>) fixed; background-size: cover;">
                                    <div class="section-divider-text">
                                        <?php
                                            if ($section_image_subtitle) { ?>
                                                <h2 class="section-divider-subtitle" style="color: <?php echo $primary_color ?>;">
                                                <?php
                                                echo $section_image_subtitle;
                                            }
                                            else {
                                                echo " ";
                                            } ?>
                                                </h2>
                                        <div class="section-divider-title">
                                            <?php
                                                if ($section_image_title) {
                                                    echo $section_image_title;
                                                }
                                                else {
                                                    echo " ";
                                                }
                                            ?>
                                        </div>

                                        <?php
                                        if ($menu_divider_stars === true) : ?>
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
                                <div class="menu-section l-flex is-hori align-hori-space-between flex-wrap">

                                    <div class="menu-column-container l-flex is-vert align-vert-flex-start">
                                        <?php

                                        // child loop
                                        if( have_rows('menu_category_container_l') ):

                                            while( have_rows('menu_category_container_l') ) : the_row();

                                                // vars
                                                $menu_category_l = get_sub_field('menu_category_l');

                                                ?>

                                                <div class="menu-category-container">

                                                    <h1 class="menu-category" style="color: <?php echo $primary_color ?>;">
                                                        <?php
                                                            if ($menu_category_l) {
                                                                echo $menu_category_l;
                                                            }
                                                            elseif (!$menu_category_l && $menu_category_r) {
                                                                echo '<br />';
                                                            }
                                                            else {
                                                                echo " ";
                                                            }
                                                        ?>
                                                    </h1>

                                                    <?php

                                                    // grandchild loop
                                                    if( have_rows('menu_list_l') ):

                                                        while( have_rows('menu_list_l') ) : the_row();

                                                            // vars
                                                            $menu_item_l = get_sub_field('menu_item_l');
                                                            $menu_item_des_l = get_sub_field('menu_item_des_l');
                                                            $menu_item_price_l = get_sub_field('menu_item_price_l');

                                                            ?>

                                                            <div class="menu-list-container">
                                                                <p class="menu-list-item" style="color: <?php echo $secondary_color ?>;">
                                                                    <?php echo $menu_item_l; ?>
                                                                </p>

                                                                <p class="menu-list-item-price" style="color: <?php echo $tertiary_color ?>;">
                                                                    <?php echo "$" . $menu_item_price_l; ?>
                                                                </p>

                                                                <p class="menu-list-item-des" style="color: <?php echo $tertiary_color ?>;">
                                                                    <?php echo $menu_item_des_l; ?>
                                                                </p>
                                                            </div>


                                                        <?php
                                                        endwhile;

                                                    endif;
                                                    // end grandchild loop
                                                    ?>
                                                </div>

                                            <?php
                                            endwhile;

                                        endif;
                                        // end child loop
                                        ?>
                                    </div>


                                    <div class="menu-column-container l-flex is-vert align-vert-flex-start">
                                        <?php

                                        // child loop
                                        if( have_rows('menu_category_container_r') ):

                                            while( have_rows('menu_category_container_r') ) : the_row();

                                                // vars
                                                $menu_category_r = get_sub_field('menu_category_r');

                                                ?>

                                                <div class="menu-category-container">

                                                    <h1 class="menu-category" style="color: <?php echo $primary_color ?>;">
                                                        <?php
                                                            if ($menu_category_r) {
                                                                echo $menu_category_r;
                                                            }
                                                            elseif (!$menu_category_r && $menu_category_l) {
                                                                echo '<br />';
                                                            }
                                                            else {
                                                                echo " ";
                                                            }
                                                        ?>
                                                    </h1>

                                                    <?php

                                                    // grandchild loop
                                                    if( have_rows('menu_list_r') ):

                                                        while( have_rows('menu_list_r') ) : the_row();

                                                            // vars
                                                            $menu_item_r = get_sub_field('menu_item_r');
                                                            $menu_item_des_r = get_sub_field('menu_item_des_r');
                                                            $menu_item_price_r = get_sub_field('menu_item_price_r');

                                                            ?>


                                                            <div class="menu-list-container">
                                                                <p class="menu-list-item" style="color: <?php echo $secondary_color ?>;">
                                                                    <?php echo $menu_item_r; ?>
                                                                </p>

                                                                <p class="menu-list-item-price" style="color: <?php echo $tertiary_color ?>;">
                                                                    <?php echo "$" . $menu_item_price_r; ?>
                                                                </p>

                                                                <p class="menu-list-item-des" style="color: <?php echo $tertiary_color ?>;">
                                                                    <?php echo $menu_item_des_r; ?>
                                                                </p>
                                                            </div>

                                                        <?php
                                                        endwhile;

                                                    endif;
                                                    // end grandchild loop
                                                    ?>
                                                </div>

                                            <?php
                                            endwhile;

                                        endif;
                                        // end child loop
                                        ?>
                                    </div>

                                </div>
                            </div>

                        <?php
                        endwhile;

                    endif;
                    // end parent loop
                    ?>


                <div class="clearfix"></div>

                <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dojo' ),
                        'after'  => '</div>',
                    ) );
                ?>
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

