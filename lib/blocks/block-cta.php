<?php

// ACF Block: CTA
	
add_action( 'acf/init', 'acf_init_CTA' );
function acf_init_CTA() {
    // Check function exists.
    if( function_exists('acf_register_block') ) {
        
        // Register a new block.
        acf_register_block(array(
            'name'				=> 'CTA',
            'title'				=> __( 'CTA', 'your-text-domain' ),
            'description'		=> __( 'Deze content wordt weergegeven in een grijs vlak', 'your-text-domain' ),
            'render_callback'	=> 'acfblock_cta',
            'category'			=> 'formatting',
            'icon'				=> 'warning',
            'keywords'		    => array( 'CTA' ),
        ) );
    }
}
function acfblock_CTA( $block, $content = '', $is_preview = false ) {
    $context = Timber::get_context();
    
    // Store block values.
    $context['block'] = $block;

    // Store field values.
    $context['fields'] = get_fields(); 

    // Store $is_preview value.
    $context['is_preview'] = $is_preview; 

    // Render the block.
    Timber::render( 'templates/block/cta.twig', $context );
}