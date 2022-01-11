<?php 
	
// Add styles

function wds_gutenberg_assets() {
	wp_enqueue_style( 'wds-gutenberg-admin', get_stylesheet_directory_uri() . '/assets/css/gutenberg.css', array(), '1.0.0' );
}
add_action( 'enqueue_block_assets', 'wds_gutenberg_assets' );

// Gutenberg blocks

include 'blocks/block-cta.php';  
include 'blocks/block-link.php'; 
include 'blocks/block-link-intern.php'; 
include 'blocks/block-anatomie.php'; 
include 'blocks/block-download.php'; 
include 'blocks/block-accordion.php'; 
include 'blocks/block-quote.php'; 
include 'blocks/block-youtube.php'; 
include 'blocks/block-lead.php'; 
include 'blocks/block-break.php'; 
include 'blocks/block-font.php'; 
include 'blocks/block-posts.php'; 

/* Gutenberg editor

add_filter( 'allowed_block_types', 'misha_allowed_block_types' );
 
function misha_allowed_block_types( $allowed_blocks ) {
	return array(
		'core/image',
		'core/paragraph',
		'core/heading',
		'core/list',
		'core/table',
		'core-embed/youtube',
		'core-embed/vimeo',
		'acf/lead',
		'acf/info',
		'acf/quote',
		'acf/accordion',
		'acf/cta',
		'acf/link',
		'acf/link-intern',
		'acf/posts',
		'acf/font',
		'acf/anatomie'
	);
}
*/
?>