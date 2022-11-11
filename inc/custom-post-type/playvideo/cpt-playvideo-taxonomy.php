<?php

// Register Custom Post Type - Taxonomy - Play Video

add_action('init', 'playvideo_categories_register');
function playvideo_categories_register() {
$labels = array(
    'name'                          => 'Categorias',
    'singular_name'                 => 'Videos Category',
    'search_items'                  => 'Search Videos Categories',
    'popular_items'                 => 'Popular Videos Categories',
    'all_items'                     => 'All Videos Categories',
    'parent_item'                   => 'Parent Video Category',
    'edit_item'                     => 'Edit Video Category',
    'update_item'                   => 'Update Video Category',
    'add_new_item'                  => 'Add New Video Category',
    'new_item_name'                 => 'New Video Category',
    'separate_items_with_commas'    => 'Separate categories with commas',
    'add_or_remove_items'           => 'Add or remove categories',
    'choose_from_most_used'         => 'Choose from most used categories'
    );

$rewrite = array(
        'slug'                       => '',
        'with_front'                 => true,
        'hierarchical'               => true,
    );

$args = array(    
    'labels'                        => $labels,
    'public'                        => true,
    'hierarchical'                  => true,
    'show_ui'                       => true,
    'show_admin_column'          	=> true,
    'show_in_nav_menus'             => true,    
    'rewrite'                       => $rewrite,
    'query_var'                     => true,
    'show_in_rest'         			=> true,
    'has_archive'                   => true,
    'default_term'					=> 'sem-categoria',    
	);
	
register_taxonomy( 'playvideo_categories', array( 'play_video'), $args );
}

// Set default categories
add_action('init', 'playvideo_categories_default');

function playvideo_categories_default() {
    $taxonomyName = 'playvideo_categories';

    $categories = [    	
        "filme" => "Filmes",
        "documentario" => "Documentários",
        "serie" => "Séries",        
    ];

    foreach ($categories as $slug => $name) {
        wp_insert_term($name, $taxonomyName, [
            'slug' => $slug,
        ]);
    }
}


// Register Custom Post Type - Taxonomy - Play Video - Tags
add_action('init', 'playvideo_tags_register');
function playvideo_tags_register() {
$labels = array(
    'name'                          => 'Tags',
    'singular_name'                 => 'Videos Tags',
    'search_items'                  => 'Search Videos Tags',
    'popular_items'                 => 'Popular Videos Tags',
    'all_items'                     => 'All Videos Tags',    
    'edit_item'                     => 'Edit Video Tag',
    'update_item'                   => 'Update Video Tag',
    'add_new_item'                  => 'Add New Video Tag',
    'new_item_name'                 => 'New Video Tag',
    'separate_items_with_commas'    => 'Separate tags with commas',
    'add_or_remove_items'           => 'Add or remove tags',
    'choose_from_most_used'         => 'Choose from most used tags'
    );

$args = array(    
    'labels'                        => $labels,
    'public'                        => true,
    'hierarchical'                  => false,
    'show_ui'                       => true,
    'show_admin_column'             => true,
    'show_in_nav_menus'             => true,    
    'query_var'                     => true,
    'show_in_rest'                  => true,    
    );
    
register_taxonomy( 'playvideo_tags', array( 'play_video'), $args );
}