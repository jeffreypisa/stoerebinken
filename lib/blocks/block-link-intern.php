<?php

// ACF Block: link_intern
	
add_action( 'acf/init', 'acf_init_link_intern' );
function acf_init_link_intern() {
    // Check function exists.
    if( function_exists('acf_register_block') ) {
        
        // Register a new block.
        acf_register_block(array(
            'name'				=> 'link_intern',
            'title'				=> __( 'Linkblok', 'your-text-domain' ),
            'description'		=> __( 'Link met tekst en afbeelding', 'your-text-domain' ),
            'render_callback'	=> 'acfblock_link_intern',
            'category'			=> 'formatting',
            'icon'				=> 'admin-comments',
            'keywords'		    => array( 'link_intern' ),
        ) );
    }
}
function acfblock_link_intern( $block, $content = '', $is_preview = false ) {
    $context = Timber::get_context();
    
    // Store block values.
    $context['block'] = $block;

    // Store field values.
    $context['fields'] = get_fields(); 

    // Store $is_preview value.
    $context['is_preview'] = $is_preview; 

    // Render the block.
    Timber::render( 'templates/block/link_intern.twig', $context );
}