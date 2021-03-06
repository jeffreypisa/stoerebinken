<?php

// ACF Block: Anatomie
	
add_action( 'acf/init', 'acf_init_anatomie' );
function acf_init_anatomie() {
    // Check function exists.
    if( function_exists('acf_register_block') ) {
        
        // Register a new block.
        acf_register_block(array(
            'name'				=> 'Anatomie',
            'title'				=> __( 'Anatomie', 'your-text-domain' ),
            'description'		=> __( 'anatomie tekst', 'your-text-domain' ),
            'render_callback'	=> 'acfblock_anatomie',
            'category'			=> 'formatting',
            'icon'				=> 'editor-spellcheck',
            'keywords'		    => array( 'anatomie' ),
        ) );
    }
}
function acfblock_anatomie( $block, $content = '', $is_preview = false ) {
    $context = Timber::get_context();
    
    // Store block values.
    $context['block'] = $block;

    // Store field values.
    $context['fields'] = get_fields(); 

    // Store $is_preview value.
    $context['is_preview'] = $is_preview; 

    // Render the block.
    Timber::render( 'templates/block/anatomie.twig', $context );
}