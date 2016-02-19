<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 *
 */

$squarely_includes = [
  'lib/bootstrap-four-wp-navwalker.php',
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php'  // Theme wrapper class
];
foreach ($squarely_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'squarely'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}
unset($file, $filepath);

//* Bootstrap Four Nav Classes
function bootstrap_four_nav_li_class( $classes, $item ) {
  $classes[] .= ' nav-item-header' . ' nav-item';
  return $classes;
}
add_filter( 'nav_menu_css_class', 'bootstrap_four_nav_li_class', 10, 2 );

function bootstrap_four_nav_anchor_class( $atts, $item, $args ) {
  $atts['class'] .= ' nav-link';
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'bootstrap_four_nav_anchor_class', 10, 3 );


//* Bootstrap Four Comments
function bootstrap_four_comment_form_before() {
  echo '<div class="double-divider"></div><div class="p-t-md"><div class="m-b-md">';
}
add_action( 'comment_form_before', 'bootstrap_four_comment_form_before', 10, 5 );

function bootstrap_four_comment_form( $fields ) {
  $fields['fields']['author'] = '
  <fieldset class="form-group comment-form-email">
    <label class="sr-only" for="author">' . __( 'Name *', 'bootstrap-four' ) . '</label>
    <input type="text" class="bg-default form-control" name="author" id="author" placeholder="' . __( 'Name', 'bootstrap-four' ) . '" aria-required="true" required>
  </fieldset>';
  $fields['fields']['email'] ='
  <fieldset class="form-group comment-form-email">
    <label class="sr-only" for="email">' . __( 'Email address *', 'bootstrap-four' ) . 'Email address *</label>
    <input type="email" class="bg-default form-control" id="email" placeholder="' . __( 'Enter email', 'bootstrap-four' ) . '" aria-required="true" required>
  </fieldset>';
  $fields['fields']['url'] = '
  <fieldset class="form-group comment-form-email">
    <label  class="sr-only" for="url">' . __( 'Website *', 'bootstrap-four' ) . '</label>
    <input type="text" class="bg-default form-control" name="url" id="url" placeholder="' . __( 'http://example.org', 'bootstrap-four' ) . '">
  </fieldset>';
  $fields['comment_field'] = '
  <fieldset class="form-group m-t-lg">
    <label class="sr-only" for="comment">' . __( 'Comment *', 'bootstrap-four' ) . '</label>
    <textarea class="bg-default form-control" id="comment" name="comment" rows="5" aria-required="true" required></textarea>
  </fieldset>';
  $fields['comment_notes_before'] = '';
  $fields['class_submit'] = 'btn btn-success-outline';
  return $fields;
}
add_filter( 'comment_form_defaults', 'bootstrap_four_comment_form', 10, 5 );

function bootstrap_four_comment_form_after() {
  echo '</div><!-- .card-block --></div><!-- .card -->';
}
add_action( 'comment_form_after', 'bootstrap_four_comment_form_after', 10, 5 );


//* Enqueue Backstretch script
add_action( 'wp_enqueue_scripts', 'enqueue_backstretch' );
function enqueue_backstretch() {

  //* Load scripts only on single Posts, static Pages and other single pages and only if featured image is present
  if ( is_singular() && has_post_thumbnail() )

    wp_enqueue_script( 'backstretch', get_bloginfo( 'stylesheet_directory' ) . '/dist/scripts/jquery.backstretch.js', array( 'jquery' ), '1.0.0' );
    wp_enqueue_script( 'backstretch-set', get_bloginfo('stylesheet_directory').'/dist/scripts/backstretch-set.js' , array( 'jquery', 'backstretch' ), '1.0.0' );

    wp_localize_script( 'backstretch-set', 'BackStretchImg', array( 'src' => wp_get_attachment_url( get_post_thumbnail_id() ) ) );

}

function empty_content($str) {
    return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
}

//* Live Composer Customizations
require get_template_directory() . '/inc/composer-section-title.php';
require get_template_directory() . '/inc/custom-composer.php';
require get_template_directory() . '/inc/mod-composer.php';

/**
 *TGM Plugin activation.
 */
require get_template_directory() . '/tgmpa/class-tgm-plugin-activation.php';
 
add_action( 'tgmpa_register', 'squarely_recommend_plugin' );
function squarely_recommend_plugin() {
 
    $plugins = array(
        array(
            'name'               => 'Live Composer Page Builder',
            'slug'               => 'live-composer-page-builder',
            'required'           => false,
        ),       
    );
 
    tgmpa( $plugins);
 
}
