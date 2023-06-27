<?php

/**================================================================================================
 *  Pitron Theme Preloaders
 =================================================================================================*/

    // pitron preloader
    add_action('pitron_preloader','pitron_default_preloader',10);
    function pitron_default_preloader(){
    ?>
        <!-- <div id="pitron_preloader">
            <div id="pitron_circle_loader"></div>
            <div class="pitron_loader_logo"><img src="<?php echo PITRON_THEME_IMG_DIR.'preload.png' ?>" alt="Preload"></div>
        </div> -->

    <?php
    }


    /**================================================================================================
 *  Pitron Theme Navbars
 =================================================================================================*/

    // pitron navbar for home 1     
    add_action('pitron_header_style_one', 'pitron_default_header_style_one',10);

    function pitron_default_header_style_one(){
    ?>
     	<!-- Header Area -->

 	<header id="header-1" class="header-area">
 		<div class="container">
 			<div class="row">
 				<div class="col-xl-2 col-lg-2 col-12">
 					<div class="logo">
 						<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php 
                                if(!get_theme_mod('pitron_site_logo')){
                                    echo PITRON_THEME_IMG_DIR.'logo.png';
                                }else{
                                    echo get_theme_mod('pitron_site_logo');
                                }
                              ?>" alt="pitron-logo"></a>
 					</div>
 				</div>

 				<div class="col-xl-2 col-lg-2 col-12">
 					<div class="sub-title">
 						<p>Law & Associates</p>
 					</div>
 				</div>

 				<div class="col-xl-8 col-lg-8 text-end">
 					<div id="header-aside">
 						<div class="aside-content">
 							<div class="inner">
 								<div class="info-one">
 									<div class="info-wrap">
 										<div class="info-i"><span><i class="las la-clock"></i></span></div>
 										<div class="info-c"><?php 
                                if(!get_theme_mod('pitron_contact_information_opening_days')){
                                    echo "Monday-Friday";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_opening_days');
                                }
                              ?><br><span><?php 
                                if(!get_theme_mod('pitron_contact_information_opening_hours')){
                                    echo "08.00-20.00";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_opening_hours');
                                }
                              ?></span></div>
 									</div>
 								</div>
 								<div class="info-two">
 									<div class="info-wrap">
 										<div class="info-i"><span><i class="las la-map-marker"></i></span></div>
 										<div class="info-c"><?php 
							  if(!get_theme_mod('pitron_contact_information_location_city')){
								  echo "New York";
							  }else{
								  echo get_theme_mod('pitron_contact_information_location_city');
							  }
							?>, <?php 
							if(!get_theme_mod('pitron_contact_information_location_country')){
								echo "USA";
							}else{
								echo get_theme_mod('pitron_contact_information_location_country');
							}
						  ?><br><span><?php 
                                if(!get_theme_mod('pitron_contact_information_location_street')){
                                    echo "66 Broklyn Street";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_location_street');
                                }
                              ?></span></div>
 									</div>
 								</div>
 								<div class="info-three">
 									<div class="info-wrap">
 										<div class="info-i"><span><i class="las la-mobile"></i></span></div>
 										<div class="info-c"><?php 
                                if(!get_theme_mod('pitron_contact_information_phone')){
                                    echo "(+1)212-946-2064";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_phone');
                                }
                              ?><br><span><?php 
                              if(!get_theme_mod('pitron_contact_information_email')){
                                  echo "admin@pitron.com";
                              }else{
                                  echo get_theme_mod('pitron_contact_information_email');
                              }
                            ?></span></div>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 		<div class="container-fluid">
 			<div class="sticky-area">
 				<div class="navigation">
 					<div class="row">
 						<div class="col-lg-8">
 							<div class="main-menu">
 								<nav class="navbar navbar-expand-lg">
 									<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 										<span class="navbar-toggler-icon"></span>
 										<span class="navbar-toggler-icon"></span>
 										<span class="navbar-toggler-icon"></span>
 									</button>

 									<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
 										<!-- <ul class="navbar-nav m-auto">
 											<li class="nav-item">
 												<a class="nav-link active" href="#">Home
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 												<ul class="sub-menu">
 													<li><a href="index.html">Home-01</a></li>
 													<li><a href="index-2.html">Home-02</a></li>
 													<li><a href="index-3.html">Home-03</a></li>
 												</ul>
 											</li>

 											<li class="nav-item">
 												<a class="nav-link" href="#">Pages
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 												<ul class="sub-menu">
 													<li><a href="about.html">About us</a></li>
 													<li><a href="choose-us.html">Why Choose Us</a></li>
 													<li><a href="attorney.html">Our Attorney</a></li>
 													<li><a href="single-attorney.html">Attorney Details</a></li>
 													<li><a href="price.html">Pricing</a></li>
 													<li><a href="faq.html">FAQ</a></li>
 												</ul>
 											</li>
 											<li class="nav-item">
 												<a class="nav-link" href="#">Practice Areas
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 												<ul class="sub-menu">
 													<li><a href="service.html">Practice Areas</a></li>
 													<li><a href="single-service.html">Practice Area Details</a></li>
 												</ul>

 											</li>

 											<li class="nav-item">
 												<a class="nav-link" href="#">Case Study
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 												<ul class="sub-menu">
 													<li><a href="case.html">Case Study</a></li>
 													<li><a href="single-case.html">Single Case Study</a></li>
 												</ul>
 											</li>

 											<li class="nav-item">
 												<a class="nav-link" href="#">Blog
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 												<ul class="sub-menu">
 													<li><a href="blog.html">Blog</a></li> 													
 													<li><a href="single-blog.html">Blog Details</a></li>
 												</ul>
 											</li>
 											<li class="nav-item">
 												<a class="nav-link" href="contact.html">Contact</a>
 											</li>
 										</ul> -->
                                         <?php 
                                    $args = array(
                                        'theme_location' => 'pitron_nav', 
                                        'menu_class' => 'navbar-nav m-auto nav-item nav-link ', 
                                        'add_li_class'=> 'nav-item', 
                                        'add_a_class'=> 'nav-link', 
                                        
                                    );
                                    wp_nav_menu($args)                                    
                                    ?>  
 									</div>
 								</nav>
 							</div>
 						</div>
 						<div class="col-lg-4 text-center">
 							<div class="header-right-content">
 								<a href="<?php echo get_page_link(get_page_by_title( 'Contact', '', 'page' )->ID); ?>" class="header-btn main-btn">Free Consultation</a>
 							</div>
 						</div>
 						<!-- Responsive Logo-->
 						<div class="col-lg-4 col-md-4 col-sm-4">
 							<div class="responsive-logo">
                                <img src="<?php 
                                if(!get_theme_mod('pitron_site_logo')){
                                   echo PITRON_THEME_IMG_DIR.'logo-white.png';
                                }else{
                                    echo get_theme_mod('pitron_site_logo');
                                }
                              ?>" alt="Pitron-logo">
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</header>
        
    <?php 
    }

    // pitron navbar for home 2     
    add_action('pitron_header_style_two', 'pitron_default_header_style_two',10);

    function pitron_default_header_style_two(){
    ?>
    
    <!-- Header Top Area -->

    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="contact-info">
                        <i class="las la-envelope"></i> <?php 
                              if(!get_theme_mod('pitron_contact_information_email')){
                                  echo "admin@pitron.com";
                              }else{
                                  echo get_theme_mod('pitron_contact_information_email');
                              }
                            ?> |
                        <i class="las la-map-marker"></i> <?php 
							  if(!get_theme_mod('pitron_contact_information_location_city')){
								  echo "New York";
							  }else{
								  echo get_theme_mod('pitron_contact_information_location_city');
							  }
							?>, <?php 
							if(!get_theme_mod('pitron_contact_information_location_country')){
								echo "USA";
							}else{
								echo get_theme_mod('pitron_contact_information_location_country');
							}
						  ?><br><span><?php 
                                if(!get_theme_mod('pitron_contact_information_location_street')){
                                    echo "66 Broklyn Street";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_location_street');
                                }
                              ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-right">
                    <div class="site-info">
                        Opening Hours: <?php 
                                if(!get_theme_mod('pitron_contact_information_opening_days')){
                                    echo "Monday-Friday";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_opening_days');
                                }
                              ?> - <?php 
                              if(!get_theme_mod('pitron_contact_information_opening_hours')){
                                  echo "08.00-20.00";
                              }else{
                                  echo get_theme_mod('pitron_contact_information_opening_hours');
                              }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area -->

    <header id="header-2" class="header-area absolute-header pt-50">
        <div class="sticky-area">
            <div class="navigation">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <div class="logo">
                                <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php 
                                if(!get_theme_mod('pitron_site_logo')){
                                    echo PITRON_THEME_IMG_DIR.'logo.png';
                                }else{
                                    echo get_theme_mod('pitron_site_logo');
                                }
                              ?>" alt=""></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                        <span class="navbar-toggler-icon"></span>
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                        <!-- <ul class="navbar-nav m-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Home
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="index.html">Home-01</a></li>
                                                    <li><a href="index-2.html">Home-02</a></li>
                                                    <li><a href="index-3.html">Home-03</a></li>
                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Pages
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="about.html">About us</a></li>
                                                    <li><a href="choose-us.html">Why Choose Us</a></li>
                                                    <li><a href="attorney.html">Our Attorney</a></li>
                                                    <li><a href="single-attorney.html">Attorney Details</a></li>
                                                    <li><a href="price.html">Pricing</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Practice Areas
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="service.html">Practice Areas</a></li>
                                                    <li><a href="single-service.html">Practice Area Details</a></li>
                                                </ul>

                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Case Study
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="case.html">Case Study</a></li>
                                                    <li><a href="single-case.html">Single Case Study</a></li>
                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Blog
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog</a></li> 													
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="contact.html">Contact</a>
                                            </li>
                                        </ul> -->
                                        <?php 
                                    $args = array(
                                        'theme_location' => 'pitron_nav', 
                                        'menu_class' => 'navbar-nav m-auto nav-item nav-link ', 
                                        'add_li_class'=> 'nav-item', 
                                        'add_a_class'=> 'nav-link', 
                                       
                                    );
                                    wp_nav_menu($args)                                    
                                    ?>  

                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12 text-right">
                            <div class="header-right-content">
                                <a href="<?php echo get_page_link(get_page_by_title( 'Contact', '', 'page' )->ID); ?>" class="main-btn">Free Consultation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>    
        
    <?php 
    }

    // pitron navbar for home 3     
    add_action('pitron_header_style_three', 'pitron_default_header_style_three',10);

    function pitron_default_header_style_three(){
    ?>

    <header id="header-2" class="header-area absolute-header pt-50 " style="padding-top: 8px;">
        <div class="sticky-area">
            <div class="navigation">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <div class="logo">
                                <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src=" <?php 
                                if(!get_theme_mod('pitron_site_logo')){
                                    echo PITRON_THEME_IMG_DIR.'logo.png';
                                }else{
                                    echo get_theme_mod('pitron_site_logo');
                                }
                              ?>" alt=""></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                        <span class="navbar-toggler-icon"></span>
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                        <!-- <ul class="navbar-nav m-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Home
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="index.html">Home-01</a></li>
                                                    <li><a href="index-2.html">Home-02</a></li>
                                                    <li><a href="index-3.html">Home-03</a></li>
                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Pages
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="about.html">About us</a></li>
                                                    <li><a href="choose-us.html">Why Choose Us</a></li>
                                                    <li><a href="attorney.html">Our Attorney</a></li>
                                                    <li><a href="single-attorney.html">Attorney Details</a></li>
                                                    <li><a href="price.html">Pricing</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Practice Areas
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="service.html">Practice Areas</a></li>
                                                    <li><a href="single-service.html">Practice Area Details</a></li>
                                                </ul>

                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Case Study
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="case.html">Case Study</a></li>
                                                    <li><a href="single-case.html">Single Case Study</a></li>
                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Blog
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog</a></li> 													
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="contact.html">Contact</a>
                                            </li>
                                        </ul> -->

                                        <?php 
                                    $args = array(
                                        'theme_location' => 'pitron_nav', 
                                        'menu_class' => 'navbar-nav m-auto nav-item nav-link ', 
                                        'add_li_class'=> 'nav-item', 
                                        'add_a_class'=> 'nav-link', 
                                        'container' => ''
                                    );
                                    wp_nav_menu($args)                                    
                                    ?>                                        

                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12 text-right">
                            <div class="header-right-content">
                                <a href="<?php echo get_page_link(get_page_by_title( 'Contact', '', 'page' )->ID); ?>" class="main-btn">Free Consultation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>    
        
    <?php 
    }

    /**================================================================================================
     *  Pitron Theme Footer
     =================================================================================================*/    
    add_action('pitron_footer_style','pitron_default_footer_style',10);

    function pitron_default_footer_style(){
        
        
    ?>
    	<!-- Footer Area -->

        <footer class="footer-area">
        <div class="container">
            <div class="footer-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="logo">
                            <img src="<?php 
                                if(!get_theme_mod('pitron_site_logo')){
                                   echo PITRON_THEME_IMG_DIR.'logo-white.png';
                                }else{
                                    echo get_theme_mod('pitron_site_logo');
                                }
                              ?>" alt="pitron-logo">
                        </div>
                        <div class="contact-info">



                            <p><b>Location:</b> 
                            <?php 
                                if(!get_theme_mod('pitron_contact_information_location_street')){
                                    echo "66 Broklyn Street";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_location_street');
                                }
                              ?>, 
                               <?php 
                                if(!get_theme_mod('pitron_contact_information_location_city')){
                                    echo "New York";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_location_city');
                                }
                              ?>, 
                              <?php 
                              if(!get_theme_mod('pitron_contact_information_location_country')){
                                  echo "USA";
                              }else{
                                  echo get_theme_mod('pitron_contact_information_location_country');
                              }
                            ?></p>
                            <p><b>Phone:</b> <?php 
                                if(!get_theme_mod('pitron_contact_information_phone')){
                                    echo "(+1)212-946-2064";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_phone');
                                }
                              ?></p>
                            <p><b>E-mail:</b>  <?php 
                                if(!get_theme_mod('pitron_contact_information_email')){
                                    echo "admin@pitron.com";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_email');
                                }
                              ?></p>
                            <p><b>Opening Hour:</b> <?php 
                                if(!get_theme_mod('pitron_contact_information_opening_hours')){
                                    echo "08.00-20.00";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_opening_hours');
                                }
                              ?></p>
                        </div>

                    </div>
                    <div class="col-lg-5 col-md-6 com-sm-12">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <h6>Company</h6>
                                <ul>
                                    <li>
                                        <a href="<?php echo get_page_link(get_page_by_title( 'About Us', '', 'page' )->ID); ?>">About Us</a>
                                        <a href="<?php echo get_page_link(get_page_by_title( 'Our Attorneys', '', 'page' )->ID); ?>">Meet Our Team</a>
                                        <a href="<?php echo get_page_link(get_page_by_title( 'Services', '', 'page' )->ID); ?>">Practice Areas</a>
                                        <a href="<?php echo get_page_link(get_page_by_title( 'Cases', '', 'page' )->ID); ?>">Case Studies</a>
                                        <a href="<?php echo get_page_link(get_page_by_title( 'Contact', '', 'page' )->ID); ?>">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <h6>Practice Areas</h6>
                                <ul>
                                    <li>
                                        <?php             
                                            $args = array(
                                                'post_type' =>'service', 'post_status' => 'publish'
                                            );
                                            $query = new WP_Query($args);

                                            $i = 1;
                                            if( !empty($query) ){

                                                while($query->have_posts()){
                                                    if($i >8){
                                                        break;
                                                    }	
                                                    $query->the_post();
                                                    //$categories = get_the_terms( (get_the_id()), 'portfolio_category' );
                                                
                                        ?>                                          
                                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                        <?php 
                                                $i++;}
                                            } wp_reset_query();
                                            ?>                                        
                                       
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6">
                        <div class="subscribe-form">
                            <h6>Newsletter</h6>
                            <form action="index.html">
                                <input type="email" placeholder="Your email">
                                <button type="submit"><i class="las la-envelope"></i></button>
                            </form>
                            <p>Stay tuned for our latest news</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Bottom Area  -->

    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-3 col-12">
                    <div class="copyright-area">
                        <p class="copyright-line">© 2023 Pitron. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <p class="privacy"><a href="#">Terms &amp; Conditions</a> <a href="#">Privacy Policy</a> <a href="#">Case Review</a> </p>
                </div>
                <div class="col-lg-3 col-12 text-end">
                    <div class="social-area">
                        <a href="#"><i class="lab la-facebook-f"></i></a>
                        <a href="#"><i class="lab la-youtube"></i></a>
                        <a href="#"><i class="lab la-twitter"></i></a>
                        <a href="#"><i class="lab la-instagram"></i></a>
                        <a href="#"><i class="lab la-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

 	<!-- Scroll Top Area -->
 	<a href="#top" class="go-top"><i class="las la-angle-up"></i></a>


    <?php
    }    

    

?>