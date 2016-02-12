<?php
/**
 * @package squarely
 */

// Check if Live Composer is active
if ( defined( 'DS_LIVE_COMPOSER_URL' ) ) {


    function squarely_section_title_module_init() {
        dslc_register_module( 'Squarely_Section_Title' );
    } 
    add_action( 'dslc_hook_register_modules', 'squarely_section_title_module_init' );

    class Squarely_Section_Title extends DSLC_Module {
            
            function __construct() {
                $this->module_id = 'Squarely_Section_Title';
                $this->module_title = __( 'Section title', 'squarely' );
                $this->module_icon = 'file';
                $this->module_category = 'elements';
            }
     
            function options() {

                $dslc_options = array(

                    array(
                        'label' => __( 'Title', 'squarely' ),
                        'id' => 'section_title',
                        'std' => 'Section title',
                        'type' => 'textarea',
                        'refresh_on_change' => true,
                    ),
                    //Styling
                    array(
                        'label' => __( 'Title color', 'squarely' ),
                        'id' => 'css_title_color',
                        'std' => '#3E4C53',
                        'type' => 'color',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.squarely-section-title',
                        'affect_on_change_rule' => 'color',
                        'section' => 'styling',
                    ),                    
                    array(
                        'label' => __( 'Font Size', 'squarely' ),
                        'id' => 'css__font_size',
                        'std' => '36',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.squarely-section-title',
                        'affect_on_change_rule' => 'font-size',
                        'section' => 'styling',
                        'ext' => 'px'
                    ),
                    array(
                        'label' => __( 'Font Weight', 'squarely' ),
                        'id' => 'css_font_weight',
                        'std' => '400',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.squarely-section-title',
                        'affect_on_change_rule' => 'font-weight',
                        'section' => 'styling',
                        'ext' => '',
                        'min' => 100,
                        'max' => 900,
                        'increment' => 100
                    ),
                    array(
                        'label' => __( 'Font Family', 'squarely' ),
                        'id' => 'css_font_family',
                        'std' => 'Raleway',
                        'type' => 'font',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.squarely-section-title',
                        'affect_on_change_rule' => 'font-family',
                        'section' => 'styling',
                    ),
                    array(
                        'label' => __( 'Letter Spacing', 'squarely' ),
                        'id' => 'css_main_letter_spacing',
                        'std' => '5',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.squarely-section-title',
                        'affect_on_change_rule' => 'letter-spacing',
                        'section' => 'styling',
                        'ext' => 'px',
                        'min' => -50,
                        'max' => 50
                    ),
                    array(
                        'label' => __( 'Line Height', 'squarely' ),
                        'id' => 'css_main_line_height',
                        'std' => '48',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.squarely-section-title',
                        'affect_on_change_rule' => 'line-height',
                        'section' => 'styling',
                        'ext' => 'px'
                    ),                  
                    array(
                        'label' => __( 'Margin Bottom', 'squarely' ),
                        'id' => 'css_main_margin_bottom',
                        'std' => '75',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.squarely-title-module',
                        'affect_on_change_rule' => 'margin-bottom',
                        'section' => 'styling',
                        'ext' => 'px',
                    ),                    
                    array(
                        'label' => __( 'Decoration color', 'squarely' ),
                        'id' => 'css_deco_color',
                        'std' => '#D2D7DE',
                        'type' => 'color',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.bottom-deco,.top-left-deco,.top-right-deco',
                        'affect_on_change_rule' => 'background-color',
                        'section' => 'styling',
                    ),
                    /**
                     * Heading 1
                     */

                    array(
                        'label' => __( 'Color', 'live-composer-page-builder' ),
                        'id' => 'css_h1_color',
                        'std' => '',
                        'type' => 'color',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h1',
                        'affect_on_change_rule' => 'color',
                        'section' => 'styling',
                        'tab' => __( 'H1', 'live-composer-page-builder' ),
                    ),
                    array(
                        'label' => __( 'Font Size', 'live-composer-page-builder' ),
                        'id' => 'css_h1_font_size',
                        'std' => '25',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h1',
                        'affect_on_change_rule' => 'font-size',
                        'section' => 'styling',
                        'tab' => __( 'H1', 'live-composer-page-builder' ),
                        'ext' => 'px'
                    ),
                    array(
                        'label' => __( 'Font Weight', 'live-composer-page-builder' ),
                        'id' => 'css_h1_font_weight',
                        'std' => '400',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h1',
                        'affect_on_change_rule' => 'font-weight',
                        'section' => 'styling',
                        'tab' => __( 'H1', 'live-composer-page-builder' ),
                        'ext' => '',
                        'min' => 100,
                        'max' => 900,
                        'increment' => 100
                    ),
                    array(
                        'label' => __( 'Font Family', 'live-composer-page-builder' ),
                        'id' => 'css_h1_font_family',
                        'std' => 'Open Sans',
                        'type' => 'font',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h1',
                        'affect_on_change_rule' => 'font-family',
                        'section' => 'styling',
                        'tab' => __( 'H1', 'live-composer-page-builder' ),
                    ),
                    array(
                        'label' => __( 'Font Style', 'live-composer-page-builder' ),
                        'id' => 'css_h1_font_style',
                        'std' => 'normal',
                        'type' => 'select',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h1',
                        'affect_on_change_rule' => 'font-style',
                        'section' => 'styling',
                        'tab' => __( 'h1', 'live-composer-page-builder' ),
                        'choices' => array(
                            array(
                                'label' => __( 'Normal', 'live-composer-page-builder' ),
                                'value' => 'normal',
                            ),
                            array(
                                'label' => __( 'Italic', 'live-composer-page-builder' ),
                                'value' => 'italic',
                            ),
                        )
                    ),
                    array(
                        'label' => __( 'Line Height', 'live-composer-page-builder' ),
                        'id' => 'css_h1_line_height',
                        'std' => '35',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h1',
                        'affect_on_change_rule' => 'line-height',
                        'section' => 'styling',
                        'tab' => __( 'H1', 'live-composer-page-builder' ),
                        'ext' => 'px'
                    ),
                    array(
                        'label' => __( 'Margin Bottom', 'live-composer-page-builder' ),
                        'id' => 'css_h1_margin_bottom',
                        'std' => '15',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h1',
                        'affect_on_change_rule' => 'margin-bottom',
                        'section' => 'styling',
                        'tab' => __( 'H1', 'live-composer-page-builder' ),
                        'ext' => 'px'
                    ),
                    array(
                        'label' => __( 'Text Align', 'live-composer-page-builder' ),
                        'id' => 'css_h1_text_align',
                        'std' => 'left',
                        'type' => 'text_align',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h1',
                        'affect_on_change_rule' => 'text-align',
                        'section' => 'styling',
                        'tab' => __( 'H1', 'live-composer-page-builder' ),
                    ),
                    array(
                        'label' => __( 'Text Shadow', 'live-composer-page-builder' ),
                        'id' => 'css_h1_text_shadow',
                        'std' => '',
                        'type' => 'text_shadow',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h1',
                        'affect_on_change_rule' => 'text-shadow',
                        'section' => 'styling',
                        'tab' => __( 'H1', 'live-composer-page-builder' ),
                    ),

                    /**
                     * Heading 2
                     */

                    array(
                        'label' => __( 'Color', 'live-composer-page-builder' ),
                        'id' => 'css_h2_color',
                        'std' => '',
                        'type' => 'color',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h2',
                        'affect_on_change_rule' => 'color',
                        'section' => 'styling',
                        'tab' => __( 'H2', 'live-composer-page-builder' ),
                    ),
                    array(
                        'label' => __( 'Font Size', 'live-composer-page-builder' ),
                        'id' => 'css_h2_font_size',
                        'std' => '23',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h2',
                        'affect_on_change_rule' => 'font-size',
                        'section' => 'styling',
                        'tab' => __( 'H2', 'live-composer-page-builder' ),
                        'ext' => 'px'
                    ),
                    array(
                        'label' => __( 'Font Weight', 'live-composer-page-builder' ),
                        'id' => 'css_h2_font_weight',
                        'std' => '400',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h2',
                        'affect_on_change_rule' => 'font-weight',
                        'section' => 'styling',
                        'tab' => __( 'H2', 'live-composer-page-builder' ),
                        'ext' => '',
                        'min' => 100,
                        'max' => 900,
                        'increment' => 100
                    ),
                    array(
                        'label' => __( 'Font Family', 'live-composer-page-builder' ),
                        'id' => 'css_h2_font_family',
                        'std' => 'Open Sans',
                        'type' => 'font',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h2',
                        'affect_on_change_rule' => 'font-family',
                        'section' => 'styling',
                        'tab' => __( 'H2', 'live-composer-page-builder' ),
                    ),
                    array(
                        'label' => __( 'Font Style', 'live-composer-page-builder' ),
                        'id' => 'css_h2_font_style',
                        'std' => 'normal',
                        'type' => 'select',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h2',
                        'affect_on_change_rule' => 'font-style',
                        'section' => 'styling',
                        'tab' => __( 'h2', 'live-composer-page-builder' ),
                        'choices' => array(
                            array(
                                'label' => __( 'Normal', 'live-composer-page-builder' ),
                                'value' => 'normal',
                            ),
                            array(
                                'label' => __( 'Italic', 'live-composer-page-builder' ),
                                'value' => 'italic',
                            ),
                        )
                    ),
                    array(
                        'label' => __( 'Line Height', 'live-composer-page-builder' ),
                        'id' => 'css_h2_line_height',
                        'std' => '33',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h2',
                        'affect_on_change_rule' => 'line-height',
                        'section' => 'styling',
                        'tab' => __( 'H2', 'live-composer-page-builder' ),
                        'ext' => 'px'
                    ),
                    array(
                        'label' => __( 'Margin Bottom', 'live-composer-page-builder' ),
                        'id' => 'css_h2_margin_bottom',
                        'std' => '15',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h2',
                        'affect_on_change_rule' => 'margin-bottom',
                        'section' => 'styling',
                        'tab' => __( 'H2', 'live-composer-page-builder' ),
                        'ext' => 'px'
                    ),
                    array(
                        'label' => __( 'Text Align', 'live-composer-page-builder' ),
                        'id' => 'css_h2_text_align',
                        'std' => 'left',
                        'type' => 'text_align',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h2',
                        'affect_on_change_rule' => 'text-align',
                        'section' => 'styling',
                        'tab' => __( 'H2', 'live-composer-page-builder' ),
                    ),
                    array(
                        'label' => __( 'Text Shadow', 'live-composer-page-builder' ),
                        'id' => 'css_h2_text_shadow',
                        'std' => '',
                        'type' => 'text_shadow',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h2',
                        'affect_on_change_rule' => 'text-shadow',
                        'section' => 'styling',
                        'tab' => __( 'H2', 'live-composer-page-builder' ),
                    ),

                    /**
                     * Heading 3
                     */

                    array(
                        'label' => __( 'Color', 'live-composer-page-builder' ),
                        'id' => 'css_h3_color',
                        'std' => '',
                        'type' => 'color',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h3',
                        'affect_on_change_rule' => 'color',
                        'section' => 'styling',
                        'tab' => __( 'H3', 'live-composer-page-builder' ),
                    ),
                    array(
                        'label' => __( 'Font Size', 'live-composer-page-builder' ),
                        'id' => 'css_h3_font_size',
                        'std' => '21',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h3',
                        'affect_on_change_rule' => 'font-size',
                        'section' => 'styling',
                        'tab' => __( 'H3', 'live-composer-page-builder' ),
                        'ext' => 'px'
                    ),
                    array(
                        'label' => __( 'Font Weight', 'live-composer-page-builder' ),
                        'id' => 'css_h3_font_weight',
                        'std' => '400',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h3',
                        'affect_on_change_rule' => 'font-weight',
                        'section' => 'styling',
                        'tab' => __( 'H3', 'live-composer-page-builder' ),
                        'ext' => '',
                        'min' => 100,
                        'max' => 900,
                        'increment' => 100
                    ),
                    array(
                        'label' => __( 'Font Family', 'live-composer-page-builder' ),
                        'id' => 'css_h3_font_family',
                        'std' => 'Open Sans',
                        'type' => 'font',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h3',
                        'affect_on_change_rule' => 'font-family',
                        'section' => 'styling',
                        'tab' => __( 'H3', 'live-composer-page-builder' ),
                    ),
                    array(
                        'label' => __( 'Font Style', 'live-composer-page-builder' ),
                        'id' => 'css_h3_font_style',
                        'std' => 'normal',
                        'type' => 'select',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h3',
                        'affect_on_change_rule' => 'font-style',
                        'section' => 'styling',
                        'tab' => __( 'h3', 'live-composer-page-builder' ),
                        'choices' => array(
                            array(
                                'label' => __( 'Normal', 'live-composer-page-builder' ),
                                'value' => 'normal',
                            ),
                            array(
                                'label' => __( 'Italic', 'live-composer-page-builder' ),
                                'value' => 'italic',
                            ),
                        )
                    ),
                    array(
                        'label' => __( 'Line Height', 'live-composer-page-builder' ),
                        'id' => 'css_h3_line_height',
                        'std' => '31',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h3',
                        'affect_on_change_rule' => 'line-height',
                        'section' => 'styling',
                        'tab' => __( 'H3', 'live-composer-page-builder' ),
                        'ext' => 'px'
                    ),
                    array(
                        'label' => __( 'Margin Bottom', 'live-composer-page-builder' ),
                        'id' => 'css_h3_margin_bottom',
                        'std' => '15',
                        'type' => 'slider',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h3',
                        'affect_on_change_rule' => 'margin-bottom',
                        'section' => 'styling',
                        'tab' => __( 'H3', 'live-composer-page-builder' ),
                        'ext' => 'px'
                    ),
                    array(
                        'label' => __( 'Text Align', 'live-composer-page-builder' ),
                        'id' => 'css_h3_text_align',
                        'std' => 'left',
                        'type' => 'text_align',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h3',
                        'affect_on_change_rule' => 'text-align',
                        'section' => 'styling',
                        'tab' => __( 'H3', 'live-composer-page-builder' ),
                    ),
                    array(
                        'label' => __( 'Text Shadow', 'live-composer-page-builder' ),
                        'id' => 'css_h3_text_shadow',
                        'std' => '',
                        'type' => 'text_shadow',
                        'refresh_on_change' => false,
                        'affect_on_change_el' => '.dslc-html-module-content h3',
                        'affect_on_change_rule' => 'text-shadow',
                        'section' => 'styling',
                        'tab' => __( 'H3', 'live-composer-page-builder' ),
                    ),                       
                );

                $dslc_options = array_merge( $dslc_options, $this->presets_options() );

                return apply_filters( 'dslc_module_options', $dslc_options, $this->module_id );

            }
     
        // Module Output
            function output( $options ) {

                $this->module_start( $options );


                /* Module output stars here */

                ?>
                <div class="squarely-title-module">
                    <h3 class="squarely-section-title"><?php echo esc_html($options['section_title']); ?></h3>
                    <span class="top-left-deco"></span><span class="top-right-deco"></span>
                    <span class="bottom-deco"></span>
                </div>
                <?php

                /* Module output ends here */

                $this->module_end( $options );

            }
     
    }

}