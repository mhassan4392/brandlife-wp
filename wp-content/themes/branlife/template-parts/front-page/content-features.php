<?php
  $feature_section_heading = esc_html(get_theme_mod('feature_section_heading', 'Our vision is to establish a reliable link between our customers and our local producers.'));
  $feature_1_heading = esc_html(get_theme_mod('feature_1_heading', 'High Quality'));
  $feature_1_text = esc_html(get_theme_mod('feature_1_text', 'With nearly 30 years experience handling exports of fresh fruits and vegetables, We have gained professional knowledge, skills and confidence to provide the highest quality of fresh fruits and vegetables, directly from the growers at competitive prices. Our supplier/producer/growers are widely distributed over the country, including Kenya – Mombasa, Rwanda and South Africa.'));

  $feature_2_heading = esc_html(get_theme_mod('feature_2_heading', 'Quick Service'));
  $feature_2_text = esc_html(get_theme_mod('feature_2_text', 'We offer a wide range of varieties of fruits and vegetables, comprising summerfruit (apricots, peaches, plums, Pineapples), mangoes, table grapes, citrus, pears, broccoli, carrots, lettuce and celery. We provide you with a quick and accurate worldwide transport, including from farms to packing houses and further to distribution sites and your appointed port of destination.'));

  $feature_3_heading = esc_html(get_theme_mod('feature_3_heading', 'Reliable People'));
  $feature_3_text = esc_html(get_theme_mod('feature_3_text', 'We have established a close and reliable relationship with Kiwangwa – Bagamoyo -Tanzania growers, which enables us to provide high quality products to meet your specific needs. We listen to your needs, understand your culture and communicate regarding any issues that may arise.'));
?>

<div class="showcase-features py-5 text-white">
  <div class="container">
    
    <?php if(!is_front_page()): ?>
    <div class="col-md-8 mx-auto py-3" data-aos="zoom-in" data-aos-duration="2000">
    <p class="text-center feature-text"><?php _e($feature_section_heading, 'onetime') ?></p>
    <div class="b-slash w-25 mb-2 mx-auto"></div>
    </div>
    <?php endif; ?>
    
    <div class="row">
      <div class="col-md-4 feature-col my-3 text-center" data-aos="fade-right" data-aos-duration="2000">
        <h1 class="feature-logo">
          <div>
          <i class="fa fa-pagelines"></i>
          </div>
        </h1>
        <h4 class="services-sub-heading py-2 clr-custom"><?php _e($feature_1_heading, 'onetime') ?></h4>
        <p><?php _e($feature_1_text, 'onetime') ?></p>
        
      </div>

      <div class="col-md-4 my-3 feature-col text-center" data-aos="fade-up" data-aos-duration="2000">
        <h1 class="feature-logo">
          <div>
          <i class="fa fa-plane"></i>
          </div>
        </h1>
        <h4 class="services-sub-heading py-2 clr-custom"><?php _e($feature_2_heading, 'onetime') ?></h4>
        <p><?php _e($feature_2_text, 'onetime') ?></p>
        
      </div>

      <div class="col-md-4 my-3 feature-col text-center" data-aos="fade-left" data-aos-duration="2000">
        <h1 class="feature-logo">
          <div>
          <i class="fa fa-smile-o"></i>
          </div>
        </h1>
        <h4 class="services-sub-heading clr-custom py-2"><?php _e($feature_3_heading, 'onetime') ?></h4>
        <p><?php _e($feature_3_text, 'onetime') ?></p>
        
      </div>
    </div>
  </div>
</div>