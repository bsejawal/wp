<?php

// CSS include
function wp_style(){

	// wp_enqueue_style('style', get_stylesheet_uri());
    wp_register_style( 'style', get_template_directory_uri() . '/lib/css/style.css', array(), '2.1' );

    wp_enqueue_style('style');
    wp_register_style( 'flexslider', get_template_directory_uri() . '/lib/css/flexslider.css', array(), '2.1' );
    wp_enqueue_style('flexslider');

}

add_action('wp_enqueue_scripts', 'wp_style');


//jquery scripts
function wp_scripts(){
    wp_register_script( 'flexslider', get_template_directory_uri() . '/lib/js/jquery.flexslider-min.js', array('jquery'), '2.5.0', true );
    wp_enqueue_script('flexslider');
    wp_register_script( 'global', get_template_directory_uri() . '/lib/js/global.js', array('jquery'), '0.1', true );
    wp_enqueue_script('global');
}

add_action('wp_enqueue_scripts', 'wp_scripts');

// Get top ancestor
function get_top_ancestor_id(){

	global $post;

	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];

	}

	return $post->ID;

}

// Does page have children
function has_children() {
	global $post;
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
}

// Customize excpert word count length
function  custom_excerpt_length(){
    return 25;
}

add_filter("excerpt_length", "custom_excerpt_length");

//Theme setup
function wordPress_setup(){
  // Navigation Menus
    register_nav_menus(array(
            'primary' => __( 'Primary Menu'),
            'footer' => __( 'Footer Menu'),
            ));

    // Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, TRUE);
    add_image_size('banner-image', 920, 210, array('left','top'));

    // Add post format support
    add_theme_support('post-formats', array('aside','gallery', 'link'));

}

add_action('after_setup_theme','wordPress_setup');


// Add Our Widget Locations
function ourWidgetsInit(){

    register_sidebar( array(
        'name' => 'Sidebar',
        'id' => 'sidebar1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="my-special-class">',
        'after_title' => '</h4>'
    ));

    register_sidebar( array(
        'name' => 'Footer Area 1',
        'id' => 'footer1'
    ));

    register_sidebar( array(
        'name' => 'Footer Area 2',
        'id' => 'footer2'
    ));

    register_sidebar( array(
        'name' => 'Footer Area 3',
        'id' => 'footer3'
    ));

    register_sidebar( array(
        'name' => 'Footer Area 4',
        'id' => 'footer4'
    ));

}

add_action('widgets_init', 'ourWidgetsInit');

?>