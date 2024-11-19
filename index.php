

<?php 

session_start();
require_once("models/database.php");
require_once("includes/mesFonctions.php");

        if (isset($_GET["page"])) {
            switch ($_GET["page"]) {
                case 'chambre':
                    require_once("controllers/chambrecontrollers.php");
                    break;
                case 'login':
                    require_once("controllers/logincontrollers.php");
                    break;
                case 'dashboard':
                    require_once("controllers/dashboardController.php");
                    break;
                case 'detailChambre':
                    require_once("controllers/detailChambreController.php");
                    break;
                case 'chambreAdmin':
                    require_once("controllers/chambreAdminController.php");
                    break;
                case 'terrainAdmin':
                    require_once("controllers/terrainAdminController.php");
                    break;
                case 'terrain':
                    require_once("controllers/terrainController.php");
                    break;
                case 'terrainDetail':
                    require_once("controllers/terrainDetailController.php");
                    break;
                case 'reservationAdmin':
                    require_once("controllers/reservationAdminController.php");
                    break;
                case 'employeAdmin':
                    require_once("controllers/employeAdminController.php");
                    break;
                case 'profilEmploye':
                    require_once("controllers/profilEmployeController.php");
                    break;
                case 'reservation':
                    require_once("controllers/reservationController.php");
                    break;
                case "register":
                    require_once("controllers/registerController.php");
                    break;
                case "profil":
                    require_once("controllers/profilController.php");
                    break;
                 
                default:
                    require_once("controllers/homecontrollers.php");
                    break;
            }
        }elseif (isset($_GET["logout"])) {
            require_once("controllers/logoutController.php");
        }else {
            require_once("controllers/homecontrollers.php");   
        }

        

   ?>
