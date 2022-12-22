<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />-->
<title><?php bloginfo( 'title' ); ?></title>
<?php wp_head();?>
	
<link rel="dns-prefetch" href="//s.w.org">
  <link rel="stylesheet" id="wp-block-library-css" href="<?php echo get_template_directory_uri(); ?>/css/block-library-style.min.css" type="text/css" media="all">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" media="all">
  <link rel="stylesheet" id="sage/app.css-css" href="<?php echo get_template_directory_uri(); ?>/css/styles-app.css" type="text/css" media="all">
  <link rel="stylesheet" id="mycss" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all">
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/dist-jquery.min.js" id="jquery-js"></script>
  
  
  <link rel="https://api.w.org/" href="https://thinkflipp.com/wp-json/">
  <link rel="alternate" type="application/json" href="https://thinkflipp.com/wp-json/wp/v2/pages/105">
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://thinkflipp.com/wp/xmlrpc.php?rsd">
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://thinkflipp.com/wp/wp-includes/wlwmanifest.xml">
  <meta name="generator" content="WordPress 5.8.2">
  <link rel="shortlink" href="https://thinkflipp.com/?p=105">
  <link rel="alternate" type="application/json+oembed" href="https://thinkflipp.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthinkflipp.com%2Fabout%2F">
  <link rel="alternate" type="text/xml+oembed" href="https://thinkflipp.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthinkflipp.com%2Fabout%2F&amp;format=xml">
  <link rel="manifest" href="https://thinkflipp.com/app/themes/thinkflipp/dist/images/manifest.json?id=b58fcfa7628c9205cb11">
  <link rel="mask-icon" href="https://thinkflipp.com/app/themes/thinkflipp/dist/images/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css'>
        
</head>
<?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyrite'];
$size = 344;
$options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
$att_img = wp_get_attachment_image($logo, array($size, $size), false);
$logoSrc = wp_get_attachment_url($logo);
$att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
global $woocommerce;
?>
<body <?php body_class('wp-embed-responsive'); ?> >
    
    
    <div class="nav">
      <input id="toggle-menu" type="checkbox" hidden="">
      <nav id="nav-primary" class="nav-primary dark-nav">
       
        
        <div class="main-nav container">
          <a class="brand nav-loader-home" href="<?php echo site_url(); ?>" rel="noreferrer noopener" aria-label="Flipp logo">
            <img src="<?php echo $logoSrc; ?>" class="logo" alt="">
           </a>
          <!--<div class="main-links">
            <a rel="noopener noreferrer" href="about.php" class="nav-item nav-loader"><span>About Us</span></a>
            <a href="adopt.php" rel="noopener noreferrer" class="nav-item nav-loader"><span>Adopt</span></a>
            <a href="involved.php" rel="noopener noreferrer" class="nav-item nav-loader"><span>Get Involved</span></a>
            <a href="shop.php" rel="noopener noreferrer" class="nav-item nav-loader"><span>Shop</span></a>
            <a href="contact.php" rel="noopener noreferrer" class="nav-item nav-loader"><span>contact Us</span></a>
            <a href="#" rel="noopener noreferrer" class="nav-item nav-loader donate"><span>Donate</span></a>
            
          </div>-->
           <?php wp_nav_menu( array('menu'=> 'Header Menu','theme_location' => 'header_menu','fallback_cb'=> false, 'menu_class' => 'main-links', 'container' => false ) ); ?>
                    
        </div>
        
         <div class="main-nav container mobile-icon">
          
          <div class="main-links">

            <a href="#" rel="noopener noreferrer" class="nav-item nav-loader donate" id="donate-btn"><span>Donate</span></a>
            <label id="nav-handle" for="toggle-menu" class="nav-handle">
              <div class="toggle"><span></span><span></span></div>
            </label> 
          </div>
        </div>
        <div class="expanded-nav container">
          <!--<div class="expanded-links flex-column">-->
            <?php wp_nav_menu( array('menu'=> 'Mobile menu','theme_location' => 'mobile_menu','fallback_cb'=> false, 'menu_class' => 'expanded-links flex-column', 'container' => false ) ); ?>
          
          <!--</div>-->

        </div>
      </nav>
    </div>
    
    <div class="fixed-socials hide-me-lg">
      <a rel="noopener noreferrer" target="_blank" aria-label="Instagram social page hyperlinks" href="<?php echo $options['instagram']; ?>"><span>Instagram</span></a>
      <a rel="noopener noreferrer" target="_blank" aria-label="Linkedin social page hyperlinks" href="<?php echo $options['linkedin']; ?>"><span>Linkedin</span></a>
      <a rel="noopener noreferrer" target="_blank" aria-label="Twitter social page hyperlinks" href="<?php echo $options['facebook']; ?>"><span>Facebook</span></a>
    </div>


 <?php if(Is_home()|| is_front_page() ) { ?>
 
 
 
 
 
 
 
 
 <?php } else if(is_singular('adopt')) { ?>
 
 
 
 <section class="banner" style="background-image:url('<?php echo site_url(); ?>/wp-content/uploads/2022/08/banner1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="contx">
                    <div class="contbox">
                        <h2><?php echo the_title(); ?></h2>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</section>




<?php } if(is_shop()){ ?>
 
 
 <section class="banner" style="background-image:url('<?php echo site_url(); ?>/wp-content/uploads/2022/08/banner1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="contx">
                    <div class="contbox">
                        <h2>Shop</h2>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</section>

<section class="adopt shop">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>Shop our Dog Lover Merchandise</h1>
                <ul class="shopf">
                    <li><a href="<?php echo site_url();?>/cart/"><i class="fa fa-cart-plus"></i><span>(<?php echo $woocommerce->cart->cart_contents_count; ?>)</span></a></li>
                    <li><a href="<?php echo site_url();?>/my-account/"><i class="fa fa-user"></i></a></li>
                </ul> 

            </div>
            <div class="col-md-7">
                <?php dynamic_sidebar( 'shop-page-widget' ); ?>
               
            </div>
           
        </div>
    </div>
</section>





<section class="new-gallery-sec adopt-gallery shoplist ">
      <div class="container">
        <div class="row">

         <div class="gallery-div">
 
 


<?php } if(is_page() ){ ?>

<section class="banner" style="background-image:url(<?php echo get_the_post_thumbnail_url();  ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="contx">
                    <div class="contbox">
                        <h2><?php echo the_title(); ?></h2>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</section>



 

 
 <?php } else { ?>  
 
 
 
 <?php } ?>
 
 
 
 
 
 
 
<?php if(is_product()){ ?>   
 <section class="banner" style="background-image:url('<?php echo site_url(); ?>/wp-content/uploads/2022/08/banner1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="contx">
                    <div class="contbox">
                        <h2>Product Details</h2>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</section>
<section class="home-sec1">
            <div class=" container">
            <div class="row">
            <div class="col-md-12">

<?php } ?>
 
<?php if(is_cart() || is_woocommerce() || is_cart() || is_checkout() || is_account_page() ){ ?> 
 
<section class="home-sec1">
            <div class=" container">
            <div class="row">
            <div class="col-md-12">

<?php } ?> 