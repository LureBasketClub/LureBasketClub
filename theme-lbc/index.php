<?php
/**
 * \file          index.php
 * \author    Robin Minervini, Valentin Loll, Melody Soria, Anaëlle Guay
 * \version   1.0
 * \date       7 Décembre 2016
 * \brief       Page d'accueil
 *
 * \details    Page d'accueil qui affiche les 5 prochains matchs et les 3 actualités à venir
 */
?>
<?php get_header() ?>

<div id="container">
    <div id="actu-match">

        <?php
        /**
         * \brief      Requète personnalisée pour n'afficher qu'une actualité.
         * \details    Modifie la requète WordPress pour récupérer la dernière actualité.
         */
        $actu = new WP_Query('post_type=actualites&posts_per_page=1');
        while ($actu->have_posts()): $actu->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="lien-main">
                <article class="actu main">
                    <figure><?php the_post_thumbnail(); ?></figure>
                    <div class="description">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            </a>
        <?php
            /**
             * \brief     Termine la boucle de récupération des actualités
             */
        endwhile; ?>

        <div class="calendrier-matchs">
            <h2>Calendrier des matchs</h2>

            <?php
            /**
             * \brief      Date du dernier match de la boucle
             * \details Initialise la date du dernier match, utilisé pour savoir si il est nécessaire de répété la date entre 2 matchs consécutif lors de l'affichage des matchs.
             */
            $last_date_match = ''; ?>
            <?php $date_match = date_i18n(' l d F ', strtotime(rwmb_meta("lbc_date"))); ?>

            <?php
            /**
             * \brief      Requête personnalisée pour afficher les 5 prochains matchs à venir.
             * \details Modifie la requête WordPress pour récupérer les 5 prochains matchs.
             */
            $matchs = new WP_Query('post_type=matchs&posts_per_page=5');
            while ($matchs->have_posts()): $matchs->the_post(); ?>


                <?php
                /**
                 * \brief Récupère l'heure du server
                 * \details Récupère l'heure du serveur et le stoch au format aaaa-mm-jj
                 */
                $time = current_time('Y-m-d'); ?>
                <?php
                /**
                 * \brief      Date du match
                 * \details Date du match au format jj/mm/aaaa
                 */
                $date_match = date_i18n(' l d F ', strtotime(rwmb_meta("lbc_date"))); ?>

            <?php
                /**
                 * \brief Récupère la taxonomie "catégorie-equipe"
                 * \details Récupère la taxonomie "categorie-equipe" et ressort la taxonomie (catégorie) du match.
                 */
            $terms = get_the_terms($post->ID, 'categorie-equipe');
            foreach ($terms as $term); ?>

                <?php
                /**
                 * \brief      Test la date courrante et la date précédente testée.
                 * \details Test la date du match courrant et la date précédente. Si les 2 sont égales, la date n'est pas réaffichée.
                 */
                if ($last_date_match != $date_match): ?>
                    <h4 class="date-match"><?php echo $date_match ?></h4>
                    <?php $last_date_match = $date_match; endif;?>

                <a href=" <?php echo get_permalink( $post->ID) ?>" class="match">
                    <div class="equipe">
                        <svg version="1.1" class="logo-equipe-1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="-928 484 62.5 100"
                             style="enable-background:new -928 484 62.5 100; fill: <?php echo(rwmb_meta("lbc_couleur_maillot_picker_1")) ?>"
                             xml:space="preserve">
	<path d="M-865.5,525.4c-2-1.3-7-10.9-8.6-18.2c-1.6-7.4-1-15.4,0-20.4c-4.4-3.1-10.9-2.7-10.9-2.7s0.9,12.8-1.1,17.7
		c-2,4.8-6,8.2-10.6,8.2c-4.7-0.1-8.7-3.4-10.6-8.2c-2-4.8-1.1-17.7-1.1-17.7s-6.5-0.4-10.9,2.7c1,5,1.6,13.1,0,20.4
		c-1.6,7.4-6.6,17-8.6,18.2c-0.5,1.6,2.1,11,2.2,30.5c0.1,19.5-2,28.1-2,28.1h31h31c0,0-2-8.5-2-28.1
		C-867.6,536.4-865.1,526.9-865.5,525.4z"/>
                        </svg>
                        <span class="nom-equipe"> <?php echo(rwmb_meta("lbc_equipe_1")) ?></span>
                    </div>

                    <div class="horaire">
                        <time datetime=" <?php echo(rwmb_meta("lbc_heure")) ?>:00"><?php echo(rwmb_meta("lbc_heure")) ?></time>
                        <span class="categorie"><?php echo $term->slug ?></span>
                    </div>

                    <div class="equipe">
                        <svg version="1.1" class="logo-equipe-2" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="-928 484 62.5 100"
                             style="enable-background:new -928 484 62.5 100; fill: <?php echo(rwmb_meta("lbc_couleur_maillot_picker_2")) ?>"
                             xml:space="preserve">
	<path d="M-865.5,525.4c-2-1.3-7-10.9-8.6-18.2c-1.6-7.4-1-15.4,0-20.4c-4.4-3.1-10.9-2.7-10.9-2.7s0.9,12.8-1.1,17.7
		c-2,4.8-6,8.2-10.6,8.2c-4.7-0.1-8.7-3.4-10.6-8.2c-2-4.8-1.1-17.7-1.1-17.7s-6.5-0.4-10.9,2.7c1,5,1.6,13.1,0,20.4
		c-1.6,7.4-6.6,17-8.6,18.2c-0.5,1.6,2.1,11,2.2,30.5c0.1,19.5-2,28.1-2,28.1h31h31c0,0-2-8.5-2-28.1
		C-867.6,536.4-865.1,526.9-865.5,525.4z"/>
                        </svg>

                        <span class="nom-equipe"><?php echo (rwmb_meta("lbc_equipe_2")) ?></span>
                    </div>
                </a>
            <?php
                /**
                 * \brief     Termine la boucle de récupération des matchs
                 */
            endwhile; ?>
            <a href="<?php echo esc_url(get_post_type_archive_link("matchs")); ?>" class="more-match">
                <div>Voir tous les match</div>
            </a>
        </div>

    </div>

    <div id="dernieres-actus">
        <h2>Dernières actualités</h2>
        <div class="container">
            <?php $compteur_actu=0 ?>
            <?php
            /**
             * \brief      Fait une requête sur les actu, limitée à 3 résultats.
             */
            $actu = new WP_Query('post_type=actualites&posts_per_page=3');
            while ($actu->have_posts()): $actu->the_post(); ?>
                <?php $compteur_actu = $compteur_actu + 1?>

                <a href="<?php the_permalink(); ?>" class="actu">
                    <figure><?php the_post_thumbnail('more actu'); ?></figure>
                    <div class="description">
                        <div class="col-1">
                            <h3><?php the_title(); ?></h3>
                            <?php $date_match = date_i18n(' j/n/Y ', strtotime(rwmb_meta("lbc_date"))); ?>
                            <time datetime="<?php echo (rwmb_meta("lbc_date"))?>"><?php echo $date_match ?></time>
                        </div>
                        <div class="lire-article">Lire l'article</div>
                    </div>
                </a>
            <?php
                /**
                 * \brief     Termine la boucle de récupération des actualités
                 */
            endwhile; ?>

            <a href="<?php echo esc_url(get_post_type_archive_link("actualites")); ?>" id="more-actu">+</a>
        </div>
    </div>


</div>

<?php get_footer() ?>
