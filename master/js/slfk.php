<?php
/*

Template Name: Home Page

 */

 /*
 $location            = get_field('location');
 */

get_header(); ?>



<?php
  $heroImage = get_field('featured_image_crop');
  $heroImageURL = $heroImage['url'];
  $heroMobile = get_field('mobile_portrait_image');
  $heroMobileImage = $heroMobile['url'];
  $ctaCards = get_field('home_page_cta');
  $card1 = $ctaCards[0];
  $title1 = $card1['card_title'];
  $subtitle1 = $card1['card_subtitle'];
  $card2 = $ctaCards[1];
  $title2 = $card2['card_title'];
  $subtitle2 = $card2['card_subtitle'];
  $card3 = $ctaCards[2];
  $title3 = $card3['card_title'];
  $subtitle3 = $card3['card_subtitle'];
  $card4 = $ctaCards[3];
  $title4 = $card4['card_title'];
  $subtitle4 = $card4['card_subtitle'];
  ?>

<style>
/* set hero equal to $navbar-height */
#hero {
  background: linear-gradient(rgba(255, 255, 255, .80), rgba(255, 255, 255, .20)) ,url('<?php echo $heroImageURL; ?>') 50% 60px no-repeat;
  /*background-size: 100%;*/
  background-size: cover;
  min-height: 100vh;
  padding-top: 100px;
}

@media screen and (min-width: 1200px) {
  #hero {
  background: linear-gradient(rgba(255, 255, 255, .80), rgba(255, 255, 255, .20)) ,url('<?php echo $heroImageURL; ?>') 50% 60px no-repeat fixed;
  background-size: cover;
  min-height: 100vh;
  padding-top: 100px;
  }
}
@media screen and (max-width: 768px) and (orientation: portrait) {
  #hero {
  background: linear-gradient(rgba(255, 255, 255, .80), rgba(255, 255, 255, .20)) ,url('<?php echo $heroMobileImage; ?>') 50% 60px no-repeat;
  background-size: 100%;
  background-size: cover;
  background-position: center;
  min-height: calc(100vh - 60px);
  padding-top: 80px;
}
}
</style>
<!-- HERO
================================================== -->
<section id="hero">
  <article>
    <div class="container clearfix">
      <div class="row" style="background-color:black;">
    <div class="col-md-12" style="text-align:center;"><a href="https://www.moores-sew.com/holiday-sales-event/"
            style="color:white;"><img src="https://www.moores-sew.com/wp-content/uploads/2020/11/2020-11-18-1.png">
            <h2 style="color:white;">Black Friday & Holiday Specials</h2>
        </a>
        <hr style="background-color:white;">
    </div>
</div>

<div class="row" style="background-color:black;">
    <div class="col-md-6" style="text-align:right;">
        <h3 style="font-size:20px;"><span style="color:red;">Free Shipping</span> - <a href="https://www.moores-sew.com/shop/"
                style="color:white;">Learn More</a> |
        </h3>
    </div>
    <div class="col-md-6" style="text-align:left;"><h3 style="font-size:20px;"><span style="color:red;">Online Financing</span> - <a
            href="https://www.moores-sew.com/financing-for-sewing-machine-purchases/" style="color:white;">Apply
            Here</a>
    </h3>
    </div>
