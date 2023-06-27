<!-- /*
Template Name: Home-2 Template 
*/ -->

<?php get_header(); ?>

<!-- Hero Area -->

<div id="home-2" class="homepage-slides owl-carousel">
	<div class="single-slide-item hero-area-bg-3 bg-cover">		
		<div class="overlay"></div>
		<div class="hero-area-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
						<div class="section-title">
							<h1><?php the_field('slide_1_text', get_the_id()); ?></h1>
							<p> <?php the_field('slide_1_description', get_the_id()); ?></p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="single-slide-item hero-area-bg-4">
		<div class="overlay"></div>
		<div class="hero-area-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
						<div class="section-title">
							<h1><?php the_field('slide_2_text', get_the_id()); ?> </h1>
							<p> <?php the_field('slide_2_description', get_the_id()); ?></p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Info Secton -->
<div class="info-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-12">
				<div class="info-inner wow fadeInUp" data-wow-delay=".3s">
					<div class="row gx-0">
						<div class="col-lg-4 col-md-12 col-12">
							<div class="info-bg bg-cover" style="background-image: url(<?php the_field('introduction_side_image', get_the_id()); ?>);">
							</div>
						</div>
						<div class="col-lg-8 col-md-12 col-12">
							<div class="info-content">
								<h5><?php the_field('introduction_qoute_line', get_the_id()); ?></h5>
								<a href="<?php echo get_page_link(get_page_by_title( 'Services', '', 'page' )->ID); ?>">View All Services</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-12 wow fadeInUp" data-wow-delay=".4s">
				<div class="info-founder">
					<i class="flaticon-gavel"></i>
					<p class="highlight"><?php the_field('years_of_experience', get_the_id()); ?>+</p>
					<p>Years <br>Experience</p>
				</div>
			</div>
		</div>
	</div>
</div>

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
						if($i >8){
							break;
						}
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

<!-- About Section-->

<?php get_template_part('templates/parts/about_us_intro'); ?>

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
                        'post_type' =>'cases', 'post_status' => 'publish', 'posts_per_page' => -1
                    );
                    $query = new WP_Query($args);
                    $case_counter = 1;
                    while($query->have_posts()){
						if($case_counter >8){
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

<!--Process Area -->

<div class="featured-process-area">
	<div class="container">
	</div>
	<div class="content-area">
		<div class="process-grids bg-cover clearfix">
			<div class="overlay-2"></div>
			<div class="grid wow fadeInUp" data-wow-delay=".2s">
				<div class="inner">
					<span class="count">01.</span>
					<h3><?php 
                                if(!get_theme_mod('step_1_title')){
                                    echo "Study & Research";
                                }else{
                                    echo get_theme_mod('step_1_title');
                                }
                              ?></h3>
					<p><?php 
                                if(!get_theme_mod('step_1_short_description')){
                                    echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
                                }else{
                                    echo get_theme_mod('step_1_short_description');
                                }
                              ?></p>

				</div>
			</div>
			<div class="grid wow fadeInUp" data-wow-delay=".4s">
				<div class="inner">
					<span class="count">02.</span>
					<h3><?php 
                                if(!get_theme_mod('step_2_title')){
                                    echo "Data Collection";
                                }else{
                                    echo get_theme_mod('step_2_title');
                                }
                              ?></h3>
					<p><?php 
                                if(!get_theme_mod('step_2_short_description')){
                                    echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
                                }else{
                                    echo get_theme_mod('step_2_short_description');
                                }
                              ?></p>

				</div>
			</div>
			<div class="grid wow fadeInUp" data-wow-delay=".6s">
				<div class="inner">
					<span class="count">03.</span>
					<h3><?php 
                                if(!get_theme_mod('step_3_title')){
                                    echo "Fight in the Court";
                                }else{
                                    echo get_theme_mod('step_3_title');
                                }
                              ?></h3>
					<p><?php 
                                if(!get_theme_mod('step_3_short_description')){
                                    echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
                                }else{
                                    echo get_theme_mod('step_3_short_description');
                                }
                              ?></p>

				</div>
			</div>
			<div class="grid wow fadeInUp" data-wow-delay=".8s">
				<div class="inner">
					<span class="count">04.</span>
					<h3><?php 
                                if(!get_theme_mod('step_4_title')){
                                    echo "Bring Back the Win";
                                }else{
                                    echo get_theme_mod('step_4_title');
                                }
                              ?></h3>
					<p><?php 
                                if(!get_theme_mod('step_4_short_description')){
                                    echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
                                }else{
                                    echo get_theme_mod('step_4_short_description');
                                }
                              ?></p>
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
								<img src="<?php  the_field('reason_1_icon',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?>" alt="">
							</div>
							<h5><?php  the_field('reason_1_title',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></h5>
							<p><?php  the_field('reason_1_short_description',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="choose-us-inner">
							<div class="choose-us-icon">
								<img src="<?php  the_field('reason_2_icon',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?>" alt="">
							</div>
							<h5><?php  the_field('reason_2_title',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></h5>
							<p><?php  the_field('reason_2_short_description',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="choose-us-inner">
							<div class="choose-us-icon">
								<img src="<?php  the_field('reason_3_icon',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?>" alt="">
							</div>
							<h5><?php  the_field('reason_3_title',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></h5>
							<p><?php  the_field('reason_3_short_description',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="choose-us-inner">
							<div class="choose-us-icon">
								<img src="<?php  the_field('reason_4_icon',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?>" alt="">
							</div>
							<h5><?php  the_field('reason_4_title',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></h5>
							<p><?php  the_field('reason_4_short_description',get_page_by_title( 'Why Choose Us', '', 'page' )->ID) ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="spacer section-padding">
</div>

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