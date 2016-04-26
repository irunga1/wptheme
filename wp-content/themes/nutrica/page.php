<?php get_header(); ?>
<article>
<div class="ntPcontainer">
	<?php 				
		while(have_posts() ):the_post(); 
		the_content();
		endwhile;
	?>
</div>
<?php get_footer(); ?>



