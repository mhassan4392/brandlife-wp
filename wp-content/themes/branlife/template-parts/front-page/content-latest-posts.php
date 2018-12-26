<?php 

    $latest_posts_heading = esc_html(get_theme_mod('latest_posts_heading', 'Keep You In The Loop'));
    $latest_posts_text = esc_html(get_theme_mod('latest_posts_text', 'KEEP IN TOUCH WITH US WITH OUR LATEST NEWS AND OUR NEW TECHNOLOGIES'));

    $args = array(
        'post_type' => 'post',
        'post_status' => 'published',
        'posts_per_page' => 3,
        
    );
    
    $query = NEW WP_Query($args);
?>

 
<div class="latest-posts-heading text-center bg-light py-5">
<div class="col-md-10 mx-auto" data-aos="zoom-in" data-aos-duration="2000">
<h2 class=" text-center">
<?php _e($latest_posts_heading, 'onetime'); ?>
    </h2>
    <div class="b-slash w-15 my-4 mx-auto" ></div>
    <p class="text-center"><?php _e($latest_posts_text, 'onetime'); ?></p>
</div>
</div>


<div class="latest-posts my-5">

    <div class="container">
        <div class="row">
        <?php if($query->have_posts()) : ?>
    <?php while($query->have_posts()) : $query->the_post(); ?>
        <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-duration="2000">
            <div class="latest-posts-container mb-3">
            <?php if(has_post_thumbnail()): ?>
                
                <?php the_post_thumbnail('front-page-thumbnail', ['class' => 'img-fluid latest-posts-image', 'alt' => 'post image']); ?>
            <?php endif;?>
                <div class="latest-posts-middle">
                <div class="latest-posts-text"><a href="<?php the_permalink(); ?>"><i class="fa fa-chain fa-3x"></i></a></div>
                </div>
            </div>
            <h5><a href="<?php the_permalink(); ?>" class="my-4"><?php the_title(); ?></a></h5>
            <p><?php echo wp_trim_words(get_the_content(), 30 ,'...'); ?></p>
            <a class="btn btn-secondary btn-sm text-white" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
        </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>no posts found</p>
<?php endif; ?>
        
        </div>
    </div>
</div>

<?php wp_reset_postdata(); ?>