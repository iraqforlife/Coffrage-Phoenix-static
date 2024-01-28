<!DOCTYPE html>
<html>
<?php 
    $metaDesc ="Notre équipe d’experts assurera un produit de la meilleure qualité pour vous assurer un produit durable et résistant aux tremblements de terre pour l’agrandissement de votre maison.";
    $englishUrl = "https://coffragesphoenix.com/en/soumission";
    include_once(__DIR__."/head.php");
?>
<body >
  <?php include(__DIR__."/header.php")?>
  <style>

    .sizablediv {
        margin: 15px auto;
    }

    @media only screen and (max-width: 767px) {
      .sizablediv {
        max-width: 700px;
      }
    }

    @media only screen and (min-width: 768px) and (max-width: 959px) {
      .sizablediv {
        max-width: 708px;
      }
    }
    @media only screen and (min-width: 960px) and (max-width: 1239px) {
      .sizablediv {
        max-width: 940px;
      }
    }
    @media only screen and (min-width: 1240px) {
      .sizablediv {
        max-width: 1220px;
      }
    }

    .sizabledesc {
      margin: 40px 10px;
      display: grid;
      grid-template-columns: 50% 50%;
      font-size: 16px;
    }
    .sizabledesc-img {
      margin-right: 5%;
    }
    .sizabledesc-img img {
          border-radius: 64px;
          border:1px solid var(--primaryColor);
    }
    @media only screen and (max-width: 959px) {
      .sizabledesc {
        display: block;
        align-items: center;
      }
      .sizabledesc-img {
            margin: 30px;
        }
    }
    @media only screen and (max-width: 959px) {
      .sizabledesc h2 {
        font-size: 35px !important;
      }
      .sizabledesc h5 {
          font-size: 17px;
      }
    }
.blue-button { 
  border-radius: 11px;
  background-color: white;
  color:var(--primaryColor);
  font-size: 19px;
  border: 1px solid var(--primaryColor);
  cursor: pointer;
  padding: 13px 19px;
  box-shadow: 0px 4px 5px 0px rgba(12,76,142,.38);
}
@media only screen and (max-width: 650px) {
  .blue-button {
    font-size: 16px;
  }
}
@media only screen and (max-width: 350px) {
  .blue-button {
    font-size: 12px;
  }
}



  </style>
  <div class="container">  
    <div style="display: grid;" class="sizablediv">
      <div style="text-align: center;">
          <h2 style="font-size: 30px !important;">H2: Cybersecurity</h2>
          <h1>H1: Loi 25 compliance</h1>
      </div>
      <div style="text-align: center;margin-left: auto;margin-right: auto;"><img src="/assets/img/about-swig.svg" alt="about"/></div>
  
      <div class="sizabledesc">
          <div class="sizabledesc-img">
              <img src="/assets/img/balcon-de-beton-004.webp" alt="Balcon-en-beton" width="780" height="759">
          </div>
          <div style="margin: 30px;">
              <h3 style="color:#545454;">H3: Understanding and Adhering to Law 25 Regulations</h3>
              <hr>
              <p style="color: #1e1e1e;">P: Text to be filled based on keywords and optimisation. Can be done by chatgpt but we have to determine the parameters (keywords)</p>
              <div style="text-align: center; margin-bottom: 35px; margin-top: 15px;"><a href="#cta" class="blue-button" tabindex="0">CTA</a></div>
          </div>
      </div>
      <div class="sizabledesc">
          <div style="margin: 30px;">
              <h3 style="color:#545454;">H3: Data Protection and Privacy Compliance</h3>
              <hr>
              <p style="color: #1e1e1e;">P: Text to be filled based on keywords and optimisation. Can be done by chatgpt but we have to determine the parameters (keywords)</p>
              <div style="text-align: center; margin-bottom: 35px; margin-top: 15px;"><a href="#cta" class="blue-button" tabindex="0">CTA</a></div>
          </div>
          <div class="sizabledesc-img">
              <img src="/assets/img/balcon-de-beton-004.webp" alt="Balcon-en-beton" width="780" height="759">
          </div>
      </div>
      <div class="sizabledesc">
          <div class="sizabledesc-img">
              <img src="/assets/img/balcon-de-beton-004.webp" alt="Balcon-en-beton" width="780" height="759">
          </div>
          <div style="margin: 30px;">
              <h3 style="color:#545454;">H3: Legal Consultation and Support</h3>
              <hr>
              <p style="color: #1e1e1e;">P: Text to be filled based on keywords and optimisation. Can be done by chatgpt but we have to determine the parameters (keywords)</p>
              <div style="text-align: center; margin-bottom: 35px; margin-top: 15px;"><a href="#cta" class="blue-button" tabindex="0">CTA</a></div>
          </div>
      </div>
  
  
      <div id="cta" data-paperform-id="lesentrerpisesasraca"></div>
    </div>
  </div>
  <?php include(__DIR__."/footing.php")?>
</body>
</html>