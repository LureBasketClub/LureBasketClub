<?php
/**
 * \file      archive-boutique.php
 * \author    Robin Minervini, Valentin Loll, Melody Soria, Anaëlle Guay
 * \version   1.0
 * \date       13 Décembre 2016
 * \brief       Boutique
 *
 * \details    Vitrine de la boutique du club. Ne gère pas le paiement.
 */
?>
<?php get_header(); ?>

<div id="container">
    <h2>Boutique</h2>
    <div id="grid">
        <?php while (have_posts()): the_post(); ?>
            <div class="actu"> <?php echo (rwmb_meta("lbc_lien_article")); ?>
                <?php the_post_thumbnail(); ?>
                <h3><?php the_title(); ?></h3>
                <span><?php echo (rwmb_meta("lbc_prix")); ?> €</span>
            </div>
            <?php
        endwhile
        ?>
    </div>
</div>

<?php get_footer(); ?>
