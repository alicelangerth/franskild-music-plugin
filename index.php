<?php
/**
* Plugin Name: Franskild music plugin
* Description: Plugin for music page
* Author: Alice Langerth and Petra Hagman
* Version: 1.0
**/

//Custom post type for music page
defined( 'ABSPATH' ) or die ( 'No script kiddies please!' );

function franskild_music_plugin() {

	$labels = array(
		'name'				=> 'Music',
		'singular_name'		=> 'Music Item',
		'add_new'			=> 'Add',
		'add_new_item'		=> 'Add music',
		'edit_item'			=> 'Edit',
		'new_item'			=> 'Add new item',
		'all_items'			=> 'All music',
		'view_items'		=> 'Show music items',
		'search_items'		=> 'Search',
		'not_found'			=> 'Could not find a music item',
		'not_fond_in_trash'	=> 'Could not find a music item in the trash',
		'menu_name'			=> 'Music'
		);

	$args = array(
		'labels'			=> $labels,
		'description'		=>'Music',
		'public'			=> true,
		'menu_position'		=> 5,
		'menu_icon'			=> 'dashicons-format-audio',
		'supports'			=> array(
								'title',
								'editor',
								'thumbnail',
								'author',
								'excert',
								'page-attributes',
								),
		'has_archive'		=> true,
		'rewrite'			=> array(
								'slug' 	=> 'our-music',
								'with_front' => true
								)
		);

	register_post_type( 'franskild_cpt_music', $args );

}

add_action( 'init', 'franskild_music_plugin');

?>
