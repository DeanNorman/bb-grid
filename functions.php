<?php 

//add theme supprort for menus
add_theme_support('menus');
add_theme_support('post-thumbnails');


// Setup Widget area
function wpt_create_widget($name,$id,$description){

	register_sidebar(array(
		'name' => __($name),
		'id' => $id,
		'description' => __($description),
		'before_widget' => '<div class="Sidebar-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

wpt_create_widget('Blog Sidebar', 'blog', 'Displays on the side of the pages in the blog section');

// Declare css 
add_action('wp_enqueue_scripts','bb_theme_styles');

function bb_theme_styles() {
	wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('font_css', 'http://fonts.googleapis.com/css?family=Oswald');
	wp_enqueue_style('font_two_css', 'http://fonts.googleapis.com/css?family=Pathway+Gothic+One');
	wp_enqueue_style('font_three_css', 'http://fonts.googleapis.com/css?family=Open+Sans');
}


add_action('wp_enqueue_scripts','bb_theme_scripts');
// Declare js
function bb_theme_scripts() {
	wp_enqueue_script('masonry_js', get_stylesheet_directory_uri() . '/js/masonry.js','','',true);

	// only init masonry on main page
	if( is_page( 'index' ) ) {
		wp_enqueue_script('masonry_init', get_stylesheet_directory_uri() . '/js/masonry_init.js', array('masonry_js'),'',true);
	}
}


?>