<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library squarely
 */

function customizer_library_squarely_options() {

	// Theme defaults
	$brand_primary = '#02c0a7';
	$brand_success = '#FF4A4F';
	$brand_secondary = '#f1c40f';
	$brand_info = '#B5BC18';
	$c_gray = '#404040';

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	$panels = array();

	// Stores all the controls to be added
	$control = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;


	/*/////////////////////////////////
	/* Sections & Section Panels
	/*/////////////////////////////////

	$panel = 'header-navbar';
	$panels[] = array(
		'id' => $panel,
		'title' => __( 'Header & Navbar', 'squarely' ),
		'priority' => '0'
	);

	$section = 'colors_type';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Theme Colors', 'squarely' ),
		'priority' => '0'
	);

	$section = 'typography';
	$font_choices = customizer_library_get_font_choices();
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Typography', 'squarely' ),
		'priority' => '0'
	);

	$section = 'layout_design';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Layout & Design', 'squarely' ),
		'priority' => '0'
	);

	$section = 'footer';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Footer', 'squarely' ),
		'priority' => '0'
	);

	$section = 'contact_info';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Contact Information', 'squarely' ),
		'priority' => '0'
	);

	/*/////////////////////////////////
	/* Options - Contact Info
	/*/////////////////////////////////

	$options['telephone'] = array(
		'id' => 'telephone',
		'label'   => __( 'Telephone Number', 'squarely' ),
		'section' => 'contact_info',
		'type'    => 'text',
	);

	$options['e-mail'] = array(
		'id' => 'e-mail',
		'label'   => __( 'E-Mail', 'squarely' ),
		'section' => 'contact_info',
		'type'    => 'text',
	);

	$options['address'] = array(
		'id' => 'address',
		'label'   => __( 'Address', 'squarely' ),
		'section' => 'contact_info',
		'type'    => 'text',
	);



	/*/////////////////////////////////
	/* Options - Footer
	/*/////////////////////////////////

	$options['f-facebook'] = array(
		'id' => 'f-facebook',
		'label'   => __( 'Facebook URL', 'squarely' ),
		'description' => __( 'Your Facebook URL starting with "http://"...' , 'squarely' ), // @TODO Put a helper here
		'section' => 'footer',
		'type'    => 'url',
	);

	$options['f-twitter'] = array(
		'id' => 'f-twitter',
		'label'   => __( 'Twitter URL', 'squarely' ),
		'description' => __( 'Your Twitter URL starting with "http://"...' , 'squarely' ), // @TODO Put a helper here
		'section' => 'footer',
		'type'    => 'url',
	);

	$options['f-google'] = array(
		'id' => 'f-google',
		'label'   => __( 'Google Plus URL', 'squarely' ),
		'description' => __( 'Your Plus URL starting with "http://"...' , 'squarely' ), // @TODO Put a helper here
		'section' => 'footer',
		'type'    => 'url',
	);

	$options['f-linkedin'] = array(
		'id' => 'f-linkedin',
		'label'   => __( 'LinkedIn URL', 'squarely' ),
		'description' => __( 'Your LinkedIn URL starting with "http://"...' , 'squarely' ), // @TODO Put a helper here
		'section' => 'footer',
		'type'    => 'url',
	);

	$options['f-youtube'] = array(
		'id' => 'f-youtube',
		'label'   => __( 'YouTube URL', 'squarely' ),
		'description' => __( 'Your YouTube Channel URL starting with "http://"...' , 'squarely' ), // @TODO Put a helper here
		'section' => 'footer',
		'type'    => 'url',
	);

	$options['f-rss'] = array(
		'id' => 'f-rss',
		'label'   => __( 'YouTube URL', 'squarely' ),
		'description' => __( 'Your YouTube Channel URL starting with "http://"...' , 'squarely' ), // @TODO Put a helper here
		'section' => 'footer',
		'type'    => 'url',
	);

	/*/////////////////////////////////
	/* Header & Navbar Sub Sections
	/*/////////////////////////////////

	$section = 'logo';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Navbar', 'squarely' ),
		'description' => __( 'Control your header\'s logo, colors, and link colors' , 'squarely' ), // @TODO Put a helper here
		'priority' => '30',
		'panel' => 'header-navbar'
	);

	$section = 'header-options';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Header Titles & Background', 'squarely' ),
		'description' => __( 'Control your header\'s logo, layout, colors and font.' , 'squarely' ), // @TODO Put a helper here
		'priority' => '40',
		'panel' => 'header-navbar'
	);

	$section = 'header-scripts';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Additional Scripts', 'squarely' ),
		'description' => __( 'Analytics Scripts & Custom Scripts' , 'squarely' ), // @TODO Put a helper here
		'priority' => '40',
		'panel' => 'header-navbar'
	);

	/*/////////////////////////////////
	/* Options Header & Navbar
	/*/////////////////////////////////

	$options['logo'] = array(
		'id' => 'logo',
		'label'   => __( 'Logo', 'squarely' ),
		'section' => 'logo',
		'type'    => 'image',
		'default-image' => '',
		'sanitize_callback' => 'esc_url_raw'
	);

	$options['nav-background'] = array(
		'id' => 'nav-background',
		'label'   => __( 'Navbar Color', 'squarely' ),
		'description' => __( 'Choose the background color of your site wide navigation bar' , 'squarely' ), // @TODO Put a helper here
		'section' => 'logo',
		'type'    => 'color',
		'default' => '#fffff',
		'sanitize_callback' => 'sanitize_hex_color'
	);

	$options['scripts-google'] = array(
		'id' => 'scripts-google',
		'label'   => __( 'Google Analytics ID', 'squarely' ),
		'section' => 'header-scripts',
		'type'    => 'text',
	);

	$options['add-scripts'] = array(
		'id' => 'add-scripts',
		'label'   => __( 'Custom Scripts for Header', 'squarely' ),
		'section' => 'header-scripts',
		'type'    => 'textarea',
	);

	$options['editor'] = array(
		'id' => 'editor',
		'label'   => __( 'Custom Scripts for Header', 'squarely' ),
		'section' => 'header-scripts',
		'type'    => 'editor',
	);

	$options['header-hero'] = array(
		'id' => 'header-hero',
		'label'   => __( 'Header Hero Image', 'squarely' ),
		'section' => 'header-options',
		'type'    => 'image',
		'default-image' => '',
		'sanitize_callback' => 'esc_url_raw'
	);

	$options['header-h1'] = array(
		'id' => 'header-h1',
		'label'   => __( 'Header H1 Title', 'squarely' ),
		'section' => 'header-options',
		'type'    => 'text',
		'default' => 'Lands.io, Open Source'
	);

		$options['header-h2'] = array(
		'id' => 'header-h2',
		'label'   => __( 'Header Sub Title', 'squarely' ),
		'section' => 'header-options',
		'type'    => 'text',
		'default' => 'Tailored-Made Development, Creative, Strategy & Management'
	);

	$options['header_btn_right'] = array(
		'id' => 'header_btn_right',
		'label'   => __( 'Right button URL', 'squarely' ),
		'section' => 'header-options',
		'type'    => 'text',
		'priority' => 12,
		'default' => '#primary',
		'sanitize_callback' => 'esc_url_raw'
	);

	$options['header_btn_left'] = array(
		'id' => 'header_btn_left',
		'label'   => __( 'Left button URL', 'squarely' ),
		'section' => 'header-options',
		'type'    => 'text',
		'priority' => 13,
		'default' => '#primary',
		'sanitize_callback' => 'esc_url_raw'
	);

	/*/////////////////////////////////
	/* Options Colors & Typography
	/*/////////////////////////////////

	$options['primary-font'] = array(
		'id' => 'primary-font',
		'label'   => __( 'Primary Font', 'squarely' ),
		'section' => 'typography',
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Monoton'
	);

	$options['secondary-font'] = array(
		'id' => 'secondary-font',
		'label'   => __( 'Script, Decorative Font using the .script class', 'squarely' ),
		'section' => 'typography',
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Merriweather'
	);

	$options['body_font_color'] = array(
		'id' => 'body_font_color',
		'label'   => __( 'Base Font Color', 'squarely' ),
		'section' => 'typography',
		'type'    => 'color',
		'default' => $c_gray,
		'sanitize_callback' => 'sanitize_hex_color'
	);

	$options['body_background'] = array(
		'id' => 'body_background',
		'label'   => __( 'Base Background Color', 'squarely' ),
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => '#fffff',
		'sanitize_callback' => 'sanitize_hex_color'
	);

	$options['brand-primary'] = array(
		'id' => 'brand-primary',
		'label'   => __( 'Brand Primary', 'squarely' ),
		'description' => __( 'Filled Buttons, Icons, and elements using the ".primary-bg" class' , 'squarely' ), // @TODO Put a helper here
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => $brand_primary,
		'sanitize_callback' => 'sanitize_hex_color'
	);

	$options['brand-primary-text'] = array(
		'id' => 'brand-primary-text',
		'label'   => __( 'Brand Primary Text', 'squarely' ),
		'description' => __( 'Button & Icon Outlines, Links, and Type using the ".c-primary" class' , 'squarely' ), // @TODO Put a helper here
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => $brand_primary,
		'sanitize_callback' => 'sanitize_hex_color'
	);

	$options['brand-secondary'] = array(
		'id' => 'brand-secondary',
		'label'   => __( 'Brand Secondary', 'squarely' ),
		'description' => __( 'Filled Buttons, Icons, and elements using the ".secondary-bg" class' , 'squarely' ), // @TODO Put a helper here
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => $brand_secondary,
		'sanitize_callback' => 'sanitize_hex_color'
	);

	$options['brand-secondary-text'] = array(
		'id' => 'brand-secondary-text',
		'label'   => __( 'Secondary Type, Outline Btns, & Icons', 'squarely' ),
		'description' => __( 'Button & Icon Outlines, Links, and Type using the ".c-secondary" class' , 'squarely' ), // @TODO Put a helper here
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => $brand_secondary,
		'sanitize_callback' => 'sanitize_hex_color'
	);

	$options['brand-success'] = array(
		'id' => 'brand-success',
		'label'   => __( 'Brand Success', 'squarely' ),
		'description' => __( 'Filled Buttons, Icons, and elements using the ".success-bg" class' , 'squarely' ), // @TODO Put a helper here
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => $brand_success,
		'sanitize_callback' => 'sanitize_hex_color'
	);

	$options['brand-success-text'] = array(
		'id' => 'brand-success-text',
		'label'   => __( 'Success Type, Outline Btns, & Icons', 'squarely' ),
		'description' => __( 'Button & Icon Outlines, Links, and Type using the ".c-success" class' , 'squarely' ), // @TODO Put a helper here
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => $brand_success,
		'sanitize_callback' => 'sanitize_hex_color'
	);

	$options['brand-info'] = array(
		'id' => 'brand-info',
		'label'   => __( 'Brand Info', 'squarely' ),
		'description' => __( 'Filled Buttons, Icons, and elements using the ".info-bg" class' , 'squarely' ), // @TODO Put a helper here
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => $brand_info,
		'sanitize_callback' => 'sanitize_hex_color'
	);

	$options['brand-info-text'] = array(
		'id' => 'brand-info-text',
		'label'   => __( 'Info Type, Outline Btns, & Icons', 'squarely' ),
		'description' => __( 'Button & Icon Outlines, Links, and Type using the ".c-info" class' , 'squarely' ), // @TODO Put a helper here
		'section' => 'colors_type',
		'type'    => 'color',
		'default' => $brand_info,
		'sanitize_callback' => 'sanitize_hex_color'
	);

	

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_squarely_options' );