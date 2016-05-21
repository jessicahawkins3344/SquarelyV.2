<?php
/**
 * Implements styles set in the theme customizer
 *
 * @package Customizer Library Squarelu
 */
if ( ! function_exists( 'customizer_library_squarely_build_styles' ) && class_exists( 'Customizer_Library_Styles' ) ) :
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_squarely_build_styles() {
	// Primary Color
	$setting = 'header-hero';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.section-hero'
			),
			'declarations' => array(
				'background-image' => 'url(' . $mod . ')'
			)
		) );
	}

	$setting = 'brand-primary';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.primary-bg',
				'.btn-primary',
				'.icon-btn-primary',
				'.fbox-icon i:hover',
				'.fbox-icon i',
				'.br-primary'
			),
			'declarations' => array(
				'background-color' => $color,
				'border-color' => $color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.text-primary',
				'.c-primary',
				'.btn-primary-outline',
				'icon-btn-primary-outline',
				'.btn-link',
				'.border-sm-primary',
				'a',
				'.nav-link',
				'.social-icons',
				'.navbar-brand'
			),
			'declarations' => array(
				'color' => $color,
				'border-color' => $color
			)
		) );
	}

	// Secondary Color
	$setting = 'brand-secondary';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.secondary-bg',
				'.btn-secondary',
				'.icon-btn-secondary'
			),
			'declarations' => array(
				'background-color' => $color,
				'border' => $color
			)
		) );
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.secondary'
			),
			'declarations' => array(
				'color' => $color,
				'border' => $color
			)
		) );
	}


	// Success Color
	$setting = 'brand-success';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.success-bg',
				'.bg-success',
				'.btn-success',
				'.icon-btn-success'
			),
			'declarations' => array(
				'background-color' => $color,
				'border-color' => $color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.c-success',
				'.text-success',
				'.btn-success-outline',
				'.icon-btn-success-outline',
				'.success-outline'
			),
			'declarations' => array(
				'color' => $color,
				'border-color' => $color
			)
		) );
	}


	// Success Color
	$setting = 'brand-info';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.info-bg',
				'.bg-info',
				'.btn-info',
				'.icon-btn-info'
			),
			'declarations' => array(
				'background-color' => $color,
				'border-color' => $color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.c-info',
				'.text-info',
				'.btn-info-outline',
				'.icon-btn-info-outline',
			),
			'declarations' => array(
				'color' => $color,
				'border-color' => $color
			)
		) );
	}

	// Border Color
	$setting = 'body-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body',
				'.c-gray'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Primary Font
	$setting = 'primary-font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );
	if ( $mod != customizer_library_get_default( $setting ) ) {
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'h1',
				'h2',
				'h3',
				'h4',
				'h5',
				'h6',
				'p',
				'a',
				'li',
				'body'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );
	}

	// Secondary Font
	$setting = 'secondary-font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );
	if ( $mod != customizer_library_get_default( $setting ) ) {
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.script',
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );
	}

	$setting = 'body_font_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod != customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	$setting = 'body_background';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod != customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}

	$setting = 'nav-background';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod != customizer_library_get_default( $setting ) ) {
		$color = sanitize_hex_color( $mod );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.navbar-custom'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}
}
endif;
add_action( 'customizer_library_styles', 'customizer_library_squarely_build_styles' );
if ( ! function_exists( 'customizer_library_squarely_styles' ) ) :
/**
 * Generates the style tag and CSS needed for the theme options.
 *
 * By using the "Customizer_Library_Styles" filter, different components can print CSS in the header.
 * It is organized this way to ensure there is only one "style" tag.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_squarely_styles() {
	do_action( 'customizer_library_styles' );
	// Echo the rules
	$css = Customizer_Library_Styles()->build();
	if ( ! empty( $css ) ) {
		echo "\n<!-- Begin Custom CSS -->\n<style type=\"text/css\" id=\"squarely-custom-css\">\n";
		echo $css;
		echo "\n</style>\n<!-- End Custom CSS -->\n";
	}
}
endif;
add_action( 'wp_head', 'customizer_library_squarely_styles', 11 );
