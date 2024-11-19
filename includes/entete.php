<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= isset($_GET["page"]) ? ucfirst($_GET["page"]): "Accueil"  ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <?php if(isset($_GET["page"]) && $_GET["page"] == "reservation"): ?>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <style>
        .highlight .ui-state-default{
            background: green!important;
            color: white!important;
        }
    </style>
  <?php endif; ?>


  <!-- =======================================================
  * Template Name: EstateAgency
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Updated: Aug 09 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body class="<?php if(isset($_GET["page"])){
  if ($_GET["page"] == 'detailChambre') {
    echo 'property-single-page';
  }
} ?>
">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="?page=home" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Khewal<span>Immo</span></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <?php if (estAdmin() || estEmploye()) : ?>
                <li><a  class="<?= isset($_GET['page']) && $_GET['page'] == 'dashboard' ? 'active' : '' ?>" href="?page=dashboard">Tableau de bord</a></li>
                <li><a  class="<?= isset($_GET['page']) && $_GET['page'] == 'chambreAdmin' ? 'active' : '' ?>" href="?page=chambreAdmin">Chambres</a></li>
                <li><a  class="<?= isset($_GET['page']) && $_GET['page'] == 'terrainAdmin' ? 'active' : '' ?>" href="?page=terrainAdmin">Terrains</a></li>
                <li><a  class="<?= isset($_GET['page']) && $_GET['page'] == 'reservationAdmin' ? 'active' : '' ?>" href="?page=reservationAdmin">Reservations</a></li>
                <li class="dropdown"><a href="#"><span><?= $_SESSION["user"]->prenom ?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                    <li><a href="?page=profilEmploye">Profil</a></li>
                    
                    <li><a href="?logout">Deconnexion</a></li>
                    </ul>
                </li>
            <?php else : ?>
        
                <li><a  class="<?= !isset($_GET['page']) || (isset($_GET['page']) && $_GET['page'] == 'home') ? 'active' : '' ?>" href="?page=home">Accueil</a></li>
                <li><a  class="<?= isset($_GET['page']) && $_GET['page'] == 'chambre' ? 'active' : '' ?>" href="?page=chambre">Chambres</a></li>
                <li><a  class="<?= isset($_GET['page']) && $_GET['page'] == 'reservation' ? 'active' : '' ?>" href="?page=reservation">Réservations</a></li>
                <li><a  class="<?= !isset($_GET['page']) || (isset($_GET['page']) && $_GET['page'] == 'terrain') ? 'active' : '' ?>" href="?page=terrain">terrain</a></li>
                <?php if(isset($_SESSION["user"])): ?>

                  <li class="dropdown"><a href="#"><span><?= $_SESSION["user"]->prenom ?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                      <li><a href="?page=profil">Profil</a></li>
                      
                      <li><a href="?logout">Deconnexion</a></li>
                      </ul>
                  </li>
                <?php else: ?>
                  <li><a  class="<?= (isset($_GET['page']) && $_GET['page'] == 'login') ? 'active' : '' ?>" href="?page=login">Connexion</a></li>
                <?php endif; ?>
            <?php endif; ?>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

               