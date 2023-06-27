<?php
	$about_us_page_id = get_page_by_title( 'About Us', '', 'page' )->ID;
	
?>
<div id="about-2" class="about-area section-padding">
	<div class="container-fluid">
		<div class="row no-gutters">
			<div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
				<div class="mt-10"></div>
				<div class="about-bg-wrapper">
					<div class="about-bg-innner bg-cover"></div>
				</div>
			</div>
			<div class="col-lg-7 wow fadeInDown" data-wow-delay=".4s">
				<div class="about-content-wrapper">
					<div class="section-title">
						<h6>About Us</h6>
						<h2><?php  the_field('heading',$about_us_page_id) ?></b></h2>
					</div>
					<p><?php  the_field('description',$about_us_page_id) ?> </p>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="key-feature">
								<div class="row no-gutters">
									<div class="col-lg-4">
										<div class="about-icon">
											<img src="<?php  the_field('feature_1_icon',$about_us_page_id) ?>" alt="">
										</div>
									</div>
									<div class="col-lg-12">
										<h4><?php  the_field('feature_1_title',$about_us_page_id) ?></h4>
										<p><?php  the_field('feature_1_short_description',$about_us_page_id) ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="key-feature">
								<div class="row no-gutters">
									<div class="col-lg-4">
										<div class="about-icon">
											<img src="<?php  the_field('feature_2_icon',$about_us_page_id) ?>" alt="">
										</div>
									</div>
									<div class="col-lg-12">
										<h4><?php  the_field('feature_1_title',$about_us_page_id) ?></h4>
										<p><?php  the_field('feature_1_short_description',$about_us_page_id) ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row d-flex pt-30">
						<div class="img-content">
							<img class="img-fluid" src="<?php  the_field('author_signature',$about_us_page_id) ?>" alt="sign">
						</div>
						<div class="text-content">
							<h6>- John Copper</h6>
							<p> Senior Lawyer</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>