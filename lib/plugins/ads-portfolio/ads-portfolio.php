<?php
/**
 * Plugin Name: ADS Portfolio Custom Post and Taxonomy Types
 * Plugin URI: #
 * Version: 1.0
 * Author: Bruno Luiz
 * Author URI: http://brunoluiz.net
 * Description: A simple portfolio system
 */

add_action('init', 'add_custom_post_type');
add_action('init', 'add_custom_taxonomies');

function add_custom_post_type() {
  register_post_type( 'project', array(
    'labels' => array(
      'name'               => _x( 'Portfolio projects', 'post type general name', 'ads-project' ),
      'singular_name'      => _x( 'Project', 'post type singular name', 'ads-project' ),
      'menu_name'          => _x( 'Projects', 'admin menu', 'ads-project' ),
      'name_admin_bar'     => _x( 'Portfolio Project', 'add new on admin bar', 'ads-project' ),
      'add_new'            => _x( 'Add New Project', 'project', 'ads-project' ),
      'add_new_item'       => __( 'Add New Project', 'ads-project' ),
      'new_item'           => __( 'New Project', 'ads-project' ),
      'edit_item'          => __( 'Edit Project', 'ads-project' ),
      'view_item'          => __( 'View Project', 'ads-project' ),
      'all_items'          => __( 'All Projects', 'ads-project' ),
      'search_items'       => __( 'Search Projects', 'ads-project' ),
      'parent_item_colon'  => __( 'Parent Projects:', 'ads-project' ),
      'not_found'          => __( 'No project found.', 'ads-project' ),
      'not_found_in_trash' => __( 'No project found in Trash.', 'ads-project' ),
    ),
    // Frontend
    'has_archive'        => true,
    'public'             => true,
    'publicly_queryable' => true,
    // Admin
    'capability_type'    => 'post',
    'menu_icon'          => 'dashicons-businessman',
    'menu_position'      => 20,
    'query_var'          => true,
    'show_in_menu'       => true,
    'show_ui'            => true,
    'supports'           => array('title', 'editor', 'thumbnail', 'revisions'),
    'taxonomies'         => array('skill'),
    'rewrite'            => false
  ));

  wp_insert_term(
    'Portfolio Categories', // the term
    'category',             // the taxonomy
    array(
      'description'=> 'Portfolio Categories',
      'slug' => 'portfolio'
    ));
}

function add_custom_taxonomies() {
  register_taxonomy('skill', 'project', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    'public' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Skills', 'taxonomy general name' ),
      'singular_name' => _x( 'Skill', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Skills' ),
      'all_items' => __( 'All Skills' ),
      'parent_item' => __( 'Parent Skill' ),
      'parent_item_colon' => __( 'Parent Skill:' ),
      'edit_item' => __( 'Edit Skill' ),
      'update_item' => __( 'Update Skill' ),
      'add_new_item' => __( 'Add New Skill' ),
      'new_item_name' => __( 'New Skill Name' ),
      'menu_name' => __( 'Skills' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'skills', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true, // This will allow URL's like "/locations/boston/cambridge/"
    )
  ));
}