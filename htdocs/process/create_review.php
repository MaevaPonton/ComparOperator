<?php
session_start();
require_once '../config/pdo.php';
require_once '../class/destination.php';
require_once '../class/tour_operator.php';
require_once '../class/voyage.php';
require_once '../class/review.php';
require_once '../class/manager.php';

$data = [
    'message' => $_POST['message'],
    'author' => $_POST['author'],
    'voyage_id' => $_POST['voyage_id'],
    ];



$review = new Review($data);
$manager = new Manager($pdo);
$manager->createReview($review);

$voyage_id = $_POST['voyage_id'];
$voyage = $manager->getVoyageById($voyage_id);
$destination_id = $voyage->getDestinationId();
$destination = $manager->getDestinationById($destination_id);

header("location: ../comparatif.php?voyage_id=$voyage_id&destination_id=$destination_id");