<!-- /*
    Template Name: Why-choose-us Template 
*/ -->
<?php get_header(); ?>

<?php get_template_part('templates/parts/breadcrumb'); ?>

	<!-- Feature Section-->

<?php get_template_part('templates/parts/choose_us_feature'); ?>


	<!--CTA Section-->

	<div class="cta-area-2">
		<div class="overlay"></div>
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

	<!-- Choose Us Area -->

	<div class="choose-us-area gray-bg section-padding">
		<div class="container">
			<div class="row">
				<div class="offset-lg-2 col-lg-8 text-center">
					<div class="section-title">
						<h6>Why Choose Us</h6>
						<h2>We offer perfect real <br><b>Legal Service</b></h2>
					</div>
				</div>
			</div>
			<div class="choose-us-wrapper wow fadeInUp" data-wow-delay=".3s">
				<div class="row no-gutters">
					<div class="col-lg-3 col-md-6 col-12">
						<div class="choose-us-inner">
							<div class="choose-us-icon">
								<img src="<?php  the_field('reason_1_icon',get_the_id()) ?>" alt="">
							</div>
							<h5><?php  the_field('reason_1_title',get_the_id()) ?></h5>
							<p><?php  the_field('reason_1_short_description',get_the_id()) ?></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="choose-us-inner">
							<div class="choose-us-icon">
								<img src="<?php  the_field('reason_2_icon',get_the_id()) ?>" alt="">
							</div>
							<h5><?php  the_field('reason_2_title',get_the_id()) ?></h5>
							<p><?php  the_field('reason_2_short_description',get_the_id()) ?></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="choose-us-inner">
							<div class="choose-us-icon">
								<img src="<?php  the_field('reason_3_icon',get_the_id()) ?>" alt="">
							</div>
							<h5><?php  the_field('reason_3_title',get_the_id()) ?></h5>
							<p><?php  the_field('reason_3_short_description',get_the_id()) ?></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="choose-us-inner">
							<div class="choose-us-icon">
								<img src="<?php  the_field('reason_4_icon',get_the_id()) ?>" alt="">
							</div>
							<h5><?php  the_field('reason_4_title',get_the_id()) ?></h5>
							<p><?php  the_field('reason_4_short_description',get_the_id()) ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="spacer section-padding">
	</div>

	<!-- Testimonial Section -->

	<div class="testimonial-area gray-bg section-padding">
		<div class="overlay-2"></div>
		<div class="capricorn-testimonial">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center ">
						<div class="section-title">
							<h6>Testimonial</h6>
							<h2>Client's <b>Feedback</b></h2>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="client-carousel owl-carousel">

						<?php             
							$args = array(
								'post_type' =>'testimonials', 'post_status' => 'publish', 'posts_per_page' => -1
							);
							$query = new WP_Query($args);
							
							while($query->have_posts()){
								$query->the_post();
								//$categories = get_the_terms( (get_the_id()), 'portfolio_category' );
								
						?>  

							<div class="single-client-item">
								<div class="testimonial-icon"><i class="las la-quote-left"></i></div>
								<p><?php  the_field('comment',get_the_id()) ?></p>
								<img src="<?php  the_field('image',get_the_id()) ?>" alt="">
								<div class="author-desc">
									<h5><?php  the_field('name',get_the_id()) ?></h5><span><?php  the_field('designation',get_the_id()) ?></span>
								</div>
							</div>
						<?php } wp_reset_query();?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Process Section -->

	<?php get_template_part('templates/parts/process'); ?>

<?php get_footer();  ?>