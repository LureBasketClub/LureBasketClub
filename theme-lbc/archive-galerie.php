<?php get_header() ?>

<div id="container">
    <h2>Saisons</h2>
    <div id="grid">
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
