<?php
session_start();
require_once './config/pdo.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/log_admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>ComparOpérator</title>
</head>
<body>
<div class="wrapper">
    
    <section class="login-container">
            <?php if (isset($message)) { ?>
                <p><?= $message ?></p>
            <?php } ?>
        <div>
            <header>
                <h2>Espace Administrateur</h2>
                <br>
            </header>
            <form action="./process/authentification_admin.php" method="post">
                <input type="text" name="administrateur" placeholder="Identifiant" required="required"/>
                <input type="password" name="mot_passe" placeholder="Mot de passe" required="required"/>
                <button type="submit">Connexion</button>
            </form>
        </div>
    </section>

</body>

</html>