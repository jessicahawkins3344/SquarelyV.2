<?php

namespace Squarely\Setup;

use Squarely\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');

  // Make theme available for translation
  load_theme_textdomain('squarely', get_template_directory() . '/lang');

  // Content width
  global $content_width;
  if ( ! isset( $content_width ) ) {
    $content_width = 1170; /* pixels */
  }

   // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus( array(
    'primary_navigation' => __( 'primary_navigation', 'squarely' ),
  ) );


  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  add_theme_support('post-thumbnails');
  add_image_size('suarely-large-thumb', 660);
  add_image_size('squarely-small-thumb', 450);

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Set up the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'squarely_custom_background_args', array(
    'default-color' => 'f9f9f9',
    'default-image' => '',
  ) ) );
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'squarely'),
    'id'            => 'sidebar-primary',
    'before_title'  => '<div class="spacing m-b c-gray" style="border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom: 3px double #ccc;"><h5 style="font-weight: bolder!important;">',
    'after_title'   => '</h5></div>',
    'before_widget' => '<div class="m-b p-b card-block widget bg-default %1$s %2$s" style="border-radius: 5px!important;">',
    'after_widget'  => '</div>',
  ]);

  register_sidebar([
    'name'          => __('Footer', 'squarely'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<div class="m-b-md card widget %1$s %2$s"><div class="card-block">',
    'after_widget'  => '</div></div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page_template('template-full.php')
  ]);

  return apply_filters('squarely/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('ihover', Assets\asset_path('styles/ihover.css'), false, null);
  wp_enqueue_style('squarely/css', Assets\asset_path('styles/main.css'), false, null);
  wp_enqueue_style( 'squarely-style', get_stylesheet_uri() );

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('jquery', Assets\asset_path('scripts/jquery.js'), [], null, true);
  wp_enqueue_script('modernizr', Assets\asset_path('scripts/modernizr.js'), [], null, true);
  wp_enqueue_script('squarely/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);
