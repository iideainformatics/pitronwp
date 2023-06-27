<?php
	$about_us_page_id = get_page_by_title( 'About Us', '', 'page' )->ID;
	
?>
<div class="skill-area">
	<div class="skill-bg bg-cover" style="background-image: url(<?php  the_field('achievement_section_image',$about_us_page_id) ?>);">
		<div class="overlay">
		</div>
		<div class="pop-up-video">
			<a href="https://www.youtube.com/watch?v=RQu7jpcNUWI" class="video-play-btn mfp-iframe">
				<i class="fa fa-play"></i>
			</a>
		</div>
	</div>
	<div class="skill-content">
		<div class="section-title mb-30">
			<h6>Our Achievement</h6>
			<h2><?php  the_field('achievement_section_heading',$about_us_page_id) ?></b></h2>
		</div>
		<p><?php  the_field('achievement_section_short_description',$about_us_page_id) ?></p>
		<div class="row no-gutters mt-40">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="single-counter-box one">
					<div class="fact-icon">
					<?php  the_field('achievement_1_icon',$about_us_page_id) ?>
					</div>
					<p class="counter-number"><span><?php  the_field('achievement_1_total_count',$about_us_page_id) ?></span></p>
					<h6><?php  the_field('achievement_1_title',$about_us_page_id) ?></h6>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="single-counter-box two">
					<div class="fact-icon">
					<?php  the_field('achievement_2_icon',$about_us_page_id) ?>
					</div>
					<p class="counter-number"><span><?php  the_field('achievement_2_total_count',$about_us_page_id) ?></span></p>
					<h6><?php  the_field('achievement_2_title',$about_us_page_id) ?></h6>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="single-counter-box three">
					<div class="fact-icon">
					<?php  the_field('achievement_3_icon',$about_us_page_id) ?>
					</div>
					<p class="counter-number"><span><?php  the_field('achievement_3_total_count',$about_us_page_id) ?></span>+</p>
					<h6><?php  the_field('achievement_3_title',$about_us_page_id) ?></h6>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="single-counter-box four">
					<div class="fact-icon">
					<?php  the_field('achievement_4_icon',$about_us_page_id) ?>
					</div>
					<p class="counter-number"><span><?php  the_field('achievement_4_total_count',$about_us_page_id) ?></span>+</p>
					<h6><?php  the_field('achievement_4_title',$about_us_page_id) ?></h6>
				</div>
			</div>
		</div>
	</div>
</div>