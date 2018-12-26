<?php 

    $slider_img_1 =  get_theme_mod('slider_1_image', get_template_directory_uri().'/images/slider-1.jpg');
    $slider_img_2 = get_theme_mod('slider_2_image', get_template_directory_uri().'/images/slider-2.jpg');
    $testimonial_bg_image = get_theme_mod('testimonial_bg_image', get_template_directory_uri().'/images/testimonial-bg.jpg');
    $color_scheme = get_theme_mod('color_scheme','#dd9933');
    $testimonial_arrow_1 = get_template_directory_uri().'/images/quote_arrow.png';
    $testimonial_arrow_2 = get_template_directory_uri().'/images/quote_arrow2.png';
    $inline_styles = "
    .slide1{
        background:url({$slider_img_1})no-repeat center center;
        background-size:cover;
    }
    .slide2{
        background:url({$slider_img_2})no-repeat center center; 
    }
    #testimonial-slider{
        background: url({$testimonial_bg_image}) no-repeat center center;
        background-size:cover;
    } 
    .clr-custom{
        color:{$color_scheme};
    }
    .bg-custom{
        background:{$color_scheme};
    }
    .fa:hover{
        color: {$color_scheme};
    }
    a:hover{
        color: {$color_scheme} !important;
        text-decoration: none;
    }
    a:active{
        color: {$color_scheme};
    }
    #slider a:hover{
        color: {$color_scheme} !important;
    }
    .sub-menu li a:hover{
        color: {$color_scheme} !important; 
    }
    .small-navbar a:hover{
        color: {$color_scheme} !important;
    }
    
    .small-navbar a:active{
        color: {$color_scheme};
    }
    .main-footer a:hover{
        color: {$color_scheme} !important;
    }

    .page-showcase a:hover{
        color: {$color_scheme} !important;
    }
    
    .page-showcase a:active{
        color: {$color_scheme};
    }
    .post-date{
        background:{$color_scheme}
    }
    .form-submit .submit:hover{
        color:{$color_scheme}
    }
    .b-slash{
        border-color:{$color_scheme}
    }
    .btn-custom{
        background-color:{$color_scheme}
    }
    .testimonial-pic-1{
        background: url('{$testimonial_arrow_1}') no-repeat right center;
    }
    
    .testimonial-pic-2{
        background: url('{$testimonial_arrow_2}') no-repeat left center;
    }
";


?>