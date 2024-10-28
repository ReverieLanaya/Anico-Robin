<div class="contenu_page_card">

    <div class="page_card">

            <h3>Les animes populaires en ce moment</h3>

        
            <div class="card_part">


                <!-- TEST PHP ICI  -->
                
                <?php 
                        $shows = [
                            ["title" => "Yozakura Family", "episodes" => 27, "image" => "/View/pics/yozakura.jpg"],
                            ["title" => "Another Show", "episodes" => 20, "image" => "/View/pics/yozakura.jpg"],
                            ["title" => "Third Show", "episodes" => 30, "image" => "/View/pics/yozakura.jpg"],
                            ["title" => "Third Show", "episodes" => 30, "image" => "/View/pics/yozakura.jpg"],
                            ["title" => "Third Show", "episodes" => 30, "image" => "/View/pics/yozakura.jpg"],
                            // AJOUTER LES AUTRES ICI 
                        ];
                        
                        foreach ($shows as $show) {
                            echo '<div class="card">
                                    <img src="' . $show['image'] . '" alt="Affiche de ' . $show['title'] . '">
                                    <h4>' . $show['title'] . '</h4>
                                    <h4>' . $show['episodes'] . ' Episodes</h4>
                                </div>';
                        }
                ?>


                

            </div>

    </div>




</div>