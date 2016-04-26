<?php get_header(); ?>
<article>
<div class="ntPcontainer">
	<header>		
		<?php the_post_thumbnail( $size, $attr ); ?>
	</header>
	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				echo"<span class='ntTitleH1'>";
				the_title();
				echo"</span>";
				echo "<p class = 'ntContenText'>";
				the_content();
				echo "</p>"; 
			} 
		} 
	?>
	<div style="clear:both;"></div>
	
</div>
<?php get_footer(); ?>