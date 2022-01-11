<?php

// ACF Block: Font
	
add_action( 'acf/init', 'acf_init_font' );
function acf_init_font() {
    // Check function exists.
    if( function_exists('acf_register_block') ) {
        
        // Register a new block.
        acf_register_block(array(
            'name'				=> 'font',
            'title'				=> __( 'Font', 'your-text-domain' ),
            'description'		=> __( 'Font tekst', 'your-text-domain' ),
            'render_callback'	=> 'acfblock_font',
            'category'			=> 'formatting',
            'icon'				=> 'editor-spellcheck',
            'keywords'		    => array( 'font' ),
        ) );
    }
}
function acfblock_Font( $block, $content = '', $is_preview = false ) {
    $context = Timber::get_context();
    
    // Store block values.
    $context['block'] = $block;

    // Store field values.
    $context['fields'] = get_fields(); 

    // Store $is_preview value.
    $context['is_preview'] = $is_preview; 

    // Render the block.
    Timber::render( 'templates/block/font.twig', $context );
}