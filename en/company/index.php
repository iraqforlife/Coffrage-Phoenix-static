<!DOCTYPE html lang="en">
<html lang="en-CA">
<?php
$metaDesc = "Learn more about who Coffrages Phoenix are, what our values are, and what our vision is in the industry.";
$englishUrl = "/entreprise/";
$title = "Coffrages Phoenix - Company";
$canonical = "en/company/";
include_once(__DIR__ . "/../head.php");
?>

<body>
  <?php include(__DIR__ . "/../header.php") ?>
  <style>
    @media only screen and (max-width:767px){.team{font-size:16px;max-width:550px;padding-left:33px!important;padding-right:33px!important}.team img{width:415px!important;height:696px!important;margin:0 auto!important}}.team img{border-radius:30px;border:1px solid #0c4c8e;height:100%;width:95%;margin-left:2.5%;margin-right:2.5%}@media only screen and (max-width:768px){.txt{text-align:center}}@media only screen and (min-width:768px){.prf{margin-right:15px;width:100%}.txt{margin-left:15px;margin-right:100px}.reviews-boxes{display:grid;grid-template-columns:33.333% 33.333% 33.333%}.team{display:grid;max-width:940px;grid-template-columns:auto auto}}.txt{font-size:16px} h5,p {color: var(--primaryColor)}
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
          <h5>Concrete balcony, side walk, slab and formwork specialist in Montreal, Laval, Terrebonne and the North Shore of Montreal</h5>
          <p>Coffrages Phoenix specializes in concrete formwork, concrete balconies, concrete sidewalks and concrete slabs. With our team of experts, we define the best quality service to meet the requirements of our customers and exceed their expectations. We offer formwork services, concrete steps, concrete balconies and much more.</p>
          <div style="text-align: center;margin-bottom: 35px;margin-top: 40px;">
            <a href="/services/" class="blue-button">More details about the services</a>
          </div>
        </div>
        <div class="desc-img">
          <img src="/assets/img/escalier-de-beton-001.webp" alt="Marche-de-beton-laval" width="780" height="759">
        </div>
      </div>
      
      <?php include(__DIR__ . "/../values.php") ?>

      <div class="desc">
        <div class="desc-img">
          <img src="/assets/img/patio2.webp" alt="Patio" width="780" height="759">
        </div>
        <div class="desc-text" style="margin-top: 0;">
          <h2 style="text-align: center; ">Mission</h2>
          <p>Our mission is to offer an exceptional service and quality work for families in Montreal, Laval and the north shore of Montreal.</p>
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
          <p class="title">I would like to tell you a little bit about myself. I am a young Iraqi immigrant with a degree in software engineering.Technology has always been a big passion of mine and I have always been fascinated by how it can be used to solve complex problems and make our lives easier.</p>
          <p>I've always been entrepreneurial as well; I enjoy coming up with novel concepts and figuring out how to make them a reality. Additionally, I have a strong interest in the field of building, especially in regards to cutting-edge technologies and environmentally friendly procedures. I am eager to add to this endeavour by fusing my expertise in software engineering with my love of entrepreneurship and building because I strongly believe that the construction sector can play a significant part in determining a better future for our world. I am eager to investigate different avenues for having a beneficial influence on the sector, whether it be by creating software solutions to increase the effectiveness and sustainability of building processes or by starting my own construction company.</p>
        </div>
      </div>
    </div>
  </div>
  <?php include(__DIR__ . "/../footing.php") ?>
</body>

</html>