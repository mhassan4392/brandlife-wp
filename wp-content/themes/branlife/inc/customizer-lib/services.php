<?php 
    $wp_customize->add_section('services', array(
        'title'   => __('Services Options', 'onetime'),
        'description' => sprintf(__('Options for services section','onetime')),
        'priority'    => 136
      ));
  
      $wp_customize->add_setting('services_heading', array(
          'default'   => __('We Introduce To You Our Services', 'onetime'),
          'type'      => 'theme_mod'
        ));
    
        $wp_customize->add_control('services_heading', array(
          'label'   => __('Heading', 'onetime'),
          'section' => 'services',
        ));
    
        $wp_customize->add_setting('services_text', array(
          'default'   => esc_html__('ONETIME TECHNOLOGY SERVICES OFFERS A WIDE VARIETY OF IT SOLUTIONS IN THE FOLLOWING FIELDS', 'onetime'),
          'type'      => 'theme_mod'
        ));
    
        $wp_customize->add_control('services_text', array(
          'label'   => __('Text', 'onetime'),
          'section' => 'services',
        ));


        $wp_customize->add_setting('services_btn_text', array(
            'default'   => esc_html__('View All Services', 'onetime'),
            'type'      => 'theme_mod'
          ));
      
          $wp_customize->add_control('services_btn_text', array(
            'label'   => __('Button Text', 'onetime'),
            'section' => 'services',
            
          ));
    
?>