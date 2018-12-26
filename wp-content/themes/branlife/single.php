<?php get_header(); ?>
<?php 
    global $post_id;
    $category = wp_get_post_categories($post_id);
 ?>
<div class="page-showcase">
    <div class="page-showcase-overlay">
        <div class="page-showcase-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h2 class="page-showcase-header"><?php the_title($post_id); ?></h2>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php 
    $layout = 'sidebar';
?>


<div class="page-layout my-5">
    <div class="container">
        <div class="row">
            <?php if($layout == 'sidebar'): ?>
                <div class="col-md-4 order-md-1 order-sm-2 first">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
            <div class="col-md-<?php 
                if($layout == 'full'){echo '10 mx-auto';}else{echo '8 order-md-2 order-sm-1 second';};
            ?>">
                <div class="row">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/content', 'single'); ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <p>no posts found</p>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>







<?php get_footer(); ?>