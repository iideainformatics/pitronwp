
<!-- /*
Template Name: Home-3 Template 
*/ -->

<?php get_header(); ?>

<!-- Hero Area -->

<div id="home-3" class="homepage-slides owl-carousel">
	<div class="single-slide-item hero-area-bg-5">
		<div class="overlay-2"></div>
		<div class="hero-area-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-md-10 col-11 text-center wow fadeInUp animated" data-wow-delay=".2s">
						<div class="section-title">
							<h6>Service since <?php the_field('foundation_year',get_the_id()); ?></h6>
							<h1><?php the_field('slide_1_text',get_the_id()); ?></h1>
							<p><?php the_field('slide_1_description',get_the_id()); ?></p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="single-slide-item hero-area-bg-6">
		<div class="overlay-2"></div>
		<div class="hero-area-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-md-10 col-11 text-center wow fadeInUp animated" data-wow-delay=".2s">
						<div class="section-title">
							<h6>Service since <?php the_field('foundation_year',get_the_id()); ?></h6>
							<h1><?php the_field('slide_2_text',get_the_id()); ?></h1>
							<p><?php the_field('slide_2_description',get_the_id()); ?></p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Promo Area -->

<div class="promo-area">
	<div class="container">
		<div class="row gx-0">
			<div class="col-lg-4 col-12">
				<div class="single-promo-item mb-50">
					<div class="promo-icon">
						<?php  the_field('feature_1_icon',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?>
					</div>
					<h5><?php  the_field('feature_1_title',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></h5>
					<p><?php  the_field('feature_1_short_description',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></p>

				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="single-promo-item mb-50 spro">
				<div class="promo-icon">
						<?php  the_field('feature_2_icon',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?>
					</div>
					<h5><?php  the_field('feature_2_title',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></h5>
					<p><?php  the_field('feature_2_short_description',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></p>

				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="single-promo-item mb-50">
				<div class="promo-icon">
						<?php  the_field('feature_3_icon',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?>
					</div>
					<h5><?php  the_field('feature_3_title',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></h5>
					<p><?php  the_field('feature_3_short_description',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></p>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- About Us Area-->

<div id="about-3" class="about-area bg-cover section-padding">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-12 wow fadeInLeft" data-wow-delay=".3s">
				<div class="about-content-area">
					<div class="section-title">
						<h6>A little Bit More</h6>
						<h2><?php the_field('home_3_intro_title', get_the_id()); ?></h2>
					</div>

					<p><?php the_field('home_3_intro_description', get_the_id()); ?></p>


					<ul class="about-key mt-30">
						<li><i class="las la-check-square"></i>
							<p><?php the_field('home_3_intro_item_1', get_the_id()); ?></p>
						</li>
						<li><i class="las la-check-square"></i>
							<p><?php the_field('home_3_intro_item_2', get_the_id()); ?></p>
						</li>
						<li><i class="las la-check-square"></i>
							<p><?php the_field('home_3_intro_item_3', get_the_id()); ?></p>
						</li>
						<li><i class="las la-check-square"></i>
							<p><?php the_field('home_3_intro_item_4', get_the_id()); ?></p>
						</li>
					</ul>
					<div class="about-contact">
						<div class="row">

							<div class="col-lg-6">
								<div class="call-us d-flex mt-30">
									<div class="icon"><i class="las la-phone"></i></div>
									<div class="mobile-number">
										<h5>Free Case Evaluation</h5>
										<p><?php 
                                if(!get_theme_mod('pitron_contact_information_phone')){
                                    echo "(+1)212-946-2064";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_phone');
                                }
                              ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<a href="<?php echo get_page_link(get_page_by_title( 'Cases', '', 'page' )->ID); ?>" class="main-btn">Learn More</a>

							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="col-lg-6 wow fadeInRight" data-wow-delay=".4s">
				<div class="about-bg">
					<img src="<?php the_field('home_3_intro_side_image', get_the_id()); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Service Area -->

<div id="service-3" class="serv-area sky-bg section-padding">
	<div class="container">
		<div class="row">
			<div class="offset-lg-2 col-lg-8 text-center">
				<div class="section-title">
					<h6>What We do</h6>
					<h2>We Offer Perfect Real<br><b>Law Service</b></h2>
					<p>We can service all of legal procedure from starting to ending, hearing, impitchment & witness. We have done adequetly something.</p>
				</div>
			</div>
		</div>
		<div class="row">
			


			<?php             
                $args = array(
                    'post_type' =>'service', 'post_status' => 'publish', 'posts_per_page' => -1
                );
                $query = new WP_Query($args);

				$i = 1;
				if( !empty($query) ){

                	while($query->have_posts()){
						if($i >4){
							break;
						}	
                	    $query->the_post();
                	    //$categories = get_the_terms( (get_the_id()), 'portfolio_category' );
                    
            ?>  	
			<div class="col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".2s">
				<div class="single-serv-wrapper">
					<div class="row gx-0">
						<div class="col-lg-6">
							<div class="single-serv-bg bg-cover" style="background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'large')[0] ?>);">
							</div>

						</div>
						<div class="col-lg-6">
							<div class="single-serv-area">
								<div class="service-icon">
									<?php  the_field('service_icon',get_the_id()) ?>
								</div>
								<h5><?php the_title(); ?></h5>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink() ?>" class="read-more">Read More</a>
							</div>
						</div>
					</div>
				</div>
				</div>
			<?php 
				$i++;}
			 } wp_reset_query();
			 ?>

			
			
		</div>
	</div>
</div>

<!--Case Area -->

<div id="case-3" class="case-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="section-title">
					<h6>Case Solved</h6>
					<h2>We bring justification againts <b>injustice</b></h2>
				</div>
			</div>
		</div>
		<div class="case-slider owl-carousel">

		<?php             
            $args = array(
                'post_type' =>'cases', 'post_status' => 'publish', 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => -1
            );
            $recentCases = new WP_Query($args);

			$recent_case_counter = 1;
			if( !empty($recentCases) ){
			
				while( $recentCases->have_posts() ){
				if($recent_case_counter >6){
					break;
				}
				$recentCases->the_post(); ?>

			<div class="single-case-item mb-50 bg-cover " style="background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'large')[0] ?>);">
				<div class="case-inner">
					<div class="hover-info">
						<h4><?php the_title(); ?></h4>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>">Read More</a>
					</div>
				</div>
			</div>

			<?php $recent_case_counter++; }} ?>		

					
		</div>
	</div>
</div>

<!-- Achievement Area -->

<?php get_template_part('templates/parts/about_us_achievement'); ?>
<!--Process Section -->

<?php get_template_part('templates/parts/process'); ?>

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

<!--Pricing Section -->

<?php get_template_part('templates/parts/prices'); ?>

<!-- Contact Section -->

<div class="contact-section bg-cover section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12 wow fadeInLeft">
				<div class="contact-info">
					<div class="section-title">
						<h6>Contact Us</h6>
						<h2>Get in <b>Touch</b></h2>
					</div>
					<p>If you have a contact Lorem ipsum dolor sit amet cum maiores, excepturi fuga, est doloremque praesentium!</p>
					<div class="contact-content">
						<div class="contact-inner">
							<i class="las la-map-marker"></i>
							<h6>Visit Us</h6>
							<p><?php 
                                if(!get_theme_mod('pitron_contact_information_location_street')){
                                    echo "66 Broklyn Street";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_location_street');
                                }
                              ?>, <?php 
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
						</div>
						<div class="contact-inner">
							<i class="las la-envelope"></i>
							<h6>Email Address</h6>
							<p><?php 
                                if(!get_theme_mod('pitron_contact_information_email')){
                                    echo "admin@pitron.com";
                                }else{
                                    echo get_theme_mod('pitron_contact_information_email');
                                }
                              ?></p>
						</div>
						<div class="contact-inner">
							<i class="las la-phone"></i>
							<h6>Call Now</h6>
							<p><?php 
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
			<div class="col-lg-6 col-md-12 col-12 wow fadeInRight">
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
							<div class="col-lg-6 col-md-6 col-12">
								<button class="main-btn">Submit</button>
							</div>
						</div>
					</form> -->
					<?php dynamic_sidebar('pitron-contact-page-form') ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Blog Section-->

<div class="blog-area gray-bg section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12">
				<div class="section-title">
					<h6>Blog</h6>
					<h2>Latest Law <b>Articles</b> </h2>
				</div>
			</div>

			<div class="col-lg-6 text-right">

			</div>
		</div>
		<div class="row">
		<?php             
				$args = array(
					'post_type' =>'post', 'posts_per_page' => -1
				);
				$query = new WP_Query($args);
				$i=1;
				while($query->have_posts()){
					if($i >3){
						break;
					}	
					$query->the_post();
				
			?>			

			<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".4s">
				<div class="single-blog-item">
					<div class="blog-bg">
					<img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'large')[0] ?>" alt="">
					</div>
					<div class="blog-content">
						<p class="blog-meta"><i class="las la-user-circle"></i><?php the_author(); ?> | <i class="las la-calendar-check"></i><?php echo get_the_date('j F, Y');?></p>
						<h5><a href="<?php the_permalink(); ?>"><?php the_title();?></a>
						</h5>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
					</div>

				</div>
			</div>
				<?php 
                    $i++;
                    }
                    wp_reset_postdata();            
                ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>