<!DOCTYPE html>
<html>
<?php
$metaDesc = "Apprenez en plus sur qui est Coffrages Phoenix, quels sont nos valeurs et quel-est notre vision dans le domaine.";
$englishUrl = "/en/about";
include_once(__DIR__ . "/../head.php");
?>

<body>
  <?php include(__DIR__ . "/../header.php") ?>
  <style>
    @media only screen and (max-width: 767px) {
      .team {
        font-size: 16px;
        max-width: 550px;
        padding-left: 33px !important;
        padding-right: 33px !important;
      }

      .team img {
        width: 415px !important;
        height: 696px !important;
        margin: 0 auto !important;
      }
    }

    .team img {
      border-radius: 30px;
      border: 1px solid var(--primaryColor);
      height: 100%;
      width: 95%;
      margin-left: 2.5%;
      margin-right: 2.5%;
    }

    @media only screen and (max-width: 768px) {
      .txt {
        text-align: center;
      }
    }

    @media only screen and (min-width: 768px) {
      .prf {
        margin-right: 15px;
        width: 100%;
      }

      .txt {
        margin-left: 15px;
        margin-right: 100px;
      }

      .reviews-boxes {
        display: grid;
        grid-template-columns: 33.333% 33.333% 33.333%;
      }

      .team {
        display: grid;
        max-width: 940px;
        grid-template-columns: auto auto;
      }
    }

    .txt {
      font-size: 16px;
    }
  </style>
  <div class="container">
    <div class="about">
      <div style="display: grid;">
        <div style="text-align: center;">
          <h1>À propos de nous</h1>
        </div>
        <div style="text-align: center;margin-left: auto;margin-right: auto;"><img src="/assets/img/about-swig.svg" alt="about" /></div>
      </div>
      <div class="desc">
        <div class="desc-text">
          <h2 style="text-align: center;">Coffrages Phoenix</h2>
          <h5>Spécialiste en coffrage dans les Laurentides, Lanaudière et la Rive Nord.</h5>
          <p>Coffrages Phoenix se spécialise dans les coffrages de béton ainsi que des dalles de béton . Avec notre équipe d'experts, nous assurons un service de la meilleure qualité pour répondre au exigences de notre clientèle et dépasser leurs attentes. Nous offrons des services de coffrage, de marches de béton, de balcons en béton et bien plus.</p>
          <div style="text-align: center;margin-bottom: 35px;margin-top: 40px;">
            <a href="/services" class="blue-button">Plus de détails sur les services</a>
          </div>
        </div>
        <div class="desc-img">
          <img src="/assets/img/escalier-de-beton-001.webp" alt="Marche-de-beton-laurentides" width="780" height="759">
        </div>
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

          .values h5 {
            margin-bottom: 15px;
            font-size: 20px;
            line-height: 28px;
            font-weight: 500;
            letter-spacing: 0px;
          }

          .values i {
            margin-bottom: 24px;
            vertical-align: middle;
            font-size: 60px;
            color: var(--primaryColor);
          }

          .values-header {
            text-align: center;
            margin-bottom: 30px;
          }

          .value {
            padding: 30px;
            border-radius: 24px;
            border: 1px solid var(--primaryColor);
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
            <h5>Intégrité</h5>
            <p>Nous nous engageons à agir avec intégrité dans toutes nos activités en respectant les normes éthiques et les lois en vigueur.</p>
          </div>
        </div>
        <div class="value">
          <div>
            <i class="fa-solid fa-dumbbell"></i>
          </div>
          <div>
            <h5>Qualité</h5>
            <p>Nous nous engageons à fournir des produits et des services de qualité supérieure à nos clients.</p>
          </div>
        </div>
        <div class="value">
          <div>
            <i class="fa-solid fa-handshake"></i>
          </div>
          <div>
            <h5>Confiance</h5>
            <p>Nous construisons la confiance de nos clients en étant transparents dans nos communications et nos activités et en respectant nos engagements.</p>
          </div>
        </div>
        <div class="value">
          <div>
            <i class="fa-solid fa-lightbulb"></i>
          </div>
          <div>
            <h5>Innovation</h5>
            <p>Nous cherchons en permanence à innover en adoptant des techniques et des technologies de pointe pour améliorer la qualité de nos produits et services.</p>
          </div>
        </div>
      </div>
      <div class="desc">
        <div class="desc-img">
          <img src="/assets/img/patio2.webp" alt="Patio" width="780" height="759">
        </div>
        <div class="desc-text" style="margin-top: 0;">
          <h2 style="text-align: center; ">Vision</h2>
          <h3 style="font-size: 36px !important;line-height:28px !important ;">Innovation, qualité, objectif commun</h3>
          <p>Notre vision est d'être le leader en coffrage au Québec en offrant des solutions innovantes et de haute qualité pour répondre aux besoins de nos clients et dépasser leurs attentes, tout en mobilisant et inspirant nos employés pour atteindre notre objectif commun.</p>
          <h2 style="text-align: center; ">Histoire</h2>
          <p>Notre histoire a commencé avec l'envie de reprendre le flambeau d'une entreprise existante et de la propulser vers de nouveaux sommets. Après avoir acheté ses actifs, nous nous sommes fixés pour objectif de faire fructifier cette entreprise, en opérant de manière efficiente et en la développant. Notre ambition pour notre première année de démarrage est de stabiliser les opérations, d'établir des partenariats solides et de mettre en place les fondations pour une croissance à long terme. Nous sommes impatients de voir les fruits de nos efforts et de contribuer au dynamisme économique de la région.</p>
        </div>
      </div>
      <?php include(__DIR__ . "/../reviews.php") ?>

      <div class="team" style="margin: 15px auto;background: border-box;">
        <div class="prf"><img src="/assets/img/ahmad al-taher.webp" alt="ahmad"></div>
        <div class="txt">
          <div class="mcb-column-inner mcb-item-heading-inner">
            <h2 class="title h2Colored">AHMAD <br>AL-TAHER</h2>
          </div>
          <p class="title">Je voulais vous parler un peu de moi. Je suis un jeune immigrant irakien et j'ai un diplôme en génie logiciel. La technologie a toujours été une passion immense pour moi, et j'ai toujours été fasciné par la façon dont elle peut être utilisée pour résoudre des problèmes complexes et faciliter notre vie.</p>
          <p>J'ai toujours été entrepreneur; j'aime concevoir de nouvelles idées et trouver comment les concrétiser. De plus, j'ai un vif intérêt pour le domaine de la construction, notamment en ce qui concerne les technologies de pointe et les procédures respectueuses de l'environnement. Je suis enthousiaste à l'idée d'apporter ma contribution à cette entreprise en associant mes compétences en ingénierie logicielle avec ma passion pour l'entrepreneuriat et la construction, car je suis convaincu que le secteur de la construction peut jouer un rôle important dans la détermination d'un avenir meilleur pour notre monde. Je suis impatient d'explorer différentes avenues pour avoir une influence bénéfique sur le secteur, que ce soit en créant des solutions logicielles pour améliorer l'efficacité et la durabilité des processus de construction ou en lançant ma propre entreprise de construction.</p>
        </div>
      </div>
    </div>
  </div>
  <?php include(__DIR__ . "/../footing.php") ?>
</body>

</html>