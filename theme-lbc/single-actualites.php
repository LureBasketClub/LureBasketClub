<?php
/**
 * \file     single-actualites.php
 * \author    Robin Minervini, Valentin Loll, Melody Soria, Anaëlle Guay
 * \version   1.0
 * \date       2 Novembre 2016
 * \brief      Page d'une actualité
 *
 * \details  Affiche le contenu d'une actualité, composée d'une date, d'une image à la une, et de texte.
 * 
 */
?>
<?php get_header(); ?>


<div id="container">
    <article>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_post_thumbnail(); ?>
            <h3><?php the_title(); ?></h3>
            <div class="container-text">
                <?php the_content(); ?>
            </div>
        <?php
            /**
             * \brief      Termine la boucle de récupération de l'actualité
             */
        endwhile; ?>
        <?php
            /**
             * \brief      Termine le test de la boucle de récupération de l'actualité
             */
        endif; ?>
    </article>

    <a href="<?php echo esc_url(get_post_type_archive_link("actualites")); ?>" id="revenir-actu">
        Revenir aux actualités
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
            <g>
                <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		        c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"/>
            </g>
        </svg>
    </a>


</div>

<?php get_footer(); ?>