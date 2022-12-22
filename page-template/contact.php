<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>

<section class="main-contact">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2>Get In Touch With Us</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <?php echo the_content(); ?>
            <div class="col-md-6">
               <div class="contz">
                  <h5><i class="fa fa-phone" aria-hidden="true"></i> PHONE</h5>
                  <a href="tel:<?php echo $options['phone_number']; ?>"><?php echo $options['phone_number']; ?></a>
               </div>
            </div>
            <div class="col-md-6">
               <div class="contz">
                  <h5><i class="fa fa-map-marker" aria-hidden="true"></i> ADDRESS</h5>
                  <a href="javascript:;"><?php echo $options['Address']; ?></a>
               </div>
            </div>
            <div class="col-md-6">
               <div class="contz">
                  <h5><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL ID</h5>
                  <a href="mailto:<?php echo $options['email']; ?>"><?php echo $options['email']; ?></a>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
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