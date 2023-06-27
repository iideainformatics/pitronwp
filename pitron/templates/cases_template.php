<!-- /*
Template Name: Cases Template 
*/ -->

<?php get_header(); ?>

<?php get_template_part('templates/parts/breadcrumb'); ?>


	<!-- Case Studies -->

	<div class="case-area section-padding">
		<div class="container">
			<div class="offset-lg-1 col-lg-10 text-center">
				<div class="section-title">
					<h6>Featured Work</h6>
					<h2>Recent <b>Case Studies</b></h2>
					<p>Law Practice equipment modern technique sit amet, consectetur adipisicing elit. <br> Repellendus laboriosam omnis cum.</p>
				</div>
			</div>
			<div class="row">

				<?php             
                    $args = array(
                        'post_type' =>'cases', 'post_status' => 'publish','posts_per_page' => -1
                    );
                    $query = new WP_Query($args);
			
                    $i = 1;
                    while($query->have_posts()){
						if($i>8){
							break;
						}
                        $query->the_post();
                        //$categories = get_the_terms( (get_the_id()), 'portfolio_category' );
                        
                ?>      

				<div class="col-lg-4 col-md-6 col-12 wow fadeInLeft" data-wow-delay=".2s">
					<div class="single-case-item mb-50 bg-cover " style="background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'large')[0] ?>);">
						<div class="case-inner">
							<a href="<?php the_permalink(); ?>" class="case-icon">
								<i class="las la-plus"></i>
							</a>
							<div class="hover-info">
								<h6><?php  the_field('service_category_name',get_the_id()) ?></h6>
								<h4><?php the_title(); ?></h4>
							</div>
						</div>
					</div>
				</div>

				<?php
                    $i++;}
					wp_reset_query();?>				


			
			</div>
		</div>
	</div>


	<!--CTA Section-->

	<div class="cta-area bg-cover">
		<div class="overlay-2"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 col-12 wow fadeInUp" data-wow-delay=".3s">
					<div class="evalution-form">
						<h5>Free Case Evalution</h5>
						<!-- <form >
							<input type="text" placeholder="Your Name">
							<input type="email" placeholder="Your E-mail">
							<input type="tel" placeholder="Your Phone Number">
							<input type="text" placeholder="Subject">
							<textarea name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
							<input class="main-btn" type="submit" value="Submit Now">
						</form> -->
						<?php dynamic_sidebar('pitron-case-contact-form') ?>
					</div>
				</div>
				<div class="offset-lg-1 col-lg-6 col-md-12 col-12 wow fadeInDown" data-wow-delay=".4s">
					<div class="section-title mt-50">
						<h6>We Are Here</h6>
						<h2><?php  the_field('form_area_title',get_the_id()) ?></h2>
						<p><?php  the_field('form_area_description',get_the_id()) ?>
						</p>
						<h5>Contact Us</h5>
						<p class="tel"><?php 
                                if(!get_theme_mod('pitron_contact_information_phone')){
                                    echo "(+1)212-946-2064";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_phone');
                                }
                              ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Process Section -->

	<?php get_template_part('templates/parts/process'); ?>
    

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