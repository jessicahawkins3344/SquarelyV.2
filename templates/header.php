<?php
$main_nav_options = array(
  'theme_location'    => 'primary_navigation',
  'depth'             => 2,
  'container'         => 'collapsingNavbar',
  'container_class'   => '',
  'menu_class'        => 'nav navbar-nav pull-right',
  'fallback_cb'       => 'bootstrap_four_wp_navwalker::fallback',
  'walker'            => new bootstrap_four_wp_navwalker()
);
?>

  <header id="sticky" class="site-header navbar navbar-custom bg-white navbar-fixed-top">
    <div class="container-fluid" style="padding-right: 9%; padding-left:9%;">
        <button class="c-primary text-primary navbar-toggler hidden-md-up pull-xs-right c-primary" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-expanded="false">
            ☰
        </button>
        <?php if ( has_nav_menu( 'primary_navigation' ) ) : ?>
          <div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbar">
          <?php wp_nav_menu( $main_nav_options ); ?>
          </div>
        <?php endif; ?>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <?php if ( get_theme_mod( 'logo', false ) ) {
            echo '<img src="' . esc_url( get_theme_mod( 'logo' ) ) . '" style="width: 250px; padding: 18px 0px!important;" class="crisp">';
          } else { ?>
            <?php bloginfo('name'); ?>
          <?php } ?>
        </a>
    </div><!-- .container -->
  </header>