<?php /* Template Name: Shop Template */ ?>
<?php get_header(); ?>
<section class="adopt shop">
   <div class="container">
      <div class="row">
         <div class="col-md-5">
            <h1>Shop By Categories</h1>
         </div>
         <div class="col-md-7">
            <ul>
               <li>
                  <h6>Filter:</h6>
               </li>
               <li>
                  <select>
                     <option  value="">Category</option>
                     <?php
                        $terms = get_terms(
                            array(
                                'taxonomy'   => 'categoryy',
                                'hide_empty' => false,
                            )
                        );
                        
                        
                        // Check if any term exists
                        if ( ! empty( $terms ) && is_array( $terms ) ) {
                            // Run a loop and print them all
                            foreach ( $terms as $term ) { ?>
                     <option value="<?php echo $term->name; ?>"><?php echo $term->name; ?></option>
                     <?php } } ?>         
                  </select>
               </li>
               <li>
                  <select>
                     <option  value="">Size</option>
                     <?php
                        $terms = get_terms(
                            array(
                                'taxonomy'   => 'size',
                                'hide_empty' => false,
                            )
                        );
                        
                        
                        // Check if any term exists
                        if ( ! empty( $terms ) && is_array( $terms ) ) {
                            // Run a loop and print them all
                            foreach ( $terms as $term ) { ?>
                     <option value="<?php echo $term->name; ?>"><?php echo $term->name; ?></option>
                     <?php } } ?> 
                  </select>
               </li>
               <li>
                  <select>
                     <option  value="">Color</option>
                     <?php
                        $terms = get_terms(
                            array(
                                'taxonomy'   => 'color',
                                'hide_empty' => false,
                            )
                        );
                        
                        
                        // Check if any term exists
                        if ( ! empty( $terms ) && is_array( $terms ) ) {
                            // Run a loop and print them all
                            foreach ( $terms as $term ) { ?>
                     <option value="<?php echo $term->name; ?>"><?php echo $term->name; ?></option>
                     <?php } } ?> 
                  </select>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="new-gallery-sec adopt-gallery shoplist ">
   <div class="container">
      <div class="row">
         <div class="gallery-div">
            <?php  $index_query = new WP_Query(array( 'post_type' => 'products' , 'posts_per_page' => '8' , 'paged' => get_query_var('paged') , 'order' => 'asc')); ?>
            <?php  while ($index_query->have_posts()) : $index_query->the_post(); ?> 
            <div class="col-md-3">
               <div class="box">
                  <div class="img-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                     <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                  </div>
                  <div class="text">
                     <p class="name"> <?php echo the_title(); ?></p>
                     <a href="#">Buy Now</a>
                  </div>
               </div>
            </div>
            <?php $x++; endwhile; wp_reset_query(); ?>
            <div class="col-md-12 text-center">
               <?php   echo    wp_pagenavi( array( 'query' => $index_query ) ); ?>
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