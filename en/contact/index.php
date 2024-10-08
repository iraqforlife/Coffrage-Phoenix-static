<!DOCTYPE html lang="en">
<html lang="en-CA">
<?php
$metaDesc = "If you have nay questions for Coffrage Phoenix or inquiries about your projects, please don’t hesitate to reach out to us.";
$englishUrl = "/contact/";
$title = "Coffrages Phoenix - Contact Us";
$canonical = "en/contact/";
include_once(__DIR__ . "/../head.php");
?>

<body>
  <?php include(__DIR__ . "/../header.php") ?>
  <style>
    .icon-back,h4{color:var(--primaryColor)}.contact-icons{min-height:550px}.contact-icons i{font-size:2rem;padding:14px 0}h4{font-size:24px!important;line-height:26px!important;font-weight:700!important;letter-spacing:0!important}.icon-row{vertical-align:middle;padding-left:25px;padding-right:25px}.icon-row span{font-size:17px}.icon-back{margin:25px;width:64px;height:64px;background-color:#f4f4f4;border-radius:50%;text-align:center}.contact-element{display:grid;grid-template-columns:25% auto}@media only screen and (max-width:650px){.phone-icon{padding-top:0!important}.location-icon{padding-bottom:30px!important}.email span{font-size:14px}}
  </style>
  <div>
    <div class="section_wrapper">
      <div style="display: grid;margin-bottom: 30px;">
        <div style="text-align: center;">
          <h1>Contact</h1>
        </div>
        <div style="text-align: center;margin-left: auto;margin-right: auto;"><img src="/assets/img/about-swig.svg" alt="about" /></div>
      </div>
      <div class="columns-02-5050-02 contact-icons">
        <div>
          <div class="icon-row phone-icon">
            <a href="tel:5144442822" title="Phone" class="fonthover-05">
              <div class="contact-element">
                <div class="icon-back">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <div style="margin-left: 20px;">
                  <h4>Phone</h4>
                  <span>(514) 444-2822</span>
                </div>
              </div>
            </a>
          </div>
          <div class="icon-row email">
            <a href="mailto:soumission@coffragesphoenix.com" title="Email" class="fonthover-05">
              <div class="contact-element">
                <div class="icon-back">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div style="margin-left: 20px;">
                  <h4>Email</h4>
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
                <div style="margin-left: 20px;">
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
                <div style="margin-left: 20px;">
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
                <div style="margin-left: 20px;">
                  <h4>Location</h4>
                  <span>4635 Boulevard Laurier,<br>Terrebonne, QC<br>J6X 0B3</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div data-paperform-id="3x3qvay5" style="padding-top: 30px;"></div>
      </div>
    </div>
  </div>


  <?php include(__DIR__ . "/../footing.php") ?>
</body>

</html>