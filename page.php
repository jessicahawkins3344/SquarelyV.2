<?php while (have_posts()) : the_post(); ?>
  <div class="row m-t-lg p-r-md p-l-md">
  	<?php get_template_part('templates/content', 'page'); ?>
  </div>
<?php endwhile; ?>
