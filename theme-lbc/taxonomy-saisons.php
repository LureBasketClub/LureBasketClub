<?php get_header() ?>

<div id="container">
    <h2>Événements</h2>
    <div id="grid">
        <?php
        while (have_posts()): the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="actu">
            <?php the_post_thumbnail(); ?>
            <h3><?php the_title(); ?></h3>
            <?php $date_match = date_i18n(' j/n/Y ', strtotime(rwmb_meta("lbc_date"))); ?>
            <time datetime="<?php echo (rwmb_meta("lbc_date"))?>"><?php echo $date_match ?></time>
        </a>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer() ?>


