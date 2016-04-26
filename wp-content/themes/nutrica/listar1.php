<?php
/*
Template Name: Lis
*/
?>
<?php get_header(); ?>
<article>
<div class="ntPcontainer">
	<div class="ntPsubContainer">
	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				echo "<p>";
				echo"<h1>";
				the_title();
				echo"</h1>";
				the_content();
				echo "</p>"; 
			} 
		} 
	?>
<div class="main">
<?php
	$args=array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'orderby' => 'ASC',
		'posts_per_page' => '-1',
		'tag'=>'bienestarina'
	);
	// The Query
	$the_query = new WP_Query( $args );    
	// The Loop
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
		?>
		<a href="<?php the_permalink();?>" title="<?php the_title();?>" class="info">
		<div id="post-<?php the_ID();?>" class="view second-effect">
			<?php the_post_thumbnail(); ?>
			
			<div class="mask">
				
			</div>
			
		</div><!-- #post-ID -->
		</a>
	<?php }} else {
		echo 'No hay articulos';    

	}
	/* Restore original Post Data */
	wp_reset_postdata();   
	?>
	</div>
  </div>
  


</div>
<?php get_footer(); ?>