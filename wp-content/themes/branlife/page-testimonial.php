<?php get_header(); ?>
<?php 

$testimonial_heading = esc_html(get_theme_mod('testimonial_heading', 'What Clients Say About Us'));

$testimonial_1_image = get_theme_mod('testimonial_1_image', get_template_directory_uri().'/images/Remmy-Eseka.jpg');
$testimonial_2_image = get_theme_mod('testimonial_2_image', get_template_directory_uri().'/images/Moses-Nkanda.jpg');
$testimonial_3_image = get_theme_mod('testimonial_3_image', get_template_directory_uri().'/images/Governers-logo.jpg');
$testimonial_4_image = get_theme_mod('testimonial_4_image', get_template_directory_uri().'/images/pinapple-farmers-in-kenya_farmers-trend.jpg');


$testimonial_1_text = esc_html(get_theme_mod('testimonial_1_text', 'We manage to increase volume in Mwanza Regions after using BulkSMS Services from Onetime Technology Services using clean database'));
$testimonial_2_text = esc_html(get_theme_mod('testimonial_2_text', 'Onetime Technology Services help our company in services and maintenance all IT equipments and manage all IT issues to make sure we reach our goal'));
$testimonial_3_text = esc_html(get_theme_mod('testimonial_3_text', 'We Increasing New Customer daily and update existing customer s on entertainments through BulkSMS Services, Onetime is the Best'));
$testimonial_4_text = esc_html(get_theme_mod('testimonial_4_text', 'I sell my pineapple to Kenya and find International Market through Onetime Fruits Exporter Company'));


$testimonial_1_name = esc_html(get_theme_mod('testimonial_1_name', 'Remmy Eseka'));
$testimonial_2_name = esc_html(get_theme_mod('testimonial_2_name', 'Moses Nkanda'));
$testimonial_3_name = esc_html(get_theme_mod('testimonial_3_name', 'Dan K'));
$testimonial_4_name = esc_html(get_theme_mod('testimonial_4_name', 'Mhemwe Mohamedi'));


$testimonial_1_status = esc_html(get_theme_mod('testimonial_1_status', 'Operational Manager, Taxify- Tanzania'));
$testimonial_2_status = esc_html(get_theme_mod('testimonial_2_status', 'Sales Representative - Mnazi Bay Consultant'));
$testimonial_3_status = esc_html(get_theme_mod('testimonial_3_status', 'Director'));
$testimonial_4_status = esc_html(get_theme_mod('testimonial_4_status', 'Pineapple Farmer'));

    $layout = esc_html(get_theme_mod('layout', 'sidebar'));
 ?>
<div class="page-showcase">
    <div class="page-showcase-overlay">
        <div class="page-showcase-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto text-center">
                    <h2 class="page-showcase-header"><?php _e($testimonial_heading, 'onetime'); ?></h2>
                    <!-- <p>
                    <?php //_e($clients_comments_text, 'onetime'); ?>
                    </p> -->
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


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
                <div class="col-md-10 mx-auto">

<div class="clients-comments-testimonial" data-aos="fade-right" data-aos-duration="3000">
    <div class="client-pic  mx-auto">
        <img class="img-fluid rounded-circle" src="<?php _e($testimonial_1_image,'onetime'); ?>" alt="">
    </div>
    <div class="client-bio pb-4 text-center py-3">
        <h6 class="client-name clr-custom"><?php _e(($testimonial_1_name), 'onetime'); ?></h6>
        <small class="client-status"><?php _e($testimonial_1_status, 'onetime'); ?></small>
    </div>
    <div class="client-comment">
    <p class="text-center bg-light p-4"> <img class="img-fluid  p-1" src="<?php echo get_template_directory_uri() ?>/images/quote_sign_left.png" alt="quote left"> <?php _e($testimonial_1_text, 'onetime') ?><img class="img-fluid p-1" src="<?php echo get_template_directory_uri() ?>/images/quote_sign_right.png" alt="quote left"></p>
    </div>
    
</div>                    

<hr class="my-5">

<div class="clients-comments-testimonial" data-aos="fade-left" data-aos-duration="3000">
    <div class="client-pic  mx-auto">
        <img class="img-fluid rounded-circle" src="<?php _e($testimonial_2_image,'onetime'); ?>" alt="">
    </div>
    <div class="client-bio pb-4 text-center py-3">
        <h6 class="client-name clr-custom"><?php _e(($testimonial_2_name), 'onetime'); ?></h6>
        <small class="client-status"><?php _e($testimonial_2_status, 'onetime'); ?></small>
    </div>
    <div class="client-comment">
    <p class="text-center bg-light p-4"> <img class="img-fluid  p-1" src="<?php echo get_template_directory_uri() ?>/images/quote_sign_left.png" alt="quote left"> <?php _e($testimonial_2_text, 'onetime') ?><img class="img-fluid p-1" src="<?php echo get_template_directory_uri() ?>/images/quote_sign_right.png" alt="quote left"></p>
    </div>
    
</div>    


<hr class="my-5">

<div class="clients-comments-testimonial" data-aos="fade-right" data-aos-duration="3000">
    <div class="client-pic  mx-auto">
        <img class="img-fluid rounded-circle" src="<?php _e($testimonial_3_image,'onetime'); ?>" alt="">
    </div>
    <div class="client-bio pb-4 text-center py-3">
        <h6 class="client-name clr-custom"><?php _e(($testimonial_3_name), 'onetime'); ?></h6>
        <small class="client-status"><?php _e($testimonial_3_status, 'onetime'); ?></small>
    </div>
    <div class="client-comment">
    <p class="text-center bg-light p-4"> <img class="img-fluid  p-1" src="<?php echo get_template_directory_uri() ?>/images/quote_sign_left.png" alt="quote left"><?php _e($testimonial_3_text, 'onetime') ?><img class="img-fluid p-1" src="<?php echo get_template_directory_uri() ?>/images/quote_sign_right.png" alt="quote left"></p>
    </div>
    
</div>    

                
<hr class="my-5">

<div class="clients-comments-testimonial" data-aos="fade-left" data-aos-duration="3000">
    <div class="client-pic  mx-auto">
        <img class="img-fluid rounded-circle" src="<?php _e($testimonial_4_image,'onetime'); ?>" alt="">
    </div>
    <div class="client-bio pb-4 text-center py-3">
        <h6 class="client-name clr-custom"><?php _e(($testimonial_4_name), 'onetime'); ?></h6>
        <small class="client-status"><?php _e($testimonial_4_status, 'onetime'); ?></small>
    </div>
    <div class="client-comment">
    <p class="text-center bg-light p-4"> <img class="img-fluid  p-1" src="<?php echo get_template_directory_uri() ?>/images/quote_sign_left.png" alt="quote left"><?php _e($testimonial_4_text, 'onetime') ?><img class="img-fluid p-1" src="<?php echo get_template_directory_uri() ?>/images/quote_sign_right.png" alt="quote left"></p>
    </div>
    
</div>    


<hr class="my-5">


                </div>
                
                



            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>


