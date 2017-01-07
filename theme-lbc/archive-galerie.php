<?php
/**
 * \file      archive-galerie.php
 * \author    Robin Minervini, Valentin Loll, Melody Soria, Anaëlle Guay
 * \version   1.0
 * \date       30 Novembre 2016
 * \brief       Liste des différentes saisons pour l'organisation des photos.
 *
 * \details    Chaque saison est spécifiée par une date (Ex: 2016/2017) et une image.
 */
?>
<?php get_header() ?>

<div id="container">
    <h2>Saisons</h2>
    <div id="grid">
        <?php
        /**
         * \brief  Le nom de la taxonomie
         */
        const TAXONOMY = 'saisons';
        /**
         * \brief  Le type associé à chercher
         */
        const POST_TYPE = 'evenement';
        /**
         * \brief      Retrouve la liste des terms (un tableau)
         */
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

        <a href="<?php echo esc_url(get_term_link($a_term, TAXONOMY)) ?>" rel="tag" class="actu">
            <div class="container-thumbnail"><?php the_post_thumbnail('a_la_une'); ?></div>
            <h3><?php echo esc_html($a_term->name); ?></h3>
        </a>

        <?php
        endforeach;
        ?>
    </div>
</div>

<?php get_footer() ?>

<option value="container-single-match">Tous</option>
<option value="baby">Baby</option>
<option value="mini-poussins">Mini-poussins</option>
<option value="benjamines">Benjamines</option>
<option value="benjamins">Benjamins</option>
<option value="minimes-filles">Minimes-filles</option>
<option value="minimes-garcons">Minimes-garcon</option>
<option value="cadettes">Cadettes</option>
<option value="seniors">Seniors</option>