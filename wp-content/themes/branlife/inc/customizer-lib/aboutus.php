<?php 

    $wp_customize->add_section('aboutus', array(
      'title'   => __('About Options', 'onetime'),
      'description' => sprintf(__('Options for about our tech','onetime')),
      'priority'    => 135
    ));

    $wp_customize->add_setting('aboutus_heading', array(
        'default'   => __('About Our Technology', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('aboutus_heading', array(
        'label'   => __('Heading', 'onetime'),
        'section' => 'aboutus',
        
      ));
  
      $wp_customize->add_setting('aboutus_text', array(
        'default'   => esc_html__('Our vision is to establish a reliable link between our customers and our local producers.', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('aboutus_text', array(
        'label'   => __('Text', 'onetime'),
        'section' => 'aboutus',
        
      ));

      $wp_customize->add_setting('aboutus_image', array(
        'default'   => __(get_template_directory_uri().'/images/services-6.jpeg', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aboutus_image', array(
        'label'   => __('Aboutus Image', 'onetime'),
        'section' => 'aboutus',
        'settings' => 'aboutus_image',
        
      )));


    //   TAB 1
      $wp_customize->add_setting('aboutus_tab1', array(
        'default'   => __('OUR MISSION', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('aboutus_tab1', array(
        'label'   => __('Tab 1', 'onetime'),
        'section' => 'aboutus',
        
      ));


      $wp_customize->add_setting('aboutus_tab1_text', array(
        'default'   => esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis enim magnam nesciunt ea aliquam id, sint fugit quae quo', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('aboutus_tab1_text', array(
        'label'   => __('Tab 1 Text', 'onetime'),
        'section' => 'aboutus',
        
      ));


    //   TAB 2
      $wp_customize->add_setting('aboutus_tab2', array(
        'default'   => __('OUR SOLUTION', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('aboutus_tab2', array(
        'label'   => __('Tab 2', 'onetime'),
        'section' => 'aboutus',
        
      ));

      // $wp_customize->add_setting('aboutus_tab2_heading', array(
      //   'default'   => __('Lorem ipsum dolor sit amet consectetur adipisicing elit', 'onetime'),
      //   'type'      => 'theme_mod'
      // ));
  
      // $wp_customize->add_control('aboutus_tab2_heading', array(
      //   'label'   => __('Tab 2 Heading', 'onetime'),
      //   'section' => 'aboutus',
        
      // ));

      $wp_customize->add_setting('aboutus_tab2_text', array(
        'default'   => esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis enim magnam nesciunt ea aliquam id, sint fugit quae quo', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('aboutus_tab2_text', array(
        'label'   => __('Tab 2 Text', 'onetime'),
        'section' => 'aboutus',
        
      ));


    //   TAB 3
      $wp_customize->add_setting('aboutus_tab3', array(
        'default'   => __('OUR TECHNOLOGY', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('aboutus_tab3', array(
        'label'   => __('Tab 3', 'onetime'),
        'section' => 'aboutus',
        
      ));

      // $wp_customize->add_setting('aboutus_tab3_heading', array(
      //   'default'   => __('Lorem ipsum dolor sit amet consectetur adipisicing elit', 'onetime'),
      //   'type'      => 'theme_mod'
      // ));
  
      // $wp_customize->add_control('aboutus_tab3_heading', array(
      //   'label'   => __('Tab 3 Heading', 'onetime'),
      //   'section' => 'aboutus',
        
      // ));

      $wp_customize->add_setting('aboutus_tab3_text', array(
        'default'   => esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis enim magnam nesciunt ea aliquam id, sint fugit quae quo', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('aboutus_tab3_text', array(
        'label'   => __('Tab 3 Text', 'onetime'),
        'section' => 'aboutus',
        
      ));



      $wp_customize->add_setting('aboutus_btn_text', array(
        'default'   => esc_html__('About Us', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('aboutus_btn_text', array(
        'label'   => __('Button Text', 'onetime'),
        'section' => 'aboutus',
        
      ));

      // $wp_customize->add_setting('aboutus_btn_url', array(
      //   'default'   => esc_html__('#', 'onetime'),
      //   'type'      => 'theme_mod'
      // ));
  
      // $wp_customize->add_control('aboutus_btn_url', array(
      //   'label'   => __('Button Url', 'onetime'),
      //   'section' => 'aboutus',
      //   'priority'  => 14
      // ));

?>