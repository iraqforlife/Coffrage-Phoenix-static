<!DOCTYPE html>
<html>
<?php
$metaDesc = "Apprenez en plus sur qui est Coffrages Phoenix, quels sont nos valeurs et quel-est notre vision dans le domaine.";
$englishUrl = "https://coffragesphoenix.com/en/about";
include_once(__DIR__ . "/../head.php");
?>

<body>
  <?php include(__DIR__ . "/../header.php") ?>
  <style>
    .contact-icons {
      min-height: 550px;
    }

    .contact-icons i {
      font-size: 2rem;
      padding: 14px 0;
    }

    h4 {
      font-size: 24px !important;
      color: var(--primaryColor);
      line-height: 26px !important;
      font-weight: 700 !important;
      letter-spacing: 0px !important;
    }

    .icon-row {
      vertical-align: middle;
      padding-top: 50px;
      padding-left: 25px;
      padding-right: 25px;

    }

    .icon-row span {
      font-size: 17px;
    }

    .icon-back {
      width: 64px;
      height: 64px;
      background-color: #f4f4f4;
      color: var(--primaryColor);
      border-radius: 50% 50% 50% 50%;
      text-align: center;
    }

    .contact-element {
      display: grid;
      grid-template-columns: 25% auto;
    }

    @media only screen and (max-width: 650px) {
      .phone-icon {
        padding-top: 0 !important;
      }

      .location-icon {
        padding-bottom: 30px !important;
      }

      .email span {
        font-size: 14px;
      }
    }

    @media only screen and (min-width: 650px) {
      .phone-icon {
        padding-top: 45px;
      }
    }

    @media only screen and (min-width: 1240px) {
      .section_wrapper {
        max-width: 1220px;
      }

      .slider h4 {
        font-size: 70px !important;
        line-height: 60px !important;
      }
    }

    @media only screen and (min-width: 960px) and (max-width: 1239px) {
      .section_wrapper {
        max-width: 940px;
      }

      .slider h4 {
        font-size: 45px !important;
        line-height: 40px !important;
      }
    }

    @media only screen and (min-width: 768px) and (max-width: 959px) {
      .section_wrapper {
        max-width: 708px;
      }

      .slider h4 {
        font-size: 38px !important;
        line-height: 40px !important;
      }
    }

    @media only screen and (max-width: 767px) {
      .section_wrapper {
        max-width: 700px;
      }

      .slider h4 {
        font-size: 20px !important;
        line-height: 25px !important;
      }
    }

    @media only screen and (max-width: 400px) {
      .slider h4 {
        font-size: 17px !important;
        line-height: ª20px !important;
      }

    }
  </style>
  <div>
    <div class="section_wrapper">
      <div style="display: grid;margin-bottom: 30px;">
        <div style="text-align: center;">
          <h1>Contact</h1>
        </div>
        <div style="text-align: center;margin-left: auto;margin-right: auto;"><img src="./assets/img/about-swig.svg" alt="about" /></div>
      </div>
      <div class="columns-02-5050-02 contact-icons">
        <div>
          <div class="icon-row phone-icon">
            <a href="tel:5144442822" title="{{'phone' | translate}}" class="fonthover-05">
              <div class="contact-element">
                <div class="icon-back">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <div>
                  <h4>{{'phone' | translate}}</h4>
                  <span>(514) 444-2822</span>
                </div>
              </div>
            </a>
          </div>
          <div class="icon-row email">
            <a href="mailto:soumission@coffragesphoenix.com" title="{{'email' | translate}}" class="fonthover-05">
              <div class="contact-element">
                <div class="icon-back">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div>
                  <h4>{{'email' | translate}}</h4>
                  <span>soumission@coffragesphoenix.com</span>
                </div>
              </div>
            </a>
          </div>
          <div class="icon-row">
            <a href="https://www.facebook.com/coffragesphoenix/" target="_blank" title="Facebook" class="fonthover-05">
              <div class="contact-element">
                <div class="icon-back">
                  <i class="fa-brands fa-facebook"></i>
                </div>
                <div>
                  <h4>Facebook</h4>
                  <span>@Coffragesphoenix</span>
                </div>
              </div>
            </a>
          </div>
          <div class="icon-row">
            <a href="https://www.instagram.com/coffragesphoenix/" target="_blank" title="Instagram" class="fonthover-05">
              <div class="contact-element">
                <div class="icon-back">
                  <i class="fa-brands fa-instagram"></i>
                </div>
                <div>
                  <h4>Instagram</h4>
                  <span>@Coffragesphoenix</span>
                </div>
              </div>
            </a>
          </div>
          <div class="icon-row location-icon">
            <a href="https://goo.gl/maps/onLfca1AuNNfueGT9" title="Location" class="fonthover-05">
              <div class="contact-element">
                <div class="icon-back">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                  <h4>Location</h4>
                  <span>4635 Boulevard Laurier,<br>Terrebonne, QC<br>J6X 0B3</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-paperform-id="3x3qvay5" style="padding-top: 30px;" *ngIf="!isFrench"></div>
        <div data-paperform-id="fnuyt1e0" style="padding-top: 30px;" *ngIf="isFrench"></div>
      </div>
    </div>
    <div class="slider">
      <div class="absolute container-91pct top-050px left-003pct">
        <h4 class="color-01" style="color: white;">{{'joinUs' | translate}}<br> {{'stayUpToDate' | translate}}</h4>
        <div class="spacer-001"></div>
        <div class="fonthover-06">
          <a class="reseau-button" href="https://www.facebook.com/coffragesphoenix/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
          <a class="reseau-button" href="https://www.instagram.com/coffragesphoenix/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
          <a class="reseau-button" href="https://twitter.com/CoffragePhoenix/" title="Twitter" target="_blank"><i class="fa-brands fa-twitter"></i></a>
        </div>
      </div>
      <div style="overflow: hidden;">
        <img src="/assets/img/coffrage-fondation-de-beton-002.webp" style="min-height:100px;max-height:850px;object-fit:cover;width: 200%;position:relative;margin:0;left:0" alt="Balcon">
      </div>
    </div>

  </div>


  <?php include(__DIR__ . "/../footing.php") ?>
</body>

</html>