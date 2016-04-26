<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name = "description" content="<?php bloginfo('description');?>">
	<title><?php wp_title("--",true,'right'); ?></title>
	<link rel="stylesheet" href="css/styles.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<div class="ntContainer">
		<aside>
			<div class="ntAsHead">
				<div class="ntAsHeadImage">
				</div>			
			</div>
			<div class="ntMenu">
				<?php 
					$default = array( 'theme_location' => 'principalMenu', 'menu_class' => 'ntMenu', 'menu_id' => 'primary-menu' );
					wp_nav_menu($default);
				?>				
			</div>
		</aside>