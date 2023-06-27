
<!-- /*
Template Name: Home-1 Template 
*/ -->

<?php get_header(); ?>

	<!-- Hero Area -->

	<div class="homepage-slides owl-carousel">
		<div class="single-slide-item">
			<div class="hero-area-content">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
							<div class="section-title">
								<h1><?php the_field('slide_1_text', get_the_id()); ?></h1>
								<p> <?php the_field('slide_1_description', get_the_id()); ?></p>
							</div>
							<a href="<?php echo get_page_link(get_page_by_title( 'About Us', '', 'page' )->ID); ?>" class="main-btn transparent">Learn More</a>
							<a href="<?php echo get_page_link(get_page_by_title( 'Cases', '', 'page' )->ID); ?>" class="main-btn">View Cases</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="single-slide-item hero-area-bg-2">			
			<div class="hero-area-content">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
							<div class="section-title">
								<h1><?php the_field('slide_2_text', get_the_id()); ?></h1>
								<p> <?php the_field('slide_2_description', get_the_id()); ?></p>
							</div>
							<a href="<?php echo get_page_link(get_page_by_title( 'About Us', '', 'page' )->ID); ?>" class="main-btn transparent">Learn More</a>
							<a href="<?php echo get_page_link(get_page_by_title( 'Cases', '', 'page' )->ID); ?>" class="main-btn">View Cases</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About Section-->

	<div class="about-area section-padding pb-50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
					<div class="about-img mb-50">
						<img src="<?php the_field('introduction_side_image', get_the_id()); ?>" alt="">
						<div class="founded-year">
							<i class="flaticon-gavel">Founded in <?php the_field('foundation_year', get_the_id()); ?></i>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay=".4s">
					<div class="about-content-area">
						<div class="section-title">
							<h6>Introduction</h6>
							<h2><?php the_field('introduction_title', get_the_id()); ?></h2>
						</div>
						<p><?php the_field('introduction_description', get_the_id()); ?></p>
						<p class="highlight"><?php the_field('introduction_highlight_1', get_the_id()); ?></p>
						<p class="highlight"><?php the_field('introduction_highlight_2', get_the_id()); ?></p>
						<p class="highlight"><?php the_field('introduction_highlight_3', get_the_id()); ?></p>
						<div class="founded">
							<div class="row no-gutters">
								<div class="col-lg-12 col-md-12 col-12">
									<div class="founded-text">
										<p><?php the_field('introduction_qoute_line', get_the_id()); ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services Section -->

	<div class="services-area bg-cover section-padding pb-50">
		<div class="container">
			<div class="row">
				<div class="offset-lg-2 col-lg-8 text-center">
					<div class="section-title">
						<h6>Practice Areas</h6>
						<h2>We Provide Various <br><b>Legal Services</b></h2>
						<p class="text-white">Law Practice equipment modern technique sit amet, consectetur adipisicing elit. <br> Repellendus laboriosam omnis cum.</p>
					</div>
				</div>
			</div>
			<div class="row">

			<?php             
                $args = array(
                    'post_type' =>'service', 'post_status' => 'publish', 'posts_per_page' => -1
                );
                $query = new WP_Query($args);

				$service_counter = 1;
				if( !empty($query) ){

                	while($query->have_posts()){
						if($service_counter >8){
							break;
						}						
                	    $query->the_post();
                	    //$categories = get_the_terms( (get_the_id()), 'portfolio_category' );
                    
            ?> 			
				<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".2s">
					<div class="single-service-area mb-70">
						<div class="service-icon">
							<?php  the_field('service_icon',get_the_id()) ?>
						</div>
						<h4><?php the_title(); ?></h4>
						<p><?php the_excerpt(); ?></p>
						<p><a href="<?php the_permalink() ?>" class="read-more text-white">Read More</a></p>
					</div>
				</div>

			<?php 
				$service_counter++;}
			 } wp_reset_query();
			 ?>				


			</div>
		</div>
	</div>

	<!-- Case Studies -->

	<div class="case-area section-padding pb-50">
		<div class="container">
			<div class="offset-lg-1 col-lg-10 text-center">
				<div class="section-title">
					<h6>Portfolio</h6>
					<h2>Recent <b>Case Studies</b></h2>
					<p>Law Practice equipment modern technique sit amet, consectetur adipisicing elit. <br> Repellendus laboriosam omnis cum.</p>
				</div>
			</div>
			<div class="row">

			<?php             
                    $args = array(
                        'post_type' =>'cases', 'post_status' => 'publish', 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => -1
                    );
                    $query = new WP_Query($args);
                    $case_counter = 1;
                    while($query->have_posts()){
						if($case_counter >6){
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
                    $case_counter++;}
					wp_reset_query();?>	

				
			</div>
		</div>
	</div>

	
	<!-- Feature Section-->

	<?php get_template_part('templates/parts/choose_us_feature'); ?>

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
						<h2><?php  the_field('form_area_title',get_page_by_title( 'Cases', '', 'page' )->ID) ?></h2>
						<p><?php  the_field('form_area_description',get_page_by_title( 'Cases', '', 'page' )->ID) ?>
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

	<!-- Team Section-->

	<div class="team-area section-padding pb-150">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h6>Meet Our Lawyer</h6>
						<h2>Qualified <b>Attorneys</b></h2>
					</div>
				</div>
			</div>
			<div class="row">

			<?php             
                    $args = array(
                        'post_type' =>'attorneys', 'post_status' => 'publish', 'posts_per_page' => -1
                    );
                    $query = new WP_Query($args);
                    $attorney_counter = 1;
                    while($query->have_posts()){
						if($attorney_counter >4){
							break;
						}

                        $query->the_post();
                        //$categories = get_the_terms( (get_the_id()), 'portfolio_category' );
                        
                ?>  

				<div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInLeft" data-wow-delay=".2s">
					<div class="single-team-member">
						<div class="team-member-bg" style="background-image: url(<?php the_field('attorney_image',get_the_id()) ?>);">
							<div class="team-content">
								<div class="team-title">
									<a href="<?php the_permalink(); ?>"><?php  the_field('attorney_name',get_the_id()) ?></a>
								</div>
								<div class="team-subtitle">
									<p><?php  the_field('attorney_position',get_the_id()) ?></p>
								</div>
							</div>
							<div class="team-social">
							<ul>
									<li><a href="<?php echo get_field('contact_information',get_the_id())['facebook'] ?>"><i class="lab la-facebook"></i></a></li>
									<li><a href="<?php echo get_field('contact_information',get_the_id())['twitter'] ?>"><i class="lab la-twitter"></i></a></li>
									<li><a href="<?php echo get_field('contact_information',get_the_id())['instagram'] ?>"><i class="lab la-instagram"></i></a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>

				<?php $attorney_counter++;} wp_reset_query();?>				

				
			</div>
		</div>
	</div>

	<!-- Testimonial Section -->

	<div class="testimonial-area dark-bg section-padding">
		<div class="overlay-2"></div>
		<div class="capricorn-testimonial">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center ">
						<div class="section-title">
							<h6 class="text-white">Testimonial</h6>
							<h2 class="text-white">Client's <b>Feedback</b></h2>
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
									<h5><?php  the_field('name',get_the_id()) ?> </h5><span><?php  the_field('designation',get_the_id()) ?></span>
								</div>
							</div>
							<?php } wp_reset_query();?>	


						</div>
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
						<h2>Our Latest <b>Articles</b> </h2>
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
							<h5><a href="<?php the_permalink(); ?>"><?php the_title();?> </a>
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