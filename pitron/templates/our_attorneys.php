<!-- /*
    Template Name: Our-attorneys Template 
*/ -->
<?php get_header(); ?>

<?php get_template_part('templates/parts/breadcrumb'); ?>

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
                    
                    while($query->have_posts()){
                        $query->the_post();
                        //$categories = get_the_terms( (get_the_id()), 'portfolio_category' );
                        
                ?>  

				<div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInLeft mt-5 pt-5" data-wow-delay=".2s">
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
				<?php } wp_reset_query();?>

				
				

				
				
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

<?php get_footer();  ?>