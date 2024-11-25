<?php
require 'model/connexion_bdd.php';

try {
    // Vérifier si le paramètre slug existe
    if (isset($_GET['slug'])) {
        $slug = $_GET['slug'];

        // Préparation de la requête
        $req = $bdd->prepare('SELECT * FROM anime WHERE slug = ?');
        $req->bindParam(1, $slug, PDO::PARAM_STR);
        $req->execute();

        // Exécution de la requête et récupération des résultats
        $anime = $req->fetch(PDO::FETCH_ASSOC);

        // Vérifier si des résultats ont été trouvés
        if ($anime !== false) {
            ?>

            <!DOCTYPE html>
            <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?= htmlspecialchars($anime['anime_name']); ?></title>
                <link rel="stylesheet" href="View/styles.css">
            </head>

            <body>
                <div class="anime_detail">
                    <img src="<?= htmlspecialchars($anime['anime_picture']); ?>" alt="Image de <?= htmlspecialchars($anime['anime_name']); ?>" class="product-image">
                    <div class="anime_info">
                        <h2><?= htmlspecialchars($anime['anime_name']); ?></h2>
                        <p class="description"><?= htmlspecialchars($anime['anime_resume']); ?></p>
                        <p class="episodes">Nombre d'épisodes : <?= htmlspecialchars($anime['anime_episodes']); ?></p>
                        <div class="anime_categories">
                            <h3>Catégories : </h3>
                            <div class="liste_categories_anime">
                                <a href="#">Action</a>
                                <a href="#">Action</a>
                                <a href="#">Action</a>
                                <a href="#">Action</a>   
                            </div>
                        </div>
                        <button class="watch-button">Ajouter à ma liste</button>
                    </div>
                </div>
            </body>
            </html>

<?php
            // Récupérer l'ID de l'anime pour incrémenter le compteur de visite
            $anime_id = $anime['anime_id'];

            // Ajout du compteur de visite
            try {
                $req = $bdd->prepare('UPDATE anime SET nb_visite = nb_visite + 1 WHERE anime_id = ?');
                $req->bindParam(1, $anime_id, PDO::PARAM_INT);
                $req->execute();
            } catch (Exception $error) {
                echo 'Erreur : ' . $error->getMessage();
            }

        } else {
            echo 'Aucun anime trouvé.';
        }
    } else {
        echo 'Le paramètre slug est manquant dans l\'URL.';
    }
} catch (Exception $error) {
    echo 'Erreur : ' . $error->getMessage();
}
?>
