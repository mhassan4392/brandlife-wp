<?php 
    $wp_customize->add_section('features', array(
      'title'   => __('Features Options', 'onetime'),
      'description' => sprintf(__('Options for Features','onetime')),
      'priority'    => 134
    ));


    $wp_customize->add_setting('feature_section_heading', array(
      'default'   => esc_html__('Our vision is to establish a reliable link between our customers and our local producers.', 'onetime'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('feature_section_heading', array(
      'label'   => __('Feature Section Heading', 'onetime'),
      'section' => 'features',
      
    ));

    $wp_customize->add_setting('feature_1_heading', array(
        'default'   => __('High Quality', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('feature_1_heading', array(
        'label'   => __('Feature 1 Heading', 'onetime'),
        'section' => 'features',
        
      ));
  
      $wp_customize->add_setting('feature_1_text', array(
        'default'   => esc_html__('With nearly 30 years experience handling exports of fresh fruits and vegetables, We have gained professional knowledge, skills and confidence to provide the highest quality of fresh fruits and vegetables, directly from the growers at competitive prices. Our supplier/producer/growers are widely distributed over the country, including Kenya – Mombasa, Rwanda and South Africa.', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('feature_1_text', array(
        'label'   => __('Feature 1 Text', 'onetime'),
        'section' => 'features',
        
      ));
  

      


      $wp_customize->add_setting('feature_2_heading', array(
        'default'   => __('Quick Service', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('feature_2_heading', array(
        'label'   => __('Feature 2 Heading', 'onetime'),
        'section' => 'features',
        
      ));
  
      $wp_customize->add_setting('feature_2_text', array(
        'default'   => esc_html__('We offer a wide range of varieties of fruits and vegetables, comprising summerfruit (apricots, peaches, plums, Pineapples), mangoes, table grapes, citrus, pears, broccoli, carrots, lettuce and celery. We provide you with a quick and accurate worldwide transport, including from farms to packing houses and further to distribution sites and your appointed port of destination.', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('feature_2_text', array(
        'label'   => __('Feature 2  Text', 'onetime'),
        'section' => 'features',
        
      ));

      



      $wp_customize->add_setting('feature_3_heading', array(
        'default'   => __('Reliable People', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('feature_3_heading', array(
        'label'   => __('Feature 3 Heading', 'onetime'),
        'section' => 'features',
        
      ));
  
      $wp_customize->add_setting('feature_3_text', array(
        'default'   => esc_html__('We have established a close and reliable relationship with Kiwangwa – Bagamoyo -Tanzania growers, which enables us to provide high quality products to meet your specific needs. We listen to your needs, understand your culture and communicate regarding any issues that may arise.', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('feature_3_text', array(
        'label'   => __('Feature 3 Text', 'onetime'),
        'section' => 'features',
        
      ));

      

?>