</div>
       <div class="row">

         <!-- <div class="col-md-12">
           <img src="<?php // echo site_url( '/wp-content/uploads/' ); ?>2017/03/logo.png" alt="Moore's Sewing Centers" class="page-logo">

         </div> -->
         <div class="col-md-12 hero-text">
             <h1>Moore's Sewing Centers</h1>
                 <h3><a href="<?php echo site_url(); ?>/product-category/sewing-quilting-machines/">Sewing Machines</a> | <a href="<?php echo site_url(); ?>/vacuum-cleaners/">Vacuums</a> | <a href="<?php echo site_url(); ?>/local-service-repair/">Repair & Service Centers</a></h3>
       </div>
     </div>
    <div class="row">

          <div class="col-6 col-md-3 my-3 my-3">
              <div class="card rgba-80-bg-secondary featureHeights2">
                  <div class="card-body text-center">
                      <h4 class="card-title"><?php echo $title1; ?></h4>
                      <div class="card-subtitle"><?php echo $subtitle1; ?></div>
                  </div>
                  <div class="mb-5 text-center">
                    <a class="btn btn-lg btn-primary btn-responsive" href="<?php echo site_url( '/shop/'); ?>" role="button">Shop Here</a>
                  </div>
              </div>
          </div>
          <div class="col-6 col-md-3 my-3">
              <div class="card rgba-80-bg-secondary featureHeights2">
                  <div class="card-body text-center">
                    <h4 class="card-title"><?php echo $title2; ?></h4>
                    <div class="card-subtitle"><?php echo $subtitle2; ?></div>
                  </div>
                  <div class="mb-5 text-center">
                    <a class="btn btn-lg btn-cta btn-responsive" href="#mailmunch-pop-505338">Save $$$</a>
                  </div>
              </div>
          </div>
          <div class="col-6 col-md-3 my-3">
              <div class="card rgba-80-bg-secondary featureHeights2">
                  <div class="card-body text-center">
                    <h4 class="card-title"><?php echo $title3; ?></h4>
                    <div class="card-subtitle"><?php echo $subtitle3; ?></div>
                  </div>
                  <div class="mb-5 text-center">
                    <a class="btn btn-lg btn-primary btn-responsive" href="<?php echo site_url( '/sewing-classes/'); ?>" role="button">Calendar</a>
                  </div>
              </div>
          </div>
          <div class="col-6 col-md-3 my-3">
              <div class="card rgba-80-bg-secondary featureHeights2">
                  <div class="card-body text-center">
                    <h4 class="card-title"><?php echo $title4; ?></h4>
                    <div class="card-subtitle"><?php echo $subtitle4; ?></div>
                  </div>
                  <div class="mb-5 text-center">
                    <a class="btn btn-lg btn-primary btn-responsive   js--scroll-to-locations" href="#">Your Store</a>
                  </div>
              </div>
          </div>
      </div>


    </div><!-- container -->
  </article>
</section>

<!-- Notifications -->

<?php get_template_part('partials/section', 'notifications'); ?>

<!-- Blog posts -->

<?php get_template_part('partials/section', 'blog-posts'); ?>

<!-- FEATURE SLIDER -->

<?php get_template_part('content', 'featureSlider2'); ?>

<section id="products">
<div class="container">
  <div class="row">
  <div class="col-md-12">


  <div class="section-header white-bg-50-opacity">
    <h2>Sewing Machines &amp; Vacuums</h2>
  </div><!-- section-header -->
</div>
</div>

  <div class="row">
    <div class="col-md-4 white-bg-50-opacity">
      <h4>Local Sewing Stores</h4>
<p class="large-text">For over 60 years, the Moore family has provided the very best quality sewing machines, superior vacuum cleaners, and energy-efficient ceiling fans. At Moore's, we maintain the same small-town-friendly atmosphere we established years ago - while offering the very latest technology not available anywhere else in the industry. Plus if your sewing machine ever gets sick or needs a tune up we can repair it. We are retailers of Pfaff, Baby Lock, and Brother. Moore's Sewing is your one stop shop for classes, sewing machines, notions, fabric and more. Visit us soon!</p>
    </div><!-- end col -->
    <div class="col-md-4 white-bg-50-opacity">
      <h4>Sewing Classes</h4>
<p class="large-text">Imagine interactive classes and knowledgeable sewing educators who want to teach you how to use your machine to its fullest potential. Whether it be a beginner sewing machine or a multi-needle embroidery machine, Moore's teachers know what you want in a class! With unlimited FREE usage classes and advanced specialty classes, we'll turn amateurs into experts and experts into know-it-alls in no time. From quick and easy, to complex, dozens of classes await. We host Special Events that attract hundreds of fellow crafters and participate in a number of local fairs and craft shows.</p>
    </div><!-- end col -->

    <div class="col-md-4 white-bg-50-opacity">
      <h4>Superior Vacuum Cleaners & Repair Service</h4>
      <p class="large-text">Who doesn't want a vacuum cleaner that is affordable, cleans efficiently and requires little maintenance? Have you dreamt of talking on the phone and vacuuming at the same time? At Moore's, we choose our brands for quality, performance, and durability. We carry a full line of vacuum cleaners and accessories, including vacuum bags, belts and filters. We also service and repair vacuums whether purchased at Moore's or elsewhere. Moore's Sewing is an authorized Miele Internet dealer and we sell Miele, Simplicity & Dyson vacuum cleaners at all of our locations.</p>
    </div><!-- end col -->
  </div><!-- row -->
</section>






<!-- LOCATIONS SECTION -->

<?php get_template_part('content','location-cards'); ?>

<?php //get_template_part('content', 'products'); ?>

<?php //get_template_part('content', 'classes'); ?>

<?php //get_template_part('content', 'blog'); ?>



<!-- PRODUCTS
================================================== -->




<?php get_footer(); ?>
