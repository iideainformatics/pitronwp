<!-- /*
    Template Name: Contact Template 
*/ -->
<?php get_header(); ?>

<?php get_template_part('templates/parts/breadcrumb'); ?>

	<!-- Contact Area -->

	<div id="contact-us" class="contact-us-area section-padding">
		<div class="container">
			<div class="contact-us-wrapper">
				<div class="row no-gutters">
					<div class="col-lg-3 col-md-6 col-12">
						<div class="contact-us-inner">
							<div class="info-i"><span><i class="las la-map-marker"></i></span></div>
							<h5>Location</h5>
							<p>                            <?php 
                                if(!get_theme_mod('pitron_contact_information_location_street')){
                                    echo "66 Broklyn Street";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_location_street');
                                }
                              ?> <br><?php 
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
						  ?></p>
							<a href="#">Find us on map</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="contact-us-inner">
							<div class="info-i"><span><i class="las la-clock"></i></span></div>
							<h5>Office Hour</h5>
							<p><?php 
                                if(!get_theme_mod('pitron_contact_information_opening_days')){
                                    echo "Monday-Friday";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_opening_days');
                                }
                              ?> <br><?php 
                                if(!get_theme_mod('pitron_contact_information_opening_hours')){
                                    echo "08.00-20.00";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_opening_hours');
                                }
                              ?></p>
							<a href="#">Get Direction</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="contact-us-inner">
							<div class="info-i"><span><i class="las la-mobile"></i></span></div>
							<h5>Phone Number</h5>
							<p><?php 
                                if(!get_theme_mod('pitron_contact_information_phone')){
                                    echo "(+1)212-946-2064";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_phone');
                                }
                              ?> <br><?php 
							  if(!get_theme_mod('pitron_contact_information_secondary_phone')){
								  echo "(+3)112-976-2067";
							  }else{
								  echo get_theme_mod('pitron_contact_information_secondary_phone');
							  }
							?></p>
							<a href="#">Call Now</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="contact-us-inner">
							<div class="info-i"><span><i class="las la-envelope"></i></span></div>
							<h5>E-mail Address</h5>
							<p><?php 
                                if(!get_theme_mod('pitron_contact_information_email')){
                                    echo "admin@pitron.com";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_email');
                                }
                              ?><br><?php 
							  if(!get_theme_mod('pitron_contact_information_secondary_email')){
								  echo "info@pitron.com";
							  }else{
								  echo get_theme_mod('pitron_contact_information_secondary_email');
							  }
							?></p>
							<a href="#">Mail Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Contact Form -->

	<div id="contact-page" class="contact-section blue-bg section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-12 text-center wow fadeInRight">
					<div class="contact-form-wrapper">
						<div class="section-title">
							<h2>Get in <b>Touch</b></h2>
						</div>
						<div class="contact-form">
							<!-- <form action="index.html">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<input type="text" placeholder="Your Name">
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<input type="email" placeholder="E-mail">
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<input type="tel" placeholder="Phone Number">
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<input type="text" placeholder="Subject">
									</div>
									<div class="col-lg-12">
										<textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message"></textarea>
									</div>
									<div class="col-lg-12 col-md-6 col-12 text-center">
										<button class="main-btn">Get A Quote</button>
									</div>
								</div>
							</form> -->
							<?php dynamic_sidebar('pitron-contact-page-form') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--CTA Section-->

	<div class="cta-area-2 white">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-8 col-12 wow fadeInUp" data-wow-delay=".3s">
					<h6>24/7 We Are Here</h6>
					<h2>Get a Free Case <b>Evaluation</b></h2>
				</div>
				<div class="col-lg-6 offset-lg-1 col-md-12 col-12">
					<div class="contact-info">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12 wow fadeInDown" data-wow-delay=".4s">
								<div class="call">
									<i class="las la-phone"></i>
									<h5>Call Us</h5>
									<p><?php 
                                if(!get_theme_mod('pitron_contact_information_phone')){
                                    echo "(+1)212-946-2064";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_phone');
                                }
                              ?></p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 wow fadeInDown" data-wow-delay=".6s">
								<div class="mail">
									<i class="las la-envelope"></i>
									<h5>E-mail</h5>
									<p><?php 
                                if(!get_theme_mod('pitron_contact_information_email')){
                                    echo "admin@pitron.com";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_email');
                                }
                              ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?> 