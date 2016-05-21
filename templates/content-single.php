
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('m-t-lg p-r'); ?>>
      <h1 class="display-3 entry-title m-b"><strong><?php the_title(); ?></strong></h1>
      <?php get_template_part('templates/entry-meta'); ?>
      <div class="double-divider"></div>
    <div class="entry-content m-t-lg m-b">
      <?php the_content(); ?>
    </div>
  
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>