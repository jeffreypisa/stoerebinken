<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();

$post = Timber::query_post();
$context['post'] = $post;

$currentPostType = get_post_type();

$context['posttype_current'] = $currentPostType;

$args = array(
  'post_type'			  => $currentPostType,
	'posts_per_page'  => -1,
);

$context['firstlast'] = Timber::get_posts($args);

// Get posts

Timber::render( array( 'single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig' ), $context );