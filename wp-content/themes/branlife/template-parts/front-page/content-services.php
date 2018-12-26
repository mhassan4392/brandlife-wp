<?php 
    $services_heading = esc_html(get_theme_mod('services_heading', 'We Introduce To You Our Services'));
    $services_text = esc_html(get_theme_mod('services_text', 'ONETIME TECHNOLOGY SERVICES OFFERS A WIDE VARIETY OF IT SOLUTIONS IN THE FOLLOWING FIELDS'));
    $services_btn_text = esc_html(get_theme_mod('services_btn_text', 'View All Services'));
    $services_btn_url = esc_html(get_theme_mod('services_btn_url', '#'));
   


    $args = array(
        'category_name' => 'services',
        'post_status' => 'published',
        'order' => 'ASC',
        
    );
    
    $query = NEW WP_Query($args);
?>
<div id="services">
<div class="main-services-header py-5 bg-light">
    <div class="col-md-10 mx-auto" data-aos="zoom-in" data-aos-duration="2000">
    <h2 class=" text-center">
    <?php _e($services_heading, 'onetime'); ?>
    </h2>
    <div class="b-slash w-15 my-4 mx-auto"></div>
    <p class="text-center"><?php _e($services_text, 'onetime'); ?></p>
    
    </div>
</div>

<div class="main-services-posts py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                <?php if($query->have_posts()) : ?>
                    <?php while($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="services-container">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('front-page-thumbnail', ['class' => 'img-fluid services-image', 'alt' => 'post image']); ?>
                        <?php endif;?>
                        <div class="services-overlay">
                            <div class="services-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>no posts found</p>
                <?php endif; ?>

                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="services-container services-6">
                            <img class="img-fluid " src="<?php echo get_template_directory_uri() ?>/images/services-6.jpeg" alt="">
                        </div>
                    </div>
                    

                    

                    

                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-btn mb-5 text-center">
    <a href="<?php echo home_url('/services'); ?>" class="btn btn-dark btn-lg"><?php _e($services_btn_text, 'onetime'); ?></a>
</div>

</div>

<?php wp_reset_postdata(); ?>

