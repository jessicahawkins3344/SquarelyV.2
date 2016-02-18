
<?php if (!have_posts()) : ?>
	<div class="m-t-lg">
	  <div class="card card-block bg-warning c-white p-a text-xs-center">
	    <?php _e('Sorry, no results were found. Try searching again?', 'squarely'); ?>
	  </div>
	</div>
<?php endif; ?>

<div class="row">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
</div>

<?php the_posts_navigation(); ?>