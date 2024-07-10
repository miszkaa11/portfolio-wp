<?php
/*
    Theme customizer
-------------------------------------
*/

// Add postMessage support for site title and description for the Theme Customizer.
function michallukas_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'michallukas_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'michallukas_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'michallukas_customize_register' );

// Render the site title for the selective refresh partial.
function michallukas_customize_partial_blogname() {
	bloginfo( 'name' );
}

// Render the site tagline for the selective refresh partial.
function michallukas_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

// Show or hide title and description
function theme_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'show_site_title', array(
		'default'           => true,
		'transport'         => 'refresh', // or 'postMessage' for instant updates without refreshing the page
	) );

	$wp_customize->add_control( 'show_site_title', array(
		'type'              => 'checkbox',
		'label'             => __( 'Show Site Title', 'text-domain' ),
		'section'           => 'title_tagline', // You can place this control in the 'title_tagline' section or create a new one
	) );

	$wp_customize->add_setting( 'show_site_description', array(
		'default'           => true,
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'show_site_description', array(
		'type'              => 'checkbox',
		'label'             => __( 'Show Site Description', 'text-domain' ),
		'section'           => 'title_tagline', // Same section as above, or create a new one
	) );
}
add_action( 'customize_register', 'theme_customize_register' );




