<?php /* Template Name: donate Template */ ?>

<?php get_header(); 
$donate = get_field('donate_content',9);
?>



<section class="main-contact">
   <div class="container">
      
      <div class="row">
          
         <div class="col-md-12">
              <div class="form-text-container donate">
                

                  <h2 class="headline-small thankYouHide center remove-margin"> <span><?php echo $donate['sub_heading']; ?> </span></br> <?php echo $donate['title']; ?></h2>
                  <p class="thankYouHide center"><?php echo $donate['content']; ?></p>
              </div>
            <?php echo do_shortcode('[give_form id="73"]'); ?>
         </div>
         
      </div>
   </div>
</section>

 <section class="new-gallery-sec ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="heading">
              <span>OUR DOG GALLERY</span>
              <h2>Dogs Looking for a Home</h2>
            </div>
          </div>

         <div class="gallery-div">
             
              <?php $index_query = new WP_Query(array( 'post_type' => 'adopt' , 'posts_per_page' => '5' , 'order' => 'desc')); ?>

<?php  while ($index_query->have_posts()) : $index_query->the_post(); ?>
             
          <div class="col-md-3">
            <div class="box">
              <div class="img-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                  <a href="<?php echo the_permalink();?>">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                </a>
              </div>
              <div class="text">
                <p class="name">
                  <?php echo the_title(); ?>
                </p>
                <p><?php echo the_content(); ?></p>
              </div>
            </div>
          </div>
          
           <?php $x++; endwhile; wp_reset_query(); ?>
         
          
         </div>
         <div class="col-md-12 text-center">
          <a href="https://insitechstaging.com/demo/hope-for-dogs/wp/adopt/" class="geller-btn">See more dogs</a>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>