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
    .icon-back,
    h4 {
      color: var(--primaryColor)
    }

    .contact-icons {
      min-height: 550px
    }

    .contact-icons i,
    .contact-icons svg {
      font-size: 2rem;
      padding: 14px 0
    }

    h4 {
      font-size: 24px !important;
      line-height: 26px !important;
      font-weight: 700 !important;
      letter-spacing: 0 !important
    }

    .icon-row {
      vertical-align: middle;
      padding-left: 25px;
      padding-right: 25px
    }

    .icon-row span {
      font-size: 17px
    }

    .icon-back {
      margin: 25px;
      width: 64px;
      height: 64px;
      background-color: #f4f4f4;
      border-radius: 50%;
      text-align: center
    }

    .contact-element {
      display: grid;
      grid-template-columns: 25% auto
    }

    @media only screen and (max-width:650px) {
      .phone-icon {
        padding-top: 0 !important
      }

      .location-icon {
        padding-bottom: 30px !important
      }

      .email span {
        font-size: 14px
      }
    }
  </style>
  <div>
    <div class="section_wrapper">
      <div style="display: grid;margin-bottom: 30px;">
        <div style="text-align: center;">
          <h1>Contact</h1>
        </div>
        <div style="text-align: center;margin-left: auto;margin-right: auto;"><img src="/assets/img/about-swig.svg" alt="about" /></div>
      </div>
      <div class="columns-02-5050-02 contact-icons" style="margin-bottom: 30px;">
        <div>
          <div class="icon-row phone-icon">
            <a href="tel:5144442822" title="Phone" class="fonthover-05">
              <div class="contact-element">
                <div class="icon-back">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#0c4c8e" width="30px" height="30px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                  </svg>
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
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#0c4c8e" width="30px" height="30px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
                    <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                  </svg>
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
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#0c4c8e" width="30px" height="30px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
                    <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                  </svg>
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
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#0c4c8e" width="30px" height="30px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                  </svg>
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
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="#0c4c8e" width="30px" height="30px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                  </svg>
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