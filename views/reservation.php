<div class="page-title aos-init aos-animate" data-aos="fade">
      <div class="heading">
        <div class="container">
            <?php require_once("includes/getMessage.php"); ?>
            <?php require_once("views/ajoutReservation.php"); ?>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="#">Liste des chambres</a></li>
          </ol>
        </div>
      </nav>
    </div>

    <section id="real-estate" class="real-estate section">

<div class="container">

  <div class="row gy-4">
    <?php foreach ($chambresSimilaires as $c) : ?>

    <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
      <div class="card">
        <img src="images/<?= $c->image ?>" alt="" class="img-fluid">
        <div class="card-body">
          <span class="sale-rent"><?= $c->prix ?> FCFA/jour</span>
          <h3><a href="?page=reservation&id=<?= $c->id ?>" class="stretched-link"><?= $c->nom ?></a></h3>
          <div class="card-content d-flex flex-column justify-content-center text-center">
            <?php if ($c->statut == 0) : ?>
                <a href="?page=reservation&id=<?= $c->id ?>" class="btn btn-success btn-sm text-white">Reservez</a>
            <?php else : ?>
                <a href="#" class="text-danger">Occupée <br> jusqu'à <br> <?= date("d/m/Y", strtotime(dateFin($c->id))) ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div><!-- End Property Item -->
    <?php endforeach; ?>

  </div>

</div>

</section>