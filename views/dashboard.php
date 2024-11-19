<section class="container" style="margin-top: 50px;">
        
            <div class="container mt-5 mb-3">
                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                            <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?= $nbreDeClients ?>" data-purecounter-duration="0" class="purecounter"><?= $nbreDeClients ?></span>
                            <p>Happy Clients</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-4 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                        <div>
                        <span data-purecounter-start="0" data-purecounter-end="<?= $recettesMensuelles ?>" data-purecounter-duration="0" class="purecounter"><?= $recettesMensuelles ?> FCFA</span>
                        <p>Recettes Mensuelles</p>
                        </div>
                    </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-4 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-headset color-green flex-shrink-0"></i>
                        <div>
                        <span data-purecounter-start="0" data-purecounter-end="<?= $nombreChambre ?>" data-purecounter-duration="0" class="purecounter"><?= $nombreChambre ?></span>
                        <p>Chambres</p>
                        </div>
                    </div>
                    </div><!-- End Stats Item -->

                </div>
            </div>
        
    <div class="container">
        <h1 class="text-center">Comptabilité Générale</h1>
        <canvas id="graphiqueReservations"></canvas>
    </div>
</section>
<script>
    // Récupère les données PHP dans Javascript 
    var montantReservationsParMois = <?= json_encode($montantReservationsParMois) ?>

    // convertit les clés et les valeurs en tableaux séparés 
    var mois = Object.keys(montantReservationsParMois);
    var montants = Object.values(montantReservationsParMois);

    // crée le graphique avec chart.js 
    var ctx= document.getElementById("graphiqueReservations").getContext("2d");

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: mois,
            datasets: [{
                label: 'Montant des réservations par mois',
                data: montants,
                backgroundColor: 'lightgreen',
                borderColor: 'cyan',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y:{
                    beginAtZero: true
                }
            }
        }
    });
</script>