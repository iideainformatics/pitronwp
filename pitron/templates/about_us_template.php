<!-- /*
Template Name: About-us Template 
*/ -->

<?php get_header(); ?>


<?php get_template_part('templates/parts/breadcrumb'); ?>

<!-- About Section-->

<?php get_template_part('templates/parts/about_us_intro'); ?>

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
						if($service_counter >6){
							break;
						}
                	    $query->the_post();
                	    //$categories = get_the_terms( (get_the_id()), 'portfolio_category' );
                    
            ?>  
		
			<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".2s">
				<div class="single-service-area mb-70" >
					<div class="service-icon">
					<?php  the_field('service_icon',get_the_id()) ?>
					</div>
					<h4><?php the_title(); ?></h4>
					<p><?php the_excerpt(); ?></p>
				</div>
			</div>

			<?php 
				$service_counter++; }
			 } wp_reset_query();?>			

			
		</div>
	</div>
</div>


<!-- Achievement Area -->

<?php get_template_part('templates/parts/about_us_achievement'); ?>

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
				if( !empty($query) ){

                	while($query->have_posts()){
						if($attorney_counter >4){
							break;
						}
                	    $query->the_post();
                	    //$categories = get_the_terms( (get_the_id()), 'portfolio_category' );
                    
            ?>  
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInLeft " data-wow-delay=".2s">
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
			<?php 
				$attorney_counter++; }
			 } wp_reset_query();?>

		</div>
	</div>
</div>

<!--CTA Section-->

<div class="cta-area-2 white">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-8 col-12">
				<h6>24/7 We Are Here</h6>
				<h2>Get a Free Case <b>Evaluation</b></h2>
			</div>
			<div class="col-lg-6 offset-lg-1 col-md-12 col-12">
				<div class="contact-info">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
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
						<div class="col-lg-6 col-md-6 col-12">
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