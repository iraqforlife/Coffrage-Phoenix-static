<!DOCTYPE html lang="fr">
<html lang="fr-CA">
<?php
$metaDesc = "Spécialiste en balcon, trottoir et dalle de béton et coffrages à Montréal, Laval, Terrebonne et la Rive-Nord";
$englishUrl = "/en";
$title = "Coffrages Phoenix - Accueil";
$canonical = "";
include_once(__DIR__ . "/head.php");
?>

<body>
  <?php include(__DIR__ . "/header.php") ?>
  <style>
    .slider-header {
      text-align: center;
      top: 20%;
    }

    .slider-header h1 {
      margin-bottom: 30px;
      color: #fff !important
    }

    @media only screen and (max-width:360px) {
      .slider-header h1 {
        font-size: 10px !important;
        line-height: 14px !important;
        margin: 0 !important;
      }
    }

    @media only screen and (max-width:550px) {
      .slider-header .socials {
        font-size: 10px !important;
        margin-top: 10px !important;
      }

      .button-border {
        font-size: 18px !important;
        border: 2px solid #FFF !important;
        padding: 8px 13px !important;
      }

      .services-header h2 {
        display: none !important;
      }
    }

    @media only screen and (min-width:361px) and (max-width:450px) {
      .slider-header h1 {
        font-size: 23px !important;
        line-height: 22px !important;
        margin: 0 !important;
        font-weight: 400 !important;
      }
    }

    @media only screen and (min-width:451px) and (max-width:650px) {
      .slider-header h1 {
        font-size: 26px !important;
        line-height: 19px !important;
        margin-bottom: 10px !important;
        font-weight: 400 !important
      }
    }

    @media only screen and (min-width:651px) and (max-width:725px) {
      .slider-header h1 {
        font-size: 17px !important;
        line-height: 30px !important;
        margin-bottom: 15px !important;
        font-weight: 450 !important
      }
    }

    @media only screen and (min-width:726px) and (max-width:900px) {
      .slider-header h1 {
        font-size: 24px !important;
        margin-bottom: 15px;
        line-height: 30px !important;
        font-weight: 450 !important
      }
    }

    @media only screen and (min-width:901px) and (max-width:1000px) {
      .slider-header h1 {
        font-size: 35px !important;
        line-height: 40px !important;
        font-weight: 450 !important;
        margin-bottom: 20px
      }
    }

    @media only screen and (min-width:1001px) and (max-width:1100px) {
      .slider-header h1 {
        font-size: 36px !important;
        line-height: 45px !important;
        font-weight: 450 !important
      }
    }

    @media only screen and (min-width:1101px) and (max-width:1300px) {
      .slider-header h1 {
        font-size: 42px !important;
        line-height: 53px !important
      }
    }

    /* pour les services */
    @media screen and (min-width: 1100px) {
      #mobileServices {
        display: none !important;
      }

    }

    @media screen and (max-width: 1100px) {
      #desktopServices {
        display: none !important;
      }

    }

    .hide {
      display: none;
    }

    .verticleCenter {
      position: absolute;
      display: flex;
      align-items: center;
      justify-content: center;
      align-items: center
    }

    #carousel {
      display: flex;
      align-items: center;
      overflow-x: auto;
      scroll-behavior: smooth
    }

    #left,
    #right {
      z-index: 10
    }

    .sliderButton {
      background-color: #ced4da;
      width: 3rem;
      height: .6rem;
      transition: background-color .2s, color .2s, box-shadow .2s;
      border-radius: 0;
      border-width: 0
    }
  </style>
  <div class="container">
    <div style="position: relative;z-index: 2;">
      <div class="absolute container-91pct left-003pct slider-header">
        <h1 class="home-header" style="color:white;">Spécialiste en balcon, trottoir, dalle de béton et coffrages dans la région de Montréal, Laval, Terrebonne et la Rive-Nord</h1>
        <p style="color: rgba(255,255,255,0.95); font-size: 18px; font-weight: 300; margin-bottom: 20px; line-height: 1.6;">Construire durable, renaître plus fort • Expertise reconnue depuis des années</p>
        <div class="spacer-001"></div>
        <a class="button-border" href="#soumission">Soumission&nbsp; &#10095;</a>
        <div class="socials fonthover-06" style="margin-top: 15px;">
          <a class="reseau-button" href="https://www.facebook.com/coffragesphoenix/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#fff" width="30px" height="30px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
              <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
            </svg>
          </a>
          <a class="reseau-button" href="https://www.instagram.com/coffragesphoenix/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#fff" width="30px" height="30px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
              <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
            </svg>
          </a>
          <a class="reseau-button" href="https://twitter.com/CoffragePhoenix/" title="Twitter" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#fff" width="30px" height="30px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
              <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
            </svg>
          </a>
          <a class="reseau-button" href="https://g.co/kgs/7ZqjpLo" title="Google" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 488 512" width="30px" height="30px"> <!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
              <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
            </svg>
          </a>
        </div>
      </div>
      <div style="overflow: hidden;">
        <img src="/assets/img/coffrage-de-beton-sainte-anne-des-plaines.webp" style="min-height:250px;max-height:530px;object-fit:cover;width: 100%;position:relative;margin:0;left:0" alt="Coffrage-de-beton-rive-nord">
      </div>
    </div>

    <div class="container-1200px padding-060px" style="padding-bottom: 0;" data-aos="fade-up" data-aos-delay="100">
      <div class="services-header">
        <h2 data-aos="zoom-in" data-aos-delay="200">Coffrages Phoenix</h2>
        <h3 data-aos="zoom-in" data-aos-delay="300">Nos services</h3>
      </div>

      <?php
      $services = array(
        (object) ['href' => '/services/balcon-en-beton/', 'src' => '/assets/img/balcon-de-beton.webp', 'alt' => 'Balcons en béton', 'text' => "Balcons en béton", 'desc' => "Durables et modernes pour votre demeure", 'popular' => true],
        (object) ['href' => '/services/coffrage/', 'src' => '/assets/img/coffrage-de-beton.webp', 'alt' => 'coffrage', 'text' => "Coffrage", 'desc' => "Solutions adaptées à vos projets"],
        (object) ['href' => '/services/dalle-de-beton/', 'src' => '/assets/img/dalle.webp', 'alt' => 'concrete-dalle', 'text' => "Dalles en béton", 'desc' => "Solides pour patios et terrasses"],
        (object) ['href' => '/services/marche-de-beton/', 'src' => '/assets/img/escalier-de-beton.webp', 'alt' => 'Marche en béton', 'text' => "Marche en béton", 'desc' => "Sécuritaires et fonctionnelles"],
        (object) ['href' => '/services/fondation-maison/', 'src' => '/assets/img/fondation.webp', 'alt' => 'concrete-foundation-house', 'text' => "Fondations de maison", 'desc' => "Robustes pour votre maison"],
        (object) ['href' => '/services/agrandissement-maison/', 'src' => '/assets/img/agrandissement.webp', 'alt' => 'Agrandissement de maison', 'text' => "Agrandissement de maison", 'desc' => "Aux normes professionnelles"],
        (object) ['href' => '/services/descente-sous-sol-beton/', 'src' => '/assets/img/descente-de-sous-sol-en-beton-003.webp', 'alt' => 'Descente de sous-sol en béton', 'text' => "Descente de sous-sol en béton", 'desc' => "Accès sécuritaire", 'popular' => true],
        (object) ['href' => '/services/mur-de-soutenement/', 'src' => '/assets/img/soutenement.webp', 'alt' => 'Mur de soutènement en béton', 'text' => "Mur de soutènement", 'desc' => "Stables et fiables"],
        (object) ['href' => '/services/sous-oeuvre/', 'src' => '/assets/img/sousoeuvre.webp', 'alt' => 'Sous-œuvre et renforcement de fondations', 'text' => "Sous-œuvre", 'desc' => "Renforcement de fondations", 'popular' => true],
      );
      ?>
      <div id="mobileServices">
        <div class="servicesSlider">
          <button id="left" class="carouselButtons" style="margin-left: -10px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="var(--primaryColor)" width="21px" height="24px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
              <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
          </button>
          <div id="carousel">
            <div class="aligncenter serviceItems">
              <?php foreach ($services as $service): ?>
                <div class="service-item">
                  <a href="<?= $service->href; ?>">
                    <img src="<?= $service->src; ?>" alt="<?= $service->alt; ?>" loading="lazy" width="400" height="300" style="width: 100%; height: auto;">
                    <p><?= $service->text; ?></p>
                    <div class="service-desc"><?= $service->desc; ?></div>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <button id="right" class="carouselButtons">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="var(--primaryColor)" width="21px" height="24px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </button>
        </div>
        <div class="aligncenter" style="margin: 15px">
          <button class="sliderButton"></button>
          <button class="sliderButton"></button>
          <button class="sliderButton"></button>
        </div>
      </div>
      <div id="desktopServices" class="aligncenter serviceItems" style="display: grid;grid-template-columns: 33% 33% 33%;">
        <?php foreach ($services as $service): ?>
          <div class="service-item" data-aos="fade-up" data-aos-duration="600" style="position: relative;">
            <?php if (isset($service->popular) && $service->popular): ?>
              <span class="service-badge">⭐ Populaire</span>
            <?php endif; ?>
            <a href="<?= $service->href; ?>">
              <img src="<?= $service->src; ?>" alt="<?= $service->alt; ?>" loading="lazy" width="400" height="300" style="width: 100%; height: auto;">
              <p><?= $service->text; ?></p>
              <div class="service-desc"><?= $service->desc; ?></div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <div style="text-align: center;margin-bottom: 35px;margin-top: 35px;">
        <a href="/services/" class="blue-button">Plus de détails sur les services</a>
      </div>

      <?php include(__DIR__ . "/values.php") ?>

      <div style="text-align: center;margin-bottom: 35px;">
        <a href="/entreprise/" class="blue-button">En savoir plus sur l'entreprise</a>
      </div>

      <div id="soumission" data-paperform-id="lesentrerpisesasraca"></div>
      <?php include(__DIR__ . "/reviews.php") ?>
    </div>

  </div>
  <?php include(__DIR__ . "/footing.php") ?>
</body>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('carousel');
    const sliderButtons = document.getElementsByClassName('sliderButton');

    for (var i = 0; i < sliderButtons.length; i++) {
      const divider = container.scrollWidth / sliderButtons.length
      const scrollTo = divider * i

      sliderButtons[i].addEventListener('click', function() {
        container.scrollLeft = scrollTo
      })
    }

    document.getElementById('left').addEventListener('click', function() {
      container.scrollLeft -= 500
    })
    document.getElementById('right').addEventListener('click', function() {
      container.scrollLeft += 500
    })

  });
</script>

</html>