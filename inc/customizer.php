<?php
/**
 * Dojo Theme Customizer.
 *
 * @package Dojo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dojo_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'dojo_customize_register' );



/*
** Theme Colors
**
*/

function theme_colors( $wp_customize ) {
   $wp_customize->add_section( 'theme_colors' , array(
	    'title'      => __('Theme Colors','dojo'),
	    'priority'   => 30,
	) );

   // primary color

   $wp_customize->add_setting( 'primary_color' , array(
        'default'   => '#DAB075',
        'transport' => 'refresh',
    ) );

   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label'    => __( 'Primary Color', 'dojo' ),
        'section'  => 'theme_colors',
        'settings' => 'primary_color',
    ) ) );

   // secondary color

   $wp_customize->add_setting( 'secondary_color' , array(
        'default'   => '#263238',
        'transport' => 'refresh',
    ) );

   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
        'label'    => __( 'Secondary Color', 'dojo' ),
        'section'  => 'theme_colors',
        'settings' => 'secondary_color',
    ) ) );

   // tertiary color

   $wp_customize->add_setting( 'tertiary_color' , array(
        'default'   => '#FFFFFF',
        'transport' => 'refresh',
    ) );

   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tertiary_color', array(
        'label'    => __( 'Tertiary Color', 'dojo' ),
        'section'  => 'theme_colors',
        'settings' => 'tertiary_color',
    ) ) );

}
add_action( 'customize_register', 'theme_colors' );






/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function dojo_customize_preview_js() {
	wp_enqueue_script( 'dojo_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'dojo_customize_preview_js' );
