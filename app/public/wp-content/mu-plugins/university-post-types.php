<?php

function university_post_types() {
    // Event Post Type
    register_post_type("event", array(
        'supports' => array('title','editor', 'excerpt'),  // Permet d'afficher la gestion des extraits dans le dashboard WP et d’autre éléments (custom Fields….)
        'rewrite' => array('slug' => 'events'), // Permet de changer le nom de la page dans l'URL
        'has_archive' => true, // Fait apparaitre le nom de la page dans l'URL
        'public' => true, // Affiche un nouvel onglet Post dans le dashboard WP
        'labels' => array( // Change le nom de cet onglet
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event', // Afficher du texte a la place de celui par defaut pour nommer Events
            'all_items' => 'All Events', // Afficher du texte a la place de celui par defaut pour nommer Events
            'singular_name' => 'Event'

        ),
        'menu_icon' => 'dashicons-calendar' //Ajouter une icone au nouvel onglet (liste ici :https://developer.wordpress.org/resource/dashicons/)

    ));

    // Program Post Type
    register_post_type('Program', array(
        'supports' => array('title','editor'),  // Permet d'afficher la gestion des extraits dans le dashboard WP et d’autre éléments (custom Fields….)
        'rewrite' => array('slug' => 'Programs'), // Permet de changer le nom de la page dans l'URL
        'has_archive' => true, // Fait apparaitre le nom de la page dans l'URL
        'public' => true, // Affiche un nouvel onglet Post dans le dashboard WP
        'labels' => array( // Change le nom de cet onglet
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program', // Afficher du texte a la place de celui par defaut pour nommer Events
            'all_items' => 'All Programs', // Afficher du texte a la place de celui par defaut pour nommer Events
            'singular_name' => 'Program'

        ),
        'menu_icon' => 'dashicons-awards' //Ajouter une icone au nouvel onglet (liste ici :https://developer.wordpress.org/resource/dashicons/)

    ));
}
add_action("init", "university_post_types");