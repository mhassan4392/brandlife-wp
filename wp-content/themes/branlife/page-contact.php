<?php get_header(); ?>
<?php 
    $contact_section_header = esc_html(get_theme_mod('contact_section_header', 'Keep In Touch'));
    $contact_section_text = esc_html(get_theme_mod('contact_section_text', 'Keep In Touch with us and get information about our services.'));
    $site_phone = esc_html(get_theme_mod('site_phone', '+255 755 450 000'));
    $site_phone2 = esc_html(get_theme_mod('site_phone2', '+255 784 670 039'));
    $site_mail = esc_html(get_theme_mod('site_mail', 'onetimetechservices@gmail.com'));
    $site_mail2 = esc_html(get_theme_mod('site_mail2', 'habib.mbully@gmail.com'));
    $site_manager = esc_html(get_theme_mod('site_manager', 'Habib Mbully , Managing Director'));
    $site_location = esc_html(get_theme_mod('site_location', 'Box 8314  1st Floor Samsara Bldg, Wakatibado St Makumbusho, Bus Stand, Dar es salaam,  Tanzania - East Africa'));

    $facebook_url = esc_html(get_theme_mod('facebook_url', '#'));
    $twitter_url = esc_html(get_theme_mod('twitter_url', '#'));
    $instagram_url = esc_html(get_theme_mod('instagram_url', '#'));

    if(isset($_POST['send_message'])){
        $sender_name = $_POST['sender_name'];
        $sender_email = $_POST['sender_email'];
        $sender_msg = $_POST['msg'];
       
        // the message
    $msg = $sender_msg . ' \r\n  From:' . $sender_name;
    $headers = 'From: '. $sender_email;

    // use wordwrap() if lines are longer than 70 characters

    // send email
    mail($site_mail, "Client Meassage" , $msg , $headers);
    }

?>

<?php
    get_template_part('template-parts/content', 'breadcrumb');
?>

<!-- Contact us -->
<section id="map">
    
</section>
        <!-- Contact us end -->

<!-- Contact form -->
<section id="contact-form" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mb-3">
                <h2><?php _e($contact_section_header, 'onetime'); ?></h2>
                <p><?php _e($contact_section_text, 'onetime'); ?></p>
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
            <div class="col-md-7 mb-3">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="sender_name" id="name" placeholder="Enter Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="sender_email" id="email" placeholder="Enter Email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="msg">Message</label>
                        <textarea name="sender_msg" id="msg" placeholder="Enter Message" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send_message" value="Send Message" class="btn btn-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact form end -->
 
<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -6.77799, lng: 39.24753};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 17, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDV6oZr1A0Gos6DiXjBY3vHxhVXS7mCwB8&callback=initMap">
    </script>



<?php get_footer(); ?>