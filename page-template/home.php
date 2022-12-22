<?php /* Template Name: Home Template */ ?>

<?php get_header(); 

$banner = get_field('banner');
$whosec = get_field('who_sec');
$sec1 = get_field('sec_1');
$sec2 = get_field('sec_2');
$sec3 = get_field('sec_3');
$donate = get_field('donate_content');

?>


<main>
      <div class="page-header">
        <div class="hero video-image-hero" style="background:linear-gradient(180deg, rgba(0,0,0,0.4) 0%, rgba(114,191,70,0.1) 100%), url() no-repeat; background-color: #000; background-size: cover; background-position: center;">
          <video autoplay="" loop="" muted="" aria-label="a video of scenery" poster="<?php echo $banner['image']; ?>">
            <source src="<?php echo $banner['video']; ?>" type="video/mp4">

              <!--  video Url https://thinkflipp.com/app/uploads/2021/12/sizzle-preview-1.mp4 -->
          </video>
          <div class="hero-headline center size-adjust">
            <div class="split-animation">
              <div class="split">
                <div class="split-item split-1" data-hero-slideup="">
                  <h1><?php echo $banner['title_1']; ?></h1>
                </div>
              </div>
              <div class="split">
                <div class="split-item" data-hero-slideup="">
                  <h1><?php echo $banner['title_2']; ?></h1>
                </div>
              </div>
            </div>
            <a class="hero-button button-light arrow-text" rel="noopener noreferrer" href="<?php echo site_url();?>/adopt/"><?php echo $banner['donate_text']; ?></a>

          </div>
          <div class="scroll-arrow center">
            <a href="#intro" aria-label="intro lead">
              <lottie-player role="presentation" src="https://assets1.lottiefiles.com/private_files/lf30_hwkozzrl.json" background="transparent" speed="1" loop="" autoplay=""></lottie-player>
            </a>
          </div>
        </div>
      </div>
      <div class="modal cookie-policy" id="!cookie-policy" data-modal="">
        <div class="modal-content">
          <div class="content">
            <div class="flex">
              <p>We care about your data, and we'd love to use cookies to make your experience better.</p>
            </div>
            <div class="flex-btwn">
              <a class="underline" href="#">Privacy Policy</a>
              <a class="button-dark arrow-text close-cookie-policy">OK</a>
            </div>
          </div>
        </div>
      </div>


      <div id="awwwards"><a aria-label="awwwards hounorable mentions banner" href="#" target="_blank"><svg width="53.08" height="171.358">
            <path class="js-color-bg" fill="black" d="M0 0h53.08v171.358H0z"></path>
            <g class="js-color-text" fill="white">
              <path d="M20.047 153.665v-1.9h3.888v-4.093h-3.888v-1.9h10.231v1.9h-4.59v4.093h4.59v1.9zM29.898 142.236c-.331.565-.784.997-1.359 1.294s-1.222.446-1.944.446c-.721 0-1.369-.149-1.943-.446a3.316 3.316 0 0 1-1.36-1.294c-.331-.564-.497-1.232-.497-2.002s.166-1.438.497-2.002a3.316 3.316 0 0 1 1.36-1.294c.574-.297 1.223-.445 1.943-.445.723 0 1.369.148 1.944.445a3.307 3.307 0 0 1 1.359 1.294c.331.564.497 1.232.497 2.002s-.166 1.438-.497 2.002m-1.703-3.347c-.435-.33-.967-.496-1.601-.496-.633 0-1.166.166-1.601.496-.433.332-.649.78-.649 1.346 0 .564.217 1.013.649 1.345.435.331.968.497 1.601.497.634 0 1.166-.166 1.601-.497.435-.332.649-.78.649-1.345.001-.566-.214-1.014-.649-1.346M22.911 134.852v-1.813h1.186a3.335 3.335 0 0 1-.951-1.009 2.423 2.423 0 0 1-.352-1.271c0-.682.19-1.229.57-1.645.381-.413.932-.621 1.652-.621h5.262v1.812h-4.721c-.419 0-.727.096-.921.285-.195.19-.292.447-.292.769 0 .302.115.58.35.833.234.254.577.458 1.03.613.454.156.993.234 1.616.234h2.938v1.813h-7.367zM29.898 125.136a3.314 3.314 0 0 1-1.359 1.294c-.575.297-1.222.445-1.944.445-.721 0-1.369-.148-1.943-.445a3.322 3.322 0 0 1-1.36-1.294c-.331-.565-.497-1.232-.497-2.002 0-.771.166-1.438.497-2.003a3.313 3.313 0 0 1 1.36-1.293c.574-.297 1.223-.446 1.943-.446.723 0 1.369.149 1.944.446s1.028.728 1.359 1.293.497 1.232.497 2.003c.001.769-.166 1.436-.497 2.002m-1.703-3.347c-.435-.331-.967-.497-1.601-.497-.633 0-1.166.166-1.601.497-.433.331-.649.778-.649 1.345 0 .564.217 1.013.649 1.344.435.332.968.498 1.601.498.634 0 1.166-.166 1.601-.498.435-.331.649-.779.649-1.344.001-.567-.214-1.014-.649-1.345M22.911 117.75v-1.812h1.199c-.419-.265-.742-.586-.972-.966s-.345-.784-.345-1.213c0-.272.05-.569.146-.892l1.682.336a1.429 1.429 0 0 0-.205.76c0 .576.261 1.048.783 1.418.521.37 1.342.557 2.461.557h2.617v1.812h-7.366zM29.812 111.252c-.391.511-.857.851-1.403 1.016l-.776-1.446c.381-.138.68-.329.893-.577.215-.249.321-.544.321-.885a1.2 1.2 0 0 0-.168-.658c-.112-.175-.294-.263-.548-.263-.225 0-.406.105-.548.313-.142.21-.291.534-.446.973-.019.068-.058.17-.117.307-.224.565-.506 1.004-.848 1.315-.34.313-.779.467-1.314.467-.381 0-.727-.102-1.039-.306a2.185 2.185 0 0 1-.744-.84 2.554 2.554 0 0 1-.279-1.207c0-.497.105-.949.314-1.359.211-.408.506-.725.886-.949l.993 1.082c-.43.292-.644.686-.644 1.184a.84.84 0 0 0 .154.504.471.471 0 0 0 .401.212c.176 0 .338-.103.49-.307.15-.205.334-.604.547-1.199.205-.564.474-1.001.805-1.308.332-.308.756-.46 1.271-.46.721 0 1.299.229 1.732.687s.65 1.057.65 1.797c.001.759-.194 1.396-.583 1.907M35.481 17.006l-4.782 14.969h-3.266l-2.584-9.682-2.584 9.682h-3.268l-4.782-14.969h3.713l2.673 10.276 2.525-10.276h3.445l2.524 10.276 2.674-10.276zM37.978 27.163c1.426 0 2.496 1.068 2.496 2.495 0 1.425-1.07 2.495-2.496 2.495-1.425 0-2.494-1.07-2.494-2.495-.001-1.427 1.069-2.495 2.494-2.495">
              </path>
            </g>
          </svg></a></div>

      <div id="main-content">
        <div id="intro" class="wrapper ">
          <div class="pad-small-top"></div>

          <div class="text-block-wrapper">
            <div class="container text-block">
              <div class="flex layout">
                <div class="tb-heading-wrapper">
                  <div class="split-animation">
                    <div class="split">
                      <div class="split-item" data-slideup="">
                        <h2 class="headline-xlarge about">About Us</h2>
                      </div>
                    </div>
                    <div class="split">
                      <div class="split-item" data-slideup="">
                        <h2 class="headline-xlarge"><?php echo $whosec['heading']; ?></h2>
                      </div>
                    </div>
                   
                  </div>
                </div>
                <div class="tb-text" data-slideup="">
                  <p class="text"><?php echo $whosec['content']; ?></p>
                  <div class="tb-buttons">
                    <a class="button-light arrow-text" rel="noopener noreferrer" href="<?php echo $whosec['link']; ?>">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="pad-small-top"></div>

        </div>
        
        <div class="wrapper ">
          <div class="case-blocks case-study-color-wrapper">
            <div class="case-study case-1" style="background-color:transparent" data-scrollcolor="#d49e8d">
              <div class="case-study-content container flex">
                <div class="flex case-study-text study-text-1 ">
              <div class="hide-me-lg case-arrow"> <!--   <img src="images/box-arrow-white.png" alt="">-->
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path d="M1 1L19 1L19 19" stroke="black" />
                      <path d="M1.2002 18.7999L18.8197 1.18042" stroke="black" /> 
                      
                    
                    </svg></div>
                  <div class="case-text">
                    <h1 class="headline-medium"><span><?php echo $sec1['title']; ?></span><?php echo $sec1['content']; ?></h1>
                    <a class="button-dark arrow-text" rel="noopener noreferrer" href="<?php echo $sec1['link']; ?>">Learn more</a>
                  </div>
                </div>
                <div class="img-paralax-container case-image">

                  <img class="case-img-paralax" src="<?php echo $sec1['image']; ?>" alt="Spiritleaf_Homepage-Image">
                </div>
              </div>
            </div>
            <div class="case-study case-2" style="background-color:transparent" data-scrollcolor="#ded1bd">
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
                    <h1 class="headline-medium"><span><?php echo $sec2['title']; ?></span><?php echo $sec2['content']; ?></h1>
                    <a class="button-dark arrow-text" rel="noopener noreferrer"
                      href="<?php echo $sec2['link']; ?>">Adopt a dog</a>
                  </div>
                </div>
                <div class="img-paralax-container case-image">

                  <img class="case-img-paralax" src="<?php echo $sec2['image']; ?>" alt="brevy2">
                </div>
              </div>
            </div>
            <div class="case-study case-3" style="background-color:transparent" data-scrollcolor="#f1eae1">
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
                    <h1 class="headline-medium"> <span><?php echo $sec3['title']; ?></span> <?php echo $sec3['content']; ?>
                    </h1>
                    <a class="button-dark arrow-text" rel="noopener noreferrer"
                      href="<?php echo $sec3['link']; ?>">Learn more</a>
                  </div>
                </div>
                <div class="img-paralax-container case-image">

                  <img class="case-img-paralax" src="<?php echo $sec3['image']; ?>" alt="Korland-Homepage">
                </div>
              </div>
            </div>
            <div class="case-study case-4" style="background-color:transparent" data-scrollcolor="#f1eae1">
              <div class="case-study-content container flex">
                <div class="flex case-study-text study-text-4  white">
                  <!-- <div class="hide-me-lg case-arrow"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 1L19 1L19 19" stroke="black" />
                      <path d="M1.2002 18.7999L18.8197 1.18042" stroke="black" />
                    </svg></div> -->
                  <div class="case-text">
                    <h1 class="headline-medium"> </h1>
                    <!-- <a class="button-light arrow-text" rel="noopener noreferrer"
                      href="#"></a> -->
                  </div>
                </div>
                <div class="img-paralax-container last-case-image">

                  <!-- <img class="case-img-paralax" src="https://thinkflipp.com/app/uploads/2021/12/Homepage-CMC.webp"
                    alt="Homepage-CMC"> -->
                </div>
              </div>
            </div>
          </div>
          <section class="register pad">
            <div class="container">
              <div class="form-container">
                <div class="form-text-container">
                  <h1 class="thankYouShow center headline-large">Thanks, you’re one of us now.</h1>

                  <h2 class="headline-small thankYouHide center remove-margin"> <span><?php echo $donate['sub_heading']; ?> </span> <?php echo $donate['title']; ?></h2>
                  <p class="thankYouHide center"><?php echo $donate['content']; ?></p>
                </div>
               <?php echo do_shortcode('[give_form id="73"]'); ?>
              </div>
            </div>
        
          </section>
        </div>

        
      </div>
    </main>
    
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