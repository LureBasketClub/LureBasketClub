<?php get_header() ?>

<?php
// Le nom de la taxonomie
const TAXONOMY = "saisons";
// Le type associé à chercher
const POST_TYPE = 'evenement';
// retrouve la liste des terms (un tableau)
$taxonomy_terms = get_terms(TAXONOMY);
// boucle sur les terms
foreach ($taxonomy_terms as $a_term):
    // pour un terms, cherche les "post" du type défini
    $evenement = new WP_Query(array(
        'post_type' => POST_TYPE,
        'taxonomy' => TAXONOMY,
        'term' => $a_term->slug,
        'nopaging' => true,
    )); ?>


    <?php
endforeach;
?>

<?php get_footer() ?>


