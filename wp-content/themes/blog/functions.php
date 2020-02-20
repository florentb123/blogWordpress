<?php


function wpm_custom_post_type() {

// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
$labels = array(
    // Le nom au pluriel
    'name'                => _x( 'Personnes ', 'Post Type General Name'),
    // Le nom au singulier
    'singular_name'       => _x( 'Personne ', 'Post Type Singular Name'),
    // Le libellé affiché dans le menu
    'menu_name'           => __( 'Personnes '),
    // Les différents libellés de l'administration
    'all_items'           => __( 'Toutes les Personne'),
    'view_item'           => __( 'Voir les Personne'),
    'add_new_item'        => __( 'Ajouter une nouvelle Personne'),
    'add_new'             => __( 'Ajouter'),
    'edit_item'           => __( 'Editer la Personne'),
    'update_item'         => __( 'Modifier la Personne'),
    'search_items'        => __( 'Rechercher une Personne'),
    'not_found'           => __( 'Non trouvée'),
    'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
);

// On peut définir ici d'autres options pour notre custom post type

$args = array(
    'label'               => __( 'Personnes'),
    'description'         => __( 'Tous sur Personnes'),
    'labels'              => $labels,
    // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
    'supports'            => array( 'title', 'editor', 'excerpt',  'thumbnail',  'revisions', 'custom-fields', ),
    /* 
    * Différentes options supplémentaires
    */	
    'show_in_rest' => true,
    'hierarchical'        => false,
    'public'              => true,
    'has_archive'         => true,
    'rewrite'			  => array( 'slug' => 'Personnes'),

);

// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
register_post_type( 'personnes', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );