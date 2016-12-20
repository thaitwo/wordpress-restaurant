<?php
/*

Template Name: Front Page Template

*/

get_header( 'front' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page-front' ); ?>


				<img class="front-content" src="wp-content/themes/dojo/assets/pizza.png">
			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
