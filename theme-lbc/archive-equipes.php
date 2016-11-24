<?php get_header(); ?>

<div id="container">
    <?php while (have_posts()): the_post(); ?>
        <div class="equipe">
            <?php the_post_thumbnail('portrait'); ?>
            <div class="description">
                <h4><?php the_title(); ?></h4>
                <p>Entraineur : <?php print_r(rwmb_meta("lbc_entraineur")); ?>
                    - <?php print_r(rwmb_meta("lbc_num_tel")); ?>.</p>
                <p>Couleur maillots et sponsors : <?php print_r(rwmb_meta("lbc_couleur_maillot_texte")); ?>
                    , <?php print_r(rwmb_meta("lbc_sponsors")); ?>.</p>
            </div>
        </div>
    <?php endwhile ?>
</div>

<?php get_footer(); ?>