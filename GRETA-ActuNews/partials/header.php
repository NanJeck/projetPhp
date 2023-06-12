<?php



    # Importation des fonctins de notre site
    require_once 'functions/categorie.php';



?>

<?php

$categories = getCategories();

?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actu-News - Votre site Web d'actualité</title>
    <!-- Chargement de bootstrap - CSS et javaScript -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </head>
</head>
<body>

<!-- Barre de navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Actunews</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <?php foreach ($categories as $category) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="categorie.php?name=<?= $category ?>">
                            <?php echo $category ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <div class="text-right">
                <a href="#" class="nav-item btn btn-outline-info">Connexion</a>
                <a href="#" class="nav-item btn btn-outline-warning mx-2">Inscription</a>
            </div>
        </div> <!-- #/navbarNav -->
    </div> <!-- ./container-fluid -->
</nav> <!-- ./nav -->