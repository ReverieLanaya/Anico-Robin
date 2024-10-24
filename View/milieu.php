

    <!-- ///////////////////////   MILIEU   ///////////////////////// -->

    <div class="milieu">
        
    <!--CARROUSSEL -->

        <div class="first_section">    

            <div class="slide_section fade">

                <div class="descri_slide">
                    
                    <div class="slide_texte">
                    <h3>Prison school</h3>
                    <h3>2001</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa voluptates velit quis inventore ipsam laborum odio nam, eveniet repellat quia, tempore dolores molestias.</p>

                    <p class="carroussel_btn"> Aller voir ⇒</p>


                    </div>
                    <img src="/View/pics/prison_school.jpg" alt="photo en avant prison school">


                </div>


            </div>

            <div class="slide_section fade">

                <div class="descri_slide">
                    
                    <div class="slide_texte">
                        <h3>One piece</h3>
                        <h3>1997</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa voluptates velit quis inventore ipsam laborum odio nam, eveniet repellat quia, tempore dolores molestias.</p>

                        <p class="carroussel_btn"> Aller voir ⇒</p>


                    </div>
                    <img src="/View/pics/one_piece.jpg" alt="photo en avant one piece">


                </div>

            </div>

            
            <div class="slide_section fade">

                <div class="descri_slide">
                    
                    <div class="slide_texte">
                    <h3>Berserk</h3>
                    <h3>20??</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa voluptates velit quis inventore ipsam laborum odio nam, eveniet repellat quia, tempore dolores molestias.</p>

                    <p class="carroussel_btn"> Aller voir ⇒</p>


                    </div>
                    <img src="/View/pics/berserk.jpg" alt="photo en avant berserk">


                </div>

            </div>

            <!-- The dots/circles -->
            <div style="text-align:center" class="numero_carroussel">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                        <span class="dot" onclick="currentSlide(5)"></span>
                    </div>


        </div>

   
        <!-- PARTIE CARD -->
        <div class="second_section">
                <!-- PARTIE CARD 1 -->
                <div class="nouveaute">
                        <div class="titre_card">
                            <h3>Nouveauté</h3>
                            <a href="./index.php">Voir plus</a>
                        </div>
                        
                        <div class="card_part">


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
                <!-- PARTIE CARD 2 -->
                <div class="populaires_card">

                    <div class="titre_card">
                                <h3>Populaire</h3>
                                <a href="./index.php">Voir plus</a>
                            </div>
                    <div class="card_part">

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

                <!-- PARTIE CARD 3 -->
                <div class="finis">

                    <div class="titre_card">
                        <h3>Finis</h3>
                        <a href="./index.php">Voir plus</a>
                    </div>
                    <div class="card_part">

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


    </div>


