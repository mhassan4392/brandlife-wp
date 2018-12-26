<section class="top-navbar">
<nav class="top-header bg-white text-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-lg-4 custom-logo">
                        <?php if ( has_custom_logo() ): ?> 
                            <?php the_custom_logo(); ?>
                        <?php else: ?>
                            <h1 class="main-logo"><?php esc_html_e('one time', 'onetime'); ?>
                            
                        </h1>   
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-6 col-md-9 col-lg-8">
                        <div class="navbar-section">
                            <ul class="navbar-pages">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'Main'
                                    ) );
                                ?>
                            </ul>
                            <ul class="navbar-icons">
                                <li class="navbar-btn menu-item"><i class="fa fa-bars"></i></li>
                                <li class="search-btn menu-item"><i class="fa fa-search"></i>
                                        <div class="custom-search-form">
                                        <form  method="get" action="<?php echo home_url('/') ?>">
<div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg search-field" placeholder="Search &hellip;" value="" name="s" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>
</form>
                                        </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Navbar end -->
        <nav class="small-navbar">
        <ul class="small-navbar-ul">
            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'Main'
                ) );
            ?>
        </ul>
        </nav>
        </section>
        <section class="after-navbar"></section>


    

    
