<?php /* Template Name: Involved Template */ ?>

<?php get_header(); 

$donate = get_field('donate'); 
$fundraise = get_field('fundraise'); 
$volunteer = get_field('volunteer'); 

?>


<section class="categories-main">
   <div class="section-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <div class="categories-tab">
                  <ul>
                     <li class="activetab"><a href="#tab" >Donate</a></li>
                     <li ><a href="#tab" > Fundraise 	</a></li>
                     <li ><a href="#tab" >Volunteer 	</a></li>
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
                     <h6><?php echo $donate['title']; ?></h6>
                     <h2><?php echo $donate['sub_title']; ?></h2>
                  </div>
                  <div class="col-md-7">
                     <p><?php echo $donate['content']; ?></p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <section class="register pad involved" style="display:inline-flex;">
                        <div class="container">
                           <div class="form-container">
                              <div class="form-text-container">
                                 <h1 class="thankYouShow center headline-large">Thanks, you’re one of us now.</h1>
                                 <h2 class="headline-small thankYouHide center remove-margin"> <span>DONATE
                                    </span> Become a Part of Their Hope
                                 </h2>
                                 <p class="thankYouHide center"><?php echo $donate['donate_content']; ?>
                                 </p>
                              </div>
                              <?php echo do_shortcode('[give_form id="73"]'); ?>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </div>
         <div class="categories-content">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <h6><?php echo $fundraise['title']; ?></h6>
                     <h2><?php echo $fundraise['sub_title']; ?></h2>
                  </div>
                  <div class="col-md-7">
                     <p><?php echo $fundraise['content']; ?></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="categories-content">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <h6><?php echo $volunteer['title']; ?></h6>
                     <h2><?php echo $volunteer['sub_title']; ?></h2>
                  </div>
                  <div class="col-md-7">
                     <p><?php echo $volunteer['content']; ?></p>
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