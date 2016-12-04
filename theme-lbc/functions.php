<?php
// Supprime la barre d’outils (code HTML généré par WordPress plus concis)
add_action('after_setup_theme', 'plus_admin_bar');
function plus_admin_bar()
{
    show_admin_bar(false);
}

// définit que notre thème supporte (préfère) les balises html5
add_theme_support('html5');

// A ajouter en plus du 'supports' => array( ..,'thumbnail',..) pour pouvoir saisir l'image "à la une" dans l'interface
// d'un type personnalisé.
add_theme_support('post-thumbnails');
// notre thème permet à l’utilisateur de saisir des menus dans l’interface d’administration
add_theme_support('menus');
/*
 * Définit le nom des menus que l’utilisateur pourra ajouter
 */
register_nav_menus(array(
    // une ligne pour chaque menu : identifiant et nom affiché
    'principale' => 'Navigation principale',
));

add_action('wp_enqueue_scripts', 'lure_basket_club_style');
function lure_basket_club_style()
{
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('header', get_stylesheet_directory_uri() . '/css/header.css');
    wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/css/footer.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css');
    wp_enqueue_style('calendrier', get_stylesheet_directory_uri() . '/css/calendrier.css');
    wp_enqueue_style('matchs', get_stylesheet_directory_uri() . '/css/match.css');
    wp_enqueue_style('grid-2', get_stylesheet_directory_uri() . '/css/grid-2.css');
    wp_enqueue_style('equipes', get_stylesheet_directory_uri() . '/css/equipes.css');
    wp_enqueue_style('contenu', get_stylesheet_directory_uri() . '/css/contenu.css');
    wp_enqueue_style('formations', get_stylesheet_directory_uri() . '/css/formations.css');

    wp_enqueue_script('menu', get_stylesheet_directory_uri() . '/js/menu.js');
}

// Ajout type custom
add_theme_support('post-thumbnails');

add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type('actualites',
        array(
            'labels' => array(
                'name' => __('Actualites'),
                'singular_name' => __('actualité')
            ),
            'public' => true,
            'has_archive' => true,
            'query_var' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),
        )
    );
    register_post_type('matchs',
        array(
            'labels' => array(
                'name' => __('Matchs'),
                'singular_name' => __('matchs')
            ),
            'public' => true,
            'has_archive' => true,
            'query_var' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),
        )
    );
    register_post_type('equipes',
        array(
            'labels' => array(
                'name' => __('Equipes'),
                'singular_name' => __('Equipe')
            ),
            'public' => true,
            'has_archive' => true,
            'query_var' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),
        )
    );

    register_post_type('sponsors',
        array(
            'labels' => array(
                'name' => __('Sponsors'),
                'singular_name' => __('Sponsors')
            ),
            'public' => true,
            'has_archive' => true,
            'query_var' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),
        )
    );

    register_post_type('galerie',
        array(
            'labels' => array(
                'name' => __('Galerie'),
                'singular_name' => __('Galerie')
            ),
            'public' => true,
            'has_archive' => true,
            'query_var' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),
        )
    );

    register_post_type('evenement',
        array(
            'labels' => array(
                'name' => __('Evenement'),
                'singular_name' => __('evenement')
            ),
            'public' => true,
            'has_archive' => true,
            'query_var' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),
        )
    );
    flush_rewrite_rules(false);
}

add_action('init', 'ajout_taxonomy');
function ajout_taxonomy()
{
    // répétez pour chaque taxonomie : lui donner un nom ici 'competences'
    register_taxonomy('saisons',
        // le type ou les types classés par cette taxonomie (séparé par des virgules)
        array('evenement',),
        array(
            'label' => __('saisons'),
            'hierarchical' => true
        )
    );

    register_taxonomy('categorie-equipe',
        // le type ou les types classés par cette taxonomie (séparé par des virgules)
        array('matchs',),
        array(
            'label' => __('Catégorie équipe'),
            'hierarchical' => true
        )
    );


    // Mettre en commentaire la ligne qui suit après avoir testé le bon fonctionnement.
    flush_rewrite_rules(false);
}

