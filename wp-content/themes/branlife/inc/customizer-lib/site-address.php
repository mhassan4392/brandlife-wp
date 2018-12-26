<?php 

    $wp_customize->add_section('site_address', array(
      'title'   => __('Site Address Options', 'onetime'),
      'description' => sprintf(__('Address of the site','onetime')),
      'priority'    => 132
    ));

    // Header
    $wp_customize->add_setting('contact_section_header', array(
      'default'   => __('Keep In Touch', 'onetime'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('contact_section_header', array(
      'label'   => __('Contact Section Header', 'onetime'),
      'section' => 'site_address'
    ));

    // Text
    $wp_customize->add_setting('contact_section_text', array(
      'default'   => __('Keep In Touch with us and get information about our services.', 'onetime'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('contact_section_text', array(
      'label'   => __('Contact Section Text', 'onetime'),
      'section' => 'site_address'
    ));

    // Manager
    $wp_customize->add_setting('site_manager', array(
        'default'   => __('Habib Mbully , Managing Director', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('site_manager', array(
        'label'   => __('Manager', 'onetime'),
        'section' => 'site_address'
      ));


    // phone no
    $wp_customize->add_setting('site_phone', array(
        'default'   => __('+255 755 450 000', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('site_phone', array(
        'label'   => __('Site Phone No 1', 'onetime'),
        'section' => 'site_address'
      ));

      $wp_customize->add_setting('site_phone2', array(
        'default'   => __('+255 784 670 039', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('site_phone2', array(
        'label'   => __('Site Phone No 2', 'onetime'),
        'section' => 'site_address'
      ));

      // mail
    $wp_customize->add_setting('site_mail', array(
        'default'   => __('onetimetechservices@gmail.com', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('site_mail', array(
        'label'   => __('Site Email 1', 'onetime'),
        'section' => 'site_address'
      ));

      $wp_customize->add_setting('site_mail2', array(
        'default'   => __('habib.mbully@gmail.com', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('site_mail2', array(
        'label'   => __('Site Email 2', 'onetime'),
        'section' => 'site_address'
      ));

      // Location
    $wp_customize->add_setting('site_location', array(
        'default'   => __('Box 8314  1st Floor Samsara Bldg, Wakatibado St Makumbusho, Bus Stand, Dar es salaam,  Tanzania - East Africa', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('site_location', array(
        'label'   => __('Site Location', 'onetime'),
        'section' => 'site_address'
      ));

      // facebook url
      $wp_customize->add_setting('facebook_url', array(
        'default'   => __('#', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('facebook_url', array(
        'label'   => __('Facebook url', 'onetime'),
        'section' => 'site_address'
      ));

      // twitter url
      $wp_customize->add_setting('twitter_url', array(
        'default'   => __('#', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('twitter_url', array(
        'label'   => __('Twitter url', 'onetime'),
        'section' => 'site_address'
      ));

      // instagram url
      $wp_customize->add_setting('instagram_url', array(
        'default'   => __('#', 'onetime'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('instagram_url', array(
        'label'   => __('instagram url', 'onetime'),
        'section' => 'site_address'
      ));
