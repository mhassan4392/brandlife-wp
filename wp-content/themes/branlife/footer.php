<?php 
    $site_phone = esc_html(get_theme_mod('site_phone', '+255 755 450 000'));
    $site_phone2 = esc_html(get_theme_mod('site_phone2', '+255 784 670 039'));
    $site_mail = esc_html(get_theme_mod('site_mail', 'onetimetechservices@gmail.com'));
    $site_mail2 = esc_html(get_theme_mod('site_mail2', 'habib.mbully@gmail.com'));
    $site_manager = esc_html(get_theme_mod('site_manager', 'Habib Mbully , Managing Director'));
    $site_location = esc_html(get_theme_mod('site_location', 'Box 8314  1st Floor Samsara Bldg, Wakatibado St Makumbusho, Bus Stand, Dar es salaam,  Tanzania - East Africa'));

    $facebook_url = esc_html(get_theme_mod('facebook_url', '#'));
    $twitter_url = esc_html(get_theme_mod('twitter_url', '#'));
    $instagram_url = esc_html(get_theme_mod('instagram_url', '#'));

?>


<div class="main-footer bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 class="footer-col-header clr-custom"><?php //esc_html_e(bloginfo('name'), 'onetime') ?>Contact</h4>
                <ul class="footer-col-nav">
                    <li><i class="fa fa-user mr-2"></i> <?php _e($site_manager, 'onetime'); ?></li>
                    <li><i class="fa fa-phone mr-2"></i> <?php _e($site_phone, 'onetime'); ?></li>
                    <li><i class="fa fa-phone mr-2"></i> <?php _e($site_phone2, 'onetime'); ?></li>
                    <li><i class="fa fa-envelope mr-2"></i> <?php _e($site_mail, 'onetime'); ?></li>
                    <li><i class="fa fa-envelope mr-2"></i> <?php _e($site_mail2, 'onetime'); ?></li>
                    <li><i class="fa fa-map-marker mr-2"></i> <?php _e($site_location, 'onetime'); ?></li>
                    <li>
                        <a class="mr-2" href="<?php _e($facebook_url, 'onetime'); ?>"><i class="fa fa-facebook "></i></a>
                        <a class="mr-2" href="<?php _e($twitter_url, 'onetime'); ?>"><i class="fa fa-twitter "></i></a>
                        <a class="mr-2" href="<?php _e($instagram_url, 'onetime'); ?>"><i class="fa fa-instagram "></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
            <h4 class="footer-col-header clr-custom"><?php //esc_html_e(bloginfo('name'), 'onetime') ?>About us</h4>
            <p>Onetime Technology Services is one of the few IT system integration, professional service and software development companies in Tanzania that works with Enterprise systems and companies. As a privately owned company, Onetime Technology Services provides IT Consultancy, software design and development as well as professional services and hardware deployment and maintenance</p>
            </div>
            <div class="col-md-4">
            <h4 class="footer-col-header clr-custom"><?php //esc_html_e(bloginfo('name'), 'onetime') ?>Company</h4>
            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'Footer'
                ) );
            ?>
            </div>
            
        </div>
    </div>
</div>

<div class="last-footer text-center py-3">
Copyright © 2018 Onetime Technology Services. 
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
</div>






</div>
    <!-- Whole page container end -->

<?php wp_footer(); ?>
</body>
</html>