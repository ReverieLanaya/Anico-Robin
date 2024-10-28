<div class="contenu_page_card">

    <div class="categorie_card">

            <h3>Les Catégories</h3>

        
            <div class="categorie_card_part">


                <!-- TEST PHP ICI  -->
                
                <?php 
                    $catrgorie = [
                        ["title" => "Aventure", "image" => "/View/pics/frieren.jpg"],
                        ["title" => "Fantaisie", "image" => "/View/pics/konosuba.jpg"],
                        ["title" => "Action", "image" => "/View/pics/jujutsu_kaisen.jpg"],
                        ["title" => "Drama", "image" => "/View/pics/kakegurui.jpg"],
                        ["title" => "One piece !!", "image" => "/View/pics/one_piece.jpg"],
                        // AJOUTER LES AUTRES ICI 
                    ];
                    
                    foreach ($catrgorie as $catrgorie) {
                        echo '<a href="index.php" class="categorie_card_details">
                                <img src="' . $catrgorie['image'] . '" alt="Affiche de ' . $catrgorie['title'] . '">
                                <h4>' . $catrgorie['title'] . '</h4>
                            </a>';
                    }
                ?>


            

            </div>

    </div>




</div>