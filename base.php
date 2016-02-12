<?php

use Squarely\Setup;
use Squarely\Wrapper;

?>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <?php if (is_singular()) : ?>
      <div class="m-t-lg bg-default" style="position: relative; top: 2.3%;">
        <div class="container-fluid" style="padding: 3% 9%;">
          <div class="row">
            <div class="col-md-12">
              <?php get_template_part('templates/page', 'header'); ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div class="wrap ui-4 container-fluid">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    
  </body>
</html>