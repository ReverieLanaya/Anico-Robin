<div class="contenu_page_card">

    <div class="categorie_card">

            <h3>Les Catégories</h3>

        
            <div class="categorie_card_part">


                <!-- TEST PHP ICI  -->
                
                <?php
                require 'model/connexion_bdd.php';

                try {
                    // Préparer et exécuter la requête SQL pour récupérer les catégories
                    $query = $bdd->prepare('SELECT categorie_name, categorie_picture FROM categorie');
                    $query->execute();
                    
                    // Récupérer tous les résultats
                    $categories = $query->fetchAll(PDO::FETCH_ASSOC);
                } catch (Exception $e) {
                    echo 'Erreur : ' . $e->getMessage();
                }

                foreach ($categories as $categorie) {
                    echo '<a href="index.php" class="categorie_card_details">
                            <img src="' . htmlspecialchars($categorie['categorie_picture']) . '" alt="Affiche de ' . htmlspecialchars($categorie['categorie_name']) . '">
                            <h4>' . htmlspecialchars($categorie['categorie_name']) . '</h4>
                        </a>';
                }
                ?>


            

            </div>

    </div>




</div>