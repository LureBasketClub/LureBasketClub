<?php get_header() ?>

<div id="container">
    <div id="actu-match">

        <?php
        // Fais une requête sur les actu, limitée à 1 résultats.
        $actu = new WP_Query('post_type=actualites&posts_per_page=1');
        while ($actu->have_posts()): $actu->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="lien-main">
                <article class="actu main">
                    <figure><?php the_post_thumbnail(); ?></figure>
                    <div class="description">
                        <h5><?php print_r(rwmb_meta("lbc_sous-titre")); ?></h5>
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                    </div>

                </article>
            </a>
        <?php endwhile; ?>

        <div class="calendrier-matchs">
            <h2>Calendrier des matchs</h2>
            <?php
            $matchs = new WP_Query('post_type=matchs&posts_per_page=5');
            while ($matchs->have_posts()): $matchs->the_post(); ?>
                <h4 class="date-match">

                    <?php echo date_i18n( ' l d F ',strtotime(rwmb_meta("lbc_date"))); ?>
                </h4>

                <a href="<?php the_permalink(); ?>" class="match">
                    <div class="equipe">
                        <svg version="1.1" class="logo-equipe-1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="-928 484 62.5 100"
                             style="enable-background:new -928 484 62.5 100; fill: <?php print_r(rwmb_meta("lbc_couleur_maillot_picker_1")); ?>"
                             xml:space="preserve">
	<path d="M-865.5,525.4c-2-1.3-7-10.9-8.6-18.2c-1.6-7.4-1-15.4,0-20.4c-4.4-3.1-10.9-2.7-10.9-2.7s0.9,12.8-1.1,17.7
		c-2,4.8-6,8.2-10.6,8.2c-4.7-0.1-8.7-3.4-10.6-8.2c-2-4.8-1.1-17.7-1.1-17.7s-6.5-0.4-10.9,2.7c1,5,1.6,13.1,0,20.4
		c-1.6,7.4-6.6,17-8.6,18.2c-0.5,1.6,2.1,11,2.2,30.5c0.1,19.5-2,28.1-2,28.1h31h31c0,0-2-8.5-2-28.1
		C-867.6,536.4-865.1,526.9-865.5,525.4z"/>
                        </svg>
                        <span class="nom-equipe"><?php print_r(rwmb_meta("lbc_equipe_1")); ?></span>
                    </div>

                    <div class="horaire">
                        <time
                            datetime="<?php print_r(rwmb_meta("lbc_heure_debut")); ?>:00"><?php print_r(rwmb_meta("lbc_heure_debut")); ?></time>
                        <span class="categorie"><?php print_r(rwmb_meta("lbc_categorie")); ?></span>
                    </div>

                    <div class="equipe">
                        <svg version="1.1" class="logo-equipe-2" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="-928 484 62.5 100"
                             style="enable-background:new -928 484 62.5 100; fill: <?php print_r(rwmb_meta("lbc_couleur_maillot_picker_2")); ?>"
                             xml:space="preserve">
	<path d="M-865.5,525.4c-2-1.3-7-10.9-8.6-18.2c-1.6-7.4-1-15.4,0-20.4c-4.4-3.1-10.9-2.7-10.9-2.7s0.9,12.8-1.1,17.7
		c-2,4.8-6,8.2-10.6,8.2c-4.7-0.1-8.7-3.4-10.6-8.2c-2-4.8-1.1-17.7-1.1-17.7s-6.5-0.4-10.9,2.7c1,5,1.6,13.1,0,20.4
		c-1.6,7.4-6.6,17-8.6,18.2c-0.5,1.6,2.1,11,2.2,30.5c0.1,19.5-2,28.1-2,28.1h31h31c0,0-2-8.5-2-28.1
		C-867.6,536.4-865.1,526.9-865.5,525.4z"/>
                        </svg>

                        <span class="nom-equipe"><?php print_r(rwmb_meta("lbc_equipe_2")); ?></span>
                    </div>
                </a>
            <?php endwhile; ?>
            <a href="<?php echo esc_url(get_post_type_archive_link("matchs")); ?>" class="more-match">
                <div>Voir tout les match</div>
            </a>
        </div>

    </div>

    <div id="dernieres-actus">
        <h2>Dernières actualités</h2>
        <div class="container">
            <?php
            // Fais une requête sur les actu, limitée à 1 résultats.
            $actu = new WP_Query('post_type=actualites&posts_per_page=3');
            while ($actu->have_posts()): $actu->the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="actu">
                    <figure><?php the_post_thumbnail('more actu'); ?></figure>
                    <div class="description">
                        <div class="col-1">
                            <h3><?php the_title(); ?></h3>
                            <time
                                datetime="<?php print_r(rwmb_meta("lbc_heure")); ?>:00"><?php print_r(rwmb_meta("lbc_heure")); ?></time>
                        </div>
                        <div class="lire-article">Lire l'article</div>
                    </div>
                </a>
            <?php endwhile; ?>

            <a href="<?php echo esc_url(get_post_type_archive_link("actualites")); ?>" id="more-actu">+</a>
        </div>
    </div>


</div>

<?php get_footer() ?>
