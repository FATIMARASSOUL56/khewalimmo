<?php


if (isset($_POST["modifier"])) {
    extract($_POST);

    if (mettreAjourLesDonneesUtilisateur($_SESSION["user"]->id, $prenom, $nom, $adresse, $tel, $cni, $email, "client")) {
        setMessage("Mis a jour avec succes", "success");
        header("Location:?page=profil");
    } else {
        setMessage("Erreur de mis a jour", "danger");
    }
}

if(isset($_GET["idCanceling"])){
    if (supprimerUneReservation($_GET["idCanceling"])) {
        setMessage("Annulation avec succès");
        header("Location:?page=profil");
        exit();
    }
}

if (isset($_POST["editpassword"])) {
    extract($_POST);

    if (password_verify($motdepasse, $_SESSION["user"]->motdepasse)) {
        if ($nouveaumotdepasse === $motdepasseconfirm) {
            $nouveaumotdepasse = password_hash($nouveaumotdepasse, PASSWORD_DEFAULT, ["cost" => 12]);
            if (mettreAjourMotDePasse($_SESSION["user"]->id, $nouveaumotdepasse)) {
                setMessage("Mis a jour du mot de passe avec succes");
                header("Location:?page=profil&type=password");
        exit();
            } else {
                setMessage("Erreur de mis a jour", "danger");
            }
        } else {
            setMessage("Le nouveau mot de passe est different du mot de passe de confirmation", "danger");
        }
    } else {
        setMessage("Veuillez saisir le mot de passe actuel", "danger");
    }
}
if (isset($_SESSION["user"])) {
    $user = avoirInfoUtilisateur($_SESSION["user"]->id);
    // ou 
    $_SESSION["user"] = $user;
} else {
    header("Location: ?page=home");
    exit();
}

$reservations = mesReservations($_SESSION["user"]->id);

require_once("includes/entete.php"); 

require_once("views/profil.php");

include 'includes/footer.php'; 

