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

add_theme_support( 'post-thumbnails' );

add_image_size( 'team_member_profil', 120, 120, true);

// Plugin pout le contexte
add_action( 'init', 'create_contexte_content' );

function create_contexte_content() {
    register_post_type( 'contexte',
        array(
            'labels' => array(
                'name' => __( 'Contexte' ),
                'singular_name' => __( 'Contexte' ),
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
}


// Plugin pout les projets

add_action( 'init', 'create_projet_content' );

function create_projet_content() {
    register_post_type( 'projet',
        array(
            'labels' => array(
                'name' => __( 'Projet' ),
                'singular_name' => __( 'Projet' ),
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
}

// Plugin pout les objectifs

add_action( 'init', 'create_objectif_content' );

function create_objectif_content() {
    register_post_type( 'objectif',
        array(
            'labels' => array(
                'name' => __( 'Objectif' ),
                'singular_name' => __( 'Objectif' ),
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
}

// Plugin pout les objectifs chiffres

add_action( 'init', 'create_chiffre_content' );

function create_chiffre_content() {
    register_post_type( 'chiffre',
        array(
            'labels' => array(
                'name' => __( 'Chiffre' ),
                'singular_name' => __( 'Chiffre' ),
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
}

// Plugin pour les membres de l'équipe

add_action( 'init', 'create_team_member' );

function create_team_member() {
    register_post_type( 'Equipe',
        array(
            'labels' => array(
                'name' => __( 'Equipe' ),
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


// Plugin pour les partenaires

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


