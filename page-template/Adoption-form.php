<?php /* Template Name: adoption form Template */ ?>
<?php get_header(); 
   $adoption = get_field('adoption_process',203); 
   
   
   ?>
<section class="categories-main adobt">
   <div class="section-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <div class="categories-tab">
                  <ul>
                     <li ><a href="#tabf" >Adoption Form 	</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="categories-content-main">
                  <div class="categories-content">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <h6>Adopt</h6>
                     <h2>Adoption Form</h2>
                  </div>
                  <div class="col-md-7">
                     <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
                  </div>
               </div>
            </div>
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