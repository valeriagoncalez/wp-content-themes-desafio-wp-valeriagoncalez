<?php
if ( ! function_exists('custom_post_type_playvideo') ) {

// Register Custom Post Type - Play Video
function custom_post_type_playvideo() {

	$labels = array(
		'name'                  => _x( 'Videos', 'Post Type General Name', 'bx-desafio' ),
		'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'bx-desafio' ),
		'menu_name'             => __( 'Videos', 'bx-desafio' ),
		'name_admin_bar'        => __( 'Video', 'bx-desafio' ),
		'archives'              => __( 'Item Archives', 'bx-desafio' ),
		'attributes'            => __( 'Item Attributes', 'bx-desafio' ),
		'parent_item_colon'     => __( 'Parent Video:', 'bx-desafio' ),
		'all_items'             => __( 'All Videos', 'bx-desafio' ),
		'add_new_item'          => __( 'Add New Video', 'bx-desafio' ),
		'add_new'               => __( 'New Video', 'bx-desafio' ),
		'new_item'              => __( 'New Item', 'bx-desafio' ),
		'edit_item'             => __( 'Edit Video', 'bx-desafio' ),
		'update_item'           => __( 'Update Video', 'bx-desafio' ),
		'view_item'             => __( 'View Video', 'bx-desafio' ),
		'view_items'            => __( 'View Items', 'bx-desafio' ),
		'search_items'          => __( 'Search videos', 'bx-desafio' ),
		'not_found'             => __( 'No videos found', 'bx-desafio' ),
		'not_found_in_trash'    => __( 'No videos found in Trash', 'bx-desafio' ),
		'featured_image'        => __( 'Featured Image', 'bx-desafio' ),
		'set_featured_image'    => __( 'Set featured image', 'bx-desafio' ),
		'remove_featured_image' => __( 'Remove featured image', 'bx-desafio' ),
		'use_featured_image'    => __( 'Use as featured image', 'bx-desafio' ),
		'insert_into_item'      => __( 'Insert into item', 'bx-desafio' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'bx-desafio' ),
		'items_list'            => __( 'Items list', 'bx-desafio' ),
		'items_list_navigation' => __( 'Items list navigation', 'bx-desafio' ),
		'filter_items_list'     => __( 'Filter items list', 'bx-desafio' ),
	);
	$args = array(
		'labels'                => $labels,
		'description'           => __( 'Video information pages.', 'bx-desafio' ),		
		'show_in_rest' 			=> true,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),		
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-editor-video',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,			
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => true,		
		'taxonomies'   			=> array( 'playvideo_categories', 'playvideo_tags' ),
		'capability_type'       => 'page',		
	);
	register_post_type( 'play_video', $args );
}
add_action( 'init', 'custom_post_type_playvideo', 0 );

}