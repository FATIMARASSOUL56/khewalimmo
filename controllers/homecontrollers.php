<?php

$chambres = recupererTousLesChambres();
$terrains = listeDesTerrains();


require_once("includes/entete.php"); 

require_once("views/home.php");

include 'includes/footer.php'; 