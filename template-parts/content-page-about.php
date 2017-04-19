<?php
/**
 * Template part for displaying page content in page-about.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pappo
 */

?>

<?php
// vars
$primary_color = get_theme_mod('primary_color', '#DAB075');
$secondary_color = get_theme_mod('secondary_color', '#263238');
$button_label_1 = get_field('button_label_1');
$button_link_1 = get_field('button_link_1');
$button_label_2 = get_field('button_label_2');
$button_link_2 = get_field('button_link_2');
?>

<style type="text/css">
.entry-content p { color: <?php echo $secondary_color ?>; }
.button.button-secondary { background-color: <?php echo $primary_color ?>; }
.button.button-secondary:hover { background-color: <?php echo $secondary_color ?>; }
.button.button-tertiary {
    box-shadow: inset 0 0 0 1px <?php echo $primary_color ?>;
    color: <?php echo $primary_color ?>; }
.button.button-tertiary:hover {
    box-shadow: inset 0 0 0 1px <?php echo $secondary_color ?>;
    color: <?php echo $secondary_color ?>; }
.stars { color: <?php echo $primary_color ?>; }
</style>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content">
            <div class="main-page">
                <?php the_content(); ?>

                <div class="about-page-buttons">
                    <?php
                    if ($button_label_1 && $button_link_1 && !$button_label_2 && !$button_link_2) : ?>
                        <a class="button button-secondary" href="<?php echo $button_link_1 ?>"><?php echo $button_label_1 ?></a>
                    <?php
                    elseif ($button_label_1 && $button_link_1 && $button_label_2 && $button_link_2) : ?>
                        <a class="button button-secondary" href="<?php echo $button_link_1 ?>" style="margin-right: 10px;"><?php echo $button_label_1 ?></a>
                        <a class="button button-tertiary" href="<?php echo $button_link_2 ?>"><?php echo $button_label_2 ?></a>
                    <?php
                    endif;
                    ?>
                </div>
            </div>

            <div class="main-page">
                <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pappo' ),
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
