<?php
remove_action( 'genesis_meta', 'genesis_load_stylesheet' );

register_sidebar(array(
        'name' => 'Sidebar',
        'before_widget' => '<div class="widget_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
));

register_sidebar(array(
        'name' => 'header_right',
        'before_widget' => '<div class="header_right %1$s" id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
));

add_action( 'init', 'create_team_member' );
function create_team_member() {
  register_post_type( 'team_member',
    array(
      'labels' => array(
        'name' => __( 'Team members' ),
        'singular_name' => __( 'Name' ),
        'set_featured_image' => true
      ),
      'public' => true,
      'capability_type' => 'post',
      'supports' => array(
        'thumbnail',
        'title',
        'editor',
        'custom-fields')
    )
  );
register_taxonomy('job', 'team_member', array( 'hierarchical' => true, 'label' => 'Job', 'query_var' => true, 'rewrite' => true ) );

}


add_theme_support( 'post-thumbnails' );
