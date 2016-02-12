
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('m-t-lg p-r'); ?>>
    <header>
      <h1 class="display-3 entry-title m-b"><strong><?php the_title(); ?></strong></h1>
      <?php get_template_part('templates/entry-meta'); ?>
      <div class="double-divider"></div>
    </header>
    <div class="entry-content m-t-lg m-b">
      <?php the_content(); ?>
    </div>
    <footer class="social">
      <ul class="list-inline social-icons text-xs-center">
      <div class="m-b-md double-divider"></div>
  <li>
    <a href="<?php echo esc_url( get_theme_mod( 'f-twitter' ) ) ;?>">
      <i class="icon-social-twitter-outline"></i>
    </a>
  </li>

  <li>
    <a href="<?php echo esc_url( get_theme_mod( 'f-facebook' ) ) ;?>">
      <i class="icon-social-facebook-outline"></i>
    </a>
  </li>

  <li>
    <a href="<?php echo esc_url( get_theme_mod( 'f-google' ) ) ;?>">
      <i class="icon-social-google-outline"></i>
    </a>
  </li>

  <li>
    <a href="<?php echo esc_url( get_theme_mod( 'f-linkedin' ) ) ;?>">
      <i class="icon-social-linkedin-outline"></i>
    </a>
  </li>
jessicarhawkins08@gmail.com   
  <li>
    <a href="<?php echo esc_url( get_theme_mod( 'f-youtube' ) ) ;?>">
      <i class="icon-social-youtube-outline"></i>
    </a>
  </li>

  <li>
    <a href="<?php echo esc_url( get_theme_mod( 'f-rss' ) ) ;?>">
      <i class="icon-social-rss-outline"></i>
    </a>
  </li>
  <div class="double-divider"></div>
</ul>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>