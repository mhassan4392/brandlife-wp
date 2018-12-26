<?php get_header(); ?>

<?php
  get_template_part('template-parts/front-page/content', 'features');
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <?php get_template_part('template-parts/content', 'about'); ?> 
<?php endwhile; endif; ?>

<?php get_footer(); ?>