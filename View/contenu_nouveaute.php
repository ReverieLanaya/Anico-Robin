<div class="contenu_page_card">

    <div class="page_card">

        <h3>Les nouveautés</h3>

    
        <div class="card_part">


            <!-- TEST PHP ICI  -->
            
            <?php
                require 'model/connexion_bdd.php';

                try {
                    // Préparation de la requête
                    $req = $bdd->query('SELECT anime_name, anime_picture FROM anime');

                    // Exécution de la requête et récupération des résultats
                    $shows = $req->fetchAll(PDO::FETCH_ASSOC);

                    // Génération du code HTML
                    foreach ($shows as $show) {
                        echo '<div class="card">
                                <img src="' . $show['anime_picture'] . '" alt="Affiche de ' . $show['anime_name'] . '">
                                <h4>' . $show['anime_name'] . '</h4>
                            </div>';
                    }
                } catch (Exception $error) {
                    echo "$error";
                    echo 'Erreur : ' . $e->getMessage();
                }
                ?>



        

        </div>

    </div>




</div>