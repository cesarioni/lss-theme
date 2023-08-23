<?php

/*
	
@package lsstheme
	
	========================
		ADMIN ENQUEUE FUNCTIONS
	========================
*/
function lss_load_admin_scripts(){
    wp_register_style('customstyle',get_template_directory_uri().'/css./lss-theme.css', array(), '1.0.0', 'all');
    wp_enqueue_style('customstyle');

    wp_enqueue_script('customjs',get_template_directory_uri().'/css./lss-theme.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'lss_load_admin_scripts');