<?php
session_start();
require_once '../config/pdo.php';
require_once '../class/destination.php';
require_once '../class/tour_operator.php';
require_once '../class/manager.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $link = $_POST['link'];
    $logo = $_FILES['logo'];
    $gradeCount = 0;
    $gradeTotal = 0;
    $isPremium = 0;

    $manager = new Manager($pdo);
    $manager->createTourOperator($name, $link, $gradeCount, $gradeTotal, $isPremium, $logo);
    
    // Ajouter un message de confirmation à la session
    $_SESSION['success_message'] = "Tour operator enregistré avec succès.";

    header('Location: ../admin.php');
    exit;
}

    
