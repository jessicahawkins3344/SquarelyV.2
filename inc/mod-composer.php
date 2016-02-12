<?php
/**
 * Live Composer Compatibility File
 *
 * @package West
 */


function squarely_lc_defaults( $options, $id ) {

	// The array that will hold new defaults
	$new_defaults = array();


	if ( $id == 'DSLC_Info_Box' ) { 
		$new_defaults = array(
			'elements' => 'icon title content ',
			'css_bg_color' => 'rgba(0, 0, 0, 0)',
			'css_border_color' => 'rgba(0, 0, 0, 0)',
			'css_padding_vertical' => '15',
			'css_padding_horizontal' => '15',
			'css_wrapper_bg_color' => 'transparent',
			'css_icon_bg_color' => 'rgb(234, 171, 28)',
			'css_icon_border_color' => 'rgb(234, 171, 28)',
			'css_icon_color' => 'rgb(255, 255, 255)',
			'icon_id' => 'connectdevelop',
			'css_icon_margin_bottom' => '30',
			'css_icon_wrapper_width' => '100',
			'css_icon_width' => '34',
			'css_title_font_size' => '20',
			'css_title_font_family' => 'Lato',
			'css_title_line_height' => '26',
			'css_title_margin' => '30',
			'css_content_color' => 'rgb(150, 156, 179)',
			'css_content_font_family' => 'Roboto',
			'css_content_margin' => '0',
			'css_button_bg_color' => 'rgb(234, 171, 28)',
			'css_button_bg_color_hover' => 'rgba(224, 117, 75, 0.9)',
			'css_button_font_size' => '14',
			'css_button_font_weight' => '600',
			'css_button_margin_top' => '30',
			'button_icon_id' => 'cogs',
			'css_button_icon_color' => 'rgb(215, 217, 220)',
			'css_button_icon_margin' => '7',
			'css_button_2_bg_color' => 'rgb(38, 173, 218)',
			'css_button_2_bg_color_hover' => 'rgba(38, 173, 218, 0.9)',
			'title' => 'DEVELOPMENT',
			'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eleifend interdum lacus, eu consequat dolor convallis eu interdum lacus.</p>',
			'button_title' => 'Read more',
			'css_res_t' => 'enabled',
			'css_res_p' => 'enabled',
			'css_content_line_height' => '26',
		);
	}


	if ( $id == 'DSLC_Button' ) { 
		$new_defaults = array(
			'css_align' => 'center',
			'css_bg_color' => 'rgb(234, 171, 28)',
			'css_bg_color_hover' => 'rgba(234, 171, 28, 0.9)',
			'css_border_color' => 'rgba(0, 0, 0, 0)',
			'css_border_radius' => '0',
			'css_padding_vertical' => '15',
			'css_padding_horizontal' => '30',
			'css_button_font_size' => '13',
			'css_button_font_weight' => '700',
			'css_button_font_family' => 'Lato',
			'button_state' => 'disabled',
		);
	}

	if ( $id == 'DSLC_Projects' ) { 
		$new_defaults = array(
			'elements' => 'filters ',
			'post_elements' => 'thumbnail title ',
			'separator_enabled' => 'disabled',
			'css_thumbnail_border_radius_top' => '0',
			'main_location' => 'inside',
			'css_main_bg_color' => 'rgba(234, 171, 28, 0.6)',
			'css_main_border_width' => '0',
			'css_main_border_radius_bottom' => '0',
			'css_main_padding_vertical' => '0',
			'css_main_padding_horizontal' => '0',
			'css_title_color' => 'rgb(255, 255, 255)',
			'css_title_font_size' => '16',
			'css_title_font_weight' => '600',
			'css_title_line_height' => '16',
			'css_title_margin_bottom' => '0',
			'css_filter_bg_color_active' => 'rgb(234, 171, 28)',
			'css_filter_border_color' => 'rgb(234, 171, 28)',
			'css_filter_border_color_active' => 'rgb(234, 171, 28)',
			'css_filter_border_width' => '2',
			'css_filter_border_trbl' => 'top bottom ',
			'css_filter_border_radius' => '0',
			'css_filter_color' => 'rgb(150, 156, 179)',
			'css_filter_font_size' => '13',
			'css_filter_font_weight' => '400',
			'css_filter_position' => 'center',
			'css_filter_spacing' => '20',
			'css_filter_margin_bottom' => '45',
			'thumb_resize_width_manual' => '500px',
			'css_anim_hover' => 'dslcSlideUpFadeIn',
			'css_anim_speed' => '400',
		);
	}


	if ( $id == 'DSLC_Staff' ) { 
		$new_defaults = array(
			'link' => 'disabled',
			'amount' => '3',
			'columns' => '4',
			'social_link_target' => '_blank',
			'post_elements' => 'thumbnail social title position ',
			'separator_enabled' => 'disabled',
			'thumb_resize_width_manual' => '400px',
			'css_social_bg_color' => 'rgba(234, 171, 28, 0.9)',
			'css_social_border_color' => 'transparent',
			'css_social_padding_vertical' => '10',
			'css_social_font_size' => '18',
			'css_main_border_width' => '0',
			'css_title_font_size' => '20',
			'css_title_font_family' => 'Lato',
			'css_title_line_height' => '24',
			'css_position_border_trbl' => 'top ',
			'css_position_color' => 'rgb(150, 156, 179)',
			'css_position_font_size' => '14',
			'css_position_font_weight' => '400',
			'css_position_font_family' => 'Roboto',
			'css_position_padding_vertical' => '18',
			'css_excerpt_color' => 'rgb(150, 156, 179)',
			'css_excerpt_font_size' => '14',
			'css_excerpt_font_family' => 'Roboto',
			'css_res_t' => 'enabled',
			'css_res_p' => 'enabled',
			'css_filter_bg_color' => 'rgba(0, 0, 0, 0)',
			'css_filter_bg_color_active' => 'rgb(224, 117, 75)',
			'css_filter_border_color' => 'rgb(128, 128, 128)',
			'css_filter_border_color_active' => 'rgb(224, 117, 75)',
			'css_filter_border_trbl' => 'top bottom ',
			'css_filter_border_radius' => '0',
			'css_filter_margin_bottom' => '45',
			'css_res_p_main_padding_vertical' => '15',
			'css_res_p_position_margin_bottom' => '5',			
		);
	}

	if ( $id == 'DSLC_Testimonials' ) { 
		$new_defaults = array(
			'type' => 'carousel',
			'amount' => '2',
			'columns' => '12',
			'post_elements' => 'quote name position ',
			'carousel_elements' => 'circles ',
			'css_sep_height' => '0',
			'css_sep_thickness' => '0',
			'css_sep_style' => 'none',
			'css_main_bg_color' => 'transparent',
			'css_main_padding_vertical' => '0',
			'css_main_padding_horizontal' => '100',
			'css_quote_border_color' => 'rgb(225, 234, 239)',
			'css_quote_border_width' => '2',
			'css_quote_border_trbl' => 'bottom ',
			'css_quote_color' => 'rgb(150, 156, 179)',
			'css_quote_font_size' => '16',
			'css_quote_font_weight' => '400',
			'css_quote_font_family' => 'Lato',
			'css_quote_margin' => '30',
			'css_quote_padding_bottom' => '30',
			'css_author_margin_bottom' => '30',
			'css_avatar_margin_right' => '21',
			'css_avatar_size' => '100',
			'css_name_color' => 'rgb(43, 45, 58)',
			'css_name_font_size' => '18',
			'css_name_font_family' => 'Montserrat',
			'css_name_margin_bottom' => '15',
			'css_name_margin_top' => '0',
			'css_position_color' => 'rgb(208, 211, 214)',
			'css_position_font_size' => '13',
			'css_position_font_family' => 'Lato',
			'carousel_autoplay' => '5000',
			'carousel_autoplay_hover' => 'true',
			'css_arrows_bg_color' => 'rgb(234, 171, 28)',
			'css_arrows_bg_color_hover' => 'rgba(234, 171, 28, 0.9)',
			'css_arrows_margin_top' => '0',
			'css_arrows_size' => '24',
			'css_arrows_arrow_size' => '13',
			'css_arrows_margin_bottom' => '0',
			'css_circles_color' => 'rgb(221, 221, 221)',
			'css_circles_color_active' => 'rgb(234, 171, 28)',
			'css_circles_size' => '10',
			'css_circles_spacing' => '4',
			'css_res_t' => 'enabled',
			'css_res_p' => 'enabled',
		);
	}

	if ( $id == 'DSLC_Partners' ) { 
		$new_defaults = array(
			'link' => 'disabled',
			'post_elements' => 'thumbnail ',
			'carousel_elements' => 'circles ',
			'separator_enabled' => 'disabled',
			'css_thumbnail_border_width' => '0',
			'css_thumbnail_margin_bottom' => '0',
			'thumb_resize_width_manual' => '300px',
			'css_main_text_align' => 'center',
			'css_title_font_size' => '16',
			'css_title_font_family' => 'Montserrat',
			'css_res_t' => 'enabled',
			'css_res_p' => 'enabled',
			'css_res_t_thumbnail_margin_bottom' => '0',
			'css_res_t_thumbnail_padding_vertical' => '0',
			'css_res_p_sep_height' => '1',
			'css_res_p_thumbnail_margin_bottom' => '0',
			'css_res_p_thumbnail_padding_vertical' => '0',
			'css_res_p_title_margin_bottom' => '14',			
		);
	}

	if ( $id == 'DSLC_Accordion' ) { 
		$new_defaults = array(
			'css_title_color' => 'rgb(43, 45, 58)',
			'css_title_font_weight' => '600',
			'css_content_bg_color' => 'transparent',
			'css_content_color' => 'rgb(150, 156, 179)',
			'css_content_font_size' => '13',
		);
	}	

	if ( $id == 'DSLC_Social' ) { 
		$new_defaults = array(
			'css_text_align' => 'center',
			'css_bg_color' => 'rgb(234, 171, 28)',
			'css_bg_color_hover' => 'rgb(28, 30, 41)',
			'css_size' => '60',
			'css_spacing' => '30',
			'css_icon_font_size' => '24',
		);
	}

if ( $id == 'DSLC_Blog' ) { 
	$new_defaults = array(
		'type' => 'masonry',
		'amount' => '10',
		'pagination_type' => 'loadmore',
		'columns' => '6',
		'elements' => 'main_heading ',
		'css_wrapper_border_radius_top' => '5',
		'css_wrapper_border_radius_bottom' => '5',
		'css_wrapper_padding_vertical' => '11',
		'css_wrapper_padding_horizontal' => '31',
		'css_sep_height' => '38',
		'thumb_margin_right' => '0',
		'css_main_bg_color' => 'rgb(234, 234, 233)',
		'css_main_padding_horizontal' => '28',
		'title_font_size' => '24',
		'css_title_font_weight' => '600',
		'css_title_font_family' => 'Lato',
		'title_margin' => '13',
		'css_excerpt_color' => 'rgb(50, 50, 50)',
		'css_excerpt_font_size' => '19',
		'css_excerpt_font_weight' => '300',
		'css_excerpt_font_family' => 'Lato',
		'css_button_border_radius' => '4',
		'css_button_font_size' => '14',
		'css_button_letter_spacing' => '3',
		'css_button_font_family' => 'Lato',
		'css_button_padding_vertical' => '19',
		'css_button_padding_horizontal' => '20',
		'post_elements' => 'thumbnail title excerpt button ',
		'css_button_bg_color' => 'rgb(43, 218, 91)',
		'css_button_bg_color_hover' => 'rgb(30, 179, 71)',
		'css_button_font_weight' => '500',
		'main_heading_title' => 'SORT BY CATEGORY',
		'css_main_heading_font_weight' => '600',
		'css_main_heading_font_family' => 'Lato',
		'css_main_heading_letter_spacing' => '2',
		'css_main_heading_link_font_family' => 'Lato',
	);
}

if ( $id == 'DSLC_Text_Simple' ) { 
	$new_defaults = array(
		'css_main_font_size' => '18',
		'css_main_font_weight' => '300',
		'css_main_font_family' => 'Lato',
		'css_main_line_height' => '28',
		'css_main_margin_bottom' => '10',
		'css_h1_font_size' => '52',
		'css_h1_font_weight' => '600',
		'css_h1_font_family' => 'Lato',
		'css_h1_line_height' => '54',
		'css_h1_margin_bottom' => '0',
		'css_h2_font_size' => '40',
		'css_h2_font_weight' => '300',
		'css_h2_font_family' => 'Lato',
		'css_h2_line_height' => '44',
		'css_h2_margin_bottom' => '0',
		'css_h3_font_size' => '27',
		'css_h3_font_weight' => '300',
		'css_h3_font_family' => 'Lato',
		'css_h4_font_size' => '24',
		'css_h4_font_weight' => '300',
		'css_h4_font_family' => 'Lato',
		'css_h4_line_height' => '34',
		'css_h4_margin_bottom' => '10',
		'css_link_color' => 'rgb(43, 218, 91)',
		'css_link_color_hover' => 'rgb(39, 211, 86)',
		'css_li_font_size' => '18',
		'css_li_font_weight' => '300',
		'css_li_font_family' => 'Lato',
		'css_li_line_height' => '28',
		'css_ul_style' => 'none',
		'css_ol_style' => 'none',
	);
}

if ( $id == 'DSLC_Separator' ) { 
	$new_defaults = array(
		'css_main_border_color' => 'rgb(198, 198, 198)',
		'css_main_border_width' => '1',
		'css_main_border_trbl' => 'top bottom ',
		'height' => '1',
		'style' => 'double',
	);
}	

if ( $id == 'DSLC_Button' ) { 
	$new_defaults = array(
		'css_bg_color' => 'rgb(60, 230, 107)',
		'css_bg_color_hover' => 'rgb(39, 211, 86)',
		'css_border_radius' => '4',
		'css_padding_vertical' => '18',
		'css_padding_horizontal' => '29',
		'css_button_font_size' => '15',
		'css_button_font_weight' => '500',
		'css_button_letter_spacing' => '2',
	);
}

if ( $id == 'DSLC_Widgets' ) { 
	$new_defaults = array(
		'sidebar' => 'dslc_lc_search',
		'columns' => '12',
		'css_widgets_padding_vertical' => '12',
		'css_widget_bg_color' => 'rgb(234, 234, 233)',
		'css_widget_border_radius_top' => '5',
		'css_widget_border_radius_bottom' => '5',
		'css_widget_padding_vertical' => '24',
		'css_widget_padding_horizontal' => '20',
		'css_widget_margin_bottom' => '41',
		'css_title_border_color' => 'rgb(255, 255, 255)',
		'title_font_size' => '18',
		'css_title_font_weight' => '700',
		'css_title_font_family' => 'Lato',
		'css_title_letter_spacing' => '2',
		'css_title_line_height' => '36',
		'css_title_text_align' => 'center',
		'css_title_text_transform' => 'uppercase',
		'css_main_font_size' => '15',
		'css_main_font_weight' => '300',
		'css_main_font_family' => 'Lato',
		'css_main_line_height' => '26',
		'css_link_font_weight' => '600',
		'css_ul_margin_bottom' => '0',
		'css_ul_style' => 'none',
		'css_ul_li_border_color' => 'rgb(221, 221, 221)',
		'css_ul_li_border_width' => '1',
		'css_ul_li_borders' => 'bottom ',
		'css_ul_li_margin_bottom' => '0',
		'css_ul_li_padding_vertical' => '6',
	);
}

	return dslc_set_defaults( $new_defaults, $options );
 
} 
add_filter( 'dslc_module_options', 'squarely_lc_defaults', 10, 2 );