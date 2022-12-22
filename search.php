<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header(); ?>

<section class="banner" style="background-image:url('<?php echo site_url(); ?>/wp-content/uploads/2022/08/banner1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="contx">
                    <div class="contbox">
                        <h2>Search Result</h2>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</section>

    
        
        <section class="new-gallery-sec adopt-gallery " style=" padding-bottom:0;">
               <div class="container">
                   <a href="<?php echo site_url(); ?>/adopt/" class="bckbtn">Go Back For More Filter</a>
                  <div class="row">
                      
                     
                     <div class="gallery-div">
                       
                         <?php if ( have_posts() ) : ?>
                   
                <?php while ( have_posts() ) : the_post(); ?>
                    
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
                        
                <?php endwhile; ?>

                

            <?php else : ?>

                <h4 style=" color: red; font-size: 40px; text-align: center; padding-bottom: 56px;">Sorry Nothig Found</h4>

            <?php endif; ?>
                                               
                     </div>
                  </div>
               </div>
            </section>
        
        
        
        
 
<?php get_footer(); ?>