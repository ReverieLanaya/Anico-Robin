<!-- ///////PARTIE PHP ///////////// -->
 


<!-- ///////PARTIE HTML ///////////// -->
<div class="contenu_admin">

    <div class="admin_categorie">
        <h3>Ajouter une nouvelle catégorie</h3>

        <form method="POST" class="form_ajout_categorie">
            <div class="form_ajout_categorie2">
                <label for="nom_categorie">Nom de la catégorie:</label>
                <input type="text" id="nom_categorie" name="nom_categorie" required>
                <button type="submit" name="submit_categorie">Ajouter</button>
            </div>

            <?php 
            require 'model/categorie_check_model.php';
            ?>
            
        </form>

        
    </div>
        
    <div class="admin_anime">
        <h3>Ajouter un nouvel anime</h3>

        <form method="POST" class="form_ajout_anime">
                <div class="form_ajout_categorie2">
                    <label for="nom_anime">Nom de l'anime:</label>
                    <input type="text" id="nom_anime" name="nom_anime" required>

                    <label for="episode_anime">Nombre d'épisode:</label>
                    <input type="text" id="episode_anime" name="episode_anime" required>
                    

                    <!-- ////////// A FINALISER PLUS TARD AVEC BDD -->
                    <label for="categorie_anime">Catégorie:</label>
                    <select id="categorie_anime" name="categorie_anime" required> 

                    <?php 
                    $categories = [
                        ["categories" => "Aventure"],
                        ["categories" => "Fantaisie"],
                        ["categories" => "Action"],
                        ["categories" => "Drama"],
                        ["categories" => "One piece !!"],
                        // AJOUTER LES AUTRES ICI 
                    ];

                    foreach ($categories as $categorie): ?> 

                        <option value="<?= $categorie['categories'] ?>">
                            <?= $categorie['categories'] ?>
                        </option>
                        
                <?php endforeach; ?>
                         </select>
                         

                    <label for="image_anime">Image:</label>
                    <input type="file" id="image_anime" name="image_anime" required>

                    <label for="resume_anime">Petit résumé:</label>
                    <input type="text" id="resume_anime" name="resume_anime" required>

                    <button type="submit" name="submit_anime">Ajouter</button>
                </div>

                <?php 
                require 'model/anime_check_model.php';
                ?>
                
            </form>



    </div>

    <div class="admin_edit_anime">
        <h3>Modifier anime</h3>

        <form method="POST" class="form_ajout_anime">
                <div class="form_ajout_categorie2">
                    <label for="nom_anime">Nom de l'anime:</label>
                    <input type="text" id="nom_anime" name="nom_anime" required>

                    <label for="episode_anime">Nombre d'épisode:</label>
                    <input type="text" id="episode_anime" name="episode_anime" required>
                    
                    <label for="categorie_anime">Catégorie:</label>
                    <input type="text" id="categorie_anime" name="categorie_anime" required>

                    <label for="image_anime">Image:</label>
                    <input type="file" id="image_anime" name="image_anime" required>

                    <label for="resume_anime">Petit résumé:</label>
                    <input type="text" id="resume_anime" name="resume_anime" required>

                    <button type="submit" name="submit_anime">Ajouter</button>
                </div>
                
            </form>



    </div>


</div>
