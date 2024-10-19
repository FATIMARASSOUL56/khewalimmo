<?php

//connexion à la bases de données

try {
    $db = new PDO('mysql:host=localhost;dbname=khewalimmo', "root", '');
} catch (PDOException $th) {
    die('Erreur de connexion : '. $th->getMessage());
}
function creeruncompte($prenom,$nom,$adresse,$email,$tel,$CNI,$motdpasse,$role)
{
    global $db;
    try {
    $q = $db->prepare("INSERT INTO users(prenom, nom, adresse, email, tel, CNI, motdpasse, role) VALUES (:prenom, :nom, :adresse, :email, :tel, :CNI, :motdpasse, :role)");
    return $q->execute([
        'prenom' => $prenom,
        'nom' => $nom,
        'adresse' => $adresse,
        'email' => $email,
        'tel' => $tel,
        'CNI' => $CNI,
       'motdpasse' => $motdpasse,
       'role' => "client",
       ]);
    }
    // Gestion des exceptions
    catch(PDOException $e) {
        echo 'Échec lors de la connexion : '. $e->getMessage();
    }
}

function SeConnecter($email){

    global $db;
    try {
    $q = $db->prepare("SELECT * FROM users WHERE email = :email");
    $q->execute([
        'email' => $email,
        ]);
    return $q->fetch(PDO::FETCH_OBJ);
    }
    // Gestion des exceptions
    catch(PDOException $th) {
        die("Erreur:" .$th->getMessage());
    }
}