<?php get_header(); ?>

<div id="container">
    <h2>Match</h2>

    <div class="container-match">
        <?php $date_match = date_i18n(' l d F ', strtotime(rwmb_meta("lbc_date"))); ?>
        <h4 class="date-match"><?php echo $date_match; ?></h4>
        <div class="match">
            <div class="equipe">
                <svg version="1.1" class="logo-equipe-1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="-928 484 62.5 100"
                     style="enable-background:new -928 484 62.5 100; fill: <?php echo(rwmb_meta("lbc_couleur_maillot_picker_1")); ?>"
                     xml:space="preserve">
	<path d="M-865.5,525.4c-2-1.3-7-10.9-8.6-18.2c-1.6-7.4-1-15.4,0-20.4c-4.4-3.1-10.9-2.7-10.9-2.7s0.9,12.8-1.1,17.7
		c-2,4.8-6,8.2-10.6,8.2c-4.7-0.1-8.7-3.4-10.6-8.2c-2-4.8-1.1-17.7-1.1-17.7s-6.5-0.4-10.9,2.7c1,5,1.6,13.1,0,20.4
		c-1.6,7.4-6.6,17-8.6,18.2c-0.5,1.6,2.1,11,2.2,30.5c0.1,19.5-2,28.1-2,28.1h31h31c0,0-2-8.5-2-28.1
		C-867.6,536.4-865.1,526.9-865.5,525.4z"/>
                        </svg>
                <span class="nom-equipe"><?php echo(rwmb_meta("lbc_equipe_1")); ?></span>
            </div>
            <div class="horaire">
                <time datetime=" <?php echo(rwmb_meta("lbc_heure")) ?>:00"><?php echo(rwmb_meta("lbc_heure")) ?></time>
                <span class="categorie">Senior</span>
            </div>
            <div class="equipe">
                <svg version="1.1" class="logo-equipe-2" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="-928 484 62.5 100"
                     style="enable-background:new -928 484 62.5 100; fill: <?php echo(rwmb_meta("lbc_couleur_maillot_picker_2")); ?>"
                     xml:space="preserve">
	<path d="M-865.5,525.4c-2-1.3-7-10.9-8.6-18.2c-1.6-7.4-1-15.4,0-20.4c-4.4-3.1-10.9-2.7-10.9-2.7s0.9,12.8-1.1,17.7
		c-2,4.8-6,8.2-10.6,8.2c-4.7-0.1-8.7-3.4-10.6-8.2c-2-4.8-1.1-17.7-1.1-17.7s-6.5-0.4-10.9,2.7c1,5,1.6,13.1,0,20.4
		c-1.6,7.4-6.6,17-8.6,18.2c-0.5,1.6,2.1,11,2.2,30.5c0.1,19.5-2,28.1-2,28.1h31h31c0,0-2-8.5-2-28.1
		C-867.6,536.4-865.1,526.9-865.5,525.4z"/>
                        </svg>
                <span class="nom-equipe"><?php echo(rwmb_meta("lbc_equipe_2")); ?></span>
            </div>
        </div>
    </div>


    <h3>Détails de la rencontre</h3>

    <div class="container-text">
        <p>Jour : <?php echo $date_match ?></p>
        <p>Horaire : à <time datetime=" <?php echo(rwmb_meta("lbc_heure")) ?>:00"><?php echo(rwmb_meta("lbc_heure")) ?></time>.</p>
        <p>Lieu : <?php echo(rwmb_meta("lbc_salle")); ?> à <?php echo(rwmb_meta("lbc_ville")); ?>.</p>

        <?php $ext = (rwmb_meta("lbc_match_ext"));

        ?>

<?php if ((rwmb_meta("lbc_equipe_2"))=='Lure'): ?>
    <div id="officiels">
    <p>Heure de rendez-vous : <?php echo(rwmb_meta("lbc_heure_debut")) ?> .</p>
  </div>

        <?php else: ?>
    <p>Arbitres : <?php echo(rwmb_meta("lbc_arbitre_1")) ?> et <?php echo (rwmb_meta("lbc_arbitre_2")) ?>.</p>
    <p>Marqueur : <?php echo (rwmb_meta("lbc_marqueur")) ?>.</p>
    <p>Chronométreur : <?php echo (rwmb_meta("lbc_chronometreur")) ?>.</p>
    <p>Équipes : <?php echo (rwmb_meta("lbc_equipe_1")) ?> vs <?php echo (rwmb_meta("lbc_equipe_2")) ?>.</p>
    <p>Catégorie : <?php echo (rwmb_meta("lbc_categorie")) ?>.</p>
    <p>Résultats : <a href="http://www.fédération-basket.fr/lurebelfort18122016">Voir les résultats</a></p>;
        <?php endif; ?>

    </div>

    <a href="<?php echo esc_url(get_post_type_archive_link("matchs")); ?>" id="retour-calendrier">Revenir au calendrier
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px"
             viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;"
             xml:space="preserve">
                    <g>
                        <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		                c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"/>
                    </g>
        </svg>
    </a>

</div>
<?php get_footer(); ?>
