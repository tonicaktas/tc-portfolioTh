<?php

add_theme_support('menus'); // lägger till menu alternativ
add_theme_support('post-thumbnails');

function wpt_excerpt_length($length){
  return 16;
}
add_filter('excerpt_length','wpt_excerpt_length', 999);

function register_theme_menus(){  // informerar att thema har specific menu
  register_nav_menus(
    array(
      'primary-menu' =>__('Primary Menu')
    )
  );
}
add_action('init','register_theme_menus');


function wpt_create_widget( $name, $id, $description ) { // widget area

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wpt_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );




function wpt_theme_styles(){ //wpt_ is unique namespacing
  //function to link stylesheet. parameter-1 = namn för indetifiering. parameter-2 är link till filen med . som concatination

  wp_enqueue_style('foundation_css',get_template_directory_uri() . '/css/foundation.css' );

// behövs bara om man vill andvända köra standard.  wp_enqueue_style('normalize_css',get_template_directory_uri() . '/css/normalize.css' );

  wp_enqueue_style('main_css',get_template_directory_uri() . '/style.css' );

  wp_enqueue_style('normalize_css','http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
}
  add_action('wp_enqueue_scripts'/*hook som säger vilak filer som ska laddas till sidan*/,'wpt_theme_styles');//function to load the styles


function wpt_theme_js() {

  wp_enqueue_script('modenizr_js', get_template_directory_uri(). '/js/modernizr.js',/*array of dependecies*/'',/*specific version*/'',/*asks if we want this in footer*/false);

  wp_enqueue_script('foundation_js', get_template_directory_uri(). '/js/foundation.min.js',array('jquery'),'',true);

  wp_enqueue_script('main_js', get_template_directory_uri(). '/js/app.js',array('jquery','foundation_js'),'',true);


}
  add_action('wp_enqueue_scripts','wpt_theme_js');


?>
