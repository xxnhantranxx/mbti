<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Rooms.
	 */

	$labels = [
		"name" => __( "Rooms", "custom-post-type-ui" ),
		"singular_name" => __( "Rooms", "custom-post-type-ui" ),
		"menu_name" => __( "Phòng", "custom-post-type-ui" ),
		"all_items" => __( "Tất cả Phòng", "custom-post-type-ui" ),
		"add_new" => __( "Thêm mới", "custom-post-type-ui" ),
		"add_new_item" => __( "Add new Rooms", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Rooms", "custom-post-type-ui" ),
		"new_item" => __( "New Rooms", "custom-post-type-ui" ),
		"view_item" => __( "View Rooms", "custom-post-type-ui" ),
		"view_items" => __( "View Rooms", "custom-post-type-ui" ),
		"search_items" => __( "Search Rooms", "custom-post-type-ui" ),
		"not_found" => __( "No Rooms found", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No Rooms found in trash", "custom-post-type-ui" ),
		"parent" => __( "Parent Rooms:", "custom-post-type-ui" ),
		"featured_image" => __( "Featured image for this Rooms", "custom-post-type-ui" ),
		"set_featured_image" => __( "Set featured image for this Rooms", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Remove featured image for this Rooms", "custom-post-type-ui" ),
		"use_featured_image" => __( "Use as featured image for this Rooms", "custom-post-type-ui" ),
		"archives" => __( "Rooms archives", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insert into Rooms", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Upload to this Rooms", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filter Rooms list", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Rooms list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Rooms list", "custom-post-type-ui" ),
		"attributes" => __( "Rooms attributes", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Rooms", "custom-post-type-ui" ),
		"item_published" => __( "Rooms published", "custom-post-type-ui" ),
		"item_published_privately" => __( "Rooms published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Rooms reverted to draft.", "custom-post-type-ui" ),
		"item_scheduled" => __( "Rooms scheduled", "custom-post-type-ui" ),
		"item_updated" => __( "Rooms updated.", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Rooms:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Rooms", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => true,
		"rewrite" => [ "slug" => "rooms", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 7,
		"supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
		"show_in_graphql" => false,
	];

	// register_post_type( "Rooms", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );