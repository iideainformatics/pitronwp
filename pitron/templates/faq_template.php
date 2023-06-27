<!-- /*
Template Name: FAQ Template 
*/ -->

<?php get_header(); ?>

<?php get_template_part('templates/parts/breadcrumb'); ?>

<!--FAQ Section -->

<div class="faq-section section-padding pb-50">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-8">
          <div class="section-title">
            <h6>If you don't know, find out</h6>
            <h2>Frequently Asked Question</h2>
          </div>
          <div class="accordion faqs" id="accordionFaq">

          <?php             
                    $args = array(
                        'post_type' =>'faqs', 'post_status' => 'publish', 'posts_per_page' => -1
                    );
                    $query = new WP_Query($args);
                    $i =1;
                    while($query->have_posts()){
                        $query->the_post();
                        //$categories = get_the_terms( (get_the_id()), 'portfolio_category' );
                        
                ?>  

            <div class="card">

            
              <div class="card-header" id="heading<?php echo $i?>">
                <h5 class="mb-0 subtitle">
                  <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i?>" aria-expanded="false" aria-controls="collapse7">
                  <?php  the_field('question',get_the_id()) ?>
                  </button>
                </h5>
              </div>

              <div id="collapse<?php echo $i?>" class="collapse" aria-labelledby="heading<?php echo $i?>" data-parent="#accordionFaq">
                <div class="card-body">
                  <div class="content">
                    <p><?php  the_field('answer',get_the_id()) ?></p>
                  </div>
                </div>
              </div>

            </div>
      <?php
      $i++; 
      } 
      wp_reset_query();?>

      
          </div>
        </div>
        <div class="col-xl-4 col-lg-4">
          <div class="question-section">
            <h6>Have any Question?</h6>
            <!-- <form action="sendemail.php">
              <input type="text" name="name" id="name" required="" placeholder="Full Name">
              <input type="email" name="email" id="email" required="" placeholder="Your E-mail">
              <textarea name="message" id="message" cols="30" rows="10" required="" placeholder="How can help you?"></textarea>
              <button type="submit" class="main-btn white">Submit Request</button>
            </form> -->
            <?php dynamic_sidebar('pitron-faq-contact-form') ?>
          </div>
        </div>
      </div>
    </div>
  </div>



<?php get_footer(); ?>