<?php

/*
	
@package lsstheme
	
	========================
		ADMIN PAGE
	========================
*/

function lss_add_admin_page() {
	
	add_menu_page( 'lss Theme Options', 'lss', 'manage_options', 'cesar-lss', 'lss_theme_create_page', get_template_directory_uri() . '/img/sunset-icon.png', 110 );
	add_submenu_page( 'cesar-lss', 'lss Theme Options', 'General', 'manage_options', 'cesar_lss_general', 'lss_theme_create_page' );
	add_submenu_page( 'cesar-lss', 'lss CSS Options', 'Custom CSS', 'manage_options', 'cesar_lss_css', 'lss_theme_settings_page');
	remove_submenu_page('cesar-lss','cesar-lss');
	

}
add_action( 'cesar-lss', 'cesar-lss' );

// This function is triggered by add_menu_page()funtion
function lss_theme_create_page() {
	//generation of our admin page
}

function lss_theme_settings_page() {
	
	echo '<h1>Sunset Custom CSS</h1>';
	
}