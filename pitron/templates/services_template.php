<!-- /*
    Template Name: Services Template 
*/ -->
<?php get_header(); ?>

<?php get_template_part('templates/parts/breadcrumb'); ?>

 	<!-- Service Area -->
     
 	<!-- <div id="service-3" class="serv-area sky-bg section-padding">
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
				<div class="col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".2s">
					<div class="single-serv-wrapper">
						<div class="row gx-0">
							<div class="col-lg-6">
								<div class="single-serv-bg bg-cover">
								</div>

							</div>
							<div class="col-lg-6">
								<div class="single-serv-area">
									<div class="service-icon">
										<i class="flaticon-law"></i>
									</div>
									<h5>Business Law</h5>
									<p>There are some reason build the site lorem ipsum dolor sit amet.</p>
									<a href="single-service.html" class="read-more">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".4s">
					<div class="single-serv-wrapper">
						<div class="row gx-0">
							<div class="col-lg-6">
								<div class="single-serv-bg bg-cover serv-bg-2">
								</div>

							</div>
							<div class="col-lg-6">
								<div class="single-serv-area">
									<div class="service-icon">
										<i class="flaticon-balance"></i>
									</div>
									<h5>Family Law</h5>
									<p>There are some reason build the site lorem ipsum dolor sit amet.</p>
									<a href="single-service.html" class="read-more">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".6s">
					<div class="single-serv-wrapper">
						<div class="row gx-0">
							<div class="col-lg-6">
								<div class="single-serv-bg bg-cover serv-bg-3">
								</div>

							</div>
							<div class="col-lg-6">
								<div class="single-serv-area">
									<div class="service-icon">
										<i class="flaticon-family"></i>
									</div>
									<h5>Criminal Law</h5>
									<p>There are some reason build the site lorem ipsum dolor sit amet.</p>
									<a href="single-service.html" class="read-more">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".8s">
					<div class="single-serv-wrapper">
						<div class="row gx-0">
							<div class="col-lg-6">
								<div class="single-serv-bg bg-cover serv-bg-4">
								</div>

							</div>
							<div class="col-lg-6">
								<div class="single-serv-area">
									<div class="service-icon">
										<i class="flaticon-attorney"></i>
									</div>
									<h5>Real Estate Law</h5>
									<p>There are some reason build the site lorem ipsum dolor sit amet.</p>
									<a href="single-service.html" class="read-more">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->



	<!-- Services Area -->

	<div id="service-2" class="services-area section-padding pb-50">
		<div class="container">
			<div class="row">
				<div class="offset-lg-2 col-lg-8 text-center">
					<div class="section-title">
						<h6>Services</h6>
						<h2>What we are offering<b><br> to solve cases</b></h2>
						<p>Combining Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus laboriosam omnis cum, natus doloremque perferendis.</p>
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
						
                	    $query->the_post();
                	    //$categories = get_the_terms( (get_the_id()), 'portfolio_category' );
                    
            ?>  			

				<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".2s">
					<div class="single-service-area  mb-50 <?php if($i%2 != 0 ){echo "blue-bg";} ?>" >
						<div class="service-icon">
							<?php  the_field('service_icon',get_the_id()) ?>
						</div>
						<h4><?php the_title(); ?></h4>
						<p><?php the_excerpt(); ?></p>
						<p><a href="<?php the_permalink() ?>" class="read-more text-white">Read More</a></p>
					</div>
				</div>

			<?php 
				$i++;}
			 } wp_reset_query();
			 ?>

			</div>
		</div>
	</div>

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

	<!-- Testimonial Area -->

	<div class="testimonial-area-2 section-padding">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="testimonial-carousel owl-carousel">

					<?php             
							$args = array(
								'post_type' =>'testimonials', 'post_status' => 'publish', 'posts_per_page' => -1
							);
							$query = new WP_Query($args);
							
							while($query->have_posts()){
								$query->the_post();
								//$categories = get_the_terms( (get_the_id()), 'portfolio_category' );
								
						?>

						<div class="single-testimonial-item">
							<div class="testimonial-avatar">
								<img src="<?php  the_field('image',get_the_id()) ?>" alt="">
							</div>
							<div class="testimonial-content">
								<div class="testimonial-icon-before"><i class="las la-quote-left"></i></div>
								<p><?php  the_field('comment',get_the_id()) ?></p>
								<div class="testimonial-icon-after"><i class="las la-quote-right"></i></div>
								<h4><?php  the_field('name',get_the_id()) ?> <span><?php  the_field('designation',get_the_id()) ?></span></h4>
							</div>
						</div>

						<?php } wp_reset_query();?>						

					

					</div>
				</div>
			</div>
		</div>
	</div>




<?php get_footer(); ?>