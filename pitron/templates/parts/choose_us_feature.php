<?php
	$choose_us_page_id = get_page_by_title( 'Why Choose Us', '', 'page' )->ID;
	
?>

<div class="feature-area bg-cover sky-bg section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
					<div class="section-title">
						<h6>A Little Bit More</h6>
						<h2> We bring justification against <b>injustice</b></h2>
					</div>
					<div class="single-feature-item">
						<div class="feature-icon">
							<?php  the_field('feature_1_icon',$choose_us_page_id) ?>
						</div>
						<div class="feature-content">
							<h5><?php  the_field('feature_1_title',$choose_us_page_id) ?></h5>
							<p><?php  the_field('feature_1_short_description',$choose_us_page_id) ?></p>
						</div>
					</div>
					<div class="single-feature-item">
						<div class="feature-icon">
						<?php  the_field('feature_2_icon',$choose_us_page_id) ?>
						</div>
						<div class="feature-content">
							<h5><?php  the_field('feature_2_title',$choose_us_page_id) ?></h5>
							<p><?php  the_field('feature_2_short_description',$choose_us_page_id) ?></p>
						</div>
					</div>
					<div class="single-feature-item">
						<div class="feature-icon">
						<?php  the_field('feature_3_icon',$choose_us_page_id) ?>
						</div>
						<div class="feature-content">
							<h5><?php  the_field('feature_3_title',$choose_us_page_id) ?></h5>
							<p><?php  the_field('feature_3_short_description',$choose_us_page_id) ?></p>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay=".4s">
					<div class="feature-image">
						<img src="<?php  the_field('side_image',$choose_us_page_id) ?>" alt="">
                        
					</div>
				</div>
			</div>
		</div>
	</div>