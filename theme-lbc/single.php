<head>
    <?php wp_head(); ?>
</head>
<header> <?php get_header()?> </header>

<?php
while ( have_posts() ): the_post();
    ?>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <?php
endwhile
?>

<?php get_footer() ?>
