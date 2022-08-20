<?php
  get_header();
  /**
* Template Name: news
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<?php query_posts('cat=3'); ?>
            <?php query_posts('showposts=15'); ?>
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
                 
                 <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 60, '...');?></p>

                     <!--<p ><?php echo the_content(); ?></p> -->
                  
             
                <a href="<?php the_permalink(); ?>">Read more</a>
               
              </div>
            </div>
          </div>

          <?php 
            endwhile;
            endif;
          ?>

<?php
  get_footer();
?>