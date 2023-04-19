<?php
session_start();
require_once './config/pdo.php';
require_once './class/destination.php';
require_once './class/manager.php';
include("header.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <title>ComparOpérator</title>
</head>

<body>

  <br>
  <br>

  <div class="container">
    <div class="banner" >
      <div id="image-container">
        <img id="image">
      </div>
      <div id="info-container" style="border-radius: 50%;">
        <p id="text"></p>
      </div>
    </div>
  </div>


  <br>
  <br>
  <section id="info">
    <div class="container" style="justify-content: center;">
      <p> Rechercher un voyage prend souvent du temps. Trouver le site qui propose des voyages qui vous correspondent n’est déjà pas une étape facile mais ensuite il vous faut comparer circuits et prix avec d’autres voyagistes pour être sûr de faire le bon choix. Pour vous éviter de perdre du temps à consulter chacun de ces sites, nous avons sélectionné pour vous les meilleurs voyagistes et leurs plus beaux circuits que vous trouverez dans notre comparateur de voyages. Rapide et facile d’utilisation, il vous propose en 1 clic tous les voyages proposés par les meilleures agences sur la destination choisie. Fini le temps passé à comparer les circuits et prix d’un site à l’autre. Vous allez enfin pouvoir organiser votre voyage sereinement !</p>
    </div>
    </div>
  </section>






  <?php
  $destination_manager = new Manager($pdo);
  $destinations = $destination_manager->getAllDestination();
  ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="center">
          <?php foreach ($destinations as $destination) : ?>
            <div class="card">
              <img src="<?= $destination->getPhoto() ?>" style="border: 1px solid black;">
              <form action='./comparatif.php' method='get'>
                <input type='hidden' name='destination_id' value='<?= $destination->getId() ?>'>
                <br>
                <button type='submit' class='btn mx-auto d-block' style="background-color: #29C4FF; color:white;"><?= $destination->getLocation() ?></button>
              </form>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./js/index.js"></script>

</body>
<br>
<br>

<?php
include("footer.php");
?>

</html>