<?php
// testimonial Section
    $wp_customize->add_section('testimonial', array(
        'title'   => __('Testimonial Options', 'onetime'),
        'description' => sprintf(__('Options for testimonial','onetime')),
        'priority'    => 137
      ));
  
      // testimonial bg  image
      $wp_customize->add_setting('testimonial_bg_image', array(
        'default'   => __(get_template_directory_uri().'/images/testimonial-bg.jpg', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonial_bg_image', array(
        'label'   => __('Testimonial bg Image', 'onetime'),
        'section' => 'testimonial',
        'settings' => 'testimonial_bg_image',
        'priority'  => 1
      )));

      $wp_customize->add_setting('testimonial_heading', array(
        'default'   => __('What Clients Say About Us', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('testimonial_heading', array(
        'label'   => __('Heading', 'onetime'),
        'section' => 'testimonial',
      ));

    

      // testimonial 1  image
      $wp_customize->add_setting('testimonial_1_image', array(
        'default'   => __(get_template_directory_uri().'/images/Remmy-Eseka.jpg', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonial_1_image', array(
        'label'   => __('Testimonial 1 Image', 'onetime'),
        'section' => 'testimonial',
        'settings' => 'testimonial_1_image',
      )));

      // testimonial 1 text
      $wp_customize->add_setting('testimonial_1_text', array(
        'default'   => esc_html__('We manage to increase volume in Mwanza Regions after using BulkSMS Services from Onetime Technology Services using clean database', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('testimonial_1_text', array(
        'label'   => __('Testimonial 1 Text', 'onetime'),
        'section' => 'testimonial',
      ));

      // testimonial 1 name
      $wp_customize->add_setting('testimonial_1_name', array(
        'default'   => esc_html__('Remmy Eseka', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('testimonial_1_name', array(
        'label'   => __('Testimonial 1 name', 'onetime'),
        'section' => 'testimonial',
      ));

      // testimonial 1 status
      $wp_customize->add_setting('testimonial_1_status', array(
        'default'   => esc_html__('Operational Manager, Taxify- Tanzania', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('testimonial_1_status', array(
        'label'   => __('Testimonial 1 status', 'onetime'),
        'section' => 'testimonial',
      ));







      // testimonial 2  image
      $wp_customize->add_setting('testimonial_2_image', array(
        'default'   => __(get_template_directory_uri().'/images/Moses-Nkanda.jpg', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonial_2_image', array(
        'label'   => __('Testimonial 2 Image', 'onetime'),
        'section' => 'testimonial',
        'settings' => 'testimonial_2_image',
      )));

      // testimonial 2 text
      $wp_customize->add_setting('testimonial_2_text', array(
        'default'   => esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis enim magnam nesciunt ea aliquam id, sint fugit quae quo', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('testimonial_2_text', array(
        'label'   => __('Testimonial 2 Text', 'onetime'),
        'section' => 'testimonial',
      ));

      // testimonial 2 name
      $wp_customize->add_setting('testimonial_2_name', array(
        'default'   => esc_html__('Moses Nkanda', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('testimonial_2_name', array(
        'label'   => __('Testimonial 2 name', 'onetime'),
        'section' => 'testimonial',
      ));

      // testimonial 2 status
      $wp_customize->add_setting('testimonial_2_status', array(
        'default'   => esc_html__('Sales Representative - Mnazi Bay Consultant', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('testimonial_2_status', array(
        'label'   => __('Testimonial 2 status', 'onetime'),
        'section' => 'testimonial',
      ));





      // testimonial 3  image
      $wp_customize->add_setting('testimonial_3_image', array(
        'default'   => __(get_template_directory_uri().'/images/Governers-logo.jpg', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonial_3_image', array(
        'label'   => __('Testimonial 3 Image', 'onetime'),
        'section' => 'testimonial',
        'settings' => 'testimonial_3_image',
      )));

      // testimonial 3 text
      $wp_customize->add_setting('testimonial_3_text', array(
        'default'   => esc_html__('We Increasing New Customer daily and update existing customer s on entertainments through BulkSMS Services, Onetime is the Best', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('testimonial_3_text', array(
        'label'   => __('Testimonial 3 Text', 'onetime'),
        'section' => 'testimonial',
      ));

      // testimonial 3 name
      $wp_customize->add_setting('testimonial_3_name', array(
        'default'   => esc_html__('Dan K', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('testimonial_3_name', array(
        'label'   => __('Testimonial 3 name', 'onetime'),
        'section' => 'testimonial',
      ));

      // testimonial 3 status
      $wp_customize->add_setting('testimonial_3_status', array(
        'default'   => esc_html__('Director', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('testimonial_3_status', array(
        'label'   => __('Testimonial 3 status', 'onetime'),
        'section' => 'testimonial',
      ));






      // testimonial 4  image
      $wp_customize->add_setting('testimonial_4_image', array(
        'default'   => __(get_template_directory_uri().'/images/pinapple-farmers-in-kenya_farmers-trend.jpg', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonial_4_image', array(
        'label'   => __('Testimonial 4 Image', 'onetime'),
        'section' => 'testimonial',
        'settings' => 'testimonial_4_image',
      )));

      // testimonial 4 text
      $wp_customize->add_setting('testimonial_4_text', array(
        'default'   => esc_html__('I sell my pineapple to Kenya and find International Market through Onetime Fruits Exporter Company', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('testimonial_4_text', array(
        'label'   => __('Testimonial 4 Text', 'onetime'),
        'section' => 'testimonial',
      ));

      // testimonial 4 name
      $wp_customize->add_setting('testimonial_4_name', array(
        'default'   => esc_html__('Mhemwe Mohamedi', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('testimonial_4_name', array(
        'label'   => __('Testimonial 4 name', 'onetime'),
        'section' => 'testimonial',
      ));

      // testimonial 4 status
      $wp_customize->add_setting('testimonial_4_status', array(
        'default'   => esc_html__('Pineapple Farmer', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('testimonial_4_status', array(
        'label'   => __('Testimonial 4 status', 'onetime'),
        'section' => 'testimonial',
      ));

?>