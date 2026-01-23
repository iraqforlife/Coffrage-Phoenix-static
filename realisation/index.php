<!DOCTYPE html lang="fr">
<html lang="fr-CA">
<?php
$metaDesc = "Voici les résultats de notre équipe d’experts, en passant par les dalles de béton, les balcons en béton, les fondations de maison jusqu’aux travaux de béton!";
$englishUrl = "/en/realizations/";
$title = "Réalisations";
$canonical = "realisation/";
include_once(__DIR__ . "/../head.php");
?>

<body>
  <style>
    @media only screen and (min-width:573px) and (max-width:831px) {
      h2 {
        font-size: 40px !important;
        line-height: 35px !important
      }

      .header-1 {
        font-size: 35px !important
      }
    }

    @media only screen and (min-width:395px) and (max-width:572px) {
      h2 {
        font-size: 30px !important;
        line-height: 35px !important
      }

      .insta-button a {
        font-size: 14px !important
      }
    }

    @media only screen and (max-width:394px) {

      .insta-button a,
      .red-button {
        font-size: 12px !important
      }
    }

    .insta-button {
      text-align: center;
      margin: 40px 0
    }

    h2 {
      font-family: 'Open Sans' !important;
      font-size: 45px !important;
      line-height: 60px !important;
      font-weight: 400 !important;
      letter-spacing: 0 !important;
      color: var(--primaryColor)
    }

    /* Amélioration des catégories */
    .project-category {
      margin: 50px 0 30px 0;
      padding-bottom: 15px;
      border-bottom: 3px solid var(--secondary);
      position: relative;
    }

    .project-category h2 {
      font-size: 32px;
      margin: 0;
      display: inline-flex;
      align-items: center;
      gap: 12px;
    }

    .project-category-icon {
      width: 30px;
      height: 30px;
      background: var(--secondary);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      font-size: 16px;
    }

    .columns-03-333333 img {
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(12, 76, 142, 0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .columns-03-333333 img:hover {
      transform: scale(1.02);
      box-shadow: 0 8px 16px rgba(12, 76, 142, 0.25);
    }

    .columns-02-5050 img {
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(12, 76, 142, 0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .columns-02-5050 img:hover {
      transform: scale(1.02);
      box-shadow: 0 8px 16px rgba(12, 76, 142, 0.25);
    }
  </style>
  <?php include(__DIR__ . "/../header.php") ?>

  <div class="container">

    <div style="display: grid;">
      <div style="text-align: center;">
        <h1>Réalisations</h1>
      </div>
      <div style="text-align: center;margin-left: auto;margin-right: auto;"><img src="/assets/img/about-swig.svg" alt="about" /></div>
    </div>
    <div class="container-95pct">
      <div class="insta-button">
        <a class="red-button" href="https://www.instagram.com/coffragesphoenix/" target="_blank"><span>Suivez nos dernières réalisations sur Instagram</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#fff" width="20px" height="20px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
          </svg>
        </a>
      </div>
      <div class="project-category">
        <h2><span class="project-category-icon">1</span>Marche de béton, dalle de béton et balcon en béton</h2>
      </div>
      <div class="columns-03-333333">
        <img src="/assets/img/balcon-de-beton2.webp" width="800" height="575" alt="Concrete Balcony laval" fetchPriority="high" loading="lazy">
        <img src="/assets/img/marche-en-beton-001.webp" width="800" height="575" alt="Concrete steps" fetchPriority="high" loading="lazy">
        <img src="/assets/img/escalier-de-beton-001.webp" width="800" height="575" alt="Concrete steps laval" fetchPriority="high" loading="lazy">
        <img src="/assets/img/dalle-de-beton.webp" width="800" height="575" alt="Concrete slab" fetchPriority="high" loading="lazy">
        <img src="/assets/img/escalier-de-beton-002.webp" width="800" height="575" alt="Concrete steps terrebonne" fetchPriority="high" loading="lazy">
        <img src="/assets/img/escalier-trottoir-de-beton-001.webp" width="800" height="575" alt="Concrete steps sidewalk" fetchPriority="high" loading="lazy">
        <img src="/assets/img/escalier-trottoir-de-beton-002.webp" width="800" height="575" alt="Concrete steps sidewalk" fetchPriority="high" loading="lazy">
        <img src="/assets/img/trottoirs-de-beton.webp" width="800" height="575" alt="Concrete sidewalk" fetchPriority="high" loading="lazy">
        <img src="/assets/img/piscine.webp" width="800" height="575" alt="Concrtete Pool" fetchPriority="high" loading="lazy">
        <img src="/assets/img/dalle-de-beton2.webp" width="800" height="575" alt="Concrete slab" fetchPriority="high" loading="lazy">
        <img src="/assets/img/balcon11.webp" width="800" height="575" alt="Concrete sidewalk" fetchPriority="high" loading="lazy">
        <img src="/assets/img/trottoirs-de-beton2.webp" width="800" height="575" alt="Concrete sidewalk" fetchPriority="high" loading="lazy">
        <img src="/assets/img/balcon-de-beton-003.webp" width="800" height="575" alt="Conrete Balcony" fetchPriority="high" loading="lazy">
        <img src="/assets/img/balcon-de-beton-004.webp" width="800" height="575" alt="Conrete Balcony" fetchPriority="high" loading="lazy">
        <img src="/assets/img/balcon12.webp" width="800" height="575" alt="Concrete sidewalk" fetchPriority="high" loading="lazy">
      </div>
      <div class="insta-button">
        <a class="red-button" href="https://photos.app.goo.gl/Q6cwfNRs3VCq7Kk57" target="_blank"><span>Voir l'album complet des balcons</span></a>
      </div>
      <div class="project-category">
        <h2><span class="project-category-icon">2</span>Descente de sous-sol en béton</h2>
      </div>
      <div class="columns-02-5050">
        <img src="/assets/img/descente-de-sous-sol-en-beton-001.webp" width="800" height="575" alt="Descente de sous sol en beton" loading="lazy">
        <img src="/assets/img/descente-de-sous-sol-en-beton-002.webp" width="800" height="575" alt="Descente de sous sol laval" loading="lazy">
        <img src="/assets/img/descente-de-sous-sol-en-beton-004.webp" width="800" height="575" alt="Descente de sous sol rive-nord" loading="lazy">
        <img src="/assets/img/descente-de-sous-sol-en-beton-005.webp" width="800" height="575" alt="Descente de sous sol montreal" loading="lazy">
      </div>
      <div class="project-category">
        <h2><span class="project-category-icon">3</span>Fondations pour agrandissement de maison</h2>
      </div>
      <div class="columns-02-5050">
        <img src="/assets/img/fondation-agrandissement-de-maison-001.webp" width="800" height="575" alt="Agrandissement fondation" fetchPriority="low" loading="lazy">
        <img src="/assets/img/fondation-agrandissement-de-maison-002.webp" width="800" height="575" alt="agrandissement fondation maison laval" fetchPriority="low" loading="lazy">
        <img src="/assets/img/fondation-agrandissement-de-maison-003.webp"="800" height="575" alt="Agrandissement fondation" fetchPriority="low" loading="lazy">
      </div>
    </div>


  </div>
  <?php include(__DIR__ . "/../footing.php") ?>
</body>

</html>