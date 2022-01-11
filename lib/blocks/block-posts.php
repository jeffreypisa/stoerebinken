<?php

// ACF Block: Posts
	
add_action( 'acf/init', 'acf_init_posts' );
function acf_init_posts() {
    // Check function exists.
    if( function_exists('acf_register_block') ) {
        
        // Register a new block.
        acf_register_block(array(
            'name'				=> 'posts',
            'title'				=> __( 'Posts', 'your-text-domain' ),
            'description'		=> __( 'Toon posts', 'your-text-domain' ),
            'render_callback'	=> 'acfblock_posts',
            'category'			=> 'formatting',
            'icon'				=> 'admin-post',
            'keywords'		    => array( 'posts' ),
        ) );
    }
}
function acfblock_posts( $block, $content = '', $is_preview = false ) {
    $context = Timber::get_context();
    
    // Store block values.
    $context['block'] = $block;

    // Store field values.
    $context['fields'] = get_fields(); 

    // Store $is_preview value.
    $context['is_preview'] = $is_preview; 

    // Render the block.
    Timber::render( 'templates/block/posts.twig', $context );
}