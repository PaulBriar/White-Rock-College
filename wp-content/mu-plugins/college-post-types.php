<?php

function college_post_types() {
  register_post_type('Events', array(
    'public' => true,
    'menu_icon' => 'dashicons-calendar',
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event',
    )
  ));
}

add_action('init', 'college_post_types');

?>
