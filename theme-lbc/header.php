<?php
/**
 * \file      header.php
 * \author    Robin Minervini, Valentin Loll, Melody Soria, Anaëlle Guay
 * \version   1.0
 * \date       20 Novembre 2016
 * \brief       Entête
 *
 * \details    Défini les balises meta. Charge les données de wordpress. Affiche le logo et le menu.
 */
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lure Basket Club</title>
    <?php wp_head(); ?>
</head>


<body <?php body_class($class); ?>>
  <header id="header">
      <div id="container-header">
          <div id="logo">
              <a href="<?php echo home_url() ?>">
                  <svg class="logo" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2651.021 1381.99">
                      <title>RedSun AI final</title>
                      <circle data-name="corps" cx="701.248" cy="655.784" r="465" style="fill: #d21b1b;stroke: #000;stroke-miterlimit: 10;stroke-width: 14px"/>
                      <g data-name="rayons">
                          <path d="M757.913,202.336S717.568-4.716,1028.637,33.7c0,0-188.334,64.707-71.948,127.393,0,0,129.666,75.265,46.846,135.7C1003.535,296.8,899.831,209.2,757.913,202.336Z" transform="translate(-15.667 -5.909)" style="fill: #d21b1b;stroke: #000;stroke-miterlimit: 10;stroke-width: 17px"/>
                          <path d="M1089.908,386.473s124.148-167.27,296.316,74.056c0,0-168.005-86.915-138.608,35.885,0,0,28.817,140.464-68.249,123.765C1179.366,620.178,1176.187,489.4,1089.908,386.473Z" transform="translate(-15.667 -5.909)" style="fill: #d21b1b;stroke: #000;stroke-miterlimit: 10;stroke-width: 17px"/>
                          <path d="M1171.317,766.211s207.492-18.41,141.6,270.621c0,0-46.718-183.3-118.934-79.716,0,0-85.8,114.887-137.834,31.262C1056.153,988.378,1151.758,899.082,1171.317,766.211Z" transform="translate(-15.667 -5.909)" style="fill: #d21b1b;stroke: #000;stroke-miterlimit: 10;stroke-width: 17px"/>
                          <path d="M894.063,1099.273s130.612,162.273-146.3,268.113c0,0,126.426-140.7.181-143.178,0,0-143.194-7.488-102.587-97.219C645.361,1126.989,772.728,1156.849,894.063,1099.273Z" transform="translate(-15.667 -5.909)" style="fill: #d21b1b;stroke: #000;stroke-miterlimit: 10;stroke-width: 17px"/>
                          <path d="M484.349,1070.041S436,1272.66,182.788,1118.5c0,0,188.65,13.829,113.322-87.51,0,0-81.742-117.808,14.068-140.633C310.178,890.359,364.542,1009.349,484.349,1070.041Z" transform="translate(-15.667 -5.909)" style="fill: #d21b1b;stroke: #000;stroke-miterlimit: 10;stroke-width: 17px"/>
                          <path d="M258.068,743.991S70.881,835.386,29.051,541.906c0,0,109.178,154.467,139.577,31.912,0,0,39.041-137.972,117.539-78.487C286.167,495.331,228.818,612.912,258.068,743.991Z" transform="translate(-15.667 -5.909)" style="fill: #d21b1b;stroke: #000;stroke-miterlimit: 10;stroke-width: 17px"/>
                          <path d="M385.991,340.52S202.156,242.557,415.273,36.5c0,0-61.033,179.039,56.048,131.752,0,0,134.636-49.334,132.52,49.135C603.841,217.384,474.977,239.928,385.991,340.52Z" transform="translate(-15.667 -5.909)" style="fill: #d21b1b;stroke: #000;stroke-miterlimit: 10;stroke-width: 17px"/>
                      </g>
                      <g data-name="oeil_droit">
                          <path d="M1016.337,475.79c-34.4,28.853-62.722,55.822-85.019,78.461-6.664,6.766-34.219,34.9-68,75-22.54,26.754-41.222,50.961-56,71a125.915,125.915,0,0,0,35.019,45.943c37.36,30.47,80.63,28.8,92,28C934.337,774.193,1018.337,727.386,1016.337,475.79Z" transform="translate(-15.667 -5.909)" style="fill: #fff;stroke: #000;stroke-miterlimit: 10;stroke-width: 8px"/>
                          <path d="M910.251,583.455s7.777,71.364-32.871,140.788c0,0-26.067-12.1-51.318-46.155A348.829,348.829,0,0,1,910.251,583.455Z" transform="translate(-15.667 -5.909)" style="fill: #e81f1f;stroke: #000;stroke-miterlimit: 10;stroke-width: 8px"/>
                          <path d="M877.48,617.482a214.393,214.393,0,0,1-5.269,72.932,68.6,68.6,0,0,1-9.731-10.432,71.012,71.012,0,0,1-13-30Z" transform="translate(-15.667 -5.909)" style="fill: #fff;stroke: #000;stroke-miterlimit: 10;stroke-width: 8px"/>
                          <path d="M806.59,700.23s-25.865,2.964-32.272-3.313c0,0-29.969-62.24,35.933-87.1" transform="translate(-15.667 -5.909)" style="fill: none;stroke: #000;stroke-miterlimit: 10;stroke-width: 8px"/>
                      </g>
                      <g data-name="bouche">
                          <path d="M519.27,828.86l22.567,20.19,18.133,16.223,58.334-18,217.551-7.5a129.9,129.9,0,0,1,24.082,1.752c11.03,1.856,12.817,3.659,18.667,2.667,6.252-1.06,11.392-4.088,21.333-10.667a213.16,213.16,0,0,0,18-13.333l-47.333,90,20.667,51.075-13.116,24c-20.184,3.842-45.808,8.693-75.55,14.259-58.857,11.015-71.031,13.075-87.333,14.667a479.33,479.33,0,0,1-90,.163l-63.333-32.163,8-52.667Z" transform="translate(-15.667 -5.909)" style="stroke: #000;stroke-miterlimit: 10;stroke-width: 8px"/>
                          <path d="M575.226,862.716L600.6,908.86h73.333l69.333,2.667,70.4-19.333,10.267,6,34.667-56-15.782-2.418-217.551,7.5Z" transform="translate(-15.667 -5.909)" style="fill: #fff;stroke: #000;stroke-miterlimit: 10;stroke-width: 8px"/>
                          <path d="M629.937,908.86s-49.165,56.326-47.249,84.5l42.583,21H717.6L872,987.511s27.184-21.8-43.775-95.226l-4.292,5.908-10.267-6-70.4,19.333Z" transform="translate(-15.667 -5.909)" style="fill: #f93a3a;stroke: #000;stroke-miterlimit: 10;stroke-width: 8px"/>
                          <path d="M569.223,944.182l20.714-17.989s22.405-2.794,16.869,12.6c0,0-26.7,32.389-24.119,54.56L560.2,982.268Z" transform="translate(-15.667 -5.909)" style="fill: #fff;stroke: #000;stroke-miterlimit: 10;stroke-width: 8px"/>
                          <path d="M845.64,911.526L857.27,901.4s23.333,21.754,34,58.271l-7.333,14.518L872,987.511S895.342,965.526,845.64,911.526Z" transform="translate(-15.667 -5.909)" style="fill: #fff;stroke: #000;stroke-miterlimit: 10;stroke-width: 8px"/>
                          <path data-name="sous la bouche" d="M684.909,1055.388l20.265,5.012-9.988-6.383s53.925-14.123,80.961-7.859l-0.221,5.952,10.576-9.424S719.741,1035.3,684.909,1055.388Z" transform="translate(-15.667 -5.909)"/>
                      </g>
                      <path data-name="ombre" d="M723.306,210.074C650.336,223.543,598,249.594,566.629,268.3c-29.034,17.313-151.2,90.164-140.39,164.628a66.994,66.994,0,0,0,4.4,15.942l100.254,109.2c-13.3-10.9-33.68-28.089-57.744-50.5-26.53-24.7-42.367-41.623-49.88-37.379-7.293,4.12-5.4,27.423-4,44.667,0.231,2.843.488,5.167,0.667,6.667,1.214,22.1,2.364,41.216,3.333,56.667,0.792,12.63,1.289,20.012,2.667,30a294.233,294.233,0,0,0,8,38.667,191.29,191.29,0,0,0,8,29.333c3.75,10.344,7.765,18.444,8.667,28a46.713,46.713,0,0,0,1.5,8.531,51.531,51.531,0,0,0,4.712,11.129c-0.344.165-12.738-24.726-60.581-123.934,0,0-153.9,307.344,72.311,450.17A479.247,479.247,0,0,1,380.79,974.2c-84.654-93.507-111.6-198.357-121.351-254.405a476.534,476.534,0,0,1,16.8-175.3,469.37,469.37,0,0,1,36.4-89.432c17.185-34.972,66.217-123.045,171.411-184.915C586.455,209.909,684.246,208.536,723.306,210.074Z" transform="translate(-15.667 -5.909)" style="fill: #fff"/>
                      <path data-name="ombre4" d="M257.172,536.86q-8.427-26.849-20.232-28.427-23.485-3.138-60.336,93.76c-5.681,9.18-16.319,23.061-34.2,32a78.844,78.844,0,0,1-11.541,4.667,55.619,55.619,0,0,1-23.723-5.333,57.6,57.6,0,0,1-17.953-13.333c-6.316-6.347-12.758-13.226-19.235-20.667a429.165,429.165,0,0,1-33.214-43.492,242.124,242.124,0,0,0,30.972,34.183,236.836,236.836,0,0,0,34.3,25.976c1.814,1.1,16.793,9.784,33.982,2.667,16.317-6.757,21.7-22.406,22.441-24.667,2.033-7.442,22.047-78.646,55.782-101.333,4.593-3.089,13.391-9.006,25.774-9.351,16.041-.447,28,8.737,32.573,12.684l-6.412,14Z" transform="translate(-15.667 -5.909)" style="fill: #fff"/>
                      <path data-name="ombre3" d="M400.6,62.193c6.359,4.1-81.153,100.341-55.311,179.069,10.439,31.8,36.5,52,56.39,63.931l-26.47,31a124.825,124.825,0,0,1-23.761-20.729c-6.035-6.758-34.95-39.142-36.864-88.271-0.93-23.883,4.454-41.892,7.685-52,7.071-22.124,16.838-36.21,34.332-61C370.147,95,396.877,59.787,400.6,62.193Z" transform="translate(-15.667 -5.909)" style="fill: #fff"/>
                      <path data-name="ombre2" d="M323.961,931.1c-23.872-9.549-32.829-4.743-36.018-2.226-14.552,11.487-5.625,51.611,23.374,101.175,5.406,6.283,23.8,29.1,19.844,55.6a50.082,50.082,0,0,1-3.465,12.231,55.446,55.446,0,0,1-19.331,15.491,58.776,58.776,0,0,1-22.234,5.713c-9.177.939-18.869,1.635-29.042,2a446.513,446.513,0,0,1-56.532-1.6,250.436,250.436,0,0,0,47.5-2.628,241.609,241.609,0,0,0,42.89-10.59c2.041-.74,18.6-7.081,23.623-25.405,4.769-17.395-4.633-31.813-6.017-33.862-4.8-6.434-50.419-68.445-47.691-110.044,0.371-5.664,1.083-16.512,8.614-26.621,9.756-13.095,24.813-16.7,30.928-17.8l7.406,14.17Z" transform="translate(-15.667 -5.909)" style="fill: #fff"/>
                      <path data-name="ombre3" d="M988.6,40.193c1.348,11.667-145.044,8.878-178.519,81.863-12.546,27.353-5.769,57.8,2.519,80.137l-46-8a38.857,38.857,0,0,1-3.145-14.086s0.067-2.65.245-5.465c0.962-15.223,5.753-51.987,33.8-83.93,15.77-17.96,32.075-27.313,41.378-32.418,26.008-14.275,48.851-17.944,66.9-20.6C942.755,32.261,987.853,33.693,988.6,40.193Z" transform="translate(-15.667 -5.909)" style="fill: #fff"/>
                      <path data-name="ombre3" d="M849.468,596.371c0.411,0.806-8.328,7.5-19.449,15.908-21.165,16-25.847,19.082-32.545,25.752a163.767,163.767,0,0,0-15.117,17.344l-10.245,21.275a43.189,43.189,0,0,1,.388-28.232,45.813,45.813,0,0,1,7.753-13.7c2.612-3.161,5.216-5.4,10.2-9.675,1.078-.926,3.879-3.3,7.664-6.137a74.225,74.225,0,0,1,9.252-6.232c0.6-.33,2.62-1.432,5.329-2.636,0.536-.238,2.312-1.02,4.743-1.914,3.013-1.108,3.151-.961,5.341-1.822,2.395-.943,2.778-1.334,5.332-2.433a55.835,55.835,0,0,1,5.734-2.1c2.079-.589,5.095-1.511,8.7-2.864C847.337,597.1,849.281,596.005,849.468,596.371Z" transform="translate(-15.667 -5.909)" style="fill: #fff"/>
                      <text transform="translate(1394.652 768.743)" style="font-size: 499.8573913574219px;fill: #d21b1b;font-family: Campus;font-weight: 700;letter-spacing: 22px">Lure<tspan style="font-size: 179.9486541748047px;letter-spacing: 8px"><tspan x="0" y="199.943">basket club</tspan></tspan></text>
                      <g data-name="oeil_droit">
                          <path d="M418.073,464.524c34.4,28.853,62.722,55.822,85.019,78.461,6.664,6.766,34.219,34.9,68,75,22.54,26.754,41.222,50.961,56,71a125.915,125.915,0,0,1-35.019,45.943c-37.36,30.47-80.63,28.8-92,28C500.073,762.927,416.073,716.12,418.073,464.524Z" transform="translate(-15.667 -5.909)" style="fill: #fff;stroke: #000;stroke-miterlimit: 10;stroke-width: 8px"/>
                          <path d="M524.159,572.189s-7.777,71.364,32.871,140.788c0,0,26.067-12.1,51.318-46.155A348.829,348.829,0,0,0,524.159,572.189Z" transform="translate(-15.667 -5.909)" style="fill: #e81f1f;stroke: #000;stroke-miterlimit: 10;stroke-width: 8px"/>
                          <path d="M556.93,606.216a214.393,214.393,0,0,0,5.269,72.932,68.6,68.6,0,0,0,9.731-10.432,71.012,71.012,0,0,0,13-30Z" transform="translate(-15.667 -5.909)" style="fill: #fff;stroke: #000;stroke-miterlimit: 10;stroke-width: 8px"/>
                          <path d="M627.82,688.964s25.865,2.964,32.272-3.313c0,0,29.969-62.24-35.933-87.1" transform="translate(-15.667 -5.909)" style="fill: none;stroke: #000;stroke-miterlimit: 10;stroke-width: 8px"/>
                      </g>
                  </svg>
              </a>
              <h1>Lure Basket Club</h1>
          </div>

          <div id="menu-btn" onclick="menu()">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
          </div>

          <nav id="menu">
              <ul>
                  <li><a href="<?php echo home_url() ?>">Accueil</a></li>
                  <li><a href="<?php echo esc_url(get_post_type_archive_link("equipes")); ?>" class="lien-menu-equipes">Equipes</a></li>
                  <li><a href="<?php echo esc_url(get_post_type_archive_link("actualites")); ?>" class="lien-menu-actualites">Actualités</a></li>
                  <li><a href="<?php echo esc_url(get_post_type_archive_link("matchs")); ?>" class="lien-menu-calendrier">Calendrier</a></li>
                  <li><a href="<?php echo get_permalink(get_page_by_title("informations pratiques")); ?>" class="lien-menu-infos">Informations pratiques</a></li>
                  <li><a href="<?php echo get_permalink(get_page_by_title('formations'))?>" class="lien-menu-formations">Formations</a></li>
                  <li><a href="<?php echo esc_url(get_post_type_archive_link("galerie")); ?>" class="lien-menu-galerie">Galerie</a></li>
                  <li><a href="<?php echo esc_url(get_post_type_archive_link("boutique")); ?>" class="lien-menu-boutique">Boutique</a></li>
              </ul>
          </nav>
      </div>
  </header>
