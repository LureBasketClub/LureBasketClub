<?php
/**
 * \file      archive-equipes.php
 * \author    Robin Minervini, Valentin Loll, Melody Soria, Anaëlle Guay
 * \version   1.0
 * \date       2 Novembre 2016
 * \brief       Liste des équipes du club
 *
 * \details    Liste de toutes les équipes du club. Pour chaque équipe, le nom de l'entraineur est spécifié ainsi que
 * son numéro de téléphone. Il est également renseigné les sponsors et la couleur des maillots.
 */
?>
<?php get_header(); ?>

<div id="container">
    <?php while (have_posts()): the_post(); ?>
        <div class="equipe">
            <?php the_post_thumbnail('portrait'); ?>
            <div class="description">
                <h4><?php the_title(); ?></h4>
                <p>Entraineur : <?php echo(rwmb_meta("lbc_entraineur")); ?>
                    - <a href="tel:<?php echo(rwmb_meta("lbc_num_tel")); ?>" class="num_tel"><?php echo(rwmb_meta("lbc_num_tel")); ?></a> .</p>
                <p>Couleur maillots et sponsors : <?php echo(rwmb_meta("lbc_couleur_maillot_texte")); ?>
                    , <?php echo(rwmb_meta("lbc_sponsors")); ?>.</p>
            </div>
        </div>
    <?php endwhile ?>
</div>

<?php get_footer(); ?>