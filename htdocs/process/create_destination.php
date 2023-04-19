<?php
session_start();
require_once '../config/pdo.php';
require_once '../class/destination.php';
require_once '../class/tour_operator.php';
require_once '../class/manager.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $location = $_POST['location'];
    $description = $_POST['description'];
    $photo = $_FILES['photo'];

    $manager = new Manager($pdo);
    $manager->createDestination($location, $description, $photo);
    header('Location: ../admin.php');
    exit;
}
    
    
    
    




