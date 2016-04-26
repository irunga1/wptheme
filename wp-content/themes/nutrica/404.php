<?php get_header(); ?>
<article>
<div class="ntPcontainer">
	<style type="text/css">
		.ntPcontainer{
			text-align:center;
			heigh:100%;
		}
		.ntError{
			border:10px solid orange;
			padding:5px;
			display:inline-block;
			text-align:center;
			margin:0 auto;
			margin-top:25px;
			
			
		}
		.ntErrorShow{
			font-size:80px;
			font-family:tahoma;
			font-weight:700;
			color:orange;
			display:block;
		}
		.ntErrortext{
			font-size:12px;
			display:block;
			color:gray;
		}
	</style>
	<div class="ntError">
		<span class="ntErrorShow"><?php _e('404' ); ?></span>
		<span class="ntErrortext"><?php _e('La pagina no existe'); ?>	
		</span>
	</div>
	

</div>
<?php get_footer(); ?>



