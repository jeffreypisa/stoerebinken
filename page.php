<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/views/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */ 

$context = Timber::get_context();

$post = new TimberPost();

$args_blog = array(
  'post_type'			  => 'post',
	'posts_per_page'  => 4,
);

$context['blog'] = Timber::get_posts($args_blog);

$args_werk = array(
  'post_type'			  => 'werk',
	'posts_per_page'  => 4,
);

$context['werk'] = Timber::get_posts($args_werk);

$args_klanten = array(
  'post_type'			  => 'klanten',
	'posts_per_page'  => -1,
	'orderby' => 'title',
  'order'   => 'ASC',
);

$context['klanten'] = Timber::get_posts($args_klanten);


$context['post'] = $post;

Timber::render( array( 'page-' . $post->post_name . '.twig', 'page.twig' ), $context );