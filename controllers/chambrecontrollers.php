<?php

$data = pagination("chambres", 6);

$chambres = $data[0];
$totalPages = $data[1];
$pageActuelle = $data[2];

require_once("includes/entete.php"); 

require_once("views/chambre.php");

include 'includes/footer.php'; 