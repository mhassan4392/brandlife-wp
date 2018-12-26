<?php 
    $wp_customize->add_section('latest_posts', array(
        'title'   => __('Latest Posts Options', 'onetime'),
        'description' => sprintf(__('Options for Latest Posts','onetime')),
        'priority'    => 138
      ));
  
      $wp_customize->add_setting('latest_posts_heading', array(
          'default'   => __('Keep You In The Loop', 'onetime'),
          'type'      => 'theme_mod'
        ));
    
        $wp_customize->add_control('latest_posts_heading', array(
          'label'   => __('Heading', 'onetime'),
          'section' => 'latest_posts',
        ));
    
        $wp_customize->add_setting('latest_posts_text', array(
          'default'   => esc_html__('KEEP IN TOUCH WITH US WITH OUR LATEST NEWS AND OUR NEW TECHNOLOGIES', 'onetime'),
          'type'      => 'theme_mod'
        ));
    
        $wp_customize->add_control('latest_posts_text', array(
          'label'   => __('Text', 'onetime'),
          'section' => 'latest_posts',
        ));