<!DOCTYPE html>
<html>
<?php
$metaDesc = "Learn more about who Coffrages Phoenix are, what our values are, and what our vision is in the industry.";
$englishUrl = "https://coffragesphoenix.com/en/about";
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
  <div class="container">
    <div class="about">
      <div style="display: grid;">
        <div style="text-align: center;">
          <h1>About us</h1>
        </div>
        <div style="text-align: center;margin-left: auto;margin-right: auto;"><img src="/assets/img/about-swig.svg" alt="about" /></div>
      </div>
      <div class="desc">
        <div class="desc-text">
          <h2 style="text-align: center;">Coffrages Phoenix</h2>
          <h5>Specialist in formwork in the Laurentians, Lanaudière and the North Shore.</h5>
          <p>Coffrages Phoenix specializes in concrete formwork as well as excavation services. With our team of experts, we provide the highest quality service to meet the requirements of our customers and exceed their expectations. We offer formwork services, concrete steps, concrete balconies and much more.</p>
          <div style="text-align: center;margin-bottom: 35px;margin-top: 15px;">
            <a href="https://coffragesphoenix.com/services" class="blue-button">More details about the services</a>
          </div>
        </div>
        <div class="desc-img">
          <img src="/assets/img/escalier-de-beton-001.webp" alt="Marche-de-beton-laurentides" width="780" height="759">
        </div>
      </div>
      <div class="values-header">
        <h2>Our values</h2>
      </div>
      <div class="values">
        <div class="value">
          <div>
            <i class="fa-solid fa-user"></i>
          </div>
          <div>
            <h5>Integrity</h5>
            <p>We are committed to acting with integrity in all our activities by adhering to ethical standards and applicable laws.</p>
          </div>
        </div>
        <div class="value">
          <div>
            <i class="fa-solid fa-dumbbell"></i>
          </div>
          <div>
            <h5>Quality</h5>
            <p>We are committed to providing our customers with superior quality products and services.</p>
          </div>
        </div>
        <div class="value">
          <div>
            <i class="fa-solid fa-handshake"></i>
          </div>
          <div>
            <h5>Trust</h5>
            <p>We build trust with our customers by being transparent in our communications and activities and by honoring our commitments.</p>
          </div>
        </div>
        <div class="value">
          <div>
            <i class="fa-solid fa-lightbulb"></i>
          </div>
          <div>
            <h5>Innovation</h5>
            <p>We constantly strive to innovate by adopting cutting-edge techniques and technologies to improve the quality of our products and services.</p>
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
        <div class="prf"><img src="/assets/img/DSC06845-2.webp" alt="ahmad"></div>
        <div class="txt">
          <div class="mcb-column-inner mcb-item-heading-inner">
            <h2 class="title h2Colored">AHMAD <br>AL-TAHER</h2>
          </div>
          <p class="title">I would like to tell you a little bit about myself. I am a young Iraqi immigrant with a degree in software engineering.Technology has always been a big passion of mine and I have always been fascinated by how it can be used to solve complex problems and make our lives easier.</p>
          <p>I've always been entrepreneurial as well; I enjoy coming up with novel concepts and figuring out how to make them a reality. Additionally, I have a strong interest in the field of building, especially in regards to cutting-edge technologies and environmentally friendly procedures. I am eager to add to this endeavour by fusing my expertise in software engineering with my love of entrepreneurship and building because I strongly believe that the construction sector can play a significant part in determining a better future for our world. I am eager to investigate different avenues for having a beneficial influence on the sector, whether it be by creating software solutions to increase the effectiveness and sustainability of building processes or by starting my own construction company.</p>
        </div>
      </div>
    </div>
  </div>
  <?php include(__DIR__ . "/../footing.php") ?>
</body>

</html>