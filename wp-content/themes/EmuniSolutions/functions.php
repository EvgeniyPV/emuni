<?php


add_action('wp_enqueue_scripts', function() {

    //Style
	wp_enqueue_style('app', get_template_directory_uri() . '/app/css/app.min.css');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap');
    wp_enqueue_style('fonts-gstatic', 'https://fonts.gstatic.com');
	
    //JS
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/app/js/app.min.js', array('jquery'), 'null', true );
	

	
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('menus');

add_filter( 'upload_mimes', 'svg_upload_allow' );


function svg_upload_allow( $mimes ) {	
	$mimes['svg']  = 'image/svg+xml';
	
	return $mimes;
}

?>