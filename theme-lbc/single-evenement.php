<?php get_header() ?>

<div id="container">
    <h2><?php the_title(); ?></h2>
    <div id="grid">
        <?php $listImagesID = rwmb_meta("lbc_photo_evenement", array('multiple' => true));
        foreach($listImagesID as $imageID => $imageObj):
        ?>
            <div href="<?php the_permalink(); ?>" class="actu">
                <?php echo wp_get_attachment_image($imageID); ?>
            </div>
            <?php endforeach; ?>
    </div>
    <a href="<?php echo esc_url(get_post_type_archive_link("galerie")); ?>" id="retour-galerie">Revenir à la galerie
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

<?php get_footer() ?>
