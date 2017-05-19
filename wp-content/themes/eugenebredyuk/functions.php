<?php
// enable creating of custom menus
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// overriding the default length of excerpt
function wpt_excerpt_length( $length ) {
	return 16;
}
add_filter( 'excerpt_length', 'wpt_excerpt_length', 999 );


// creating widget areas
function wpt_create_widget( $name, $id, $description ) {

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

// registering menu
function register_theme_menus(){
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu')
			// 'secondary-menu' => __('Secondary Menu'),
		)
	);
}
add_action('init', 'register_theme_menus');
// importing our css in the template
function wpt_theme_styles() {
	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
	// wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
// using WP hook to load our styles
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

// importing our js in the template
function wpt_theme_js() {
	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js','','', false);
	wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.js',array('jquery'),'', true);
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js','','', true );
}
// using WP hook to load our js
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

?>