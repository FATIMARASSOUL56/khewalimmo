<?php

$data = pagination("terrain", 6);

$terrains = $data[0];
$totalPages = $data[1];
$pageActuelle = $data[2];

require_once("includes/entete.php"); 

require_once("views/terrain.php");

include 'includes/footer.php'; 