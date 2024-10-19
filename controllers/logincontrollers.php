<?php
$erreur = "";

if (isset($_POST["register"])) {

    extract($_POST);
    $motdpasse = password_hash($motdpasse, PASSWORD_DEFAULT,["cost"=>12]);
    if (creeruncompte($prenom,$nom, $adresse,$tel,$email,$CNI,$motdpasse,"client")); {
        header("Location:?page=login");
    }
}


if (isset($_POST["connecter"])) {
    extract($_POST);
    $user=SeConnecter($email);

    die("bien");
    if ($user) {
        if(password_verify($motdpasse, $user->motdpasse)){
            $_SESSION["user"] = $user;
        }else{
            $erreur = "Email ou mot d passe incorrecte";
        }
    }else{
        $erreur = "Email ou mot d passe incorrecte";
    }
   
}

require_once("includes/entete.php"); 

require_once("views/login.php");

include 'includes/footer.php'; 