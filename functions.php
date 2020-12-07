<?php
add_action( 'wp_enqueue_scripts', 'conectStyle' );
	function conectStyle() {
		wp_enqueue_style( 'mainStyle', get_template_directory_uri() . '/asets/css/style.css');
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_template_directory_uri() . '/asets/js/jquery-3.3.1.min.js');
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'script', get_template_directory_uri() . '/asets/js/script.js');
	}

	function citLabsetup(){
		register_nav_menu( 'primary', 'Primary Menu' );
	}
add_action( 'after_setup_theme', 'citLabsetup' );

?>



