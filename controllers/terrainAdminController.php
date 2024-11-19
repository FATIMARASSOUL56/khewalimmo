<?php 

$title = "Liste des Terrains";

if(isset($_POST["ajouter"])){
    extract($_POST);

    $type = explode("/", $_FILES["image"]["type"]);

    if ($type[0] == "image") {
        $img = $_FILES["image"]["tmp_name"];
        $img_name = uniqid().".jgp";
        if (ajouterTerrain($nom, $lieu, $superficie, $prix, $description, $img_name)) {
            move_uploaded_file($img, "images/".$img_name);

            setMessage("Ajout Terrain avec succès");
            header("Location:?page=terrainAdmin");
            exit();
        }else{
            // setMessage("Erreur d'ajout Terrain", "danger");
        }
    }else{
        setMessage("Veuillez choisir une image", "danger");
    }
}

if (isset($_POST["modifier"])) {
    $error = false;
    extract($_POST);

    $b = recupererUnTerrain($_GET["id"]);

    if ($_FILES["image"]["size"] != 0) {
        $type = explode("/", $_FILES["image"]["type"]);

            if ($type[0] == "image") {
                $img = $_FILES["image"]["tmp_name"];
                $img_name = uniqid().".jgp";
            }else{
                setMessage("Veuillez choisir une image", "danger");
                $error = true;
            }
    }else{
        $img_name = $b->image;
    }

    if (!$error) {
        if (modifierUnTerrain($b->id, $nom, $lieu, $superficie, $prix, $description, $img_name)) {
            if ($b->image != $img_name) {
                move_uploaded_file($img, "images/".$img_name);
            }

            setMessage("Mis à jour d'un Terrain avec succès");
            header("Location:?page=terrainAdmin");
            exit();
        }else{
            setMessage("Erreur de mis à jour d'un Terrain", "danger");
        }
    }

}

if (isset($_GET["idDeleting"])) {
    if (supprimerUnTerrain($_GET["idDeleting"])) {
        setMessage("Suppression avec succès");
        header("Location:?page=terrainAdmin");
        exit();
    }else{
        setMessage("Erreur de suppression", "danger");
    }
}

$terrains = listeDesTerrains();
if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $b = recupererUnTerrain($_GET["id"]);
    }
    $title = $_GET["type"] == "add" ? "Formulaire d'ajout Terrain" : "Formulaire d'édition Terrain";
}

require_once("includes/entete.php"); 

require_once("views/terrainAdmin.php");
include 'includes/footer.php'; 
