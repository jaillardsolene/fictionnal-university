<? function university_post_types() {
    register_post_type("event", array(
        'public' => true, // Affiche un nouvel onglet Post dans le deshboard WP
        'labels' => array( // Change le nom de cet onglet
            'name' => 'Events'
        ),
        'menu_icon' => 'dashicons-calendar' //Ajouter une icone au nouvel onglet (liste ici :https://developer.wordpress.org/resource/dashicons/)

    ));
}
add_action("init", "university_post_types");
