<?php

function college_post_types() {
  //Event Post Type
  register_post_type('events', array(
    'supports' => array(
      'title', 'editor', 'excerpt',
    ),
    'rewrite' => array(
      'slug' => 'events'
    ),
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-calendar',
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'event',
    )
  ));

  //Program Post Type
  register_post_type('program', array(
    'supports' => array(
      'title', 'editor',
    ),
    'rewrite' => array(
      'slug' => 'programs'
    ),
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-awards',
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs',
      'singular_name' => 'program',
    )
  ));
}

add_action('init', 'college_post_types');

?>
