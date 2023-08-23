<?php

/*
	
@package lsstheme
	
	========================
		THEME FUNCTIONS
	========================
*/


function lss_theme_setup(){
	add_theme_support('menus');
    register_nav_menu('primary', 'Primary header navigation');
    register_nav_menu('secondary', 'Secondary footer navigation');
}
add_action('init','lss_theme_setup');