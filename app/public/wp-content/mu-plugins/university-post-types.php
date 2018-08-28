<?php

function university_post_types() {
    register_post_type("event", array(
        'public' => true, // Affiche un nouvel onglet Post dans le deshboard WP
        'labels' => array( // Change le nom de cet onglet
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event', // Afficher du texte a la place de celui par defaut pour nommer Events
            'all_items' => 'All Events', // Afficher du texte a la place de celui par defaut pour nommer Events
            'singular_name' => 'Event'

        ),
        'menu_icon' => 'dashicons-calendar' //Ajouter une icone au nouvel onglet (liste ici :https://developer.wordpress.org/resource/dashicons/)

    ));
}
add_action("init", "university_post_types");