<?php

/*
	
@package lsstheme
	
	========================
		ADMIN PAGE
	========================
*/

function lss_add_admin_page() {
	
	add_menu_page( 'LSS Theme Options', 'LSS', 'manage_options', 'cesar-lss', 'lss_theme_create_page', get_template_directory_uri() . '/img/sunset-icon.png', 110 );
	add_submenu_page( 'cesar-lss', 'LSS Theme Options', 'General', 'manage_options', 'cesar_lss', 'lss_theme_create_page' );

}
add_action( 'admin_menu', 'lss_add_admin_page' );

// This function is triggered by add_menu_page()funtion
function lss_theme_create_page() {
	//generation of our admin page
}

function lss_theme_settings_page() {
	
	echo '<h1>Sunset Custom CSS</h1>';
	
}