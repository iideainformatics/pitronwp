<?php get_header(); 
the_post();
$current_id =  get_the_id();
?>

<!-- Breadcrumb Area  -->

<div class="breadcroumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcroumb-title">
					<h1>Service Details</h1>
					<h6><a href="<?php echo home_url(); ?>">Home</a> / <?php the_title(); ?></h6>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Service Details -->

<div id="service-page" class="service-details-section section-padding pb-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="service-list">
					<h5>Service Lists</h5>
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

					<a class="<?php if($current_id == get_the_id()){ echo "active";} ?>" href="<?php the_permalink() ?>"><?php the_title(); ?><span><i class="las la-arrow-right"></i></span></a>

					<?php 
				$i++;}
			 } wp_reset_query();
			 ?>

				</div>

				<div class="question-section">
					<h6>Have any Question?</h6>
					<!-- <form action="sendemail.php">
						<input type="text" name="name" id="name" required="" placeholder="Full Name">
						<input type="email" name="email" id="email" required="" placeholder="Your E-mail">
						<textarea name="message" id="message" cols="30" rows="10" required="" placeholder="How can help you?"></textarea>
						<button class="btn btn-primary" type="submit">Your Question</button>
					</form> -->
					<?php dynamic_sidebar('pitron-faq-contact-form') ?>
				</div>

				<div class="helpline-section">
					<div class="helpline-content text-center">
						<h4>Need Consultancy Help</h4>
						<p>Gatherin galso sprit moving shall flow</p>
						<button class="btn btn-primary" type="submit">Contact Us</button>
					</div>
				</div>
			</div>

			<div class="col-lg-8">
				<div class="single-service">
				<img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'large')[0] ?>" alt="">
					<h2><?php the_title(); ?></h2>
					<!-- <p>Family Law is common legal procedure lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sunt necessitatibus,
						fugit, nesciunt adipisci, exercitationem accusamus possimus repellendus praesentium deleniti
						explicabo laborum. Voluptates ipsa dignissimos blanditiis quibusdam temporibus cupiditate
						tempore atque illum sed? Doloribus recusandae pariatur architecto quisquam magni ipsam
						sapiente adipisci iusto odio eaque, hic repellat quis expedita perferendis? A quick brwon fox jumps over the lazy dog.</p>
					<p>Great Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt molestias, dolores
						maiores est temporibus iste aut, vitae dolorem a nisi, autem eum totam neque quibusdam!</p>
					<hr>
					<h5>Transforming brands with creativity</h5>
					<p>Such a game Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia vero ipsam nemo
						natus, mollitia adipisci sit eveniet non? Nisi doloremque molestiae amet quaerat ipsa
						maiores dolor deleniti blanditiis pariatur necessitatibus sit nemo, unde nihil eligendi
						soluta id eum dicta quisquam? a quick brown fox jumps over the lazy dog.</p>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="key-feature text-center pr-50">
								<div class="row justify-content-center no-gutters">
									<div class="col-lg-4">
										<div class="about-icon">
											<img src="assets/img/icon/gavel.png" alt="">
										</div>
									</div>
									<div class="col-lg-12">
										<h5>We Committed in Law</h5>
										<p>knowledge of law rules better than anyone</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="key-feature text-center pr-50">
								<div class="row justify-content-center no-gutters">
									<div class="col-lg-4">
										<div class="about-icon">
											<img src="assets/img/icon/balance.png" alt="">
										</div>
									</div>
									<div class="col-lg-12">
										<h5>We Fight for Justice</h5>
										<p>knowledge of law rules better than anyone</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="single-service-bg mt-50 pb-20">
								<img src="assets/img/service/service-bg-1.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-service-bg mt-50 pb-20">
								<img src="assets/img/service/service-bg-2.jpg" alt="">
							</div>
						</div>
					</div>
					<h5>Family Legal Service Priorities</h5>
					<p>Family services compile several services for the delivery of portable goods, documents, and mail. As there is a wide range of products involved and each customer has different needs, courier companies offer several types of courier services. When planning to trust courier services to ship your goods, it is always a good idea to choose the service that meets your expectations. There are several services to choose from, and your choice should be based on several factors:</p>
					<p>Express Courier Link is highly professional skilled & reliable Courier Service Provider Company which has been classified for courier delivery service for delivery.</p> -->
			 		<?php the_content(); ?>
					<hr>

					<br>

				</div>
			</div>
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