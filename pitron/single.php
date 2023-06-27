<?php get_header(); 
the_post();
?>


<!-- Breadcrumb Area  -->

<div class="breadcroumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcroumb-title">
					<h1>Single Blog</h1>
					<h6><a href="<?php echo home_url() ?>">Home</a> / Single Blog</h6>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Blog Area  -->
<div id="blog-page" class="blog-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="single-blog-wrap">
                    <?php the_post_thumbnail('large');?>
					<div class="blog-meta">
						<span><i class="las la-user"></i><?php the_author(); ?></span>
						<span><i class="las la-calendar"></i><?php echo get_the_date('j F, Y');?></span>
						<span><i class="las la-comments"></i><?php echo get_comments_number()?> Comments</span>
					</div>
					<h3><?php the_title(); ?></h3>
					<!-- <p>Encouraging kids to socialize has never been more important, but finding ways to do it safely right now can be tricky. Thankfully, you don’t have to put your child’s social life on pause. Instead, coordinate a time to do a virtual playdate on Zoom or Google Hangouts with one or a few of your child’s friends. </p>
					<p>Education.com has over 34,000 resources to choose from! Visit the Learning Library and use the search bar at the top of the page to find your topic. You can filter results by your learners’ grade level, subjects you’re interested in, type of resource, and more in the bars along the top and left-hand side of the page.</p>
					<p>Look through the resources on your topic, and select the one that seems most relevant to your lesson as well as most engaging for your learners. For example, our search for plants provided over 600 resources including activities, worksheets, and lesson plans. By filtering to show first grade science resources, and sorting by relevance, we narrowed down the search until we selected the Parts of a Plant workbook. </p>
					<h5>How to create a well-rounded learning routine</h5>
					<p>When children engage with the same concept in different ways, it strengthens their understanding of the topic. But as educators and caregivers, it can be difficult to find a range of high-quality content to share with your little learners. The good news is that both Education.com and IXL have extensive libraries of resources and skills that you can depend on for PK-5 and beyond.</p>
					<div class="row">
						<div class="col-lg-6 mb-30">
							<img class="blog-inside" src="assets/img/blog/3.jpg" alt="">
						</div>
						<div class="col-lg-6">
							<img class="blog-inside" src="assets/img/blog/4.jpg" alt="">
						</div>
					</div>

					<h5>Give An Inch, Take A Mile</h5>
					<p>One day, the importer called the customer service representative and said that he could not arrive at the office to surrender the bill of lading that day. Instead he would fax (yes that long ago) the front and back of the bill to get the release, and subsequently be in the office the very next day to deliver the original bill of lading as required. The carrier acted in accordance and the importer was in the office the next day to deliver the bill of lading as promised.</p> -->
                    <?php the_content(); ?>
					<hr>
					<!-- <div class="author-profile">
						<img src="assets/img/client-img.jpg" alt="">
						<div class="author-info">
							<h6>Harvert Milan</h6>
							<p>While publishing our article in a journal, to claim it as our article, where should
								be our name in the authors list, the first name</p>
							<div class="social-icon">
								<ul>
									<li><a href="#" class=""><i class="lab la-facebook-f"></i></a></li>
									<li><a href="#" class=""><i class="lab la-twitter"></i></a></li>
									<li><a href="#" class=""><i class="lab la-pinterest-p"></i></a></li>
									<li><a href="#" class=""><i class="lab la-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div> -->
					<hr>

					<div class="comments-section">
						<h5>Comments (<?php echo get_comments_number()?>)</h5>
                        <?php comments_template() ?>
						<!-- <div class="single-comments-section">
							<img src="assets/img/client-img-2.jpg" alt="">
							<p><b>Rasel Arnold</b><span>November 29, 2019</span></p>
							<p>Though author order shouldn't matter, industry custom and practical limitations say
								otherwise.</p>
							<p><a href="#" class="reply-btn">Reply</a></p>
						</div>

						<div class="single-comments-section">
							<img src="assets/img/client-img-3.jpg" alt="">
							<p><b>Ryans Joseph</b><span>November 29, 2019</span></p>
							<p>Though author order shouldn't matter, industry custom and practical limitations say
								otherwise.</p>
							<p><a href="#" class="reply-btn">Reply</a></p>
						</div> -->
					</div>
				</div>
				<div class="comments-form">
					<!-- <h3>Leave A Reply</h3>
					<p>Your email address will not be published. Required fiels are marked</p>
					<div class="row">
						<div class="col-lg-12">
							<textarea name="message" id="message" cols="30" rows="10" placeholder="Write Your Comment"></textarea>
						</div>
						<div class="col-lg-6">
							<input type="text" placeholder="Your Name">
						</div>
						<div class="col-lg-6">
							<input type="email" placeholder="Email here">
						</div>
						<div class="col-lg-12">
							<button type="submit">Post Comment</button>
						</div>
					</div> -->
				</div>
			</div>
			<div class="col-lg-4">
				<div class="blog-search">
					<form action="blog.html">
						<input type="search" placeholder="Search here">
						<button type="submit"><i class="las la-search"></i></button>
					</form>
				</div>
				<div class="blog-category">
					<h5>Categories</h5>
                    <?php
                        $categories =  get_categories(array(['taxonomy' => 'category']));
                        if( !empty($categories) ){
                            foreach($categories as $category){ ?>

					    <a class="active" href="<?php echo get_category_link($category->term_id)?>"><?php echo $category->name ?> ( <?php echo $category->category_count ?> )</a>
                    <?php }} ?>                     
					
				</div>
				<div class="recent-post">
					<h5>Recent Post</h5>
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
                    <?php the_post_thumbnail('thumbnail');?>
					<div class="single-recent-post">
						<h6> <?php the_title(); ?></h6>
						<p class="blog-date"><i class="las la-calendar"></i><?php echo get_the_date('j F, Y');?></p>
					</div>

                    <?php 
                        $i++;
                        }
                        wp_reset_postdata();            
                    ?>

				</div>
				<div class="archive">
					<h5>Archive</h5>
                    <?php
                        $categories =  get_categories(array(['taxonomy' => 'category']));
                        if( !empty($categories) ){
                            foreach($categories as $category){ ?>

					        <a class="" href="<?php echo get_category_link($category->term_id)?>"><?php echo $category->name ?></a>

                    <?php }} ?> 

				</div>
				<div class="popular-tag">
					<h5>Popular Tags</h5>

                    <?php 
                        $tags = get_terms(['taxonomy'=>'post_tag']);
                        if( !empty($tags) ){
                        foreach ($tags as $tag) { ?>

					        <span class=""><a href="<?php echo get_tag_link($tag->term_id)?>"><?php echo $tag->name ?></a></span>
                    <?php }} ?> 

				</div>
				<div class="helpline-section">
					<div class="overlay-2"></div>
					<div class="helpline-content text-center">
						<h4>Need <br /> Consultancy Help</h4>
						<p>Gatherin galso sprit moving shall flow</p>
						<button type="submit">Contact Us</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer();  ?>