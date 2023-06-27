<?php get_header(); 
the_post();
?>

<!-- Breadcrumb Area  -->

<div class="breadcroumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcroumb-title">
					<h1>Attorney Details</h1>
					<h6><a href="<?php echo home_url(); ?>">Home</a> / <?php the_title(); ?></h6>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Attorney Details  -->

<div class="attorney-pg-area section-padding">
		<div class="container">
			<div class="attorney-info-wrap">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="attorney-info-img">
							<img src="<?php  the_field('attorney_image',get_the_id()) ?>" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="attorney-info-text">
							<h2><?php  the_field('attorney_name',get_the_id()) ?></h2>
							<ul>
								<li>Position: <span><?php  the_field('attorney_position',get_the_id()) ?></span></li>
								<li>Practice Area:<span><?php  the_field('practice_areas',get_the_id()) ?></span></li>
								<li>Experience:<span><?php  the_field('total_years_of_experience',get_the_id()) ?></span></li>
								<li>Address:<span><?php echo get_field('contact_information',get_the_id())['address'] ?></span></li>
								<li>Phone:<span><?php echo get_field('contact_information',get_the_id())['phone'] ?></span></li>
								<li>Email:<span><?php echo get_field('contact_information',get_the_id())['email'] ?></span></li>
								<li>Fax:<span><?php echo get_field('contact_information',get_the_id())['fax'] ?></span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="exprience-area">
				<div class="row">
					<div class="col-lg-12">
						<div class="exprience-wrap">
							<h2>Personal Experience</h2>
							<?php  the_field('describe_personal_experience',get_the_id()) ?>
							
						</div>

						<div class="at-progress">
							<div class="row">
								<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 custom-grid">
									<div class="progress yellow">
										<span class="progress-left">
											<span class="progress-bar"></span>
										</span>
										<span class="progress-right">
											<span class="progress-bar"></span>
										</span>
										<div class="progress-value"><?php echo get_field('achievements',get_the_id())['total_happy_client'] ?></div>
										<div class="progress-name"><span>Happy Client</span></div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 custom-grid">
									<div class="progress blue">
										<span class="progress-left">
											<span class="progress-bar"></span>
										</span>
										<span class="progress-right">
											<span class="progress-bar"></span>
										</span>
										<div class="progress-value"><?php echo get_field('achievements',get_the_id())['total_case_won'] ?></div>
										<div class="progress-name"><span>Cases Won</span></div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 custom-grid">
									<div class="progress pink">
										<span class="progress-left">
											<span class="progress-bar"></span>
										</span>
										<span class="progress-right">
											<span class="progress-bar"></span>
										</span>
										<div class="progress-value"><?php echo get_field('achievements',get_the_id())['total_case_dismissed'] ?></div>
										<div class="progress-name"><span>Case Dismissed</span></div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 custom-grid">
									<div class="progress green">
										<span class="progress-left">
											<span class="progress-bar"></span>
										</span>
										<span class="progress-right">
											<span class="progress-bar"></span>
										</span>
										<div class="progress-value"><?php echo round((get_field('achievements',get_the_id())['total_case_won'] * 100) /get_field('achievements',get_the_id())['total_case_dismissed']) ?>%</div>
										<div class="progress-name"><span>Success Rate</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="education-area ex-wiget">
							<h2>Area of Expertise</h2>
							<!-- <ul>
								<li>Family Law</li>
								<li>Insurance Deffence</li>
								<li>Business Litigation </li>
								<li>Employment Law</li>
							</ul> -->
							<?php  the_field('areas_of_expertise',get_the_id()) ?>
						</div>
						<div class="language-area ex-wiget">
							<h2>Language</h2>
							<ul>
								<li><?php  the_field('language',get_the_id()) ?></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>



<?php get_footer();  ?>