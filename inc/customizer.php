<?php
/**
 * Pappo Theme Customizer.
 *
 * @package Pappo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pappo_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'pappo_customize_register' );



/*
** THEME OPTIONS PANEL
**
*/

function theme_options( $wp_customize ) {
    $wp_customize->add_panel( 'theme_options', array(
        'title'     => __('Theme Options', 'pappo'),
        'priority'  => 160,
    ) );


    /*
    ** THEME COLORS SECTION
    **
    */

    $wp_customize->add_section( 'theme_colors' , array(
        'title'      => __('Theme Colors','pappo'),
        'priority'   => 30,
        'panel'      => 'theme_options',
    ) );


   // primary color
    $wp_customize->add_setting( 'primary_color' , array(
        'default'   => '#DAB075',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label'    => __( 'Primary Color', 'pappo' ),
        'section'  => 'theme_colors',
        'settings' => 'primary_color',
    ) ) );


   // secondary color
    $wp_customize->add_setting( 'secondary_color' , array(
        'default'   => '#263238',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
        'label'    => __( 'Secondary Color', 'pappo' ),
        'section'  => 'theme_colors',
        'settings' => 'secondary_color',
    ) ) );


   // tertiary color
    $wp_customize->add_setting( 'tertiary_color' , array(
        'default'   => '#B0BEC5',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tertiary_color', array(
        'label'    => __( 'Tertiary Color', 'pappo' ),
        'section'  => 'theme_colors',
        'settings' => 'tertiary_color',
    ) ) );


   // footer text color
    $wp_customize->add_setting( 'footer_text_color' , array(
        'default'   => '#FFFFFF',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
        'label'    => __( 'Footer Text Color', 'pappo' ),
        'section'  => 'theme_colors',
        'settings' => 'footer_text_color',
    ) ) );


   // footer background color
    $wp_customize->add_setting( 'footer_bg_color' , array(
        'default'   => '#263238',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
        'label'    => __( 'Footer Background Color', 'pappo' ),
        'section'  => 'theme_colors',
        'settings' => 'footer_bg_color',
    ) ) );



    /*
    ** SOCIAL MEDIA SECTION
    **
    */

    $wp_customize->add_section( 'theme_social_icons' , array(
        'title'         => __('Theme Social Icons','pappo'),
        'description'   => 'Insert URL to display social media icons. Leave field empty to hide icon.',
        'priority'      => 30,
        'panel'         => 'theme_options',
    ) );


    // facebook
    $wp_customize->add_setting( 'facebook_url' , array(
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_url', array(
        'label'          => __( 'Facebook URL', 'pappo' ),
        'section'        => 'theme_social_icons',
        'settings'       => 'facebook_url',
        'type'           => 'url',
    ) ) );


    // twitter
    $wp_customize->add_setting( 'twitter_url' , array(
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_url', array(
        'label'          => __( 'Twitter URL', 'pappo' ),
        'section'        => 'theme_social_icons',
        'settings'       => 'twitter_url',
        'type'           => 'url',
    ) ) );


    // instagram
    $wp_customize->add_setting( 'instagram_url' , array(
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram_url', array(
        'label'          => __( 'Instagram URL', 'pappo' ),
        'section'        => 'theme_social_icons',
        'settings'       => 'instagram_url',
        'type'           => 'url',
    ) ) );


    // google+
    $wp_customize->add_setting( 'google_url' , array(
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'google_url', array(
        'label'          => __( 'Google+ URL', 'pappo' ),
        'section'        => 'theme_social_icons',
        'settings'       => 'google_url',
        'type'           => 'url',
    ) ) );


    // pinterest
    $wp_customize->add_setting( 'pinterest_url' , array(
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest_url', array(
        'label'          => __( 'Pinterest URL', 'pappo' ),
        'section'        => 'theme_social_icons',
        'settings'       => 'pinterest_url',
        'type'           => 'url',
    ) ) );


    // youtube
    $wp_customize->add_setting( 'youtube_url' , array(
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube_url', array(
        'label'          => __( 'YouTube URL', 'pappo' ),
        'section'        => 'theme_social_icons',
        'settings'       => 'youtube_url',
        'type'           => 'url',
    ) ) );


    // linkedin
    $wp_customize->add_setting( 'linkedin_url' , array(
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin_url', array(
        'label'          => __( 'LinkedIn URL', 'pappo' ),
        'section'        => 'theme_social_icons',
        'settings'       => 'linkedin_url',
        'type'           => 'url',
    ) ) );
}
add_action( 'customize_register', 'theme_options' );









/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pappo_customize_preview_js() {
	wp_enqueue_script( 'pappo_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'pappo_customize_preview_js' );
