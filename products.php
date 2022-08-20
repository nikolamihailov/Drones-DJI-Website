<?php
  get_header();

   /**
* Template Name: products
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>

<div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="margin: 40px;">
            <div class="filters-content">
                <div class="row grid">

                	 <?php query_posts('cat=6'); ?>
         
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <?php 
                     if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                       the_post_thumbnail();
                     } 
                      ?>
                        <div class="down-content">
                          <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                          <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 50, '...');?></p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <?php 
                     endwhile;
                     endif;
                     ?>
     



<!--

                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$16.75</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (24)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_03.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$32.50</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
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
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_04.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$24.60</h6>
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
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_05.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Tittle goes here</h4></a>
                          <h6>$18.75</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (60)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_06.jpg" alt=""></a>
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
                          <span>Reviews (72)</span>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
      -->

<footer>


    </footer>



    <!-- Bootstrap core JavaScript -->
    <script src="<?php bloginfo('template_directory'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/custom.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/slick.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/isotope.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>


</html>