<?php 

    function brandlife_customize_register($wp_customize){
      include_once get_parent_theme_file_path('inc/customizer-lib/slider.php');
      include_once get_parent_theme_file_path('inc/customizer-lib/features.php');
      include_once get_parent_theme_file_path('inc/customizer-lib/aboutus.php');
      include_once get_parent_theme_file_path('inc/customizer-lib/site-address.php');
      include_once get_parent_theme_file_path('inc/customizer-lib/testimonial.php');
      include_once get_parent_theme_file_path('inc/customizer-lib/layout.php');
      include_once get_parent_theme_file_path('inc/customizer-lib/services.php');
      include_once get_parent_theme_file_path('inc/customizer-lib/latest-posts.php');
    }

    add_action('customize_register', 'brandlife_customize_register');
?>