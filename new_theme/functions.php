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
  register_post_type( 'team',
    array(
      'labels' => array(
        'name' => __( 'Teams' ),
        'singular_name' => __( 'Name' ),
        'set_featured_image' => true
      ),
      'public' => true,
      'capability_type' => 'post',
      'supports' => array(
        'thumbnail',
        'editor')
    )
  );
register_taxonomy('prenom', 'team', array( 'hierarchical' => true, 'label' => 'Prenom', 'query_var' => true, 'rewrite' => true ) );
register_taxonomy('nom', 'team', array( 'hierarchical' => true, 'label' => 'Nom', 'query_var' => true, 'rewrite' => true ) );

}


add_theme_support( 'post-thumbnails' );
