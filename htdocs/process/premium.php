<?php
session_start();
require_once '../config/pdo.php';
require_once '../class/destination.php';
require_once '../class/tour_operator.php';
require_once '../class/manager.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer l'identifiant du tour opérateur sélectionné
    $tourOperatorId = $_POST['tour_operator_premium'];

    // Vérifier quelle action a été sélectionnée
    $action = $_POST['action'];

    // Mettre à jour le statut premium correspondant dans la base de données
    if (!empty($tourOperatorId)) {
        $manager = new Manager($pdo);
        
        if ($action === 'premium') {
            $manager->updateOperatorToPremium($tourOperatorId);
        } elseif ($action === 'not_premium') {
            $manager->updateOperatorToNotPremium($tourOperatorId);
        }

        header('Location: ../admin.php');
        exit;
    }
}


?>
