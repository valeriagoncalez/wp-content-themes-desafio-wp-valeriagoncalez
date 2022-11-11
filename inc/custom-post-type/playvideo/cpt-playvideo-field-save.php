<?php
 // ACF - Filds - Json 
add_filter('acf/settings/save_json', 'playvideo_acf_json_save_point'); 
function playvideo_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/inc/custom-post-type/playvideo/json';
    
    
    // return
    return $path;
    
}