<?php
// Add page option
if( function_exists('acf_add_options_page') ) {
	$linkicon = home_url().'/wp-content/uploads/2023/03/Maskp.png';
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'icon_url' => $linkicon,
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'About Us',
		'menu_title'	=> 'Clever Service',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Sticky',
		'menu_title'	=> 'Sticky',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Cấu hình email SMTP',
		'menu_title'	=> 'Email SMTP',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

add_filter( 'flatsome_lightbox_close_btn_inside', '__return_true' );