
<?php
  get_header();
?>

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest News</h2>
              
            </div>
          </div>

            <?php query_posts('cat=3'); ?>

          
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
          <div class="col-md-4"  style="width: 100%; height: 100%;">

            <div class="product-item" >
              <?php 
                     if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                       the_post_thumbnail();
                     } 
                      ?>
             <!-- <a href="#"><img src="assets/images/product_01.jpg" alt=""></a> -->
              <div class="down-content">
                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                 
                 <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 50, '...');?></p>

                     <!--<p ><?php echo the_content(); ?></p> -->
                  
                <a href="<?php the_permalink(); ?>">Read more</a>
               
              </div>
            </div>
          </div>

          <?php 
            endwhile;
            endif;
          ?>

<!--
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$30.25</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (21)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_03.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$20.45</h6>
                <p>Sixteen Clothing is free CSS template provided by TemplateMo.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (36)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_04.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$15.25</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (48)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_05.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$12.50</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (16)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_06.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$22.50</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (32)</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  -->

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="margin-top: 50px;">
            <div class="section-heading">
              <h2>About DJI drones</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best drones?</h4>
              <p>DJI drones offer a variety of features and endless oppportunities to capture every moment in high resolution and explore every place without loosing signal!</p>
              <ul class="featured-list">
                <li><a href="#">4K Video resolution</a></li>
                <li><a href="#">Litweight</a></li>
                <li><a href="#">Huge range</a></li>
                <li><a href="#">Crystal clear images</a></li>
              </ul>
              <a href="<?php bloginfo('template_directory'); ?>/about-us/" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/about.jpg" alt="" style="width: 75%; height: 75%;" >
            </div>
          </div>
        </div>
      </div>
    </div>
    

<div style="margin: auto; width: 100%; text-align: center;">
<?php if(!dynamic_sidebar('right-sidebar')): ?>
  <h3>no sidebar</h3>

<?php endif;?>
</div>

<!--
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  -->


<?php

get_footer();
?>
