<?php
 
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $path;
    
}

function my_acf_flexible_content_layout_title( $title, $field, $layout, $i ) {
	
	
	$oldtitle = $title;
	
	// remove layout title from text
	$title = '';
	
	
	// load text sub field
	if( $text = get_sub_field('titel') ) {
		
		$title .= '<strong>' . $oldtitle . ' </strong> | ' . $text;
	
	} elseif( $text = get_sub_field('tekst') ) {
	
		$text = strip_tags($text);
		$text = substr($text,0,100).'...';
		$title .= '<strong>' . $oldtitle . ' </strong> | ' . $text;
		
	}
	else {
		
		$title = '<strong>' . $oldtitle . ' </strong>';
		
	}
	
	// return
	return $title;
	
}

// name
add_filter('acf/fields/flexible_content/layout_title/name=blokken', 'my_acf_flexible_content_layout_title', 10, 4);


	// Save author via acf field
	
 function my_acf_save_post( $post_id ) {
    // get new value
    $user_id = get_field('CUSTOM_AUTHOR');
	if($user_id){
		wp_update_post( array( 'ID'=>$post_id, 'post_author'=>$user_id) ); 
	}
}
add_action('acf/save_post', 'my_acf_save_post', 20);