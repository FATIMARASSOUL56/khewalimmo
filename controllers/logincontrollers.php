<?php
$erreur = "";

if (isset($_POST["register"])) {

    extract($_POST);

    // on va hacher le mot de passe 
    $motdepasse = password_hash($motdpasse, PASSWORD_DEFAULT, ["cost" => 12]);
    if (creerUnCompte($prenom, $nom, $adresse, $tel, $CNI, $email, $motdepasse, "client")) {
        header("location: ?page=login");
        exit();
    }
}


if (isset($_POST["connecter"])) {
    extract($_POST);
    $user=SeConnecter($email);

    if ($user) {
        $_SESSION["user"] = $user;
        if (estAdmin() || estEmploye()) {
            header("Location: ?page=dashboard");
            exit();
        } else {
            header("Location: ?page=profil");
            exit();
        }
        supprimerLesDonneesDeLInput();
    } else {
        $erreurs = "Email ou mot de passe incorrect";
        enregistrerLesDonnesDeLInput();
    }
}

require_once("includes/entete.php"); 

require_once("views/login.php");

include 'includes/footer.php'; 