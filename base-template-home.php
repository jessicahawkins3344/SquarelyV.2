<?php

use Squarely\Setup;
use Squarely\Wrapper;

?>

  <?php get_template_part('templates/head'); ?>
  <body <?php body_class('main-body'); ?>>
  <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'squarely'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
  <div class="wrapper" role="document" style="margin-top: 110px;">
    <main>
      <?php include Wrapper\template_path(); ?>
    </main><!-- /.main -->
  </div><!-- /.wrap -->
  <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
