
<?php if (!have_posts()) : ?>
	<div class="m-t-lg">
	  <div class="alert alert-warning">
	    <?php _e('Sorry, no results were found.', 'squarely'); ?>
	  </div>
	</div>
<?php endif; ?>

<div class="row">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
</div>

<?php the_posts_navigation(); ?>