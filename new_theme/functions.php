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

add_image_size( 'team_member_profil', 120, 120, true);

// Création de texte explicatif
add_action( 'init', 'create_explication_content' );

function create_explication_content() {
    register_post_type( 'explicatif',
        array(
            'labels' => array(
                'name' => __( 'Explicatif' ),
                'singular_name' => __( 'Explicatif' ),
                'set_featured_image' => true
            ),
            'public' => true,
            'capability_type' => 'post',
            'supports' => array(
                'thumbnail',
                'editor',
                'title',
                'custom-field')
        )
    );
    //register_taxonomy('job', 'team', array( 'hierarchical' => true, 'label' => 'Job', 'query_var' => true, 'rewrite' => true ) );

}


// Création de partenaire

add_action( 'init', 'create_partners' );

function create_partners() {
    register_post_type( 'partenaires',
        array(
            'labels' => array(
                'name' => __( 'Partenaires' ),
                'singular_name' => __( 'Partenaires' ),
                'set_featured_image' => true
            ),
            'public' => true,
            'capability_type' => 'post',
            'supports' => array(
                'thumbnail',
                'editor',
                'title',
                'custom-field')
        )
    );
    //register_taxonomy('job', 'team', array( 'hierarchical' => true, 'label' => 'Job', 'query_var' => true, 'rewrite' => true ) );

}

// Pour définir un taille au fichier upload
add_image_size( 'partenaires_profil', 120, 120, true);


