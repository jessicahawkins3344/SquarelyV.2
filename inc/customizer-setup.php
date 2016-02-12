<?php

// Require Files
// =============================================================================

require_once( 'customizer-options.php' );
require_once( 'customizer-mods.php' );
require_once( 'customizer-styles.php' );

function squarely_update_native_customizer_functionality( $wp_customize ) {

    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_section( 'header_image' )->panel         = 'header-navbar';
    $wp_customize->get_section( 'title_tagline' )->priority     = '9';
    $wp_customize->get_section( 'title_tagline' )->title        = __('Site branding', 'squarely');
    $wp_customize->get_section( 'title_tagline' )->panel        = 'header-navbar';    
    $wp_customize->remove_control( 'header_textcolor' );
    $wp_customize->remove_control( 'display_header_text' );

    if ( $wp_customize->get_control( 'site_icon' ) ) {
      $wp_customize->get_control( 'site_icon' )->section     = 'header-navbar';
      $wp_customize->get_control( 'site_icon' )->priority    = '1000';
    }

}

add_action( 'customize_register', 'squarely_update_native_customizer_functionality' );
