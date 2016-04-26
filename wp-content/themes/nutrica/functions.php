<?php
include 'shortcodes.php';

/*vinculating scripts and styles*/
function ntThemeStyle(){	
	wp_enqueue_style( 'style_css' , get_template_directory_uri().'style.css');
	wp_enqueue_style( 'styles_css' , get_template_directory_uri().'/css/styles.css');
	wp_enqueue_style( 'extrastyles_css' , get_template_directory_uri().'/css/extrastyles.css');
	wp_enqueue_style( 'common_css' , get_template_directory_uri().'/css/common.css'); 
	wp_enqueue_style( 'secondeffect_css' , get_template_directory_uri().'/css/secondeffect.css');
	wp_enqueue_style( 'bxslider_css' , get_template_directory_uri().'/css/jquery.bxslider.css');
}
function ntThemeScript(){
	wp_enqueue_style( 'style_css' , get_template_directory_uri().'style.css');
	wp_enqueue_style( 'styles_css' , get_template_directory_uri().'/css/styles.css');
	wp_enqueue_style( 'bxslider_css' , get_template_directory_uri().'/css/jquery.bxslider.css');
	wp_enqueue_style( 'bxslider_js' , get_template_directory_uri().'/js/jquery.bxslider.min.js');
}
add_action('wp_enqueue_scripts','ntThemeStyle' );
add_action('wp_enqueue_scripts','ntThemeScript' );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(150, 150, true);
/* set_post_thumbnail_size( 1200, 9999 ); */
/*vinculating scripts and styles*/
/* menu */
add_theme_support('menus');
function registerMenus(){
	register_nav_menus(
		array(
			"principalMenu"=>"Main Menu"
		)
	);
}
if(function_exists('register_sidebar'))
	register_sidebar(array(
		'name' => 'Main Sidebar',
		'before_widget' => '<hr>',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
add_action('init','registerMenus');
/* menu */

/*custom post type*/
function myCustomPostType(){
	$labels= array(
		'name'=>'Bienestarina',
		'singular_name'=>'Bienestarina',
		'add_new'=>'Agregar Item',
		'all_items'=>'Listar Items',
		'add_new_items'=>'Agregar Item',
		'edit_item'=>'Editar Item',
		'new_item'=>'Nuevo Item',
		'view_item'=>'Ver Item',
		'search_item'=>'Buscar Productos Bienestarina',		
		'not_found'=>'No hay Resultados',
		'not_found_in_trash'=>'No hay Resultados',
		'parent_item_colon'=>'Elemento Padre'
	);
	$args = array(
		'labels'=>$labels,
		'public'=>true,
		'has_archive'=>true,
		'publicly_queryabele'=>true,
		'query_var'=>true,
		'rewrite'=>true,
		'capability_type'=>'post',
		'hierarchical'=>'false',
		'supports'=>array(
			'tite',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions'
		),
		'taxonomies'=>array('categories','post_tag'),
		'menu_position'=>2,
		'exclude_from_search'=>false
	);
	register_post_type('list2',$args);
	
}
add_action('init','myCustomPostType');
/*custom post type*/





















?>


