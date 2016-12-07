<?php get_header(); ?>

<div id="container">
    <h2>Boutique</h2>
    <div id="grid">
        <?php while (have_posts()): the_post(); ?>
            <a href="<?php echo (rwmb_meta("lbc_lien_article")); ?>" class="actu">
                <?php the_post_thumbnail(); ?>
                <h3><?php the_title(); ?></h3>
                <span><?php echo (rwmb_meta("lbc_prix")); ?> €</span>
            </a>
            <?php
        endwhile
        ?>
    </div>
</div>

<?php get_footer(); ?>
