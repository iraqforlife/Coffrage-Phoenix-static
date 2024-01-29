<!DOCTYPE html>
<html>
<?php
$metaDesc = "Notre équipe d’experts assurera un produit de la meilleure qualité pour vous assurer un produit durable et résistant aux tremblements de terre pour l’agrandissement de votre maison.";
$englishUrl = "/en/soumission";
include_once(__DIR__ . "/head.php");
?>

<body>
  <?php include(__DIR__ . "/header.php") ?>
  <style>
    .slider-header {
      width: 40%;
    }

    .slider-header h2 {
      margin-bottom: 30px;
      color: black !important;
    }

    @media only screen and (max-width: 360px) {
      .slider-header h2 {
        font-size: 15px !important;
        line-height: 14px !important;
        margin: 0 !important;
      }
    }

    @media only screen and (min-width: 361px) and (max-width: 450px) {
      .slider-header h2 {
        font-size: 20px !important;
        line-height: 17px !important;
        margin: 0 !important;
        font-weight: 400 !important;
      }
    }

    @media only screen and (min-width: 451px) and (max-width: 650px) {
      .slider-header h2 {
        font-size: 22px !important;
        line-height: 19px !important;
        margin-bottom: 10px !important;
        font-weight: 400 !important;
      }
    }

    @media only screen and (min-width: 651px) and (max-width: 725px) {
      .slider-header h2 {
        font-size: 30px !important;
        line-height: 30px !important;
        margin-bottom: 15px !important;
        font-weight: 450 !important;
      }
    }

    @media only screen and (min-width: 726px) and (max-width: 900px) {
      .slider-header h2 {
        font-size: 30px !important;
        margin-bottom: 15px;
        line-height: 30px !important;
        font-weight: 450 !important;
      }
    }

    @media only screen and (min-width: 901px) and (max-width: 1000px) {
      .slider-header h2 {
        font-size: 40px !important;
        line-height: 40px !important;
        font-weight: 450 !important;
        margin-bottom: 20px;
      }
    }

    @media only screen and (min-width: 1001px) and (max-width: 1100px) {
      .slider-header h2 {
        font-size: 45px !important;
        line-height: 45px !important;
        font-weight: 450 !important;
      }
    }

    @media only screen and (min-width: 1101px) and (max-width: 1200px) {
      .slider-header h2 {
        font-size: 45px !important;
        line-height: 45px !important;
      }
    }

    @media only screen and (min-width: 1201px) and (max-width: 1300px) {
      .slider-header h2 {
        font-size: 50px !important;
        line-height: 53px !important;
      }
    }

    @media only screen and (max-width: 550px) {
      .slider-header .socials {
        display: none;
      }
    }

    .services-header {
      text-align: center;
    }

    .service-item {
      text-align: center;
      margin: 10px;
      border: 1px solid #0c4c8e;
      max-width: 650px;
      min-width: 340px;
      box-shadow: 0px 4px 5px 0px rgba(12, 76, 142, .38);

    }

    .service-item p {
      margin: 15px;
      font-size: 20px;
      line-height: 28px;
      font-weight: 500;
      letter-spacing: 0px;
      color: #0c4c8e;
    }
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
      <style>
        .servicesSlider {
          display: grid;
          grid-template-columns: 5% 90% 5%;
        }

        .borderBlue {
          border: 1px solid #0c4c8e;
        }

        .hide {
          display: none;
        }

        .serviceItems {
          display: flex;
          flex-wrap: nowrap;
          white-space: nowrap;
        }

        .verticleCenter {
          position: absolute;
          display: flex;
          align-items: center;
          justify-content: center;
          align-items: center;
        }

        .carouselButtons {
          outline: none;
          background: none;
          border: none;
          cursor: pointer;
        }

        #carousel {
          display: flex;
          align-items: center;
          overflow-x: auto;
          scroll-behavior: smooth;
        }

        #left {
          z-index: 10;
        }

        #right {
          z-index: 10;
        }

        .sliderButton {
          background-color: #ced4da;
          width: 3rem;
          height: 0.6rem;
          transition: background-color .2s, color .2s, box-shadow .2s;
          border-radius: 0;
          border-width: thin;
          border-color: #0c4c8e;
        }
      </style>
      <div class="servicesSlider">
        <button id="left" class="carouselButtons">
          <i class="fa-solid fa-arrow-left" style="font-size: x-large;"></i>
        </button>
        <div id="carousel">
          <div class="aligncenter serviceItems">
            <div class="service-item">
              <a href="/services/coffrage">
                <img src="./assets/img/coffrage-de-beton.webp" alt="coffrage">
                <p>Coffrage</p>
              </a>
            </div>
            <div class="service-item">
              <a href="/services/fondation-maison">
                <img src="./assets/img/fondation.webp" alt="concrete-foundation-house">
                <p>Fondations de maison</p>
              </a>
            </div>
            <div class="service-item">
              <a href="/services/agrandissement-maison">
                <img src="/assets/img/agrandissement.webp" alt="Agrandissement de maison">
                <p>Agrandissement de maison</p>
              </a>
            </div>
            <div class="service-item">
              <a href="/services/balcon-en-beton">
                <img src="/assets/img/balcon-de-beton.webp" alt="Balcons en béton">
                <p>Balcons en béton</p>
              </a>
            </div>
            <div class="service-item ">
              <a href="/services/descente-sous-sol-beton">
                <img src="/assets/img/descente-de-sous-sol-en-beton-003.webp" alt="Descente de sous-sol en béton">
                <p>Descente de sous-sol en béton</p>
              </a>
            </div>
            <div class="service-item">
              <a href="/services/marche-de-beton">
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
        <a href="/services" class="blue-button">Plus de détails sur les services</a>
      </div>

      <div class="values-header">
        <h2>Nos valeurs</h2>
      </div>
      <div class="values">
        <style>
          .values {
            margin: 15px auto;
            align-items: center;
            text-align: center;
            display: grid;
            grid-template-columns: 25% 25% 25% 25%;
          }

          @media only screen and (max-width: 767px) {
            .values {
              padding-left: 33px !important;
              padding-right: 33px !important;
              display: block;
            }

            .values-header h2 {
              font-size: 45px !important;
            }
          }

          @media only screen and (min-width: 768px) and (max-width: 959px) {
            .values {
              grid-template-columns: 50% 50% !important;
            }
          }

          .values h3 {
            margin-bottom: 15px;
            font-size: 20px !important;
            line-height: 28px !important;
            font-weight: 500 !important;
            letter-spacing: 0px !important;
            color: rgba(0, 0, 0, 0.87);
            margin: 1.0933333333rem 0 0.656rem 0;
          }

          .values i {
            margin-bottom: 24px;
            vertical-align: middle;
            font-size: 60px;
            color: #0c4c8e;
          }

          .values-header {
            text-align: center;
            margin-bottom: 30px;
          }

          .value {
            padding: 30px;
            border-radius: 24px;
            border: 1px solid #0c4c8e;
            margin: 0px 12px 40px 12px;
            max-height: 430px;
            box-shadow: 0px 4px 5px 0px rgba(12, 76, 142, .38);
          }

          @media only screen and (max-width: 767px) {
            .value {
              padding: 24px !important;
            }
          }

          @media only screen and (max-width: 390px) {
            .value {
              min-height: 410px;
              font-size: 14px;
            }
          }

          @media only screen and (min-width: 501px) and (max-width: 900px) {
            .value {
              min-height: 330px;
            }
          }

          @media only screen and (min-width: 900px) and (max-width: 1220px) {
            .value {
              min-height: 404px;
            }
          }

          @media only screen and (min-width: 1221px) and (max-width: 1400px) {
            .value {
              min-height: 395px;
            }
          }

          @media only screen and (min-width: 1401px) {
            .value {
              min-height: 345px;
            }
          }
        </style>
        <div class="value">
          <div>
            <i class="fa-solid fa-user"></i>
          </div>
          <div>
            <h3>Intégrité</h3>
            <p>Nous nous engageons à agir avec intégrité dans toutes nos activités en respectant les normes éthiques et
              les lois en vigueur.</p>
          </div>
        </div>
        <div class="value">
          <div>
            <i class="fa-solid fa-dumbbell"></i>
          </div>
          <div>
            <h3>Qualité</h3>
            <p>Nous nous engageons à fournir des produits et des services de qualité supérieure à nos clients.</p>
          </div>
        </div>
        <div class="value">
          <div>
            <i class="fa-solid fa-handshake"></i>
          </div>
          <div>
            <h3>Confiance</h3>
            <p>Nous construisons la confiance de nos clients en étant transparents dans nos communications et nos
              activités et en respectant nos engagements.</p>
          </div>
        </div>
        <div class="value">
          <div>
            <i class="fa-solid fa-lightbulb"></i>
          </div>
          <div>
            <h3>Innovation</h3>
            <p>Nous cherchons en permanence à innover en adoptant des techniques et des technologies de pointe pour
              améliorer la qualité de nos produits et services.</p>
          </div>
        </div>
      </div>
      <div style="text-align: center;margin-bottom: 35px;margin-top: -25px;">
        <a href="/about" class="blue-button">En savoir plus sur l'entreprise</a>
      </div>
      <div id="soumission" data-paperform-id="lesentrerpisesasraca"></div>
      <app-reviews />
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