add_filter('rwmb_meta_boxes', 'ajout_meta_boxes');
function ajout_meta_boxes($meta_boxes)
{
    // Date (yyyy/mm/dd)
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'Date',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('actualites', 'matchs', 'evenement'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Date',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_date',
                // son type
                'type' => 'date',
            ),
        )
    );

    // Sous titre actualité
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'sous_titre_actualite',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('actualites'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Sous-titre',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_sous-titre',
                // son type
                'type' => 'text',
            ),
        )
    );

    // Heure
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'Horaire',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('matchs'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Heure du début du match',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_heure_debut',
                // son type
                'type' => 'time',
            ),
        )
    );

    // Nom entraineur
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'Entraineur',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('equipes'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'entraineur',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_entraineur',
                // son type
                'type' => 'text',
            ),
        )
    );

    // Arbitres, marqueurs, chronométreur
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'Officiels',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('matchs'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Arbitre 1',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_arbitre_1',
                // son type
                'type' => 'text',
            ),
            array(
                // Son nom affiché
                'name' => 'Arbitre 2',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_arbitre_2',
                // son type
                'type' => 'text',
            ),
            array(
                // Son nom affiché
                'name' => 'Marqueur',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_marqueur',
                // son type
                'type' => 'text',
            ),
            array(
                // Son nom affiché
                'name' => 'Chronometreur',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_chronometreur',
                // son type
                'type' => 'text',
            ),
        )
    );

    // Numero téléphone entraineur
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'Numero telephone',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('equipes'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Numéro téléphone entraineur',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_num_tel',
                // son type
                'type' => 'text',
            ),
        )
    );

    // Couleur maillot (texte)
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'couleur_maillot',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('equipes'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Couleur des maillots',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_couleur_maillot_texte',
                // son type
                'type' => 'text',
            ),
        )
    );

    // Sponsors equipes
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'sponsors',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('equipes'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Sponsors équipe',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_sponsors',
                // son type
                'type' => 'text',
            ),
        )
    );

    // Equipe
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'Equipes',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('matchs'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Equipe à domicile',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_equipe_1',
                // son type
                'type' => 'text',
            ),
            array(
                // Son nom affiché
                'name' => 'Equipe extérieure',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_equipe_2',
                // son type
                'type' => 'text',
            ),
        )
    );

    // Catégorie
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'Categorie',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('matchs'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Catégorie',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_categorie',
                // son type
                'type' => 'text',
            ),
        )
    );

    // Salle
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'Salle',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('matchs'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Salle',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_salle',
                // son type
                'type' => 'text',
            ),
        )
    );

    // Ville
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'Ville',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('matchs'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Ville',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_ville',
                // son type
                'type' => 'text',
            ),
        )
    );

    // Couleur maillot (picker)
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'Couleur des maillots',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('matchs'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Couleur maillot equipes domicile',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_couleur_maillot_picker_1',
                // son type
                'type' => 'color',
            ),
            array(
                // Son nom affiché
                'name' => 'Couleur maillot equipes extérieur',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_couleur_maillot_picker_2',
                // son type
                'type' => 'color',
            ),
        )
    );

    // Logo sponsors
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'Logo sponsors',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('sponsors'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Logo sponsors',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_logo_sponsors',
                // son type
                'type' => 'image',
            ),
        )
    );

    // Photo evenement
    $meta_boxes[] = array(
        // le titre de la boîte
        'title' => 'Photo evenement',
        // le type ou les types ou sera affiché cette "boîte" (séparé par des virgules)
        'pages' => array('evenement'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // Répeter pour chaque champ : ses options
            array(
                // Son nom affiché
                'name' => 'Photo evenement',
                // Un identifiant unique, utilisé pour lire la valeur en PHP
                'id' => 'lbc_photo_evenement',
                // son type
                'type' => 'image_upload',
            ),
        )
    );

    return $meta_boxes;
}


add_filter('pre_get_posts', 'modifie_requete_wp');
function modifie_requete_wp($query)
{
    // Est appelé pour chaque page. Testez si c'est la requête que vous voulez changer.
    // Test si page d'accueil (front-page.php)
    if ($query->is_home()) {
        // Limite à un résultat
        $query->query_vars['posts_per_page'] = 1;
    }


    


//A CORRIGER
    // if ( $query->is_post_type_archive('matchs') ) {
    //     echo "<script>alert(\"current page = matchs\")</script>";
    //
    //     //Date match
    //     $date_match_2 = rwmb_meta("lbc_date");
    //     echo "date match = ".rwmb_meta("lbc_date");
    //
    //     //Date server
    //     $time = current_time( 'Y-m-d');
    //     echo "date server = ".$time;
    //
    //     if($date_match_2 < $time ) {
    //
    //     }
    // }
}

/**
 * Pour aider à trouver les templates à utiliser
 */
function debug_template()
{
    global $template;
    $affiche_template = print_r($template, true);
    $affiche_body_class = print_r(get_body_class(), true);
    $affiche_debug = <<<EOD
Fichier de template :
$affiche_template
Body class
$affiche_body_class
EOD;
    // en commentaire dans le code HTML
    echo("<!--\n$affiche_debug\n-->");
    // Par JS dans la console
    $json_debug = json_encode($affiche_debug);
    echo("<script>console.log($json_debug)</script>");
}

// Laisser ce code dans le rendu final. Le mettre en commentaire APRES que j'ai noté.
add_action('wp_footer', 'debug_template');
