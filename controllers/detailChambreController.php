<?php

if (isset($_GET["id"])) {
    $c = avoirUneChambre($_GET["id"]);
} else {
    header("Location:?page=home");
    exit();
}

$chambres = recupererTousLesChambres();

require_once("includes/entete.php"); 

require_once("views/detailChambre.php");

include 'includes/footer.php'; 