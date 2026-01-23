<style>
  @media only screen and (min-width:768px) {
    .reviews-boxes {
      display: grid;
      grid-template-columns: 33.333% 33.333% 33.333%
    }
  }

  .reviews {
    margin: 15px auto;
    display: grid;
  }

  @media only screen and (max-width:495px) {
    .reviews h2 {
      font-size: 25px !important;
      line-height: 25px !important;
    }
  }

  @media only screen and (max-width:767px) {
    .reviews {
      padding-left: 33px !important;
      padding-right: 33px !important;
      max-width: 338px;

    }

    .reviews h2 {
      font-size: 35px !important;
      line-height: 35px !important;
    }
  }

  @media only screen and (min-width:768px) and (max-width:959px) {
    .reviews h2 {
      font-size: 45px !important;
      line-height: 45px !important;
    }
  }

  .reviews-box {
    color: #000 !important;
    padding: 32px;
    text-align: center;
    border: 2px solid var(--secondary);
    border-radius: 8px;
    background: linear-gradient(to bottom, var(--neutral-lighter), #fff);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .reviews-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(231, 76, 60, 0.2);
  }

  @media (max-width:959px) {
    .reviews-box {
      padding: 24px;
    }
  }

  .reviews-box-img {
    flex-direction: column;
    display: flex;
    align-items: center;
    min-height: 208px !important;
  }

  .reviews i {
    color: var(--primaryColor);
  }

  .reviews-img-wrapper {
    width: 100px;
    height: 100px;
    margin-bottom: 32px;
    border-radius: 50%;
    border: 3px solid var(--secondary);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    line-height: 0;
    overflow: hidden;
    background: var(--neutral-lighter);
    box-shadow: 0 4px 12px rgba(231, 76, 60, 0.15);
  }

  .reviews i {
    color: var(--secondary);
  }

  .review-item p {
    font-size: 18px;
    line-height: 28px;
    font-weight: 500;
    letter-spacing: 0;
    color: var(--secondary);
    text-align: center;
  }
</style>
<div class="reviews">

  <?php
  $reviews = array(
    (object) ['name' => 'Rawan', 'stars' => '5', 'date' => 'Jan 2024', 'review' => "Vraiment satisfaite du travail fait, ils ont fait la devanture de la maison et c'est un très beau résultat. Service très courtois et fiable.", 'url' => "https://maps.app.goo.gl/oWn6H51FsisSwSHn9"],
    (object) ['name' => 'Antoine Hakim', 'stars' => '5', 'date' => 'Jan  2024', 'review' => "Great work by the team. We had a flooded basement so the floor and all the gyprock had to be replaced. The finishing is impeccable and they put our ...", 'url' => "https://maps.app.goo.gl/KMaNGRtWf6usmXvx6"],
    (object) ['name' => 'Manon Labrie', 'stars' => '5', 'date' => 'Jan 2024', 'review' => "Réponds très vite à nos demandes et rassurant.Fais aussi des bons prix pour des vrais coffreurs.Merci beaucoup je vous garde dans mes contacts et vous recommanderai sans hésiter! Merci beaucoup Ahmad !", 'url' => "https://maps.app.goo.gl/g2TGE7RznvAWNoHK7"],
    (object) ['name' => 'Rawaa S', 'stars' => '5', 'date' => 'Jan 2024', 'review' => "Great team", 'url' => "https://maps.app.goo.gl/fpLM3zWTCX6J29dw6"],
    (object) ['name' => 'Benoit Choquette', 'stars' => '5', 'date' => 'Nov 2024', 'review' => "Je suis extrêmement satisfait du travail réalisé par Coffrages Phoenix à mon immeuble. Les travaux ont été réalisés rapidement avec beaucoup de professionnalisme...", 'url' => "https://maps.app.goo.gl/RdukcGCMMi9f7jJY7"],
    (object) ['name' => 'Serge Mandeville', 'stars' => '5', 'date' => 'Oct 2024', 'review' => "Les travaux consistaient à démolir le balcon et l'escalier en béton existant et à les reconstruire. Très bon travail professionnel, consciencieux, finition soignée...", 'url' => "https://maps.app.goo.gl/64k57JiWYXm4Tn9S9"],
    (object) ['name' => 'David Bretnall', 'stars' => '5', 'date' => 'Juin 2024', 'review' => "Excellent all the way through from providing the quote to completion of the job. I would definitely recommend Phoenix. Everyone remarks on how good...", 'url' => "https://maps.app.goo.gl/jWzBUP5t2XFfBL5C8"],
    (object) ['name' => 'Jayant Singh', 'stars' => '5', 'date' => 'Mai 2024', 'review' => "We called the team, for removing the trees, repair my broken stairs and land scapping work using concrete. The team did a really nice job and beautiful...", 'url' => "https://maps.app.goo.gl/65LW54djwxW1uXpq9"],
    (object) ['name' => 'Martin Harrisson', 'stars' => '5', 'date' => 'Juillet 2023', 'review' => "Coffrage Phoenix est une entreprise fiable et soucieuse du détails. Ahmad est un entrepreneur de confiance qui sera en mesure de réaliser vos...", 'url' => "https://maps.app.goo.gl/Ucskh9Lvcu7mayvz6"],
    (object) ['name' => 'Juan Carlos Perez Cisneros', 'stars' => '5', 'date' => 'Juin 2023', 'review' => "Très bon travail. Malgré les conditions climatiques qui n'ont pas aider à la rapidité du projet. Pus avons quand même obtenu un superbe...", 'url' => "https://maps.app.goo.gl/j7xr517brEo49Cmb6"],
    (object) ['name' => 'Y Gotham', 'stars' => '5', 'date' => 'Mai 2023', 'review' => "Merci pour l'excellent service. Le balcon est fantastique.", 'url' => "https://maps.app.goo.gl/URiG4Q5xLjxWtRCV7"],
  );
  ?>


  <div style="text-align: center;">
    <h2><span>What our customers say about us</span></h2>
  </div>
  <div class="servicesSlider">
    <button id="leftReview" class="carouselButtons" style="margin-left: -40px;">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="var(--primaryColor)" width="21px" height="24px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
        <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
      </svg>
    </button>
    <div id="reviewCarousel" style="display:flex;align-items:center;overflow-x:auto;scroll-behavior:smooth">
      <div class="aligncenter serviceItems">
        <?php foreach ($reviews as $review): ?>
          <a class="review-item" href="<?= $review->url; ?>" style="border:1px solid #0c4c8e;margin:10px;width:285px;
    overflow-y: hidden;;height: 370px;box-shadow:0 4px 5px 0 rgba(12,76,142,.38)">

            <div style="padding:5px;">
              <div style="margin-bottom: 5px"><svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" height="59" viewBox="0 0 24 24" width="59">
                  <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
                  <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
                  <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"></path>
                  <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
                  <path d="M1 1h22v22H1z" fill="none"></path>
                </svg></div>
              <p style="margin-bottom: 5px;font-size: 1.2rem;font-weight: 600;"><?= $review->name; ?></p>
              <p style="font-size: 1rem;margin-bottom: 5px;"><?= $review->date; ?></p>
              <div style="margin-bottom: 5px;font-size: 20px;">
                <?php for ($x = 0; $x <= $review->stars; $x++)
                  echo "<i class='fa-solid fa-star'></i>"
                ?>
              </div>
              <div style="text-wrap: initial;padding:10px;font-size: 1rem;">
                <p><?= $review->review; ?></p>
              </div>
            </div>

          </a>
        <?php endforeach; ?>

      </div>
    </div>
    <button id="rightReview" class="carouselButtons" style="margin-right: -40px;">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="var(--primaryColor)" width="21px" height="24px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
      </svg>
    </button>
  </div>


  <div style="text-align: center;margin-bottom: 35px;margin-top: 25px;">
    <a href="https://g.page/r/Cd4SzOcposmSEBM/" class="blue-button" target="_blank">Read more Google reviews</a>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const reviewCarousel = document.getElementById('reviewCarousel');

      document.getElementById('leftReview').addEventListener('click', function() {
        reviewCarousel.scrollLeft -= 500
      })
      document.getElementById('rightReview').addEventListener('click', function() {
        reviewCarousel.scrollLeft += 500
      })
    });
  </script>
</div>