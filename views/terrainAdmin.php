<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap mt-5">
    <div class="container">
        <div class="section_title row">
            <h2 class="title_color col-md-9"><?= $title ?></h2>
            <div class="col-md-3 text-end">
            <?php if(isset($_GET["type"])): ?>
                <a href="?page=terrainAdmin" class="btn btn-warning"><i class="fa fa-arrow-left"></i>Retour</a>
                <?php else: ?>

                    <a href="?page=terrainAdmin&type=add" class="btn btn-success"><i class="fa fa-plus"></i>Ajouter</a>
                <a href="#" onclick="exporter('print')" class="btn btn-secondary"><i class="fa fa-print"></i>Exporter</a>
            <?php endif; ?>
            
            </div>
        </div>
        <?php require_once("includes/getMessage.php"); ?>
        <?php if(isset($_GET["type"])): ?>
        <?php require_once("views/ajoutTerrain.php"); ?>
        <?php else: ?>
        <div id="print">
            <table id="myTable" class="table table-bordered">
                <thead>
                    <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Superficie</th>
                    <th>Emplacement</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($terrains as $b) : ?>
                        <tr>
                            <td><img src="images/<?= $b->image ?>" width="100" height="50" alt=""></td>
                            <td><?= $b->nom ?></td>
                            <td><?= number_format($b->prix, 0, ',', ' ')  ?> FCFA</td>
                            <td><?= number_format($b->superficie, 2, ',', ' ') ?>m<sup>2</sup></td>
                            <td><?= $b->lieu ?></td>
                            
                            <td>
                                <a href="?page=terrainAdmin&type=edit&id=<?= $b->id ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $b->id ?>"><i class="fa fa-trash"></i></a>
                            </td>
    
                            <div class="modal fade" id="exampleModal<?= $b->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Êtes-vous sûr de vouloir supprimer ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                            <a href="?page=terrainAdmin&idDeleting=<?= $b->id ?>" class="btn btn-danger">Oui</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>

    </div>
</section>
<!--================ Accomodation Area  =================-->