<!DOCTYPE html lang="fr">
<html lang="fr-CA">
<?php
$metaDesc = "Apprenez en plus sur qui est Coffrages Phoenix, quels sont nos valeurs et quel-est notre vision dans le domaine.";
$englishUrl = "/en/company/";
$title = "Coffrages Phoenix - Entreprise";
$canonical = "entreprise/";
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
          <h1>À propos de nous</h1>
        </div>
        <div style="text-align: center;margin-left: auto;margin-right: auto;"><img src="/assets/img/about-swig.svg" alt="about" /></div>
      </div>
      <div class="desc">
        <div class="desc-text">
          <h2 style="text-align: center;">Coffrages Phoenix</h2>
          <h5>Spécialiste en balcons, trottoirs, dalles de béton et coffrages à Montréal, Laval, Terrebonne et sur la Rive-Nord de Montréal.</h5>
          <p>Coffrages Phoenix se spécialise dans les coffrages de béton, les balcons en béton, les trottoirs en béton ainsi que les dalles de béton.
            Avec notre équipe d'experts, nous assurons un service de la meilleure qualité pour répondre aux exigences de notre clientèle et dépasser leurs attentes.
            Nous offrons des services de coffrage, de marches en béton, de balcons en béton et bien plus.</p>
          <div style="text-align: center;margin-bottom: 35px;margin-top: 40px;">
            <a href="/services/" class="blue-button">Plus de détails sur les services</a>
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
          <p>Notre mission est d'offrir un service exceptionnel et des travaux de qualité pour les familles à Montréal, Laval et la rive Nord de Montréal.</p>
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