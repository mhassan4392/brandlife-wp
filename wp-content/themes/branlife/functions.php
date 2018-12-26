<?php 
    // include class-wp-bootstrap-navwalker file
    include get_parent_theme_file_path('inc/class-wp-bootstrap-navwalker.php');

    function brandlife_theme_setup(){

	// Make theme available for translation.
	load_theme_textdomain('brandlife');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	
	// CUSTOM IMAGE SIZES
	add_image_size('front-page-thumbnail', 600 , 300, true);
	add_image_size('single-page', 800, 500, false);
	add_image_size('posts-page', 500 , 400 , false);
    
    // Theme menu locations.
	register_nav_menus( array(
		'Main'    => __( 'Main Menu', 'brandlife' ),
		'Footer'    => __( 'Footer Menu', 'brandlife' ),
    ) );
    
    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
        'comment-list',
        'search-form',
		'gallery',
		'caption',
    ) );
    
	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
    ) );
    
    // Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 200,
		'height'      => 100,
		'flex-width'  => true,
    ) );
    
    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    }
	add_action('after_setup_theme', 'brandlife_theme_setup');
	
	// sidebar widget init
	function brandlife_widgets_init($id){
	
		// Search sidebar widget
			register_sidebar( array(
				'name'          => __( 'Main Sidebar ', 'brandlife' ),
				'id'            => 'main-sidebar',
				'description'   => __( 'Show Search box.', 'brandlife' ),
				'before_widget' => '<section id="%1$s" class="%2$s widgets bg-light mb-5">',
				'after_widget'  => '</section>',
				'before_title'  => '<h5 class="mb-3 text-center bg-custom py-3 mb-3 text-white">',
				'after_title'   => '</h5>',
			) );	
		}
		add_action( 'widgets_init', 'brandlife_widgets_init' );



	// add styles and scripts
    function brandlife_styles_scripts(){
		// main stylesheet
		wp_enqueue_style( 'main-style', get_stylesheet_uri() );
		// bootstrap css
		wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css' );
		// custom stylesheet
		wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/css/styles.css' );
		// font-awsome
		wp_enqueue_style( 'font-awesome-icons', get_template_directory_uri() . '/css/font-awesome.min.css' );
        

		// animate css
        wp_register_style('animate-css','https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css');
		wp_enqueue_style('animate-css');

		// animate css
        wp_register_style('animation-scroll-css','https://unpkg.com/aos@2.3.1/dist/aos.css');
		wp_enqueue_style('animation-scroll-css');

		// animate css
        wp_register_style('google-fonts-css','https://fonts.googleapis.com/css?family=Poppins');
		wp_enqueue_style('google-fonts-css');
		
		// js files
		wp_register_script('jquery-js','https://code.jquery.com/jquery-3.3.1.min.js','','',true);
		wp_enqueue_script('jquery-js');
		// bootstrap js file
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', '', '', true );
		// popper cdn
        wp_register_script('popper-js','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js','','',true);
		wp_enqueue_script('popper-js');
		

		// popper cdn
        wp_register_script('animation-scroll-js','https://unpkg.com/aos@2.3.1/dist/aos.js','','',true);
		wp_enqueue_script('animation-scroll-js');

		if(is_front_page()){
		// second js file
		wp_enqueue_script( 'second-js', get_template_directory_uri() . '/js/second.js','','',true );
		}
		wp_register_script('mediaelement', plugins_url('wp-mediaelement.min.js', __FILE__), array('jquery'), '4.8.2', true);
		  wp_enqueue_script('mediaelement');

		  // custom main js file
		wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js',array('jquery'),'',true );
		  
		// comments reply
		  if(is_single() && comments_open()){
			wp_enqueue_script('comment-reply');
		  }
		

        include_once get_parent_theme_file_path('inc/inline-css.php');
		
		// add inline styles
        wp_add_inline_style('custom-styles',$inline_styles);
    }
	add_action( 'wp_enqueue_scripts', 'brandlife_styles_scripts' );
	
	function sanitize_pagination($content) {
		// Remove role attribute
		$content = str_replace('role="navigation"', '', $content);
	
		// Remove h2 tag
		$content = preg_replace('#<h2.*?>(.*?)<\/h2>#si', '', $content);
	
		return $content;
	}
	
	add_action('navigation_markup_template', 'sanitize_pagination');

	function brandlife_dropdown_icon($title,$item,$args,$depth){
        if($args->theme_location == 'Main'){
            if(in_array('menu-item-has-children',$item->classes)){
                if($depth == 0 ){
                    $title .= ' <i class="fa fa-angle-down"></i>';
                }else{
                    $title .= ' <i class="fa fa-angle-right"></i>';
                }
            }
        }
        return $title;
    }

	add_filter('nav_menu_item_title', 'brandlife_dropdown_icon', 10, 4);
	
	function brandlife_set_excerpt_length(){
        return 30;
    }

    add_filter('excerpt_length', 'brandlife_set_excerpt_length');

	// Include customizer.php file
	include get_parent_theme_file_path('inc/customizer.php');

?>