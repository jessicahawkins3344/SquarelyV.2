<section class="section-hero text-xs-center">
  <div class="container align-vertical">
    <div class="row">
      <div class="col-md-12 text-xs-center centered-text">
        <span class="c-gray alt-font">
          <?php if ( get_theme_mod( 'header-subtitle', false ) ) {
            echo get_theme_mod("header-subtitle");
          } else { 
            echo 'thanks for saying hello to';
          } ?>
        </span>
        <h1 class="m-t display-2 c-gray m-b-md"><strong>
        <?php if ( get_theme_mod( 'header-h1', false ) ) {
            echo get_theme_mod("header-h1");
          } else { 
            echo 'Squarely Wordpress Theme';
          } ?>
        </strong></h1>
        <h2 class="c-gray m-b-md fw-light">
          <?php if ( get_theme_mod( 'header-h2', false ) ) {
            echo get_theme_mod("header-h2");
          } else { 
            echo 'Tailored-Made Development, Creative, Strategy & Management';
          } ?>
        </h2>
        <a target="_blank" href="<?php if ( get_theme_mod( 'btn-l-url', false ) ) {
            echo esc_url( get_theme_mod( 'btn-l-url' ) );
          } else { ?>
            <?php echo esc_url( home_url( '/' ) ); ?>
          <?php } ?>" class="m-b m-r btn btn-gray-outline btn-white">
          <?php if ( get_theme_mod( 'btn-l-label', false ) ) {
            echo get_theme_mod("btn-l-label");
          } else { 
            echo 'LEARN MORE';
          } ?>
        </a>
        <a href="<?php if ( get_theme_mod( 'btn-r-url', false ) ) {
            echo esc_url( get_theme_mod( 'btn-r-url' ) );
          } else { ?>
            <?php echo esc_url( home_url( '/' ) ); ?>
          <?php } ?>" class="m-b m-r btn btn-success btn-filled">
          <?php if ( get_theme_mod( 'btn-r-label', false ) ) {
            echo get_theme_mod("btn-r-label");
          } else { 
            echo 'OUR SERVICES';
          } ?>
        </a>
      </div>
    </div>
  </div>
</section>