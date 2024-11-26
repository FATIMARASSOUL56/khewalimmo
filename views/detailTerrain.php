<div class="page-title aos-init aos-animate mt-5 pt-5" data-aos="fade">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="?page=home">Accueil</a></li>
            <li class="current">Détails terrain: <?= $c->nom ?></li>
          </ol>
        </div>
      </nav>

      <section id="real-estate-<?= $_GET["id"] ?>" class="real-estate-2 section">

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center" id="swiper-wrapper-2688961012b8cd10af" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-2232px, 0px, 0px); transition-delay: 0ms;">


          <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 3" data-swiper-slide-index="2">
              <img src="images/<?= $c->image ?>" alt="">
            </div><div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 3" data-swiper-slide-index="0">
              <img src="images/<?= $c->image ?>" alt="">
            </div><div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 3" data-swiper-slide-index="1">
              <img src="images/<?= $c->image ?>" alt="">
            </div></div>
          <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-2688961012b8cd10af"></div>
          <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-2688961012b8cd10af"></div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8 aos-init aos-animate" data-aos="fade-up">

            <div class="portfolio-description">
              <h2>Description</h2>
                <p>
                    <?= nl2br($c->description) ?>
                </p>

              
            </div><!-- End Portfolio Description -->

            

          </div>

          <div class="col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Détails</h3>
              <ul>
                <li><strong>Prix:</strong> <?= $c->prix ?> F CFA</li>
                <li><strong>Superficie:</strong> <?= number_format($c->superficie, 2, ',', ' ') ?>m<sup>2</sup></li>
                <li><strong>Emplacement:</strong> <?= $c->lieu ?></li>
            </ul>
              
            </div>
          </div>

        </div>

      </div>

    </section>
    <section id="agents" class="agents section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Terrains Similaires</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">
        <?php foreach ($chambres as $key => $c) : ?>
                <!-- les 4 dernieres chambres  -->
            <?php if ($key < 3) : ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="pic"><a href="?page=detailTerrain&id=<?= $c->id ?>"><img src="images/<?= $c->image ?>" class="img-fluid" alt=""></a></div>
                <div class="member-info">
                  <h4><a href="?page=detailTerrain&id=<?= $c->id ?>"><?= ucfirst($c->nom) ?></a></h4>
                  <span><?= number_format($c->prix, 0, ",", " ") ?> FCFA/jour</span>
                  
                </div>
              </div>
            </div><!-- End Team Member -->
            <?php endif; ?>
          <?php endforeach; ?>

        </div>

      </div>

    </section>
    </div>