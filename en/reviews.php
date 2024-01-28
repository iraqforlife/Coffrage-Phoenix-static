<style>
    @media only screen and (min-width: 768px) {
        .reviews-boxes {
            display: grid;
            grid-template-columns: 33.333% 33.333% 33.333%;
        }
    }

    .reviews {
        margin: 15px auto;
        display: grid;
    }

    @media only screen and (max-width: 495px) {
        .reviews h2 {
            font-size: 25px !important;
            line-height: 25px !important;
        }
    }

    @media only screen and (max-width: 767px) {
        .reviews {
            padding-left: 33px !important;
            padding-right: 33px !important;
        }

        .reviews h2 {
            font-size: 35px !important;
            line-height: 35px !important;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 959px) {
        .reviews h2 {
            font-size: 45px !important;
            line-height: 45px !important;
        }
    }

    .reviews-box {
        color: #000 !important;
        padding: 32px;
        text-align: center;

    }

    @media (max-width: 959px) {
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
        border: 12px solid var(--primaryColor);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        line-height: 0;
        overflow: hidden;
    }
</style>
<div class="reviews">
    <div style="text-align: center;">
        <h2><span>What are customers saying</span> <br> <span>about our work?</span></h2>
    </div>
    <div class="reviews-boxes">
        <a class="reviews-box" href="https://soumissionrenovation.ca/entrepreneur/coffrages_phoenix" target="_blank" class="reviews-box">
            <div class="reviews-box-img">
                <div class="reviews-img-wrapper"><img style="max-width: 100%; height: auto;" width="100px" height="100px" src="/assets/img/j.webp" alt="about" /></div>
                <div>
                    <p>Bon travaux bon prix</p>
                </div>
            </div>
            <div>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <div><strong>Jean-Guy</strong></div>
        </a>
        <a class="reviews-box" href="https://soumissionrenovation.ca/entrepreneur/coffrages_phoenix" target="_blank">
            <div class="reviews-box-img">
                <div class="reviews-img-wrapper"><img style="max-width: 100%; height: auto;" width="100px" height="100px" src="/assets/img/a.webp" alt="about" /></div>
                <div>
                    <p>Excellent entrepreneur expérimenté Respecte pleinement ses engagements Je le recommande</p>
                </div>
            </div>
            <div>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <div><strong>Gilles</strong></div>
        </a>
        <div class="reviews-box">
            <a href="https://g.co/kgs/49Fy9r" target="_blank" class="reviews-box-img" style="color: black;">
                <div class="reviews-img-wrapper"><img style="max-width: 100%; height: auto;" width="100px" height="100px" src="/assets/img/p.webp" alt="about" /></div>
                <div>
                    <p>Excellent service!</p>
                </div>
            </a>
            <div>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <div>
                <a href="https://www.google.com/maps/contrib/109568392174548078001/reviews" target="_blank" style="color: black;">
                    <strong>Pierre-Olivier Caron Périgny</strong>
                </a>
            </div>
        </div>
    </div>
</div>