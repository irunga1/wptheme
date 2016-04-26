<?php get_header(); ?>
<article>
<div class="ntPcontainer">
	<?php 
/* 		add_image_size( 'nombre-de-tu-nueva-imagen-destacada', 300, 450, true );
		get_template_part( 'content', get_post_format() );	 */	
/* 		while(have_posts() ):the_post(); 
		the_content();
		endwhile; */
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				echo"<h3><a href=''>".the_title()."</a></h3>";	
			} 
		} 
	?>

</div>
<?php get_footer(); ?>



