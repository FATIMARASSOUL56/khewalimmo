
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <?php foreach ($chambres as $key => $c) : ?>
                <!-- les 4 dernieres chambres  -->
            <?php if ($key < 3) : ?>
        <div id="<?= $c->id ?>" class="carousel-item <?= $key == 0 ?  'active' : '' ?> ">
          <img src="images/<?= $c->image ?>" alt="">
          <div class="carousel-container">
            <div>
              <p><?= number_format($c->prix, 0, ",", " ") ?> FCFA/jour</p>
              <h2><span><?= $c->nom ?></span></h2>
              <a href="?page=reservation&id=<?= $c->id ?>" class="btn-get-started">Réservez-vous</a>
            </div>
          </div>
        </div><!-- End Carousel Item -->
        <?php endif; ?>
        <?php endforeach; ?>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->
    
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Terrains</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
            <?php foreach($terrains as $key => $t): ?>
              <?php if($key < 6): ?>
            <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                <img src="images/<?= $t->image ?>" alt="" class="img-fluid">
                <div class="card-body">
                    <span class="sale-rent"><?= number_format($t->prix, 0, ',', ' ')  ?> FCFA</span>
                    <h3><a href="?page=detailTerrain&id=<?= $t->id ?>" class="stretched-link"><?= $t->nom ?></a></h3>
                </div>
                </div>
            </div><!-- End Property Item -->
            <?php endif; ?>
            <?php endforeach; ?>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

  

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Nos Services</h2>
        <p>"Découvrez une gamme complète de services adaptés à vos besoins, conçus pour vous offrir confort, qualité et satisfaction à chaque étape."
        </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Wifi gratuit</h3>
              </a>
              <p>Profitez d'une connexion rapide et fiable grâce à notre service de Wi-Fi gratuit, accessible partout sur place pour rester connecté en toute simplicité."</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Service vente terrain</h3>
              </a>
              <p>"Découvrez un service de vente personnalisé, avec des solutions adaptées à vos besoins et un accompagnement dédié pour garantir votre satisfaction à chaque étape</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Reservation </h3>
              </a>
              <p>"Réservez facilement et rapidement grâce à notre service dédié, conçu pour répondre à tous vos besoins et garantir une expérience sans tracas."</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

    

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Agents Section -->
    <section id="agents" class="agents section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Chambres</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">
        <?php foreach ($chambres as $key => $c) : ?>
                <!-- les 4 dernieres chambres  -->
            <?php if ($key < 6) : ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="pic"><a href="?page=detailChambre&id=<?= $c->id ?>"><img src="images/<?= $c->image ?>" class="img-fluid" alt=""></a></div>
                <div class="member-info">
                  <h4><a href="?page=detailChambre&id=<?= $c->id ?>"><?= ucfirst($c->nom) ?></a></h4>
                  <span><?= number_format($c->prix, 0, ",", " ") ?> FCFA/jour</span>
                  <div class="social">
                    <?php if ($c->statut == 0) : ?>
                        <a href="?page=reservation&id=<?= $c->id ?>" class="btn btn-success text-white">Reservez</a>
                    <?php else : ?>
                        <a href="#" class="text-danger">Occupée <br> jusqu'à <br> <?= date("d/m/Y", strtotime(dateFin($c->id))) ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->
            <?php endif; ?>
          <?php endforeach; ?>

        </div>

      </div>

    </section><!-- /Agents Section -->
