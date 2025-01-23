<!DOCTYPE html lang="en">
<html lang="en-CA">
<?php
$title = "Coffrages Phoenix - Welcome";
$metaDesc = "Concrete balcony, side walk, slab and formwork specialist in Montreal, Laval, Terrebonne and the North Shore of Montreal.";
$englishUrl = "/";
$canonical = "en/";
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
        <h1 style="color:white;">Concrete balcony, side walk, slab and formwork specialist in Montreal, Laval, Terrebonne and the North Shore of Montreal.</h1>
        <div class="spacer-001"></div>
        <a class="button-border" href="#quote">Quote&nbsp; &#10095;</a>
        <div class="socials fonthover-06" style="margin-top: 15px;">
          <a class="reseau-button" href="https://www.facebook.com/coffragesphoenix/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
          <a class="reseau-button" href="https://www.instagram.com/coffragesphoenix/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
          <a class="reseau-button" href="https://twitter.com/CoffragePhoenix/" title="Twitter" target="_blank"><i class="fa-brands fa-twitter"></i></a>
          <a class="reseau-button" href="https://g.co/kgs/7ZqjpLo" title="Google" target="_blank"><i class="fa-brands fa-google"></i></a>
        </div>
      </div>
      <div style="overflow: hidden;">
        <img src="/assets/img/coffrage-de-beton-sainte-anne-des-plaines.webp" style="min-height:250px;max-height:530px;object-fit:cover;width: 200%;position:relative;margin:0;left:0" alt="Coffrage-de-beton-rive-nord">
      </div>
    </div>

    <div class="container-1200px padding-060px" style="padding-bottom: 0;">
      <div class="services-header">
        <h2>Coffrages Phoenix</h2>
        <h3>Our services</h3>
      </div>
      <?php
      $services = array(
        (object) ['href' => '/en/services/concrete-balcony/', 'src' => '/assets/img/balcon-de-beton.webp', 'alt' => 'Concrete balcony', 'text' => "Concrete balcony"],
        (object) ['href' => '/en/services/formwork/', 'src' => '/assets/img/coffrage-de-beton.webp', 'alt' => 'Formwork', 'text' => "Formwork"],
        (object) ['href' => '/en/services/concrete-slab/', 'src' => '/assets/img/dalle.webp', 'alt' => 'concrete slab', 'text' => "Concrete slab"],
        (object) ['href' => '/en/services/concrete-step/', 'src' => '/assets/img/escalier-de-beton.webp', 'alt' => 'Concrete step', 'text' => "Concrete step"],
        (object) ['href' => '/en/services/house-foundation/', 'src' => '/assets/img/fondation.webp', 'alt' => 'concrete-foundation-house', 'text' => "House foundations"],
        (object) ['href' => '/en/services/house-extension/', 'src' => '/assets/img/agrandissement.webp', 'alt' => 'House extension', 'text' => "House extension"],
        (object) ['href' => '/en/services/concrete-basement/', 'src' => '/assets/img/descente-de-sous-sol-en-beton-003.webp', 'alt' => 'Concrete basement descent', 'text' => "Concrete basement descent"],
        (object) ['href' => '/en/services/concrete-retaining-walls/', 'src' => '/assets/img/soutenement.webp', 'alt' => 'Concrete retaining walls', 'text' => "Concrete retaining walls"],
      );
      ?>
      <div id="mobileServices">
        <div class="servicesSlider">
          <button id="left" class="carouselButtons" style="margin-left: -10px;">
            <i class="fa-solid fa-arrow-left" style="font-size: x-large;"></i>
          </button>
          <div id="carousel">
            <div class="aligncenter serviceItems">
              <?php foreach ($services as $service): ?>
                <div class="service-item">
                  <a href="<?= $service->href; ?>">
                    <img src="<?= $service->src; ?>" alt="<?= $service->alt; ?>">
                    <p><?= $service->text; ?></p>
                  </a>
                </div>
              <?php endforeach; ?>
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
      </div>
      <div id="desktopServices" class="aligncenter serviceItems" style="display: grid;grid-template-columns: 33% 33% 33%;">
        <?php foreach ($services as $service): ?>
          <div class="service-item">
            <a href="<?= $service->href; ?>">
              <img src="<?= $service->src; ?>" alt="<?= $service->alt; ?>">
              <p><?= $service->text; ?></p>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <div style="text-align: center;margin-bottom: 35px;margin-top: 35px;">
        <a href="/services/" class="blue-button">More details about the services</a>
      </div>
      <?php include(__DIR__ . "/values.php") ?>
      <div style="text-align: center;margin-bottom: 35px;">
        <a href="/entreprise/" class="blue-button">Learn more about the company</a>
      </div>
      <div id="quote" data-paperform-id="5am6rzq3"></div>
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