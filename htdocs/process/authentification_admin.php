<?php

session_start();
require_once '../config/pdo.php';

// POUR COMPARAISON DE HASHAGE MOT DE PASSE 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $administrateur = $_POST['administrateur'];
    $mot_passe = $_POST['mot_passe'];

    // Récupérer le mot de passe haché de la base de données pour cet administrateur
    $stmt = $pdo->prepare('SELECT mot_passe_hash FROM admin WHERE administrateur = :administrateur');
    $stmt->execute(array('administrateur' => $administrateur));
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $mot_passe_hash = $result['mot_passe_hash'];
        // Vérifier si le mot de passe saisi correspond au mot de passe haché dans la base de données
        if (hash('sha256', $mot_passe) === $mot_passe_hash) {
            // Les identifiants sont corrects, rediriger vers la page admin.php
            $_SESSION['admin'] = true;
            header("location: ../admin.php");
            exit();
        } else {
            // Le mot de passe est incorrect
            $message = 'Mot de passe incorrect';
            header("location: ../log_admin.php?message=$message");
            exit();
        }
    } else {
        // L'identifiant est incorrect
        $message = 'Identifiant incorrect';
        header("location: ../log_admin.php?message=$message");
        exit();
    }
}



?>

