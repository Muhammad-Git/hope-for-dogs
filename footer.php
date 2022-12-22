 <?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyright']
 ?>
<?php wp_footer(); ?>
<?php if(is_shop()){ ?>
            
         
            </div></div></div>   </section>
     <section class="new-gallery-sec " style="background : #faf4f2; clear : both;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="heading">
              <span>OUR DOG GALLERY</span>
              <h2>Dogs Looking for a Home</h2>
            </div>
          </div>

         <div class="gallery-div">
             
              <?php $index_query = new WP_Query(array( 'post_type' => 'gallery' , 'posts_per_page' => '4' , 'order' => 'desc')); ?>

<?php  while ($index_query->have_posts()) : $index_query->the_post(); ?>
             
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
          
           <?php $x++; endwhile; wp_reset_query(); ?>
         
          
         </div>
         <div class="col-md-12 text-center">
          <a href="<?php echo site_url(); ?>/adopt/" class="geller-btn">See more dogs</a>
          </div>
        </div>
      </div>
    </section>
            <?php } ?>
            
            
 
 <?php if(is_woocommerce() || is_cart() || is_checkout() || is_account_page()){ ?>  
            
            </div></div></div>   </section>
            <?php } ?>
            
            
   <?php if(is_product()){ ?>  
   
   
   
    </div></div></div>   </section>
            <?php } ?>
   
        



<div class="footer-wrapper">
      <footer class="panel footer  content-info flex-column dark-footer">
        <div class="footer-main-links container flex-column" >
          <h2 class="headline-xlarge"><?php echo $options['footer-desc']; ?></h2>
          <div class="cont">
						<a href="javascript:;"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $options['Address']; ?></a>
						<a href="mailto:<?php echo $options['email']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $options['email']; ?></a>
						<a href="tel:<?php echo $options['phone_number']; ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $options['phone_number']; ?></a>
						
					</div>
          <div class="footer-social">
              <a href="<?php echo $options['facebook']; ?>"><i class="fa fa-facebook" aria-hidden="true" target="_blank"></i></a>
             
              <a href="<?php echo $options['linkedin']; ?>"><i class="fa fa-linkedin" aria-hidden="true" target="_blank"></i></a>
              <a href="<?php echo $options['instagram']; ?>"><i class="fa fa-instagram" aria-hidden="true" target="_blank"></i></a>
          </div>
          
          
          
        </div>
        
        <div class="footer-btm">
         <?php echo $options['copyright']; ?> 
        </div>
      </footer>
    </div>


<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script defer type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts-app.js" id="sage/app.js-js"></script>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="<?php echo get_template_directory_uri(); ?>/js/9087560.js"></script>
    <!-- End of HubSpot Embed Code -->
    <!-- for lottie animations -->
    <script async defer src="<?php echo get_template_directory_uri(); ?>/js/dist-lottie-player.js"></script>
    <script async defer src="<?php echo get_template_directory_uri(); ?>/js/function.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/inview.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js'></script>
     <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
     <script>
    $(".s7_slider").slick({
        dots: true,
        arrows:false,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slideToScroll:1,
        autoplay:true,
        autoplaySpeed:3000,
            prevArrow: "<span class='arr-left'><i class='fas fa-angle-left'></i></span>",
            nextArrow: "<span class='arr-right'><i class='fas fa-angle-right'></i></span>",
             responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint:575,
      settings: {
       slidesToShow: 1,
      }
    }
  ]
    });
  

   
    </script>

    <script>
    
    //  jQuery(document).on('ready', function () {

    //     jQuery('.page-id-53 .case-study.case-5').on('inview', function (event, visible) {
    //             if (visible == true) {
    //                   jQuery( ".page-id-53 .case-study.case-4" ).addClass( 'active-case-text-leaving');
    //                   jQuery( ".page-id-53 .case-study.case-5" ).addClass( 'active-case-text');
                    
    //             }
                
    //             else{
    //                  jQuery( ".page-id-53 .case-study.case-5" ).addClass( 'active-case-text-leaving');
    //                   jQuery( ".page-id-53 .case-study.case-4" ).addClass( 'active-case-text');
    //             }
    //         });
    //     });
        
        
        
        
        
        
        $(window).scroll(function(){
              var bn = $('#donate-btn');
              if($(window).scrollTop() > 300) {
                bn.css({opacity:'1' });
              }
              else{
                bn.css('opacity', '0');
              }
            });
      
      jQuery(document).on('ready', function () {
        



        wow = new WOW(
                {
                animateClass: 'animated',
                offset:       100,
                callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
                }
            );
            
            wow.init(); 
            
      
      });
    </script>
    
<script>
  document.addEventListener( 'wpcf7mailsent', function( event ) {
    document.querySelectorAll("form.wpcf7-form > :not(.wpcf7-response-output)").forEach(el => {
      el.style.display = 'none';
    });
  }, false );
</script>

    
    
</body>
</html>