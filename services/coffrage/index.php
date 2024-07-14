<!DOCTYPE html lang="fr">
<html>
<?php 
    $metaDesc ="Coffrage Phoenix est une entreprise se spécialisant en coffrages de béton, en balcons de béton et en dalle de béton à Montréal, Laval, Terrebonne et la Rive Nord de Montréal.";
    $englishUrl = "/en/services/formwork/";
    $title = "Coffrages Phoenix - Coffrages";
    $canonical = "services/coffrage/";
    include_once(__DIR__."/../../head.php");
?>
<body >
  <?php include(__DIR__."/../../header.php")?>

  <div class="container">
    <div style="display: grid;" class="about">
      <div style="text-align: center;">
          <h2><strong>Services Coffrages</strong></h2>
      </div>
      <div style="text-align: center;margin-left: auto;margin-right: auto; margin-top: 30px; margin-bottom: 30px;"><a href="#soumission" class="blue-button">Demander une soumission</a></div>
  
      <div class="desc">
          <div class="desc-img">
              <img src="/assets/img/coffrage-beton-commercial-005.webp" alt="Coffrage-de-beton" width="780" height="759">
          </div>
          <div class="servces-desc-title">
              <h1 style="color:#545454;"><strong>Coffrage</strong></h1>
              <hr>
              <p style="color: var(--primaryColor);">Coffrage Phoenix est la compagnie parfaite pour tous vos projets de construction nécessitant du coffrage qu’il s'agit de: </p>
              <ul class="browser-default" style="color: var(--primaryColor);">
                  <li>Dalles en béton</li>
                  <li>Balcons en béton</li>
                  <li>Fondations de béton</li>
                  <li>Marche en béton</li>
                  <li>Agrandissement de maison</li>
                  <li>Structures de béton</li>
                  <li>Coffrages en tout genre</li>
              </ul>
              <p style="color: var(--primaryColor);">Notre équipe d'expert est là pour vous offrir un produit autant durable qu’esthétique. Nous n’utilisons que des matériaux et des outils de qualités pour vous assurer le meilleur résultat possible. N’hésitez pas à nous contacter pour toute question ou pour un estimer.</p>
          </div>
      </div>
  
      <div id="soumission" data-paperform-id="lesentrerpisesasraca"></div>
    </div>
  </div>
  <?php include(__DIR__."/../../footing.php")?>
</body>
</html>