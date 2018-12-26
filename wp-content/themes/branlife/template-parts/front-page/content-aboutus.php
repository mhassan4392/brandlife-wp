<?php
  $aboutus_heading = esc_html(get_theme_mod('aboutus_heading', 'About Our Technology'));
  $aboutus_text = esc_html(get_theme_mod('aboutus_text', 'Our vision is to establish a reliable link between our customers and our local producers.'));
  $aboutus_image = esc_html(get_theme_mod('aboutus_image', get_template_directory_uri().'/images/services-6.jpeg'));
  $aboutus_btn_text = esc_html(get_theme_mod('aboutus_btn_text', 'About Us'));
  $aboutus_btn_url = esc_html(get_theme_mod('aboutus_btn_url', '#'));

  
  $aboutus_tab1 = esc_html(get_theme_mod('aboutus_tab1', 'OUR MISSION'));
  $aboutus_tab1_text = esc_html(get_theme_mod('aboutus_tab1_text', 'Onetime Technology Services Limited are committed to being a leading global messaging and voice API Company; leading in terms of quality, value offered, customer service, talent development and consistent growth.'));

  
  $aboutus_tab2 = esc_html(get_theme_mod('aboutus_tab2', 'OUR VISION'));
  $aboutus_tab2_text = esc_html(get_theme_mod('aboutus_tab2_text', 'Onetime Technology Services Company vision is to connect the world through mobile technology, helping customers, partners and employees prosper locally as well as globally. We are committed to being a leading global messaging and voice API Company, leading in terms of value offered, customer service, talent development and consistent growth.'));

  
  $aboutus_tab3 = esc_html(get_theme_mod('aboutus_tab3', 'OUR TECHNOLOGY'));
  $aboutus_tab3_text = esc_html(get_theme_mod('aboutus_tab3_text', 'Onetime Technology Services is one of the few IT system integration, professional service and software development companies in Tanzania that works with Enterprise systems and companies. As a privately owned company, Onetime Technology Services provides IT Consultancy, software design and development as well as professional services and hardware deployment and maintenance'));
?>

<div id="about">
<div class="text-center bg-light aboutus-heading py-5">
<div class="col-md-10 mx-auto" data-aos="zoom-in" data-aos-duration="2000">
<h2 class=""><?php _e($aboutus_heading, 'onetime'); ?></h2>
<div class="b-slash w-15 my-4 mx-auto"></div>
  <p class=""><?php _e($aboutus_text, 'onetime'); ?></p>
</div>
</div>

<div class="aboutus my-5">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mb-5" data-aos="fade-right" data-aos-duration="2000">
        <img class="img-fluid" src="<?php _e($aboutus_image, 'onetime'); ?>" alt="">
      </div>
      <div class="col-md-6" data-aos="fade-left" data-aos-duration="2000">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php _e($aboutus_tab1, 'onetime'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php _e($aboutus_tab2, 'onetime'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><?php _e($aboutus_tab3, 'onetime'); ?></a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade animated slideInUp py-3 show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <!-- <h5 class="showcase-tab-heading py-2"><?php //_e($aboutus_tab1_heading, 'onetime'); ?></h5> -->
            <p class="py-4"><?php _e($aboutus_tab1_text, 'onetime'); ?></p>
            <a href="<?php echo home_url('/portfolio'); ?>" class="aboutus-btn btn btn-dark"><?php _e($aboutus_btn_text, 'onetime'); ?></a>
          </div>
          <div class="tab-pane py-3 fade animated slideInUp" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <!-- <h5 class="showcase-tab-heading py-2"><?php //_e($aboutus_tab2_heading, 'onetime'); ?></h5> -->
            <p class="py-4"><?php _e($aboutus_tab2_text, 'onetime'); ?></p>
            <a href="<?php echo home_url('/portfolio'); ?>" class="aboutus-btn btn btn-dark"><?php _e($aboutus_btn_text, 'onetime'); ?></a>
          </div>
          <div class="tab-pane py-3 fade animated slideInUp" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <!-- <h5 class="showcase-tab-heading py-2"><?php // _e($aboutus_tab3_heading, 'onetime'); ?></h5> -->
            <p class="py-4"><?php _e($aboutus_tab3_text, 'onetime'); ?></p>
            <a href="<?php echo home_url('/portfolio'); ?>" class="aboutus-btn btn btn-dark"><?php _e($aboutus_btn_text, 'onetime'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>