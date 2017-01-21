<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dojo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php $primary_color = get_theme_mod('primary_color', '#DAB075'); ?>

		<h1 class="reservation-ot-title" style="color: <?php echo $primary_color ?>;"><?php echo the_field('ot_title') ?></h1>

		<p class="reservation-ot-description"><?php echo the_field('ot_description') ?></p>

		<script type='text/javascript' src='//www.opentable.com/widget/reservation/loader?rid=<?php echo the_field('ot_restaurant_id') ?>&domain=com&type=standard&theme=wide&lang=en&overlay=false&iframe=false'></script>

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


