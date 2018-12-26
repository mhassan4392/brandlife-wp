<?php
// slider Section
    $wp_customize->add_section('slider', array(
        'title'   => __('Slider Options', 'onetime'),
        'description' => sprintf(__('Options for Slider','onetime')),
        'priority'    => 133
      ));
  
      // slider 1 image
      $wp_customize->add_setting('slider_1_image', array(
        'default'   => __(get_template_directory_uri().'/images/slider-1.jpg', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_1_image', array(
        'label'   => __('slider 1 Image', 'onetime'),
        'section' => 'slider',
        'settings' => 'slider_1_image',
        'priority'  => 1
      )));
  
  
      $wp_customize->add_setting('slider_1_heading', array(
        'default'   => __('Welcome To OneTime Technoloy Services', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('slider_1_heading', array(
        'label'   => __('Heading', 'onetime'),
        'section' => 'slider',
        'priority'  => 2
      ));
  
      $wp_customize->add_setting('slider_1_text', array(
        'default'   => esc_html__('Putting Your World To The Fingertips', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('slider_1_text', array(
        'label'   => __('Text', 'onetime'),
        'section' => 'slider',
        'priority'  => 3
      ));
  
      $wp_customize->add_setting('slider_1_btn_url', array(
        'default'   => esc_html__('#about', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('slider_1_btn_url', array(
        'label'   => __('Slider 1 Button URL', 'onetime'),
        'section' => 'slider',
        'priority'  => 4
      ));
  
      $wp_customize->add_setting('slider_1_btn_text', array(
        'default'   => esc_html__('Learn More', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('slider_1_btn_text', array(
        'label'   => __('Slider 1 Button Text', 'onetime'),
        'section' => 'slider',
        'priority'  => 5
      ));





      // slider 2 image
      $wp_customize->add_setting('slider_2_image', array(
        'default'   => __(get_template_directory_uri().'/images/slider-2.jpg', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_2_image', array(
        'label'   => __('slider 2 Image', 'onetime'),
        'section' => 'slider',
        'settings' => 'slider_2_image',
        'priority'  => 6
      )));


      $wp_customize->add_setting('slider_2_heading', array(
        'default'   => __('We Provide Best IT Services', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('slider_2_heading', array(
        'label'   => __('Heading', 'onetime'),
        'section' => 'slider',
        'priority'  => 7
      ));
  
      $wp_customize->add_setting('slider_2_text', array(
        'default'   => esc_html__('Our vision is to establish a reliable link between our customers and our local producers.', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('slider_2_text', array(
        'label'   => __('Text', 'onetime'),
        'section' => 'slider',
        'priority'  => 8
      ));
  
      $wp_customize->add_setting('slider_2_btn_url', array(
        'default'   => esc_html__('#services', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('slider_2_btn_url', array(
        'label'   => __('Slider 2 Button URL', 'onetime'),
        'section' => 'slider',
        'priority'  => 9
      ));
  
      $wp_customize->add_setting('slider_2_btn_text', array(
        'default'   => esc_html__('Learn More', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('slider_2_btn_text', array(
        'label'   => __('Slider 2 Button Text', 'onetime'),
        'section' => 'slider',
        'priority'  => 10
      ));

      ?>
