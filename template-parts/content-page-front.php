<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dojo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="front-content-container" >

	<div class="entry-content front-content">
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

		<img src="wp-content/themes/dojo/assets/stars.png" class="stars-front">

		<p class="section-text">
			<?php
				$section1_text = get_field('section_1_text');
				echo $section1_text;
			?>
		</p>

		<a class="button button-secondary" href="#">
			<?php $front_button = get_field( 'button' );
				if ($front_button) {
					echo $front_button;
				}
			?>
		</a>

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
