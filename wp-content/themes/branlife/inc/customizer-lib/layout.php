<?php 
    $wp_customize->add_section('layout', array(
        'title'   => __('Layout Options', 'onetime'),
        'description' => sprintf(__('Address of the site','onetime')),
        'priority'    => 131
      ));

      // Link Color
      $wp_customize->add_setting('color_scheme', array(
        'default'   => esc_html__('#dd9933', 'onetime'),
        'type'      => 'theme_mod'
      ));

      $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
        $wp_customize, 
        'color_scheme', 
        array(
            'label'      => __( 'Color Scheme', 'onetime' ),
            'section'    => 'layout',
            'settings'   => 'color_scheme',
        ) ) 
    );

    // Blog Page Layout
      $wp_customize->add_setting('layout', array(
        'default'   => esc_html__('sidebar', 'onetime'),
        'type'      => 'theme_mod'
      ));

      $wp_customize->add_control('layout', array(
        'label'   => __('Page Layout', 'onetime'),
        'section' => 'layout',
        'type' => 'select',
        'choices' => array(
            'sidebar' => 'sidebar',
            'full' => 'full'
        )
      ));

      $wp_customize->add_setting('col_layout', array(
        'default'   => esc_html__('1', 'onetime'),
        'type'      => 'theme_mod'
      ));

      $wp_customize->add_control('col_layout', array(
        'label'   => __('Page Column Layout', 'onetime'),
        'section' => 'layout',
        'type' => 'select',
        'choices' => array(
            '1' => '1',
            '2' => '2',
            '3' => '3',
        )
      ));

      // Single Page Layout
      $wp_customize->add_setting('single_layout', array(
        'default'   => esc_html__('sidebar', 'onetime'),
        'type'      => 'theme_mod'
      ));

      $wp_customize->add_control('single_layout', array(
        'label'   => __('Single Page Layout', 'onetime'),
        'section' => 'layout',
        'type' => 'select',
        'choices' => array(
            'sidebar' => 'sidebar',
            'full' => 'full'
        )
      ));

      // $wp_customize->add_setting('single_col_layout', array(
      //   'default'   => esc_html__('1', 'onetime'),
      //   'type'      => 'theme_mod'
      // ));

      // $wp_customize->add_control('single_col_layout', array(
      //   'label'   => __('Testimonial Page Column Layout', 'onetime'),
      //   'section' => 'layout',
      //   'type' => 'select',
      //   'choices' => array(
      //       '1' => '1',
      //       '2' => '2',
      //       '3' => '3',
      //   )
      // ));



      // // testimonial Page Layout
      // $wp_customize->add_setting('testimonial_layout', array(
      //   'default'   => esc_html__('sidebar', 'onetime'),
      //   'type'      => 'theme_mod'
      // ));

      // $wp_customize->add_control('testimonial_layout', array(
      //   'label'   => __('testimonial Page Layout', 'onetime'),
      //   'section' => 'layout',
      //   'type' => 'select',
      //   'choices' => array(
      //       'sidebar' => 'sidebar',
      //       'full' => 'full'
      //   )
      // ));

      // $wp_customize->add_setting('testimonial_col_layout', array(
      //   'default'   => esc_html__('1', 'onetime'),
      //   'type'      => 'theme_mod'
      // ));

      // $wp_customize->add_control('testimonial_col_layout', array(
      //   'label'   => __('Testimonial Page Column Layout', 'onetime'),
      //   'section' => 'layout',
      //   'type' => 'select',
      //   'choices' => array(
      //       '1' => '1',
      //       '2' => '2',
      //       '3' => '3',
      //   )
      // ));


?>