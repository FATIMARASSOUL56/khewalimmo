<?php

if (isset($_GET["id"])) {
    $c = recupererUnTerrain($_GET["id"]);
} else {
    header("Location:?page=home");
    exit();
}

$chambres = listeDesTerrains();

require_once("includes/entete.php"); 

require_once("views/detailTerrain.php");

include 'includes/footer.php'; 