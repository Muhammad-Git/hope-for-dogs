<?php /* Template Name: adopt Template */ ?>
<?php get_header(); 
   $adoption = get_field('adoption_process'); 
   
   
   ?>
<section class="categories-main adobt">
   <div class="section-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <div class="categories-tab">
                  <ul>
                     <li class="activetab"><a href="#tab" >Adopt a Dog</a></li>
                     <li ><a href="#tab" > Adoption Process 	</a></li>
                     <li ><a href="#tabf" >Adoption Form 	</a></li>
                     <li ><a href="#tabd" >Adopted Dogs 	</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="categories-content-main">
         <div class="categories-content">
            <section class="adopt" style="padding-top:0; ">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 text-centerr ">
                        <h1>Dogs looking for a home</h1>
                     </div>
                     <div class="col-md-12 ">
                        
                           
                        <?php echo do_shortcode('[searchandfilter id="318"]'); ?>
                        
                     </div>
                  </div>
               </div>
            </section>
            <section class="new-gallery-sec adopt-gallery " style=" padding-bottom:0;">
               <div class="container">
                  <div class="row">
                     <div class="gallery-div">
                       
                       <?php  $index_query = new WP_Query(array( 'post_type' => 'adopt', 'posts_per_page' => '-1' , 'order'=>'desc' , 'paged'=> $paged , 'tax_query'  => array(
    array(
      'taxonomy'      => 'adopted',
            
            'terms'         => 68,
            'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
          )
  ))); ?>
            <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
                       
                        <div class="col-md-3">
                           <a href="<?php echo the_permalink(); ?>">
                              <div class="box">
                                 <div class="img-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                                 </div>
                                 <div class="text">
                                    <p class="name">
                                       <?php echo the_title(); ?>
                                    </p>
                                    <p><?php echo the_content(); ?></p>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <?php endwhile; wp_reset_query(); ?>
                        <div class="col-md-12">
                           <?php   echo    wp_pagenavi( array( 'query' => $index_query ) ); ?>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <div class="categories-content">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <h6><?php echo $adoption['sub_title']; ?></h6>
                     <h2><?php echo $adoption['title']; ?></h2>
                  </div>
                  <div class="col-md-7">
                     <?php echo $adoption['content']; ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="categories-content" id="Adopt">
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
         
         <div class="categories-content" >
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <h6>Adopt</h6>
                     <h2>Adopted Dogs</h2>
                     <section class="new-gallery-sec adopt-gallery adopt-stories" id="adopt_dog" style=" padding-bottom:0;">
                        <div class="container">
                           <div class="row">
                              <div class="gallery-div">
                                  
                         <?php  $index_query = new WP_Query(array( 'post_type' => 'adopt', 'posts_per_page' => '-1' , 'order'=>'desc' , 'paged'=> $paged , 'tax_query'  => array(
    array(
      'taxonomy'      => 'adopted',
            
            'terms'         => 67,
            'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
          )
  ))); ?>
            <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
                        <a href="<?php echo the_permalink();?>">
                                
                                 <div class="col-md-3">
                                    <div class="box">
                                       <div class="img-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                          <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                                       </div>
                                       <div class="text">
                                          <p class="name">
                                             <?php echo the_title(); ?>
                                          </p>
                                          <p><?php echo the_content(); ?></p>
                                       </div>
                                    </div>
                                 </div>
                                 </a>
                                 <?php endwhile; wp_reset_query(); ?>
                                 <div class="col-md-12">
                           <?php   echo    wp_pagenavi( array( 'query' => $index_query ) ); ?>
                        </div>
                                 
                                 
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- <section class="new-gallery-sec ">-->
<!--      <div class="container">-->
<!--        <div class="row">-->
<!--          <div class="col-md-12">-->
<!--            <div class="heading">-->
<!--              <span>OUR DOG GALLERY</span>-->
<!--              <h2>Dogs Looking for a Home</h2>-->
<!--            </div>-->
<!--          </div>-->

<!--         <div class="gallery-div">-->
             
<!--              <?php $index_query = new WP_Query(array( 'post_type' => 'adopt' , 'posts_per_page' => '5' , 'order' => 'desc')); ?>-->

<!--<?php  while ($index_query->have_posts()) : $index_query->the_post(); ?>-->
             
<!--          <div class="col-md-3">-->
<!--            <div class="box">-->
<!--              <div class="img-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">-->
<!--                  <a href="<?php echo the_permalink();?>">-->
<!--                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">-->
<!--                </a>-->
<!--              </div>-->
<!--              <div class="text">-->
<!--                <p class="name">-->
<!--                  <?php echo the_title(); ?>-->
<!--                </p>-->
<!--                <p><?php echo the_content(); ?></p>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
          
<!--           <?php $x++; endwhile; wp_reset_query(); ?>-->
         
          
<!--         </div>-->
<!--         <div class="col-md-12 text-center">-->
<!--          <a href="#tabd" class="geller-btn">See more dogs</a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </section>-->
<?php get_footer(); ?>