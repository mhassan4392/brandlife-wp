<?php 
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
?>


<div class="testimonial-wrap">
            <div id="testimonial-arrow-left" class="testimonial-arrow"><i class="fa fa-angle-left fa-2x"></i></div>
            <div id="testimonial-slider">
              <div class="testimonial-slide testimonial-slide1">
                <div class="testimonial-slide-content">
                  <div class="testimonial-content py-5">
                    <div class="testimonial-img animated fadeInDown">
                        <img class="img-fluid rounded-circle" src="<?php _e($testimonial_1_image, 'onetime'); ?>" alt="" >
                    </div>
                      <p class="testimonial-text animated fadeInRight"><?php _e($testimonial_1_text, 'onetime'); ?></p>
                      <div class="testimonial-biio">
                          <p class="testimonial-name animated fadeInLeft"><?php _e($testimonial_1_name, 'onetime'); ?></p>
                          <p class="testimonial-status animated fadeInUp clr-custom"><?php _e($testimonial_1_status, 'onetime'); ?></p>
                      </div>
                  </div>
                </div>
              </div>

              <div class="testimonial-slide testimonial-slide2">
                <div class="testimonial-slide-content">
                    <div class="testimonial-content py-5">
                        <div class="testimonial-img animated fadeInDown">
                            <img class="img-fluid rounded-circle" src="<?php _e($testimonial_2_image, 'onetime'); ?>" alt="" >
                        </div>
                          <p class="testimonial-text animated fadeInRight"><?php _e($testimonial_2_text, 'onetime'); ?></p>
                          <div class="testimonial-biio">
                              <p class="testimonial-name animated fadeInLeft"><?php _e($testimonial_2_name, 'onetime'); ?></p>
                              <p class="testimonial-status animated fadeInUp clr-custom"><?php _e($testimonial_2_status, 'onetime'); ?></p>
                          </div>
                      </div>
                </div>
              </div>


              <div class="testimonial-slide testimonial-slide3">
                <div class="testimonial-slide-content">
                    <div class="testimonial-content py-5">
                        <div class="testimonial-img animated fadeInDown">
                            <img class="img-fluid rounded-circle" src="<?php _e($testimonial_3_image, 'onetime'); ?>" alt="" >
                        </div>
                          <p class="testimonial-text animated fadeInRight"><?php _e($testimonial_3_text, 'onetime'); ?></p>
                          <div class="testimonial-biio">
                              <p class="testimonial-name animated fadeInLeft"><?php _e($testimonial_3_name, 'onetime'); ?></p>
                              <p class="testimonial-status animated fadeInUp clr-custom"><?php _e($testimonial_3_status, 'onetime'); ?></p>
                          </div>
                      </div>
                </div>
              </div>


              <div class="testimonial-slide testimonial-slide4">
                <div class="testimonial-slide-content">
                    <div class="testimonial-content py-5">
                        <div class="testimonial-img animated fadeInDown">
                            <img class="img-fluid rounded-circle" src="<?php _e($testimonial_4_image, 'onetime'); ?>" alt="" >
                        </div>
                          <p class="testimonial-text animated fadeInRight"><?php _e($testimonial_4_text, 'onetime'); ?></p>
                          <div class="testimonial-biio">
                              <p class="testimonial-name animated fadeInLeft"><?php _e($testimonial_4_name, 'onetime'); ?></p>
                              <p class="testimonial-status animated fadeInUp clr-custom"><?php _e($testimonial_4_status, 'onetime'); ?></p>
                          </div>
                      </div>
                </div>
              </div>

              <!-- <div class="testimonial-slide testimonial-slide3">
                <div class="testimonial-slide-content">
                    <div class="testimonial-content py-5">
                        <div class="testimonial-img">
                            <img src="images/img.png" alt="" class="img-fluid">
                        </div>
                          <p class="testimonial-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi aliquid perspiciatis voluptatibus ullam sit voluptatum facere temporibus ad!</p>
                          <div class="testimonial-biio">
                              <p class="testimonial-name">Justin Bieber</p>
                              <p class="testimonial-status clr-custom">Web designer</p>
                          </div>
                      </div>
                </div>
              </div> -->

            </div>
            <div id="testimonial-arrow-right" class="testimonial-arrow"><i class="fa fa-angle-right fa-2x"></i></div>
          </div>