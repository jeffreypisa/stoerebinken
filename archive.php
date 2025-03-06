<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.2
 */
	 
$templates = array( 'archive-' . $post->post_type . '.twig', 'archive.twig', 'index.twig' );

$context = Timber::get_context();

$postType = get_queried_object();
$currentPostType = get_post_type();

$context['posttype_current'] = $currentPostType;

$categories = get_the_category();

$category_id = $wp_query->get_queried_object_id();
$context['current_category'] = $category_id;
$context['title'] = single_tag_title( '', false );

/* Load categories */
if ($currentPostType == 'werk') {
	$terms = \Timber::get_terms(array('taxonomy' => 'werk-categorie', 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => true)); 
	$terms_childs = \Timber::get_terms(array('taxonomy' => 'werk-categorie', 'orderby' => 'slug', 'hide_empty' => true)); 
	$context['categories'] = $terms;
	$context['child_categories'] = $terms_childs;
	$thecat = 'werk-categorie';
	$context['posttype_link'] = get_post_type_archive_link( 'werk' );

} elseif ($currentPostType == 'producten') {  // Voeg Producten toe
	$terms = \Timber::get_terms(array('taxonomy' => 'producten-categorie', 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => true)); 
	$terms_childs = \Timber::get_terms(array('taxonomy' => 'producten-categorie', 'orderby' => 'slug', 'hide_empty' => true)); 
	$context['categories'] = $terms;
	$context['child_categories'] = $terms_childs;
	$thecat = 'producten-categorie';
	$context['posttype_link'] = get_post_type_archive_link( 'producten' );

} elseif ($currentPostType == 'pro_fonts') {
	$terms = \Timber::get_terms(array('taxonomy' => 'fonts-categorie', 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => true)); 
	$terms_childs = \Timber::get_terms(array('taxonomy' => 'fonts-categorie', 'orderby' => 'slug', 'hide_empty' => true)); 
	$context['categories'] = $terms;
	$context['child_categories'] = $terms_childs;
	$thecat = 'fonts-categorie';
	$context['posttype_link'] = get_post_type_archive_link( 'pro_fonts' );
} else {
	$terms = \Timber::get_terms(array('taxonomy' => 'category', 'hide_empty' => true)); 
	$context['categories'] = $terms;
	$thecat = 'category';
	$context['posttype_link'] = '/blog';
}

if(empty($category_id)) {
	$args = array(
	  'post_type'			  => $currentPostType,
		'posts_per_page'  => -1,
	);
} else {
	$args = array(
	  'post_type'			  => $currentPostType,
		'posts_per_page'  => -1,
		'tax_query' => array(
		array(
			'taxonomy' => $thecat,
			'field' => 'term_id',
			'terms' => $category_id,
		),
	  ),
	);
}

$context['posts'] = Timber::get_posts($args);


Timber::render( $templates, $context );