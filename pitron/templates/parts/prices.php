<!--Pricing Section -->

<div class="pricing-section section-padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h6>Pricing</h6>
					<h2>Choose Your Affordable<b><br>Package</b></h2>
				</div>
			</div>
		</div>
		<div class="row">

			<?php             
                $args = array(
                    'post_type' =>'prices', 'post_status' => 'publish', 'orderby' => 'post_date', 'order' => 'ASC','posts_per_page' => -1
                );
                $query = new WP_Query($args);
                $i =2;
                while($query->have_posts()){
                    $query->the_post();
                    //$categories = get_the_terms( (get_the_id()), 'portfolio_category' );
                    
            ?>  

			<div class="col-lg-4 col-md-6">
				<div class="single-price-item <?php if($i%3==0){ echo ' active ';} ?> wow fadeInLeft" data-wow-delay=".3s">
					<h5><?php  the_field('title',get_the_id()) ?></h5>
					<div class="price-box">
						<p><b><?php  the_field('price',get_the_id()) ?></b></p>
						<!-- <h6>Fight for Judge Court</h6> -->
					</div>
					<div class="price-list">
						<!-- <ul>
							<li>Concept case</li>
							<li>Law Planning</li>
							<li>Legal Advice</li>
							<li>Hire Attorney</li>
						</ul> -->
						<?php  the_field('facilities',get_the_id()) ?>

					</div>
					<!-- <div class="main-btn small-btn">Choose Plan</div> -->
				</div>
			</div>

			<?php
				$i++; 
				} 
                wp_reset_query();?>			

		</div>
	</div>
</div>