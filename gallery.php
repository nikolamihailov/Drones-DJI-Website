<?php
  get_header();
  /**
* Template Name: gallery
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<div style="">
<h1 style="color: red; text-align: center;  margin-top: 50px;">Photos taken by our drones:</h1>
<div style="margin: auto; width: 80%;height: 50%;">
<?php echo do_shortcode('[ngg src="galleries" ids="3" display="basic_slideshow"]'); ?>
</div>
</div>


<br>
<br>
<br>
<hr>
<div style="margin: auto; width: 100%; text-align: center;">
<?php if(!dynamic_sidebar('right-sidebar')): ?>
  <h3>no sidebar</h3>

<?php endif;?>
</div>


<?php
  get_footer();
?>