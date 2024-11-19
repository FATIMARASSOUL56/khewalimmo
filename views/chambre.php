<section id="agents" class="agents section mt-5">

      <div class="container mt-3">

        <div class="row gy-5">
        <?php foreach ($chambres as $key => $c) : ?>
                <!-- les 4 dernieres chambres  -->
            <div class="col-lg-4 col-md-6" id="chambre-<?= $c->id ?>" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
                <div class="pic"><a href="?page=detailChambre&id=<?= $c->id ?>"><img src="images/<?= $c->image ?>" class="img-fluid" alt=""></a></div>
                <div class="member-info">
                  <h4><a href="?page=detailChambre&id=<?= $c->id ?>"><?= ucfirst($c->nom) ?></a></h4>
                  <span><?= $c->prix ?> FCFA/jour</span>
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
          <?php endforeach; ?>

        </div>
        <?php piedPagination($totalPages, $pageActuelle);  ?>


      </div>

    </section>
