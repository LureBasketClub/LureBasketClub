<?php get_header(); ?>

<div id="container">
    <h2>Calendrier des matchs</h2>

    <div id="tri">
        <div id="liens-externes">
            <a href="">Voir le calendrier complet
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
            <a href="">Voir les résultats des matchs
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

        <h5>Trier par équipe</h5>
        <form id="form" name="Choix">
            <select name="tri-categorie" id="select" onChange="Lien()">
                <option value="container-single-match">Tous</option>
                <option value="baby">Baby</option>
                <option value="mini-poussin">Mini-poussins</option>
                <option value="benjamine">Benjamines</option>
                <option value="benjamin">Benjamins</option>
                <option value="minime-filles">Minimes-filles</option>
                <option value="minime-garcon">Minimes-garcon</option>
                <option value="cadette">Cadettes</option>
                <option value="senior">Seniors</option>
            </select>
        </form>
    </div>

    <div class="container-match">
        <?php while (have_posts()): the_post(); ?>

            <?php $date_match = date_i18n(' l d F ', strtotime(rwmb_meta("lbc_date"))); ?>
            <?php $date_match_2 = rwmb_meta("lbc_date"); ?>
            <?php $time = current_time('Y-m-d'); ?>



            <?php if ($date_match_2 > $time) {
                $terms = get_the_terms($post->ID, 'categorie-equipe');
                foreach ($terms as $term);

                echo '<div class="container-single-match '.$term->slug.'">
                <h4 class="date-match">'.$date_match.'</h4>
                
                <a href="'.the_permalink().'" class="match">
                                
                <div class="equipe">
                        <svg version="1.1" class="logo-equipe-1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="-928 484 62.5 100"
                             style="enable-background:new -928 484 62.5 100;fill: '.(rwmb_meta("lbc_couleur_maillot_picker_1")).'"
                             xml:space="preserve">
	<path d="M-865.5,525.4c-2-1.3-7-10.9-8.6-18.2c-1.6-7.4-1-15.4,0-20.4c-4.4-3.1-10.9-2.7-10.9-2.7s0.9,12.8-1.1,17.7
		c-2,4.8-6,8.2-10.6,8.2c-4.7-0.1-8.7-3.4-10.6-8.2c-2-4.8-1.1-17.7-1.1-17.7s-6.5-0.4-10.9,2.7c1,5,1.6,13.1,0,20.4
		c-1.6,7.4-6.6,17-8.6,18.2c-0.5,1.6,2.1,11,2.2,30.5c0.1,19.5-2,28.1-2,28.1h31h31c0,0-2-8.5-2-28.1
		C-867.6,536.4-865.1,526.9-865.5,525.4z"/>
                    </svg>
                    <span class="nom-equipe">
                        '.(rwmb_meta("lbc_equipe_1")).'
                    </span>
                    </div>
                    
                    <div class="horaire">
                        <time>
                            '.(rwmb_meta("lbc_heure_debut")).'
                        </time>
                    <span class="categorie">
                        '.(rwmb_meta("lbc_categorie")).'
                    </span>
                    </div>
                    <div class="equipe">
                        <svg version="1.1" class="logo-equipe-2" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="-928 484 62.5 100"
                             style="enable-background:new -928 484 62.5 100;fill: '.(rwmb_meta("lbc_couleur_maillot_picker_2")).'"
                             xml:space="preserve">
	<path d="M-865.5,525.4c-2-1.3-7-10.9-8.6-18.2c-1.6-7.4-1-15.4,0-20.4c-4.4-3.1-10.9-2.7-10.9-2.7s0.9,12.8-1.1,17.7
		c-2,4.8-6,8.2-10.6,8.2c-4.7-0.1-8.7-3.4-10.6-8.2c-2-4.8-1.1-17.7-1.1-17.7s-6.5-0.4-10.9,2.7c1,5,1.6,13.1,0,20.4
		c-1.6,7.4-6.6,17-8.6,18.2c-0.5,1.6,2.1,11,2.2,30.5c0.1,19.5-2,28.1-2,28.1h31h31c0,0-2-8.5-2-28.1
		C-867.6,536.4-865.1,526.9-865.5,525.4z"/>
                        </svg>
                    <span class="nom-equipe">
                        '.(rwmb_meta("lbc_equipe_2")).'
                    </span>
                    </div>
                </a>
                </div>
                ';
                               
            }?>
        <?php endwhile ?>

    </div>

    <script>

        function hasClass(elem, className) {
            return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
        }

        function Lien() {

            var selectElmt = document.getElementById("select");
            var vs = selectElmt.options[selectElmt.selectedIndex].value;
            console.log("valeur selectionnée :" + vs)

            var el = document.getElementsByClassName('container-single-match');
            for (i = 0; i < el.length; i++) {
                console.log(el[i]);
                if (hasClass(el[i], vs)) {
                    console.log('container-match a la classe ' + vs);
                    el[i].style.display = "block";
                } else {
                    console.log('container-match n\'a pas la class ' + vs);
                    el[i].style.display = "none";
                }
            }
        }
    </script>

    <?php get_footer(); ?>
