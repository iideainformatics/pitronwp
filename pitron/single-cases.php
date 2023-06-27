<?php get_header(); 
the_post();
?>

<!-- Breadcrumb Area  -->

<div class="breadcroumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcroumb-title">
					<h1>Case Details</h1>
					<h6><a href="<?php echo home_url(); ?>">Home</a> / <?php the_title(); ?></h6>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Case Details -->

<div class="case-single-section section-padding pb-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3><?php the_title(); ?></h3>
				<p><?php  the_field('case_description',get_the_id()) ?> </p>
				<div class="row">
					<div class="col-lg-8">
					<img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'large')[0] ?>" alt="">
						<div class="case-overview">
							<h5>Case Overview</h5>
							<p><?php  the_field('case_overview',get_the_id()) ?></p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="case-info">
							<h5>Case Info</h5>
							<p><b>Advocate:</b><span><?php  the_field('advocate_name',get_the_id()) ?></span></p>
							<p><b>Category:</b><span><?php  the_field('service_category_name',get_the_id()) ?></span></p>
							<p><b>Start Date:</b><span><?php  the_field('case_start_date',get_the_id()) ?></span></p>
							<p><b>End Date:</b><span><?php  the_field('case_end_date',get_the_id()) ?></span></p>
							
							<!-- <div class="main-btn">View Case</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8">

			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="port-img mt-10 mb-50">
					<img src="<?php  the_field('preview_image_1',get_the_id()) ?>" alt="">
					
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="port-img mt-10 mb-50">
					<img src="<?php  the_field('preview_image_2',get_the_id()) ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Recent Case Area -->

<div id="case-3" class="case-area sky-bg section-padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h6>Recent Case Solved</h6>
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


<?php get_footer();  ?>