<?php
require 'model/connexion_bdd.php';

// Récupérer l'identifiant du produit depuis l'URL
$anime_id = $_GET['id'];

try {
    // Préparation de la requête pour récupérer les détails du produit
    $req = $bdd->prepare('SELECT * FROM anime WHERE anime_id = ?');
    $req->execute([$anime_id]);
    $anime = $req->fetch(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $anime['anime_name']; ?></title>
    <link rel="stylesheet" href="View/styles.css">
</head>


<body>
    <div class="anime_detail">
        
        <img src="<?= $anime['anime_picture']; ?>" alt="Image de <?= $anime['anime_name']; ?>" class="product-image">
        <div class="anime_info">
            <h2><?= $anime['anime_name']; ?></h2>
            <p class="description"><?= $anime['anime_resume']; ?></p>
            <p class="episodes">Nombre d'épisodes : <?= $anime['anime_episodes']; ?></p>
            <div class="anime_categories">
                <h3>Catégories : </h3>
                <div class="liste_categories_anime">
                    <a href="">Action</a>
                    <a href="">Action</a>
                    <a href="">Action</a>
                    <a href="">Action</a>   
                </div>

            </div>
            <button class="watch-button">Ajouter à ma liste</button>
        </div>
    </div>
</body>
</html>
