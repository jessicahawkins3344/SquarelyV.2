<?php
/*
Template Name: Home Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('partials/hero');?>
    <?php get_template_part('partials/home', 'funnel');?>
    <?php get_template_part('partials/home', 'info');?>
    <?php get_template_part('partials/home', 'testimonials');?>
    <?php get_template_part('partials/home', 'consultation');?>
    <?php get_template_part('partials/home', 'posts');?>
<?php endwhile; ?>
