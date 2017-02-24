<?php
	remove_action( 'wp_head', 'wp_generator' ) ;
	remove_action( 'wp_head', 'wlwmanifest_link' ) ;
	remove_action( 'wp_head', 'rsd_link' ) ;
	add_filter( 'pre_comment_content', 'esc_html' );
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	function no_wordpress_errors(){
		return 'GET OFF MY LAWN !! RIGHT NOW !!';
	}
	add_filter( 'login_errors', 'no_wordpress_errors' );
	
	add_filter('redirect_canonical', 'stop_guessing');
	function stop_guessing($url) {
		if (is_404()) {
			return false;
		}
		return $url;
	}
	add_filter('show_admin_bar', '__return_false');
	
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	
	remove_action( 'wp_print_styles', 'rams_load_style' );
	
	// Register and enqueue styles
	function rams_load_style1() {
		if ( !is_admin() ) {
	    	wp_register_style( 'rams_googleFonts', '//fonts.googleapis.com/css?family=Lato::400,700,400italic,700italic' );
	    	wp_enqueue_style( 'rams_googleFonts' );
		}
	}

	add_action( 'wp_print_styles', 'rams_load_style1' );
	
	// Enqueue parent theme styles
	function my_theme_enqueue_styles() {
    		$parent_style = 'rams-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	}
	
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>