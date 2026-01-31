<!DOCTYPE html  lang="en">
<html lang="en-CA">
<?php 
    $metaDesc ="Join our team - send your CV to emploi@coffragesphoenix.com";
    $englishUrl = "/recrutement/";
    $title = "Coffrages Phoenix - Employment";
    $canonical = "en/recruitment/";
    include_once(__DIR__."/../head.php");
?>
<body >
  <?php include(__DIR__."/../header.php")?>
  <div class="container">
    <div class="about">
      <div style="display: grid;">
        <div style="text-align: center;">
          <h1>Employment</h1>
        </div>
        <div style="text-align: center;margin-left: auto;margin-right: auto;"><img src="/assets/img/about-swig.svg" alt="about" /></div>
      </div>

      <div class="desc">
        <div class="desc-text">
          <h2 style="text-align: center;">Join Coffrages Phoenix</h2>
          <h5 style="text-align:center;">We're hiring — grow with us</h5>
          <p style="text-align:center;max-width:760px;margin:10px auto 0;">We are a growing company looking for a <strong>journeyman carpenter</strong> or a qualified <strong>formwork carpenter</strong> to supervise our sites, drive the pickup and perform various formworks (balconies, foundations, basements) with our lightweight system. Unlike others, we don't push employees to the limit — we create an environment where everyone thrives and finds meaning. Work is seasonal, with a loyal team and growth prospects. You will have freedom and autonomy, with competitive pay. Join us!</p>
        </div>

        <div class="desc-img">
          <img src="/assets/img/escalier-de-beton-001.webp" alt="Team" width="780" height="759">
        </div>
      </div>

      <?php include(__DIR__ . "/../values.php") ?>

    <div style="text-align:center;margin-top:26px;">
      <a href="mailto:emploi@coffragesphoenix.com?subject=Application%20-%20Carpenter%20or%20Formwork" class="blue-button">Apply by email</a>
      <p style="margin-top:12px;color:#666;">Or send your CV to <a href="mailto:emploi@coffragesphoenix.com">emploi@coffragesphoenix.com</a></p>
    </div>

    <p style="text-align:center;margin-top:30px;"><a href="<?php echo $englishUrl ?>">Voir cette offre en français</a></p>
  </div>
  <?php include(__DIR__."/../footing.php")?>
</body>
</html>