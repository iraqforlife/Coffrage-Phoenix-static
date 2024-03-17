<!DOCTYPE html  lang="fr">
<html>
<?php
$metaDesc = "Coffrage Phoenix est une entreprise se spécialisant en fondation de béton, en coffrage et dalle de béton dans Lanaudière, les Laurentides et la Rive-Nord.";
$englishUrl = "/en";
$title = "Coffrages Phoenix - Accueil";
$canonical = "";
include_once(__DIR__ . "/head.php");
?>

<body>
  <?php include(__DIR__ . "/header.php") ?>
  <style>
    .service-item,.services-header{text-align:center}.borderBlue,.service-item{border:1px solid #0c4c8e}.slider-header{width:40%}.slider-header h2{margin-bottom:30px;color:#000!important}@media only screen and (max-width:360px){.slider-header h2{font-size:15px!important;line-height:14px!important;margin:0!important}}@media only screen and (min-width:361px) and (max-width:450px){.slider-header h2{font-size:20px!important;line-height:17px!important;margin:0!important;font-weight:400!important}}@media only screen and (min-width:451px) and (max-width:650px){.slider-header h2{font-size:22px!important;line-height:19px!important;margin-bottom:10px!important;font-weight:400!important}}@media only screen and (min-width:651px) and (max-width:725px){.slider-header h2{font-size:30px!important;line-height:30px!important;margin-bottom:15px!important;font-weight:450!important}}@media only screen and (min-width:726px) and (max-width:900px){.slider-header h2{font-size:30px!important;margin-bottom:15px;line-height:30px!important;font-weight:450!important}}@media only screen and (min-width:901px) and (max-width:1000px){.slider-header h2{font-size:40px!important;line-height:40px!important;font-weight:450!important;margin-bottom:20px}}@media only screen and (min-width:1001px) and (max-width:1100px){.slider-header h2{font-size:45px!important;line-height:45px!important;font-weight:450!important}}@media only screen and (min-width:1101px) and (max-width:1200px){.slider-header h2{font-size:45px!important;line-height:45px!important}}@media only screen and (min-width:1201px) and (max-width:1300px){.slider-header h2{font-size:50px!important;line-height:53px!important}}@media only screen and (max-width:550px){.slider-header .socials{display:none}}.service-item{margin:10px;max-width:650px;min-width:340px;box-shadow:0 4px 5px 0 rgba(12,76,142,.38)}.service-item p{margin:15px;font-size:20px;line-height:28px;font-weight:500;letter-spacing:0;color:#0c4c8e}.servicesSlider{display:grid;grid-template-columns:5% 90% 5%}.hide{display:none}.serviceItems{display:flex;flex-wrap:nowrap;white-space:nowrap}.verticleCenter{position:absolute;display:flex;align-items:center;justify-content:center;align-items:center}.carouselButtons{outline:0;background:0 0;border:none;cursor:pointer}#carousel{display:flex;align-items:center;overflow-x:auto;scroll-behavior:smooth}#left,#right{z-index:10}.sliderButton{background-color:#ced4da;width:3rem;height:.6rem;transition:background-color .2s,color .2s,box-shadow .2s;border-radius:0;border-width:0}
  </style>
  <div class="container">
    <div style="position: relative;z-index: 2;">
      <div class="absolute container-91pct top-050px left-003pct slider-header">
        <h2>Spécialiste en fondation de béton et coffrages dans Lanaudière, les Laurentides et la Rive-Nord</h2>
        <div class="spacer-001"></div>
        <a class="button-border" href="#soumission">Soumission&nbsp; &#10095;</a>
        <div class="socials fonthover-06" style="margin-top: 5px;">
          <a class="reseau-button" href="https://www.facebook.com/coffragesphoenix/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
          <a class="reseau-button" href="https://www.instagram.com/coffragesphoenix/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
          <a class="reseau-button" href="https://twitter.com/CoffragePhoenix/" title="Twitter" target="_blank"><i class="fa-brands fa-twitter"></i></a>
        </div>
      </div>
      <div style="overflow: hidden;">
        <img src="/assets/img/coffrage-de-beton-sainte-anne-des-plaines.webp" style="min-height:100px;max-height:850px;object-fit:cover;width: 200%;position:relative;margin:0;left:0" alt="Coffrage-de-beton-rive-nord">
      </div>
    </div>

    <div class="container-1200px padding-060px" style="padding-bottom: 0;">
      <div class="services-header">
        <h1>Coffrages Phoenix</h1>
        <h2>Nos services</h2>
      </div>
      <div class="servicesSlider">
        <button id="left" class="carouselButtons">
          <i class="fa-solid fa-arrow-left" style="font-size: x-large;"></i>
        </button>
        <div id="carousel">
          <div class="aligncenter serviceItems">
            <div class="service-item">
              <a href="/services/coffrage/">
                <img src="/assets/img/coffrage-de-beton.webp" alt="coffrage">
                <p>Coffrage</p>
              </a>
            </div>
            <div class="service-item">
              <a href="/services/fondation-maison/">
                <img src="/assets/img/fondation.webp" alt="concrete-foundation-house">
                <p>Fondations de maison</p>
              </a>
            </div>
            <div class="service-item">
              <a href="/services/agrandissement-maison/">
                <img src="/assets/img/agrandissement.webp" alt="Agrandissement de maison">
                <p>Agrandissement de maison</p>
              </a>
            </div>
            <div class="service-item">
              <a href="/services/balcon-en-beton/">
                <img src="/assets/img/balcon-de-beton.webp" alt="Balcons en béton">
                <p>Balcons en béton</p>
              </a>
            </div>
            <div class="service-item ">
              <a href="/services/descente-sous-sol-beton/">
                <img src="/assets/img/descente-de-sous-sol-en-beton-003.webp" alt="Descente de sous-sol en béton">
                <p>Descente de sous-sol en béton</p>
              </a>
            </div>
            <div class="service-item">
              <a href="/services/marche-de-beton/">
                <img src="/assets/img/escalier-de-beton.webp" alt="Marche en béton">
                <p>Marche en béton</p>
              </a>
            </div>
            <div class="service-item">
              <a href="/services/dalle-de-beton/">
                <img src="/assets/img/dalle.webp" alt="concrete-dalle">
                <p>Dalles en béton</p>
              </a>
            </div>
          </div>
        </div>
        <button id="right" class="carouselButtons">
          <i class="fa-solid fa-arrow-right" style="font-size: x-large;"></i>
        </button>
      </div>
      <div class="aligncenter" style="margin: 15px">
        <button class="sliderButton"></button>
        <button class="sliderButton"></button>
        <button class="sliderButton"></button>
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
    const container = document.getElementById('carousel')
    const sliderButtons = document.getElementsByClassName('sliderButton')

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