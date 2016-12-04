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