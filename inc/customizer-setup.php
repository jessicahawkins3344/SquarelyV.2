<?php

// Require Files
// =============================================================================

require_once( 'customizer-options.php' );
require_once( 'customizer-mods.php' );
require_once( 'customizer-styles.php' );

function squarely_update_native_customizer_functionality( $wp_customize ) {

    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    $wp_customize->get_section( 'title_tagline' )->priority     = '9';
    $wp_customize->get_section( 'title_tagline' )->title        = __('Site branding', 'squarely');
    $wp_customize->get_section( 'title_tagline' )->panel        = 'header-navbar';    
    $wp_customize->remove_control( 'header_textcolor' );
    $wp_customize->remove_control( 'display_header_text' );
    $wp_customize->remove_section( 'colors' );
    $wp_customize->remove_section( 'background_image' );

}

add_action( 'customize_register', 'squarely_update_native_customizer_functionality' );
