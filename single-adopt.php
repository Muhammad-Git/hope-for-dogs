<?php /* Template Name: Adopt Page
Template Post Type: adopt*/
?>
<?php get_header(); ?>

<style>

section.teamsec {    padding: 90px 0 135px;
    text-align: left;}
    
section.teamsec p {margin-top: 15px;     font-size: 15px;}

section.teamsec h2 {
    color: #7995a3;
    font-family: "Proxima-Nova-Bold";
        font-size: 32px;
    /*line-height: 1;*/
}

section.teamsec .row{
    display:flex;
}

section.teamsec .img-box{
    width:35%;
    padding-right: 50px;
}

section.teamsec .img-box img{
    width:100%;
}

section.teamsec .text{
    width:65%;
}

section.teamsec .text a {
    width: 120px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #d49e8d;
    color: #fff;
    text-align: center;
    border-radius: 40px;
    transition: .5s;
    margin-top: 30px;
       font-size: 17px;
}

section.teamsec .text a:hover{
    background-color:#282828;
}


.s7 {
  margin-top: 1rem;
   margin-bottom: 1rem;
}

.s7_1 {
  background: #fff;
  /*border: solid 1px rgba(0, 0, 0, 0.5);*/
  padding: 40px 30px;
}
.s7_1 img {
  width: 500px;
  height: 300px;
  /*border-radius: 100%;*/
  object-fit: cover;
  margin-bottom: 20px;
}
.s7_1 p:last-child {
  font-size: 16px;
  line-height: 1.15;
}
.s7_1 p:last-child strong {
  display: block;
  font-size: 24px;
}

.s7_slider .arr-left ,.s7_slider .arr-right{position: absolute;top: 40%; left:-6%;width: 35px;height: 35px;background-color: #000;border-radius: 50%;display: flex;justify-content: center;align-items: center;font-size: 20px;font-weight: 400;color: #fff;z-index: 1;cursor: pointer;transition: 0.3s ease-in-out;}
.s7_slider .arr-right{left:auto; right:-6%;}
.s7_slider .arr-left:hover,.s7_slider .arr-right:hover{background-color: #73bd44;}

ul.metadata {
    display: flex;
    column-gap: 10px;
}

ul.metadata li {
    list-style: none !important;
    font-size: 19px;
}

ul.metadata li strong {
    font-size: 20px;
}





</style>
    
    

<?php 

$term_list = wp_get_post_terms( $post->ID, 'dog_size', array( 'fields' => 'names' ) );
$term_list_age = wp_get_post_terms( $post->ID, 'age', array( 'fields' => 'names' ) );
$term_list_sex = wp_get_post_terms( $post->ID, 'sex', array( 'fields' => 'names' ) );
$term_list_country = wp_get_post_terms( $post->ID, 'country', array( 'fields' => 'names' ) );
$term_list_good = wp_get_post_terms( $post->ID, 'good_with', array( 'fields' => 'names' ) );




?>
<section class="teamsec">
     <div class="container">
         <div class="row">
              <div class="img-box">
                   <div class="back_to_dog">
                      <a href="<?php echo site_url();?>/adopt/">Back to all Dogs</a>
                   </div>
                    <img src="<?php echo the_post_thumbnail_url(); ?>">
                  
               </div>
              <div class="text">
                  
                 
                 <ul class="metadata">
                     <li><strong>Size: </strong></br><?php echo $term_list[0]; ?></li>
                     <li><strong>Age: </strong></br><?php echo $term_list_age[0]; ?></li>
                     <li><strong>Sex: </strong></br><?php echo $term_list_sex[0]; ?></li>
                     <li><strong>Country: </strong></br><?php echo $term_list_country[0]; ?></li>
                     <li><strong>Good With: </strong></br><?php echo $term_list_good[0]; ?></li>
                     
                  </ul>

                  
                  <h2><?php echo the_title(); ?></h2>
                  <?php echo the_field('inner_content'); ?>
                  
                  <a href="<?php echo site_url()?>/adoption-form/" class="geller-btn">Adopt</a>
                 
                  
              </div>
         </div>
     </div>
</section>

<section class="s7 spad pt-0">
   <div class="container">
      <div class="s7_slider">
        <?php if( have_rows('adopted_pat_slider_') ):?>
          <?php while( have_rows('adopted_pat_slider_') ) : the_row();?>
           <div>
            <div class="s7_1 wow fadeInLeft" data-wow-delay="0.15s">
               <img src="<?php echo the_sub_field('adopted_pat_slider_image');?>" alt="" class="img-fluid">
              
            </div>
         </div>
         <?php endwhile;?>
        <?php endif;?>
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
    
