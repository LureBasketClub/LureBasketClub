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
