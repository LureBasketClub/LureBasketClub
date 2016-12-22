</div>
<footer>
    <div id="sponsors">
        <h2>Sponsors du club</h2>

        <ul>
            <?php
            $sponsors = new WP_Query('post_type=sponsors');
            while ($sponsors->have_posts()): $sponsors->the_post(); ?>
            <li>
                <a href="<?php echo(rwmb_meta("lbc_lien_sponsor")) ?>"><?php echo wp_get_attachment_image(get_post_meta($post->ID,"lbc_logo_sponsors")[0],'paysage'); ?></a>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>

    <div id="nav-contact">
        <div id="container-footer">
            <nav>
                <h4>Lure Basket Club</h4>
                <ul>
                    <li><a href="<?php echo home_url() ?>">Accueil</a></li>
                    <li><a href="<?php echo esc_url(get_post_type_archive_link("equipes")); ?>">Equipes</a></li>
                    <li><a href="<?php echo esc_url(get_post_type_archive_link("matchs")); ?>">Calendrier</a></li>
                    <li><a href="<?php echo esc_url(get_post_type_archive_link("actualites")); ?>">Actualités</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_title('formations'))?>">Formations</a></li>
                    <li><a href="<?php echo esc_url(get_post_type_archive_link("informations_pratiques")); ?>">Informations pratiques</a></li>
                    <li><a href="<?php echo esc_url(get_post_type_archive_link("galerie")); ?>">Galerie</a></li>
                </ul>
            </nav>
            <div id="contact">
                <h4>Contact</h4>
                <ul>
                    <li><a href="https://www.facebook.com/Lure-Basket-Club-323567384381378/">Facebook</a></li>
                    <li><a href="mailto:lure.basket.club@free.fr">Email</a></li>
                </ul>
            </div>
            <div id="equipes-realisation">
                <h4>Réalisation</h4>
                <ul>
                    <li>Robin Minervini</li>
                    <li>Mélody Soria</li>
                    <li>Anaelle Guay</li>
                    <li>Valentin Loll</li>
                </ul>
            </div>
        </div>

    </div>
</footer>

<?php wp_footer() ?>
</body>
</html>
