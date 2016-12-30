<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<body>
	<div class="section-divider full" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url( <?php echo the_field('section_1_divider_bg_img'); ?>); background-size: cover">
			<div class="section-text">
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

				<img src="wp-content/themes/dojo/assets/stars.png" class="stars-front">
			</div>

		</div>
</body>