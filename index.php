

<?php 

session_start();
require_once("includes/mesFonctions.php");
require_once("models/database.php");

        if (isset($_GET["page"])) {
            switch ($_GET["page"]) {
                case 'chambre':
                    require_once("controllers/chambrecontrollers.php");
                    break;
                case 'login':
                    require_once("controllers/logincontrollers.php");
                    break;
                
                default:
                    require_once("controllers/homecontrollers.php");
                    break;
            }
        }else {
            require_once("controllers/homecontrollers.php");   
        }

        

   ?>
