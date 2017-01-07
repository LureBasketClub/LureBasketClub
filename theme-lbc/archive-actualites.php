<?php
/**
 * \file     archive-actualites.php
 * \author    Robin Minervini, Valentin Loll, Melody Soria, Anaëlle Guay
 * \version   1.0
 * \date       2 Novembre 2016
 * \brief      Page des actualités
 *
 * \details  Affiche toute les actualités
 *
 */
?>
<?php get_header(); ?>

<div id="container">
    <h2>Actualités</h2>
    <div id="grid">
        <?php while (have_posts()): the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="actu">
                <div class="container-thumbnail"><?php the_post_thumbnail(); ?></div>
                <h3><?php the_title(); ?></h3>
                <?php
                /**
                 * \brief      Date de l'actualité
                 * \details Date de l'actualité au format jj/mm/aaaa
                 */
                $date_actu = date_i18n(' j/n/Y ', strtotime(rwmb_meta("lbc_date"))); ?>
                <time datetime="<?php echo (rwmb_meta("lbc_date"))?>"><?php echo $date_actu ?></time>
            </a>
            <?php
        endwhile
        ?>
    </div>
</div>

<?php get_footer(); ?>
