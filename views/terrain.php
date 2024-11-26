<div class="page-title aos-init aos-animate mt-5 pt-5" data-aos="fade">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="#">Home</a></li>
            <li class="current">Les terrains</li>
          </ol>
        </div>
      </nav>
</div>
<section id="real-estate" class="real-estate section">

      <div class="container">

        <div class="row gy-4">
            <?php foreach($terrains as $t): ?>
            <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                <img src="images/<?= $t->image ?>" alt="" class="img-fluid">
                <div class="card-body">
                    <span class="sale-rent"><?= number_format($t->prix, 0, ',', ' ')  ?> FCFA</span>
                    <h3><a href="?page=detailTerrain&id=<?= $t->id ?>" class="stretched-link"><?= $t->nom ?></a></h3>
                    <div class="card-content d-flex flex-column justify-content-center text-center">
                    <div class="row propery-info">
                        <div class="col">Superficie</div>
                        <div class="col">Emplacement</div>
                    </div>
                    <div class="row">
                        <div class="col"><?= number_format($t->superficie, 2, ',', ' ') ?>m<sup>2</sup></div>
                        <div class="col"><?= $t->lieu ?></div>
                    </div>
                    </div>
                </div>
                </div>
            </div><!-- End Property Item -->
            <?php endforeach; ?>
        </div>

      </div>

    </section>