<?php

  function white_rock_college_files() {
    wp_enqueue_script('main-college-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '', true);
    wp_enqueue_style('fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('college_main_styles', get_stylesheet_uri());
  };

  add_action( 'wp_enqueue_scripts','white_rock_college_files' );

  function college_features() {
    add_theme_support( 'title-tag' );
    register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
    register_nav_menu( 'footerLocation1', 'Footer Menu Location 1' );
    register_nav_menu( 'footerLocation2', 'Footer Menu Location 2' );
  }

  add_action( 'after_setup_theme', 'college_features' );

  function college_adjust_queries( $query ) {
    $today = date('Ymd');
    if (!is_admin() AND is_post_type_archive('program') AND $query->is_main_query() ) {
      $query->set('orderby', 'title');
      $query->set('order', 'ASC');
      $query->set('posts_per_page', -1);
    }
    if ( !is_admin() AND is_post_type_archive('events') AND $query->is_main_query() ) {
      $query->set('meta_key', 'event_date');
      $query->set('orderby', 'meta_value_num');
      $query->set('order', 'ASC');
      $query->set('meta_query', array(
        array(
          'key' => 'event_date',
          'compare' => '>=',
          'value' => $today,
          'type' => 'numeric',
        )
      ));
    }
  }

  add_action( 'pre_get_posts', 'college_adjust_queries' );
