<?php /* Template Name: About Template */ ?>


<?php get_header(); 

$sec1 = get_field('sec_1'); 
$sec2 = get_field('sec_2'); 
$sec3 = get_field('sec_3'); 
$sec4 = get_field('sec_4'); 
$sec5 = get_field('sec_5'); 


?>


<section class="categories-main">
    <div class="section-wrapper">
        
                <div class="container">
                    <div class="row">
                       <div class="col-md-12 text-center">
                                
                            <div class="categories-tab">
                                
                                
                            <ul>
                            <!--class="activetab"-->
                                <li ><a href="#who-we-are" >Who we are</a></li>
                                <li ><a href="#our-mission" >Our Mission	</a></li>
                                <li ><a href="#our-vision" >  Our Vision 	</a></li>
                                <li ><a href="#our-team" >  Our team	</a></li>
                                <li ><a href="#our-partner" > Our partners	</a></li>
                                
                            
                            </ul>
                            
                            
                            </div>
                </div>
            </div>
        </div>
    
    </div>
</section>


  <div class="wrapper ">
          <div class="case-blocks case-study-color-wrapper">
              
              
            <div class="case-study case-1" id="who-we-are" style="background-color:transparent" data-scrollcolor="rgb(212, 158, 141)">
              <div class="case-study-content container flex">
                <div class="flex case-study-text study-text-1 ">
              <div class="hide-me-lg case-arrow"> <!--   <img src="images/box-arrow-white.png" alt="">-->
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                       <path d="M1 1L19 1L19 19" stroke="black" />
                      <path d="M1.2002 18.7999L18.8197 1.18042" stroke="black" /> 
                      
                    
                    </svg></div>
                  <div class="case-text" >
                    <h1 class="headline-medium"><span><?php echo $sec1['subtitle']; ?></span><?php echo $sec1['content']; ?></h1>
                    <!--<a class="button-dark arrow-text" rel="noopener noreferrer" href="<?php echo $sec1['link']; ?>">View Case Study</a>-->
                  </div>
                </div>
                <div class="img-paralax-container case-image">

                  <img class="case-img-paralax" src="<?php echo $sec1['image']; ?>" alt="Spiritleaf_Homepage-Image">
                </div>
              </div>
            </div>
            
            <div class="case-study case-4" id="our-mission" style="background-color:transparent" data-scrollcolor="rgb(222, 209, 189)">
              <div class="case-study-content container flex">
                <div class="flex case-study-text study-text-4 ">
                   <div class="hide-me-lg case-arrow"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 1L19 1L19 19" stroke="black" />
                      <path d="M1.2002 18.7999L18.8197 1.18042" stroke="black" />
                    </svg></div> 
                  <div class="case-text">
                   <h1 class="headline-medium"> <span><?php echo $sec4['subtitle']; ?></span> <?php echo $sec4['content']; ?>
                    </h1>
                    <!--<a class="button-dark arrow-text" rel="noopener noreferrer" href="<?php echo $sec4['link']; ?>">View Case Study</a>-->
                  </div>
                </div>
                <div class="img-paralax-container case-image">

                   <img class="case-img-paralax" src="<?php echo $sec4['image']; ?>" alt="Homepage-CMC"> 
                </div>
              </div>
            </div>
            
            <div class="case-study case-2" id="our-vision" style="background-color:transparent" data-scrollcolor="rgb(241, 234, 225)">
              <div class="case-study-content container flex">
                <div class="flex case-study-text study-text-2 ">
                  <div class="hide-me-lg case-arrow">
                 <!-- <img src="images/box-arrow-black.png" alt="">-->
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 1L19 1L19 19" stroke="black" />
                      <path d="M1.2002 18.7999L18.8197 1.18042" stroke="black" />
                    </svg></div>
                  <div class="case-text">
                    <h1 class="headline-medium"><span><?php echo $sec2['subtitle']; ?></span> <?php echo $sec2['content']; ?></h1>
                    <!--<a class="button-dark arrow-text" rel="noopener noreferrer" href="<?php echo $sec2['link']; ?>">View Case Study</a>-->
                  </div>
                </div>
                <div class="img-paralax-container case-image">

                  <img class="case-img-paralax" src="<?php echo $sec2['image']; ?>" alt="brevy2">
                </div>
              </div>
            </div>
            <div class="case-study case-3" id="our-team" style="background-color:transparent" data-scrollcolor="rgb(212, 158, 141)">
              <div class="case-study-content container flex">
                <div class="flex case-study-text study-text-3 ">
                  <div class="hide-me-lg case-arrow">
               <!--   <img src="images/box-arrow-black.png" alt="">-->
                      
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                     <path d="M1 1L19 1L19 19" stroke="black" />
                      <path d="M1.2002 18.7999L18.8197 1.18042" stroke="black" />
                    </svg></div>
                  <div class="case-text">
                    <h1 class="headline-medium"> <span><?php echo $sec3['subtitle']; ?></span><?php echo $sec3['content']; ?>
                    </h1>
                    <!--<a class="button-dark arrow-text" rel="noopener noreferrer" href="<?php echo $sec3['link']; ?>">View Case Study</a>-->
                  </div>
                </div>
                <div class="img-paralax-container case-image">

                  <img class="case-img-paralax" src="<?php echo $sec3['image']; ?>" alt="Korland-Homepage">
                </div>
              </div>
            </div>
            
            <div class="case-study case-5" id="our-partner" style="background-color:transparent" data-scrollcolor="rgb(222, 209, 189)">
              <div class="case-study-content container flex">
                <div class="flex case-study-text study-text-5 ">
                  <div class="hide-me-lg case-arrow">
                 <!-- <img src="images/box-arrow-black.png" alt="">-->
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 1L19 1L19 19" stroke="black" />
                      <path d="M1.2002 18.7999L18.8197 1.18042" stroke="black" />
                    </svg></div>
                  <div class="case-text">
                    <h1 class="headline-medium" style="color:#ffffff"><span ><?php echo $sec5['subtitle']; ?></span> <?php echo $sec5['content']; ?></h1>
                    <!--<a class="button-dark arrow-text" rel="noopener noreferrer" href="<?php echo $sec5['link']; ?>">View Case Study</a>-->
                  </div>
                </div>
                <div class="img-paralax-container last-case-image">

                  <img class="case-img-paralax" src="<?php echo $sec5['image']; ?>" alt="brevy2">
                </div>
              </div>
            </div>
            
            
            
          </div>
         
        </div>


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