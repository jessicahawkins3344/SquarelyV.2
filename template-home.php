<?php
/*
Template Name: Home Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('partials/hero');?>
	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
