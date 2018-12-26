<?php 
  $slider_1_image = esc_html(get_theme_mod('slider_1_image', get_template_directory_uri().'/images/slider-1.jpg'));
  $slider_1_heading = esc_html(get_theme_mod('slider_1_heading', 'Welcome To OneTime Technoloy Services'));
  $slider_1_text = esc_html(get_theme_mod('slider_1_text', 'Putting Your World To The Fingertips'));
  $slider_1_btn_url = esc_html(get_theme_mod('slider_1_btn_url', '#about'));
  $slider_1_btn_text = esc_html(get_theme_mod('slider_1_btn_text', 'Learn More'));

  $slider_2_image = esc_html(get_theme_mod('slider_2_image', get_template_directory_uri().'/images/slider-2.jpg'));
  $slider_2_heading = esc_html(get_theme_mod('slider_2_heading', 'We Provide Best IT Services'));
  $slider_2_text = esc_html(get_theme_mod('slider_2_text', 'Our vision is to establish a reliable link between our customers and our local producers.'));
  $slider_2_btn_url = esc_html(get_theme_mod('slider_2_btn_url', '#services'));
  $slider_2_btn_text = esc_html(get_theme_mod('slider_2_btn_text', 'Learn More'));

?>

  <div class="wrap">
   <!-- <div id="arrow-left" class="arrow"></div> -->
  <div id="slider">
    <div class="slide slide1">
      <div class="slide-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 slider-col-1">
                    <h1 class="slider-header animated slideInLeft"><?php _e($slider_1_heading, 'onetime'); ?></h1>
                    <div class="b-slash w-25 mb-2"></div>
                    <p class="slider-text animated slideInRight"><?php _e($slider_1_text, 'onetime'); ?></p>
                    <a href="<?php _e($slider_1_btn_url, 'onetime'); ?>" class="slider-btn btn btn-primary animated bounce"><?php _e($slider_1_btn_text, 'onetime'); ?></a>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="slide slide2">
      <div class="slide-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center slider-col-2 mx-auto">
                <h1 class="slider-header animated fadeInUp"><?php _e($slider_2_heading, 'onetime'); ?></h1>
                <div class="b-slash w-25 mb-2 mx-auto"></div>
                    <p class="slider-text animated fadeInRight"><?php _e($slider_2_text, 'onetime'); ?></p>
                    <a href="<?php _e($slider_2_btn_url, 'onetime'); ?>" class="slider-btn btn btn-primary animated rubberBand"><?php _e($slider_2_btn_text, 'onetime'); ?></a>
                </div>
            </div>
        </div>
      </div>
    </div>
    
  </div>
  <!-- <div id="arrow-right" class="arrow"></div> -->
</div>
