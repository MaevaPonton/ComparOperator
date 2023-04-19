<?php

session_start();
require_once './config/pdo.php';
require_once './class/destination.php';
require_once './class/review.php';
require_once './class/tour_operator.php';
require_once './class/voyage.php';
require_once './class/manager.php';
require_once './class/photos.php';
include("header.php");



$destination_manager = new Manager($pdo);
$operator_manager = new Manager($pdo);
$voyage_manager = new Manager($pdo);
$review_manager = new Manager($pdo);
$photo_manager = new Manager($pdo);

$destination_id = $_GET['destination_id'];
$destination = $destination_manager->getDestinationById($destination_id);
$operator = $operator_manager->getOperatorByDestination($destination_id);
$voyages = $voyage_manager->getVoyagesByDestination($destination_id);
$photos = $photo_manager->getPhotosByDestination($destination_id);





$reviews = array();
if (isset($_POST['voyage_id'])) {
    $voyage_id = $_POST['voyage_id'];
    $reviews = $review_manager->getReviewsByVoyageId($voyage_id);
}



$operators = [];
foreach ($voyages as $voyage) {
    $operator = $operator_manager->getTourOperatorById($voyage->getTourOperatorId());
    $operators[$operator->getId()] = $operator;
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/tour_operateur.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <title>ComparOpérator</title>
</head>

<body>
<br>
<br>
<p style="text-align: center; font-size: 3rem;"><?= $destination->getLocation() ?></p>

    <br>
    <br>
    <div class="slider">
  <ul class="slider-list">
  <?php foreach ($photos as $photo): ?>
    <li class="slider-item">
        <img src="<?= $photo->getPhoto1() ?>">
        </li>
    <li class="slider-item">
        <img src="<?= $photo->getPhoto2() ?>">
        </li>
    <li class="slider-item">
        <img src="<?= $photo->getPhoto3() ?>">
        </li>
    <li class="slider-item">
        <img src="<?= $photo->getPhoto4() ?>">
        </li>
    <?php endforeach; ?>
  </ul>
</div>

    <br>
    <br>
    <br>
    <br>
    <h1 style="text-align: center;">Liste des propositions des tours opérateurs : </h1>
    <br>
    <br>




    <div class="container">
        <div class="row">
            <?php foreach ($operators as $operator) : ?>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <div class="align-self-start">
                                            <img src="<?= $operator->getLogo() ?>" class="logo" alt="logo du tour opérateur">
                                        </div>
                                        <div class="align-self-end premium-logo-container">
                                            <?php if ($operator->getIsPremium() == 1) : ?>
                                                <img src="./images/premium.png" class="premium-logo" alt="Logo premium">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title">
                                        <?php foreach ($voyages as $voyage) : ?>
                                            <?php if ($voyage->getTourOperatorId() == $operator->getId()) : ?>
                                                <h5 class="card-title fw-bold" style="font-size: 2rem; color:red;"><?= $voyage->getPrice() ?> €<h5>
                                                    <?php endif; ?>
                                                <?php endforeach; ?></p>
                                                    </h5>
                                                    <p class="card-text">pour 7 jours</p>
                                                    <div class="average-rating">
                                                        <span class="average-rating-label">Note moyenne:</span>
                                                        <span class="average-rating-stars">
                                                            <i class="star stargrey fas fa-star"></i>
                                                            <i class="star stargrey fas fa-star"></i>
                                                            <i class="star stargrey fas fa-star"></i>
                                                            <i class="star stargrey fas fa-star"></i>
                                                            <i class="star stargrey fas fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <br>
                                                    <a href="<?= $operator->getLink() ?>" class='btn mx-auto d-block' style="background-color: #29C4FF; color:white;">Site Internet</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <form method="post" action="./process/create_review.php">
                                <div class="form-group">
                                    <label for="review-message">Tapez votre commentaire</label>
                                    <textarea class="form-control" id="review-message" name="message" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="review-author">Votre nom</label>
                                    <input type="text" class="form-control" id="review-author" name="author">
                                </div>
                                <div class="stars">
                                    <i class="star stargrey fas fa-star" data-index="0"></i>
                                    <i class="star stargrey fas fa-star" data-index="1"></i>
                                    <i class="star stargrey fas fa-star" data-index="2"></i>
                                    <i class="star stargrey fas fa-star" data-index="3"></i>
                                    <i class="star stargrey fas fa-star" data-index="4"></i>
                                </div>

                                <?php foreach ($voyages as $voyage) : ?>
                                    <?php if ($voyage->getTourOperatorId() == $operator->getId()) : ?>
                                        <input type="hidden" name="voyage_id" value="<?= $voyage->getId() ?>">
                                        <input type="hidden" name="destination_id" value="<?= $voyage->getDestinationId() ?>">
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <br>
                                <button type="submit" class='btn mx-auto d-block' style="background-color: #29C4FF; color:white;">Envoyer</button>
                                <br>
                            </form>
                            <br>
                            <div class="form-group">
                                <div class="border p-2" id="chat-output">
                                    <?php
                                    foreach ($voyages as $voyage) {
                                        if ($voyage->getTourOperatorId() == $operator->getId()) {
                                            $reviews = $review_manager->getReviewsByVoyageId($voyage->getId());
                                            foreach ($reviews as $review) { ?>
                                                <div>
                                                    <strong><?= $review->getAuthor() ?>:</strong> <?= $review->getMessage() ?>
                                                </div>
                                    <?php   }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>


    <?php
    include("footer.php");
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./js/comparatif.js"></script>
</body>


</html>