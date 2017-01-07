<?php
/**
 * \file     tri-categorie-match.php
 * \author    Robin Minervini, Valentin Loll, Melody Soria, Anaëlle Guay
 * \version   1.0
 * \date       21 Décembre 2016
 * \brief      Tri des matchs par catégorie
 *
 * \details Requete AJAX pour trier les matchs en fonction de la catégorie choisie dans archive-match.php
 */
?>
<?php
/**
 * \brief Permet l'utilisation d'un fichier externe à WordPress
 */
define('WP_USE_THEMES', false);
require_once('../../../wp-load.php'); ?>

<?php
/**
 * \brief      Date du dernier match de la boucle
 * \details Initialise la date du dernier match, utilisé pour savoir si il est nécessaire de répété la date entre 2 matchs consécutif lors de l'affichage des matchs.
 */
$last_date_match = ''; ?>

<?php
/**
 * \brief     Requête personnalisée pour ressortir tout les matchs
 */
$matchs = new WP_Query('post_type=matchs');
while ($matchs->have_posts()): $matchs->the_post(); ?>

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
    foreach ($terms as $term) ?>

    <?php $taxonomy = $term->slug ?>

    <?php
    /**
     * \brief Récupère la valeur dans la variable 'vs'
     * \details Récupère la valeur dans la variable 'vs' (Valeur Sélectionnée dans le select de archive-matchs.php), transmise par
     * la requete AJAX de archive-matchs.php
     */
    $vs = $_GET['vs'] ?>
    <?php if ($vs == $taxonomy): ?>

        <div class="container-single-match <?php echo $taxonomy ?>">
            <?php if ($last_date_match != $date_match): ?>
                <h4 class="date-match"><?php echo $date_match ?></h4>
                <?php $last_date_match = $date_match;
            endif; ?>

            <a href="<?php echo get_permalink($post->ID) ?>" class="match">

                <div class="equipe">
                    <svg version="1.1" class="logo-equipe-1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="-928 484 62.5 100"
                         style="enable-background:new -928 484 62.5 100;fill: <?php echo rwmb_meta("lbc_couleur_maillot_picker_1") ?>"
                         xml:space="preserve">
	<path d="M-865.5,525.4c-2-1.3-7-10.9-8.6-18.2c-1.6-7.4-1-15.4,0-20.4c-4.4-3.1-10.9-2.7-10.9-2.7s0.9,12.8-1.1,17.7
		c-2,4.8-6,8.2-10.6,8.2c-4.7-0.1-8.7-3.4-10.6-8.2c-2-4.8-1.1-17.7-1.1-17.7s-6.5-0.4-10.9,2.7c1,5,1.6,13.1,0,20.4
		c-1.6,7.4-6.6,17-8.6,18.2c-0.5,1.6,2.1,11,2.2,30.5c0.1,19.5-2,28.1-2,28.1h31h31c0,0-2-8.5-2-28.1
		C-867.6,536.4-865.1,526.9-865.5,525.4z"/>
                    </svg>
                            <span class="nom-equipe">
                        <?php echo(rwmb_meta("lbc_equipe_1")) ?>
                    </span>
                </div>

                <div class="horaire">
                    <time datetime="<?php echo(rwmb_meta("lbc_heure")); ?>:00">
                        <?php echo(rwmb_meta("lbc_heure")) ?>
                    </time>
                            <span class="categorie">
                        <?php echo $term->name ?>
                    </span>
                </div>
                <div class="equipe">
                    <svg version="1.1" class="logo-equipe-2" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="-928 484 62.5 100"
                         style="enable-background:new -928 484 62.5 100;fill: <?php echo rwmb_meta("lbc_couleur_maillot_picker_2") ?>"
                         xml:space="preserve">
	<path d="M-865.5,525.4c-2-1.3-7-10.9-8.6-18.2c-1.6-7.4-1-15.4,0-20.4c-4.4-3.1-10.9-2.7-10.9-2.7s0.9,12.8-1.1,17.7
		c-2,4.8-6,8.2-10.6,8.2c-4.7-0.1-8.7-3.4-10.6-8.2c-2-4.8-1.1-17.7-1.1-17.7s-6.5-0.4-10.9,2.7c1,5,1.6,13.1,0,20.4
		c-1.6,7.4-6.6,17-8.6,18.2c-0.5,1.6,2.1,11,2.2,30.5c0.1,19.5-2,28.1-2,28.1h31h31c0,0-2-8.5-2-28.1
		C-867.6,536.4-865.1,526.9-865.5,525.4z"/>
                        </svg>
                            <span class="nom-equipe">
                        <?php echo(rwmb_meta("lbc_equipe_2")) ?>
                    </span>
                </div>
            </a>
        </div>
    <?php elseif ($vs == "container-single-match"): ?>
        <div class="container-single-match <?php echo $taxonomy ?>">
            <?php if ($last_date_match != $date_match): ?>
                <h4 class="date-match"><?php echo $date_match ?></h4>
                <?php $last_date_match = $date_match;
            endif; ?>

            <a href="<?php echo get_permalink($post->ID) ?>" class="match">

                <div class="equipe">
                    <svg version="1.1" class="logo-equipe-1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="-928 484 62.5 100"
                         style="enable-background:new -928 484 62.5 100;fill: <?php echo rwmb_meta("lbc_couleur_maillot_picker_1") ?>"
                         xml:space="preserve">
	<path d="M-865.5,525.4c-2-1.3-7-10.9-8.6-18.2c-1.6-7.4-1-15.4,0-20.4c-4.4-3.1-10.9-2.7-10.9-2.7s0.9,12.8-1.1,17.7
		c-2,4.8-6,8.2-10.6,8.2c-4.7-0.1-8.7-3.4-10.6-8.2c-2-4.8-1.1-17.7-1.1-17.7s-6.5-0.4-10.9,2.7c1,5,1.6,13.1,0,20.4
		c-1.6,7.4-6.6,17-8.6,18.2c-0.5,1.6,2.1,11,2.2,30.5c0.1,19.5-2,28.1-2,28.1h31h31c0,0-2-8.5-2-28.1
		C-867.6,536.4-865.1,526.9-865.5,525.4z"/>
                    </svg>
                            <span class="nom-equipe">
                        <?php echo(rwmb_meta("lbc_equipe_1")) ?>
                    </span>
                </div>

                <div class="horaire">
                    <time datetime="<?php echo(rwmb_meta("lbc_heure")); ?>:00">
                        <?php echo(rwmb_meta("lbc_heure")) ?>
                    </time>
                            <span class="categorie">
                        <?php echo $term->name ?>
                    </span>
                </div>
                <div class="equipe">
                    <svg version="1.1" class="logo-equipe-2" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="-928 484 62.5 100"
                         style="enable-background:new -928 484 62.5 100;fill: <?php echo rwmb_meta("lbc_couleur_maillot_picker_2") ?>"
                         xml:space="preserve">
	<path d="M-865.5,525.4c-2-1.3-7-10.9-8.6-18.2c-1.6-7.4-1-15.4,0-20.4c-4.4-3.1-10.9-2.7-10.9-2.7s0.9,12.8-1.1,17.7
		c-2,4.8-6,8.2-10.6,8.2c-4.7-0.1-8.7-3.4-10.6-8.2c-2-4.8-1.1-17.7-1.1-17.7s-6.5-0.4-10.9,2.7c1,5,1.6,13.1,0,20.4
		c-1.6,7.4-6.6,17-8.6,18.2c-0.5,1.6,2.1,11,2.2,30.5c0.1,19.5-2,28.1-2,28.1h31h31c0,0-2-8.5-2-28.1
		C-867.6,536.4-865.1,526.9-865.5,525.4z"/>
                        </svg>
                            <span class="nom-equipe">
                        <?php echo(rwmb_meta("lbc_equipe_2")) ?>
                    </span>
                </div>
            </a>
        </div>
    <?php endif; ?>
<?php
    /**
     * \brief Termine la boucle de récupération des matchs
     */
endwhile; ?>


