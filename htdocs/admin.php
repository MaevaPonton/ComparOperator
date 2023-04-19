<?php
session_start();
require_once './config/pdo.php';
require_once './class/destination.php';
require_once './class/tour_operator.php';
require_once './class/manager.php';



$operator_manager = new Manager($pdo);
$operators = $operator_manager->getAllOperator();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>ComparOpérator</title>
</head>

<body>

  <div style="text-align:right;margin-left: 80%;">
    <button onclick="window.location.href='../index.php'"class='btn mx-auto d-block' style="background-color: #29C4FF; color:white;">Accueil</button>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="content" style="height: 30rem; width: 20rem">
          <div class="text" style="text-align: center;">Nouvelle <br> Destination</div>
          <form method="post" action="./process/create_destination.php" enctype="multipart/form-data">
            <div class="field">
              <span class="bx bxs-user"></span>
              <input type="destination" name="location" placeholder="Nom de la Destination" required>
            </div>
            <div class="field">
              <span class="bx bxs-envelope"></span>
              <textarea name="description" placeholder="Description" rows="5" required></textarea>
            </div>
            <br>
            <input type="file" name="photo" accept="images/*" placeholder="Photo" required>
            <br>
            <br>
            <button type="submit" class='btn mx-auto d-block' style="background-color: #29C4FF; color:white;">Créer</button>
          </form>
        </div>
      </div>

      <div class="col-md-4">
        <div class="content" style="height: 30rem; width: 20rem">
          <div class="text" style="text-align: center;">Nouveau <br>Tour Opérateur</div>
          <form method="post" action="./process/create_to.php" enctype="multipart/form-data">
            <div class="field">
              <span class="bx bxs-user"></span>
              <input type="name" name="name" placeholder="Nom du Tour Opérateur" required>
            </div>

            <div class="field">
              <span class="bx bxs-envelope"></span>
              <input type="site" name="link" placeholder="Lien vers leur site internet" required>
            </div>
            <br>
            <input type="file" name="logo" accept="images/*" placeholder="Logo" required>
            <br>
            <br>
            <button type="submit" class='btn mx-auto d-block' style="background-color: #29C4FF; color:white;">Créer</button>
          </form>
        </div>
      </div>
    

      <div class="col-md-4">
        <div class="content" style="height: 30rem; width: 20rem">
          <div class="text" style="text-align: center;">Option <br> Premium</div>
          <form method="post" action="./process/premium.php" enctype="multipart/form-data">
            <select name="tour_operator_premium" id="tour_operator_premium">
              <option value="">--Choisir un Tour Opérateur--</option>
              <?php foreach ($operators as $operator) : ?>
                <option value="<?= $operator->getId() ?>"><?= $operator->getName() ?></option>
              <?php endforeach; ?>
            </select>
            <br>
            <br>
            <input type="hidden" name="is_premium" value="<?= $operator->getId() ?>">
            <div class="button-container">
              <button type="submit" name="action" value="premium"  class='btn mx-auto d-block' style="background-color: #29C4FF; color:white;">Premium</button>
              <button type="submit" name="action" value="not_premium"  class='btn mx-auto d-block' style="background-color: #29C4FF; color:white;">Normal</button>
            </div>

          </form>
        </div>
      </div>


    </div>
  </div>




  <script src="./js/admin.js"></script>
</body>


</html>