<!DOCTYPE html  lang="fr">
<html lang="fr-CA">
<?php 
    $metaDesc ="Rejoignez notre équipe - envoyez votre CV à emploi@coffragesphoenix.com";
    $englishUrl = "/en/recruitment/";
    $title = "Coffrages Phoenix - Emploi";
    $canonical = "recrutement/";
    include_once(__DIR__."/../head.php");
?>
<body >
  <?php include(__DIR__."/../header.php")?>
  <div class="container">
    <div class="about">
      <div style="display: grid;">
        <div style="text-align: center;">
          <h1>Emploi</h1>
        </div>
        <div style="text-align: center;margin-left: auto;margin-right: auto;"><img src="/assets/img/about-swig.svg" alt="about" /></div>
      </div>

      <div class="desc">
        <div class="desc-text">
          <h2 style="text-align: center;">Rejoignez Coffrages Phoenix</h2>
          <h5 style="text-align:center;">Nous recrutons — venez grandir avec nous</h5>
          <p style="text-align:center;max-width:760px;margin:10px auto 0;">Nous sommes une entreprise en pleine expansion, cherchant des <strong>charpentiers‑menuisiers compagnons</strong> et des <strong>coffreurs qualifiés</strong> pour superviser nos chantiers, conduire le pick‑up et réaliser des coffrages variés (balcons, fondations, sous-sols) avec notre système léger. Ici, contrairement à d’autres, nous ne cherchons pas à pousser les employés à bout, mais à créer un environnement où chacun s’épanouit et trouve du sens. Le travail est saisonnier, avec une équipe loyale et des perspectives de croissance. Vous aurez liberté et autonomie, avec une rémunération à la hauteur.</p>
        </div>

        <div class="desc-img">
          <img src="/assets/img/escalier-de-beton-001.webp" alt="Equipe" width="780" height="759">
        </div>
      </div>

      <?php include(__DIR__ . "/../values.php") ?>

    <div style="text-align:center;margin-top:26px;">
      <a href="mailto:emploi@coffragesphoenix.com?subject=Candidature%20-%20Charpentier%20ou%20Coffreur" class="blue-button">Postuler par courriel</a>
      <p style="margin-top:12px;color:#666;">Ou envoyez simplement votre CV à <a href="mailto:emploi@coffragesphoenix.com">emploi@coffragesphoenix.com</a></p>
    </div>

  </div>
  <?php include(__DIR__."/../footing.php")?>
</body>
</html>