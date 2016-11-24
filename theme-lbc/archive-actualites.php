<?php get_header(); ?>

<div id="container">
    <h2>Galerie</h2>
    <div id="grid">
        <?php while (have_posts()): the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="actu">
                <?php the_post_thumbnail(); ?>
                <h3><?php the_title(); ?></h3>
                <time datetime="2016-10-12"><?php echo (rwmb_meta("lbc_date")); ?></time>
            </a>
            <?php
        endwhile
        ?>
    </div>
</div>

<?php get_footer(); ?>
