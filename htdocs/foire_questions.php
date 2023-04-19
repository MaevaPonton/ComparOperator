<?php
session_start();
require_once './config/pdo.php';
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/foire.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>ComparOpérator</title>
</head>

<body>

</body>

</html>


<h1 style="text-align: center; font-size:2.5rem;"> Foire aux Questions </h1>
<br>
<br>
<div class="container">
    <div class="boxaccordion">
        <div class="containerwidth">
            <div class="wrapper">
                <button class="toggle">Je souhaite vous parler de mon projet de voyage, est-ce possible ?<i class="fas fa-plus icon"></i></button>
                <div class="content" style="text-align: justify;">
                    <p>Nous serons évidemment heureux d’échanger à propos de votre projet de voyage. Dès que nous aurons votre demande, elle sera traitée très rapidement au maximum en 48H. Vous serez rappelé par l’un de nos conseillers qui validera avec vous votre demande pour vous faire une proposition cadrant exactement avec vos attentes.</p>
                    <p>Vous pouvez également nous contacter directement sur le 01 23 45 67 89 du lundi au vendredi, de 8h à 20h.</p>
                </div>
            </div>
            <div class="wrapper">
                <button class="toggle">Puis-je avoir la même personne qui s’occupe de mon dossier ?<i class="fas fa-plus icon"></i></button>
                <div class="content" style="text-align: justify;">
                    <p>Tous nos agents disposent d’un poste dédié, vous trouverez le numéro inscrit sur leur signature, à la fin du mail.</p>
                    <p>Vous êtes bien en relation avec la même personne. N&rsquo;oubliez pas de demander le prénom de la personne qui s&rsquo;est occupée de votre dossier afin que nous vous transférions vers sa ligne lors de votre appel téléphonique.</p>
                </div>
            </div>
            <div class="wrapper">
                <button class="toggle">Où puis-trouver les formalités administratives de mon voyage ?<i class="fas fa-plus icon"></i></button>
                <div class="content" style="text-align: justify;">
                    <ul style="text-align: justify;">
                        <li>Formalités douanières <a href="http://www.douane.gouv.fr/">www.douane.gouv.fr</a></li>
                        <li>Formalités sanitaires <a href="http://www.diplomatie.gouv.fr/">www.diplomatie.gouv.fr</a></li>
                        <li>Change et devises <a href="http://www.nationalchange.com/">www.nationalchange.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="wrapper">
                <button class="toggle">Comment réserver ?<i class="fas fa-plus icon"></i></button>
                <div class="content" style="text-align: justify;">
                    <p>Pour réserver votre voyage, il vous suffit de renvoyer votre devis signé par scan ainsi qu’une copie des passeports.</p>
                    <p>Vous recevrez ensuite un lien de paiement sécurisé pour régler le montant de l’acompte ou du solde ( à -45 j du départ).</p>
                    <p>Dès que l’acompte ou la totalité du séjour est payé, nous validons la réservation auprès de nos prestataires.</p>
                </div>
            </div>
            <div class="wrapper">
                <button class="toggle">Quels documents sont nécessaires pour réserver ?<i class="fas fa-plus icon"></i></button>
                <div class="content" style="text-align: justify;">
                    <p>Pour confirmer votre réservation, vous devez :</p>
                    <ul style="text-align: justify;">
                        <li>Avoir lu nos conditions de vente.</li>
                        <li>Remplir et signer le devis et nous le renvoyer accompagné d’un acompte de 35 % (ou du montant total pour un départ à moins de 45 jours).</li>
                    </ul>
                    <p>En fonction de la destination, vous devrez également vérifier que :</p>
                    <ul style="text-align: justify;">
                        <li>Vos documents d&rsquo;identité (passeport) sont valides. Attention, pour certains pays, ils doivent être valables jusqu&rsquo;à 6 mois après la date de votre retour !</li>
                        <li>Les noms inscrits sur le devis correspondent à ceux sur vos documents d&rsquo;identité (femmes mariées : vérifiez si vous nous avez transmis votre nom de jeune fille ou d&rsquo;épouse). Une erreur pourrait vous empêcher de décoller le jour du départ !</li>
                        <li>Voyage de noces : vous disposez d&rsquo;un certificat de mariage valable (la compagnie aérienne et l&rsquo;hôtel vous le demanderont).</li>
                        <li>Vos vaccinations sont à jour.</li>
                    </ul>
                </div>
            </div>
            <div class="wrapper">
                <button class="toggle">Quels sont les modes de paiement acceptés ?<i class="fas fa-plus icon"></i></button>
                <div class="content" style="text-align: justify;">
                    <ul style="text-align: justify;">
                        <li>Carte bancaire : sur notre site Web (paiement sécurisé),</li>
                        <li>Chèque : à condition que le départ soit à plus de 45 jours</li>
                        <li>Chèques-vacances (émis par l&rsquo;ANCV) : séjours France et DOM/TOM seulement, conformément à la Réglementation</li>
                        <li>Virement bancaire : oui si le départ est à plus de 30 jours</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>










<?php
include("footer.php");
?>

<script src="./js/foire.js"></script>

</body>

</html>