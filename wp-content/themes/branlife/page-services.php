<?php get_header(); ?>
<?php 
    global $post_id;
    $category = wp_get_post_categories($post_id);

    $services_heading = esc_html(get_theme_mod('services_heading', 'We Introduce To You Our Services'));
    $services_text = esc_html(get_theme_mod('services_text', 'ONETIME TECHNOLOGY SERVICES OFFERS A WIDE VARIETY OF IT SOLUTIONS IN THE FOLLOWING FIELDS'));

    $layout = esc_html(get_theme_mod('layout', 'sidebar'));
 ?>
<div class="page-showcase">
    <div class="page-showcase-overlay">
        <div class="page-showcase-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto text-center">
                    <h2 class="page-showcase-header"><?php _e($services_heading, 'onetime'); ?></h2>
                    <p>
                    <?php _e($services_text, 'onetime'); ?>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php 

    $args = array(
        'category_name' => 'Services',
        'order' => 'ASC',
        
    );
    
    $query = NEW WP_Query($args);
    
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
                <?php if($query->have_posts()) : ?>
                    <?php while($query->have_posts()) : $query->the_post(); ?>
                        <?php get_template_part('template-parts/content', 'posts'); ?>
                    <?php endwhile; ?>
                    
    </div>
    
                    <?php else: ?>
                        <p>no posts found</p>
                <?php endif; ?>

            </div>
            <?php the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( 'Previous', 'master' ),
    'next_text' => __( 'Next', 'master' ),
    
) ); ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>


