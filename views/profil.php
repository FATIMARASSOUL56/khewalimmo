<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap mt-5">
    <?php require_once("includes/getMessage.php"); ?>
    <div class="container row" id="profilAccordion">
        <div class="col-md-3">
            <table class="table text-center table-bordered">
                <tr>
                    <td class=" <?= !isset($_GET["type"])? 'bg-success text-white' : '' ?>">
                    <a class="text-dark"  href="?page=profil" >
                        Mes informations
                    </a>
                    </td>
                   </tr> <tr>
                    <td class=" <?= isset($_GET["type"]) && $_GET["type"] == 'commande' ? 'bg-success text-white' : '' ?>">
                    <a class="text-dark"  href="?page=profil&type=commande" >
                        Mes Reservations
                    </a>
                    </td>
                    </tr><tr>
                    <td  <?= isset($_GET["type"]) && $_GET["type"]=='password' ? 'bg-success text-white' : '' ?>>
                    <a class="text-dark" href="?page=profil&type=password">
                        Mot de passe
                    </a>
                    </td>
                    </tr><tr>
                    <td>
                    <a class="btn btn-outline-danger" href="?logout">
                        Deconnexion
                    </a>
                    </td>
                </tr>
            </table>
            
            
            
            

        </div>
        <div class="col-md-9">
            <?php if(isset($_GET["type"]) && $_GET["type"] == "commande"): ?>
            <div id="commande">
                <div class="card card-body">
                    <h3>Mes Reservations</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Reference</th>
                                <th>Chambre</th>
                                <th>Date d'entrée</th>
                                <th>Date de sortie</th>
                                <th>Montant</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($reservations as $r): ?>
                            <tr id="reservation<?= $r->id ?>">
                                <td><?= $r->reference ?></td>
                                <td><?= $r->nomchambre ?></td>
                                <td><?= date("d/m/Y", strtotime($r->date_debut))  ?></td>
                                <td><?= date("d/m/Y", strtotime($r->date_fin)) ?></td>
                                <td><?= $r->prix_total ?> FCFA</td>
                                <td>
                                    <?php if($r->statut == 0): ?>
                                        <span class="badge badge-primary">En attente</span>
                                        <button type="button" data-toggle="modal" data-target="#exampleModal<?= $r->id ?>" class="btn btm-sm btn-outline-danger" title="annuler"><i class="fa fa-trash"></i></button>
                                    <?php elseif($r->statut == 1): ?>
                                        <span class="badge badge-success">Validée</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger">rejetée</span>
                                    <?php endif; ?>
                                </td>
                                <div class="modal fade" id="exampleModal<?= $r->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Êtes-vous sûr de vouloir annuler cette réservation ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                                            <a href="?page=profil&idCanceling=<?= $r->id ?>" class="btn btn-danger">Oui</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php elseif(isset($_GET["type"]) && $_GET["type"] == "password"): ?>

            <div id="password">
                <div class="card card-body">
                    <h3>Changement de mot de passe</h3>
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for=""> Mot de passe actuel</label>
                                <input type="password" name="motdepasse" required class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for=""> Nouveau Mot de passe</label>
                                <input type="password" name="nouveaumotdepasse" required class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for=""> Mot de passe de confirmation</label>
                                <input type="password" name="motdepasseconfirm" required class="form-control">
                            </div>
                        </div>
                        <button type="submit" name="editpassword" class="btn mt-3 btn-warning">Modifier</button>
                    </form>
                </div>
            </div>
            <?php else: ?>

            <div  id="info" style="margin-bottom: 30px;">
                <div class="card card-body">
                    <h3>Mes informations</h3>
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for=""> Prenom</label>
                                <input type="text" value="<?= $user->prenom ?>" name="prenom" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for=""> Nom</label>
                                <input type="text" value="<?= $user->nom ?>" name="nom" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for=""> Adresse</label>
                                <input type="text" value="<?= $user->adresse ?>" name="adresse" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for=""> Telephone</label>
                                <input type="text" name="tel" value="<?= $user->tel ?>" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for=""> Numero de carte d'identite</label>
                                <input type="text" value="<?= $user->cni ?>" name="cni" required class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for=""> Email</label>
                                <input type="email" value="<?= $user->email ?>" name="email" required class="form-control">
                            </div>
                        </div>
                        <button name="modifier" type="submit" class="btn mt-3 btn-success">Modifier</button>
                    </form>
                </div>
            </div>
            <?php endif ?>
        </div>

    </div>
</section>
<!--================ Accomodation Area  =================-->