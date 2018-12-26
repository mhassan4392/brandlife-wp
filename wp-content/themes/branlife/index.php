<?php get_header(); ?>

<?php global $page; ?>
<div class="page-showcase">
    <div class="page-showcase-overlay">
        <div class="page-showcase-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h2 class="page-showcase-header">WELCOME TO OUR BLOG</h2>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php 
    $layout = esc_html(get_theme_mod('layout', 'sidebar'));
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
                if($layout == 'full'){echo '12 mx-auto';}else{echo '8 order-md-2 order-sm-1 second';};
            ?>">
                <div class="row">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/content', 'posts'); ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <p>no posts found</p>
                <?php endif; ?>
                </div>
                <div class="my-5">
    <?php the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( 'Previous', 'master' ),
    'next_text' => __( 'Next', 'master' ),
    
        ) ); ?>
    </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>


