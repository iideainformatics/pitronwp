<?php get_header(); 

?>



<!-- Breadcroumb Area -->

<div class="breadcroumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcroumb-title">
					<h1>Blogs</h1>
					<h6><a href="<?php echo home_url(); ?>">Home</a> / Blogs</h6>
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

            <?php             
                
                $i=1;
                while(have_posts()){
                     
                    the_post();
                   
            ?>


				<div class="single-blog-item">
					<div class="blog-bg">
                        <?php the_post_thumbnail('large');?>
					</div>
					<div class="blog-content">
						<p class="blog-meta"><i class="las la-user-circle"></i><?php the_author(); ?> | <i class="las la-calendar-check"></i><?php echo get_the_date('j F, Y');?></p>
						<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
						<div>
							<!-- <i class="las la-heart"></i>20 | -->
							<i class="las la-comments"></i><?php echo get_comments_number()?>
						</div>
					</div>
				</div>

                <?php 
                    $i++;
                    }
                                
                ?>
				<?php echo wp_pagenavi();?>

				<!-- <div class="pagination-block mb-15">
					<a class="page-numbers" href="blog-grid.html">1</a>
					<a class="page-numbers current" href="blog-grid.html">2</a>
					<a class="next page-numbers" href="blog-grid-2.html"><i class="las la-arrow-right"></i></a>
				</div> -->
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
					        <a class="" href="<?php echo get_category_link($category->term_id)?>"><?php echo $category->name ?> ( <?php echo $category->category_count ?> )</a>
                    <?php }} ?>                         
					
				</div>
				<div class="recent-post">
					<h5>Recent Post</h5>
                    <?php             
                        $args = array(
                            'post_type' =>'post'
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