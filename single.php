<?php
  get_header();
?>
<div>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
	?>
<h1 style="text-align: center; margin: 30px;"><?php the_title(); ?></h1>
<div style="margin: auto; width: 50%;">
 <?php 
                     if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                       the_post_thumbnail();
                     } 
                      ?>
 </div>
 <hr>
<div id="content" style="margin: 30px; padding: 15px; text-align: center;">
	<p style="
	 width: 50%;"><?php the_content(); ?></p>
</div>

</div>





	<?php
	} 
} 
?>

<?php
  get_footer();
?>