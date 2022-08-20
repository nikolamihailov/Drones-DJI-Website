<?php
  get_header();
?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
	?>
<h1><?php the_title(); ?></h1>
<div id="content">
	<p><?php the_content(); ?></p>
</div>



	<?php
	} 
} 
?>

<?php
  get_footer();
?>