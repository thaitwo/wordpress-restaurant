<?php
/*

Template Name: Contact Template

*/

get_header(); ?>

<div class="main-content-area full">
	<div class="main-page">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page-contact' ); ?>

		<?php
		endwhile; // End of the loop.
		?>

<?php
get_footer();